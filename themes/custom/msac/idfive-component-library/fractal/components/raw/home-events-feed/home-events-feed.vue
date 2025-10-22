<template>
  <div class="home-events-feed">
    <div v-if="!fetchingEvents">
      <ul class="feed-items">
        <home-events-feed-item v-for="event in formattedEvents" :event="event" :key="event.id" />
      </ul>
    </div>
    <div v-else>
      <div class="msac-loading-spinner">
        <div role="presentation"></div>
        <div role="presentation"></div>
        <div role="presentation"></div>
        <div role="presentation"></div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import axios from "axios";
import * as moment from "moment-timezone";
import { xml2json } from "xml-js";
import HomeEventsFeedItem from "./home-events-feed-item.vue";

const apiBase = "https://mdyoda.milesmediagroup.com/PublicReadOnlyData.asmx";

export default {
  created() {
    this.fetchEvents();
  },
  components: {
    "home-events-feed-item": HomeEventsFeedItem,
  },
  data() {
    return {
      events: [],
      fetchingEvents: true,
      errorFetchingEvents: false,
    };
  },
  props: {
    count: {
      type: Number,
      default: 3,
    },
  },
  computed: {
    formattedEvents() {
      return this.events.map((event) => {
        const output = {} as any;
        const eventData = event?.string?.GetEvent;

        if (!!eventData) {
          const event = eventData?.Event;

          if (!!event) {
            output.id = event?.EventId?._text || "";
            output.title = event?.Title?._text || "";
            output.city = event?.City?._text || "";
          }

          if (!!eventData?.EventOccur) {
            // Normalize to array when there's only a single date
            if (!Array.isArray(eventData.EventOccur)) {
              eventData.EventOccur = [eventData.EventOccur];
            }

            for (let i = 0; i < eventData.EventOccur.length; i++) {
              const eventOccur = eventData.EventOccur[i];
              const startDate = eventOccur?.StartDate?._text || "";
              const eventHours = eventOccur?.EventHours?._text || "";
              if (!!startDate) {
                if (moment().isSame(moment(startDate), "day")) {
                  output.date = startDate;
                  break;
                }
              }
            }
          }
        }

        return output;
      });
    },
  },
  methods: {
    fetchEvents() {
      this.fetchingEvents = true;
      return axios
        .get(`${apiBase}/FindEventAdvanced`, {
          params: {
            Search: "",
            StartDate: moment()
              .startOf("day")
              .format("YYYY-MM-DD"),
            EndDate: moment()
              .startOf("day")
              .format("YYYY-MM-DD"),
            County: "",
            Category: "Peforming Arts,Visual Arts,Literary Arts",
            Page: 1,
          },
        })
        .then((eventsRes) => {
          // Get the data of the first n events based on the count prop
          axios
            .all(
              eventsRes.data.slice(0, this.count).map((event) =>
                axios.get(`${apiBase}/GetEvent`, {
                  params: {
                    EventId: event.EventId,
                  },
                })
              )
            )
            .then(
              axios.spread((...events) => {
                this.events = events.map((event) => {
                  // We need to format the response data like this because the XML isn't properly encoded
                  // @ts-ignore
                  const sanitizedXML = event.data.replace(/&lt;/g, "<").replace(/&gt;/g, ">");
                  return JSON.parse(xml2json(sanitizedXML, { compact: true }));
                });
                this.fetchingEvents = false;
              })
            );
        })
        .catch((error) => {
          console.error(error);
          this.fetchingEvents = false;
          this.errorFetchingEvents = true;
        });
    },
  },
};
</script>
