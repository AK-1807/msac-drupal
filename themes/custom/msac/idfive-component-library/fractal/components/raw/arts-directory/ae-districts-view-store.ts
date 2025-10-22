import Vue from "vue";
import { defaultViewState, ViewActions, ViewGetters } from "./util";

export const state = Vue.observable(defaultViewState);

export const actions = new ViewActions(state, "/node/district", () => ({
  include: "field_district_photo,field_county",
  ...getFilterParams(),
  ...getSortParams(),
}));

export const getters = new ViewGetters(state);

function getFilterParams() {
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
