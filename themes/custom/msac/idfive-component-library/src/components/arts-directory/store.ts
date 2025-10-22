import Vue from "vue";
import axios from "axios";
import * as _get from "lodash.get";
import { getCurrentRouteFromLocation } from "./util";

export const state = Vue.observable({
  counties: [],
  fetchingCounties: true,
  errorFetchingCounties: false,
  currentRoute: getCurrentRouteFromLocation(),
  artisticCategories: [],
  fetchingArtisticCategories: true,
  errorFetchingArtisticCategories: false,
  priceRanges: [],
  fetchingPriceRanges: true,
  errorFetchingPriceRanges: false,
  aeDistricts: [],
  fetchingAeDistricts: true,
  errorFetchingAeDistricts: false,
  bookingPrices: [],
  fetchingBookingPrices: true,
  errorFetchingBookingPrices: false,
  artsInEducation: [],
  fetchingArtsInEducation: true,
  errorFetchingArtsInEducation: false,
});

export const actions = {
  fetchCounties() {
    state.fetchingCounties = true;
    return axios
      .get(`${apiBaseForEnvironment()}/taxonomy_term/counties`)
      .then((response) => {
        state.counties = response.data.data;
        state.fetchingCounties = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingCounties = false;
        state.errorFetchingCounties = true;
      });
  },
  fetchArtisticCategories() {
    state.fetchingArtisticCategories = true;
    return axios
      .get(`${apiBaseForEnvironment()}/taxonomy_term/artistic_categories`)
      .then((response) => {
        state.artisticCategories = response.data.data;
        state.fetchingArtisticCategories = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingArtisticCategories = false;
        state.errorFetchingArtisticCategories = true;
      });
  },
  fetchPriceRanges() {
    state.fetchingPriceRanges = true;
    return axios
      .get(`${apiBaseForEnvironment()}/taxonomy_term/price_ranges`)
      .then((response) => {
        state.priceRanges = response.data.data;
        state.fetchingPriceRanges = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingPriceRanges = false;
        state.errorFetchingPriceRanges = true;
      });
  },
  fetchAeDistricts() {
    state.fetchingAeDistricts = true;
    return axios
      .get(`${apiBaseForEnvironment()}/node/district`)
      .then((response) => {
        state.aeDistricts = response.data.data;
        state.fetchingAeDistricts = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingAeDistricts = false;
        state.errorFetchingAeDistricts = true;
      });
  },
  fetchBookingPrices() {
    state.fetchingBookingPrices = true;
    return axios
      .get(`${apiBaseForEnvironment()}/taxonomy_term/booking_prices`)
      .then((response) => {
        state.bookingPrices = response.data.data;
        state.fetchingBookingPrices = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingBookingPrices = false;
        state.errorFetchingBookingPrices = true;
      });
  },
  fetchArtsInEducation() {
    state.fetchingArtsInEducation = true;
    return axios
      .get(`${apiBaseForEnvironment()}/taxonomy_term/arts_in_education`)
      .then((response) => {
        state.artsInEducation = response.data.data;
        state.fetchingArtsInEducation = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingArtsInEducation = false;
        state.errorFetchingArtsInEducation = true;
      });
  },
};

export const getters = {
  countiesFetched() {
    return !state.fetchingCounties && !state.errorFetchingCounties;
  },
  sortedCounties() {
    return state.counties.sort((a, b) => {
      if (a.attributes.name < b.attributes.name) return -1;
      if (a.attributes.name > b.attributes.name) return 1;
      return 0;
    });
  },
  artisticCategoriesFetched() {
    return !state.fetchingArtisticCategories && !state.errorFetchingCounties;
  },
  artisticCategoriesById() {
    return state.artisticCategories.reduce(
      (acc, cur) => ({
        ...acc,
        [cur.id]: cur,
      }),
      {}
    );
  },
  artisticCategoryParentChildRelationships() {
    return state.artisticCategories.reduce((acc, cur) => {
      const parentId = cur.relationships.parent.data[0].id;
      if (parentId === "virtual") {
        if (!acc.hasOwnProperty(cur.id)) {
          acc[cur.id] = {
            children: {},
          };
        }
      } else {
        if (!acc.hasOwnProperty(parentId)) {
          acc[parentId] = {
            children: {},
          };
        }
        acc[parentId].children[cur.id] = cur;
      }
      return acc;
    }, {});
  },
  artisticCategoryFilters() {
    return Object.keys(this.artisticCategoryParentChildRelationships()).map((parentId) => {
      const parent = this.artisticCategoriesById()[parentId];
      const childIds = this.artisticCategoryParentChildRelationships()[parentId].children;
      const options = Object.keys(childIds).map((childId) => {
        const child = this.artisticCategoriesById()[childId];
        return {
          value: childId,
          name: child.attributes.name,
        };
      });
      return {
        id: parent.id,
        name: parent.attributes.name,
        options,
      };
    });
  },
  priceRangesFetched() {
    return !state.fetchingPriceRanges && !state.errorFetchingPriceRanges;
  },
  priceRangeFilters() {
    return state.priceRanges.map((obj) => ({
      value: obj.id,
      name: obj.attributes.name,
    }));
  },
  aeDistrictsFetched() {
    return !state.fetchingAeDistricts && !state.errorFetchingAeDistricts;
  },
  aeDistrictsById() {
    return state.aeDistricts.reduce(
      (acc, cur) => ({
        ...acc,
        [cur.id]: cur,
      }),
      {}
    );
  },
  aeDistrictFilters() {
    return state.aeDistricts.map((obj) => ({
      value: obj.id,
      name: obj.attributes.title,
    }));
  },
  bookingPricesFetched() {
    return !state.fetchingBookingPrices && !state.errorFetchingBookingPrices;
  },
  bookingPriceFilters() {
    return state.bookingPrices.map((obj) => ({
      value: obj.id,
      name: obj.attributes.name,
    }));
  },
  artsInEducationFetched() {
    return !state.fetchingArtsInEducation && !state.errorFetchingArtsInEducation;
  },
  artsInEducationFilters() {
    return state.artsInEducation.map((obj) => ({
      value: obj.id,
      name: obj.attributes.name,
    }));
  },
};

/**
 * Returns the endpoint based on the current environment
 */
function apiBaseForEnvironment() {
  if (window.location.hostname === "localhost") {
    return "https://msac.lndo.site/jsonapi";
  } else {
    return `${window.location.origin}/jsonapi`;
  }
}
