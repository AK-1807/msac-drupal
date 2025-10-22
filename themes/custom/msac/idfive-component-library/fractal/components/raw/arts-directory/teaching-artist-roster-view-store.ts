import Vue from "vue";
import { defaultViewState, ViewActions, ViewGetters } from "./util";

export const state = Vue.observable(defaultViewState);

export const actions = new ViewActions(state, "/node/artist", () => ({
  include:
    "field_artist_photo,field_artist_artistic_categories,field_artist_p_work,field_artist_p_work.field_work_image",
  ...getFilterParams(),
  ...getSortParams(),
}));

export const getters = new ViewGetters(state);

function getFilterParams() {
  // Only get published nodes
  const params = { "filter[status][value]": "1" } as any;

  params["filter[field_artist_arts_in_edu_roster]"] = "1";

  if (state.keywordSearchValue) {
    params["filter[keyword][condition][path]"] = "title";
    params["filter[keyword][condition][operator]"] = "CONTAINS";
    params["filter[keyword][condition][value]"] = state.keywordSearchValue;
  }

  if (state.selectedCountyId) {
    params["filter[field_county.id]"] = state.selectedCountyId;
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
