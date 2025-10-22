import Vue from "vue";
import { defaultViewState, ViewActionsAlpha, ViewGetters } from "./util";

export const state = Vue.observable({ ...defaultViewState });

export const actions = new ViewActionsAlpha(state, "/presenters", () => ({
  ...getFilterParams(),
  ...getSortParams(),
}));

export const getters = new ViewGetters(state);

function getFilterParams() {
  // Only get published nodes
  const params = { _format: "json" } as any;

  if (state.keywordSearchValue) {
    params["title"] = state.keywordSearchValue;
  }

  if (state.selectedCountyInternalId) {
    params["county"] = state.selectedCountyInternalId;
  }

  return params;
}

function getSortParams() {
  switch (state.resultsSortCriteria) {
    case "alpha": {
      return {
        sort_by: "title",
        sort_order: "ASC",
      };
    }
    default: {
      return {
        sort_by: "created",
        sort_order: "DESC",
      };
    }
  }
}
