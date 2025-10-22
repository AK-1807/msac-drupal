import Vue from "vue";
import { defaultViewState, ViewActions, ViewGetters } from "./util";

const defaultFilterState = {
  artisticCategories: {},
  priceRange: "",
};

export const state = Vue.observable({
  ...defaultViewState,
  filters: {
    artisticCategories: {
      committed: false,
      dirtyValue: defaultFilterState.artisticCategories,
      value: defaultFilterState.artisticCategories,
      default: defaultFilterState.artisticCategories,
      label: "Type of Art",
    },
    priceRange: {
      committed: false,
      dirtyValue: defaultFilterState.priceRange,
      value: defaultFilterState.priceRange,
      default: defaultFilterState.priceRange,
      label: "Price",
    },
  },
});

export const actions = new ViewActions(state, "/node/work", () => ({
  include: "field_work_owner,field_work_image,field_work_artistic_categories",
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
    params["filter[field_work_owner.field_county.id]"] = state.selectedCountyId;
  }

  if (state.selectedType) {
    params["filter[field_work_type]"] = state.selectedType;
  }

  if (artisticCategoryIds.length) {
    params["filter[artistic-cat][condition][path]"] = "field_work_artistic_categories.id";
    params["filter[artistic-cat][condition][operator]"] = "IN";
    params["filter[artistic-cat][condition][value]"] = artisticCategoryIds;
  }

  if (state.filters.priceRange.value) {
    params["filter[field_work_price_range.id]"] = state.filters.priceRange.value;
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
