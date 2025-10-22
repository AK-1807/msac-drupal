import Vue from "vue";
import { defaultViewState, ViewActions, ViewGetters } from "./util";
import { state as globalState } from "./store";

const defaultFilterState = {
  artisticCategories: {},
  aeDistrict: "",
  bookingPrice: "",
  independentArtistWinner: false,
  presentingTouring: false,
  populationTypes: [],
  lectures: false,
  onlinePrograms: false,
  outOfSchoolTime: false,
  residency: false,
  visitingPerformance: false,
  workshop: false,
  professionalDevelopment: false,
  fieldTrip: false,
};

/**
 * This array is used when serializing the filters for the API call.
 * Because the fields are named like field_artist_engmt_type_1,
 * field_artist_engmt_type_2, etc. in Drupal, this allows us to quickly
 * loop over any engagement type filters and apply them if selected.
 * Order in this array matters (I.E. field_artist_engmt_type_1 corresponds
 * to lectures in the backend so "lectures" must come first in this array).
 */
const engagementTypes = [
  "lectures",
  "onlinePrograms",
  "outOfSchoolTime",
  "residency",
  "visitingPerformance",
  "workshop",
  "professionalDevelopment",
  "fieldTrip",
] as string[];

export const state = Vue.observable({
  ...defaultViewState,
  selectAllArtsInEducationFilters: false,
  filters: {
    artisticCategories: {
      committed: false,
      dirtyValue: defaultFilterState.artisticCategories,
      value: defaultFilterState.artisticCategories,
      default: defaultFilterState.artisticCategories,
      label: "Type of Art",
    },
    bookingPrice: {
      committed: false,
      dirtyValue: defaultFilterState.bookingPrice,
      value: defaultFilterState.bookingPrice,
      default: defaultFilterState.bookingPrice,
      label: "Booking Price",
    },
    aeDistrict: {
      committed: false,
      dirtyValue: defaultFilterState.aeDistrict,
      value: defaultFilterState.aeDistrict,
      default: defaultFilterState.aeDistrict,
      label: "A&E District",
    },
    independentArtistWinner: {
      committed: false,
      dirtyValue: defaultFilterState.independentArtistWinner,
      value: defaultFilterState.independentArtistWinner,
      default: defaultFilterState.independentArtistWinner,
      label: "Independent Artist Award Winner",
    },
    presentingTouring: {
      committed: false,
      dirtyValue: defaultFilterState.presentingTouring,
      value: defaultFilterState.presentingTouring,
      default: defaultFilterState.presentingTouring,
      label: "Presenting & Touring",
    },
    populationTypes: {
      committed: false,
      dirtyValue: defaultFilterState.populationTypes,
      value: defaultFilterState.populationTypes,
      default: defaultFilterState.populationTypes,
      label: "Population Types",
    },
    lectures: {
      committed: false,
      dirtyValue: defaultFilterState.lectures,
      value: defaultFilterState.lectures,
      default: defaultFilterState.lectures,
      label: "Lectures",
    },
    onlinePrograms: {
      committed: false,
      dirtyValue: defaultFilterState.onlinePrograms,
      value: defaultFilterState.onlinePrograms,
      default: defaultFilterState.onlinePrograms,
      label: "Online Programs",
    },
    outOfSchoolTime: {
      committed: false,
      dirtyValue: defaultFilterState.outOfSchoolTime,
      value: defaultFilterState.outOfSchoolTime,
      default: defaultFilterState.outOfSchoolTime,
      label: "Out of School Time",
    },
    residency: {
      committed: false,
      dirtyValue: defaultFilterState.residency,
      value: defaultFilterState.residency,
      default: defaultFilterState.residency,
      label: "Residency",
    },
    visitingPerformance: {
      committed: false,
      dirtyValue: defaultFilterState.visitingPerformance,
      value: defaultFilterState.visitingPerformance,
      default: defaultFilterState.visitingPerformance,
      label: "Visiting Performance",
    },
    workshop: {
      committed: false,
      dirtyValue: defaultFilterState.workshop,
      value: defaultFilterState.workshop,
      default: defaultFilterState.workshop,
      label: "Workshop",
    },
    professionalDevelopment: {
      committed: false,
      dirtyValue: defaultFilterState.professionalDevelopment,
      value: defaultFilterState.professionalDevelopment,
      default: defaultFilterState.professionalDevelopment,
      label: "Professional Development",
    },
    fieldTrip: {
      committed: false,
      dirtyValue: defaultFilterState.fieldTrip,
      value: defaultFilterState.fieldTrip,
      default: defaultFilterState.fieldTrip,
      label: "Field Trip",
    },
  },
});

export const actions = new ViewActions(state, "/node/artist", () => ({
  include:
    "field_artist_photo,field_artist_artistic_categories,field_artist_p_work,field_artist_p_work.field_work_image",
  ...getFilterParams(),
  ...getSortParams(),
}));

export const getters = new ViewGetters(state);

function getFilterParams() {
  const artisticCategoryIds = getters.selectedArtisticCategoryIds();
  // Only get published nodes
  const params = { "filter[status][value]": "1" } as any;

  if (state.keywordSearchValue) {
    params["filter[keyword][condition][path]"] = "title";
    params["filter[keyword][condition][operator]"] = "CONTAINS";
    params["filter[keyword][condition][value]"] = state.keywordSearchValue;
  }

  if (state.selectedCountyId) {
    params["filter[field_county.id]"] = state.selectedCountyId;
  }

  if (artisticCategoryIds.length) {
    params["filter[artistic-cat][condition][path]"] = "field_artist_artistic_categories.id";
    params["filter[artistic-cat][condition][operator]"] = "IN";
    params["filter[artistic-cat][condition][value]"] = artisticCategoryIds;
  }

  if (state.filters.bookingPrice.value) {
    params["filter[field_artist_bk_price.id]"] = state.filters.bookingPrice.value;
  }

  if (state.filters.presentingTouring.value) {
    params["filter[field_artist_presenting_touring]"] = "1";
  }

  // If the option to show all artists with AEI filters is selected,
  // force all options for population types and engagement types to be selected
  if (state.selectAllArtsInEducationFilters || state.filters.populationTypes.value.length) {
    const value = state.selectAllArtsInEducationFilters
      ? globalState.artsInEducation?.map((option) => option.id)
      : state.filters.populationTypes.value;
    // If this is the first engagement type filter selected, add the condition group param
    if (!params.hasOwnProperty(`filter[aei-group][group][conjunction]`)) {
      params[`filter[aei-group][group][conjunction]`] = "OR";
    }
    params["filter[population-type][condition][path]"] = "field_artist_population_types.id";
    params["filter[population-type][condition][operator]"] = "IN";
    params["filter[population-type][condition][value]"] = value;
    params[`filter[population-type][condition][memberOf]`] = "aei-group";
  }

  for (let i = 0; i < engagementTypes.length; i++) {
    if (state.selectAllArtsInEducationFilters || state.filters[engagementTypes[i]].value) {
      const filterName = `engagement_type_${i + 1}`;
      // If this is the first engagement type filter selected, add the condition group param
      if (!params.hasOwnProperty(`filter[aei-group][group][conjunction]`)) {
        params[`filter[aei-group][group][conjunction]`] = "OR";
      }
      params[`filter[${filterName}][condition][path]`] = `field_artist_engmt_type_${i + 1}`;
      params[`filter[${filterName}][condition][operator]`] = "=";
      params[`filter[${filterName}][condition][value]`] = "1";
      params[`filter[${filterName}][condition][memberOf]`] = "aei-group";
    }
  }

  return params;
}

function getSortParams() {
  switch (state.resultsSortCriteria) {
    case "alpha": {
      return {
        "sort[sort-title][path]": "title",
        "sort[sort-title][direction]": "ASC",
      };
    }
    default: {
      return {
        "sort[sort-created][path]": "created",
        "sort[sort-created][direction]": "DESC",
      };
    }
  }
}
