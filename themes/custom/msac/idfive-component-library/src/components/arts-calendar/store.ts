import Vue from "vue";
import axios from "axios";
import * as moment from "moment-timezone";
import { xml2json } from "xml-js";

const apiBase = "https://mdyoda.milesmediagroup.com/PublicReadOnlyData.asmx";

const categories = [
  "Performing Arts",
  "Visual Arts",
  "Celebrating Women",
  "Fairs & Festivals",
  "History & Heritage",
  "Literary Arts",
  "Multicultural",
  "Nature & Outdoor",
  "Miscellaneous",
];
const counties = [
  "Allegany",
  "Anne Arundel",
  "Baltimore City",
  "Baltimore County",
  "Calvert",
  "Caroline",
  "Carroll",
  "Cecil",
  "Charles",
  "Dorchester",
  "Frederick",
  "Garrett",
  "Harford",
  "Howard",
  "Kent",
  "Montgomery",
  "Prince George's",
  "Queen Anne's",
  "Somerset",
  "St. Mary's",
  "Talbot",
  "Washington",
  "Wicomico",
  "Worcester",
];

export const state = Vue.observable({
  events: [],
  fetchingEvents: true,
  errorFetchingEvents: false,
  startDate: moment().startOf("day"),
  endDate: moment().startOf("day"),
  selectedCategory: "",
  selectedEventId: null,
  selectedCounty: "",
  searchValue: "",
  resultsPage: 1,
  eventDataById: {},
  fetchingEvent: false,
  errorFetchingEvent: false,
  categories,
  counties,
});

export const actions = {
  fetchEvents() {
    state.fetchingEvents = true;
    return axios
      .get(`${apiBase}/FindEventAdvanced`, {
        params: {
          Search: state.searchValue,
          StartDate: getters.dateRange()[0].format("YYYY-MM-DD"),
          EndDate: getters.dateRange()[1].format("YYYY-MM-DD"),
          County: state.selectedCounty || "",
          Category: "Performing Arts,Visual Arts,Literary Arts",
          Page: state.resultsPage,
        },
      })
      .then((response) => {
        state.events = response.data;
        state.fetchingEvents = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingEvents = false;
        state.errorFetchingEvents = true;
      });
  },
  fetchEventDataById(id) {
    // Return the cached event data if we've already fetched the event
    return new Promise((resolve, reject) => {
      if (!state.eventDataById[id]) {
        state.errorFetchingEvent = false;
        state.fetchingEvent = true;

        axios
          .get(`${apiBase}/GetEvent`, {
            params: {
              EventId: id,
            },
          })
          .then((response) => {
            const converted = JSON.parse(
              xml2json(response.data.replace(/&lt;/g, "<").replace(/&gt;/g, ">"), { compact: true })
            );

            state.eventDataById = {
              ...state.eventDataById,
              [id]: converted,
            };
            state.fetchingEvent = false;
            resolve(state.eventDataById[id]);
          })
          .catch((error) => {
            console.error(error);
            state.fetchingEvent = false;
            state.errorFetchingEvent = true;
            reject(error);
          });
      } else {
        resolve(state.eventDataById[id]);
      }
    });
  },
};

export const getters = {
  startTimestamp() {
    return moment.unix(state.startDate);
  },
  endTimestamp() {
    if (!!state.endDate) {
      return moment.unix(state.endDate);
    } else {
      return null;
    }
  },
  formattedEventDataById() {
    return Object.keys(state.eventDataById).reduce((acc, eventId) => {
      const event = state.eventDataById[eventId];
      return {
        ...acc,
        [eventId]: formatEventData(event),
      };
    }, {});
  },
  dateRange() {
    const output = [state.startDate];

    output.push(!!state.endDate ? state.endDate : state.startDate);

    return output;
  },
  selectedCategory() {
    return state.selectedCategory;
  },
  filteredEvents() {
    return state.events
      .filter((event) => (!!state.selectedCounty ? event.County === state.selectedCounty : true))
      .filter((event) => (!!state.selectedCategory ? event.CategoryList.indexOf(state.selectedCategory) !== -1 : true));
  },
};

function formatEventData(raw) {
  const eventData = raw?.string?.GetEvent;
  const formatted = {} as any;

  if (!!eventData) {
    const event = eventData?.Event;
    const eventImage = eventData?.EventImage;
    if (!!event) {
      formatted.id = event?.EventId?._text || "";
      formatted.title = event?.Title?._text || "";
      formatted.description = event?.LongDesc?._text || "";
      formatted.address = {
        street_1: event?.AddressLine1?._text || "",
        street_2: event?.AddressLine2?._text || "",
        street_3: event?.AddressLine3?._text || "",
        city: event?.City?._text || "",
        state: "MD",
        zip: event?.Zip?._text || "",
      };
      formatted.email = event?.Email?._text || "";
      formatted.phone = event?.Phone2?._text || "";
      formatted.external_url = event?.PublicUrl?._text || "";
      formatted.wheelchair_access = !!+event?.WheelchairAccess?._text;
    }

    if (!!eventData?.EventCategory) {
      // Normalize to array when there's only a single category
      if (!Array.isArray(eventData.EventCategory)) {
        eventData.EventCategory = [eventData.EventCategory];
      }

      formatted.category = eventData.EventCategory.map((obj) => {
        const parser = new DOMParser().parseFromString(obj?.EventCategoryName?._text || "", "text/html");
        return parser.documentElement.textContent;
      })
        .filter((category) => state.categories.indexOf(category) !== -1)
        .join(", ");
    }

    if (!!eventImage) {
      formatted.image = {
        src: eventImage?.ImageUrl?._text.replace("&amp;", "&") || "",
        alt: eventImage?.AltText?._text || "",
      };
    }

    if (!!eventData?.EventOccur) {
      // Normalize to array when there's only a single date
      if (!Array.isArray(eventData.EventOccur)) {
        eventData.EventOccur = [eventData.EventOccur];
      }

      const timespan = eventData.EventOccur[0]?.Timespan?._text || "";

      switch (timespan) {
        case "D": {
          formatted.occurs = "daily";
          break;
        }
        case "W": {
          formatted.occurs = "weekly";
          break;
        }
        case "M": {
          formatted.occurs = "monthly";
          break;
        }
        default: {
          formatted.occurs = "";
        }
      }

      formatted.time = eventData.EventOccur[0]?.EventHours?._text || "";
      formatted.dates = eventData.EventOccur.map((occur) => occur?.StartDate?._text || "");
    }
  }

  return formatted;
}
