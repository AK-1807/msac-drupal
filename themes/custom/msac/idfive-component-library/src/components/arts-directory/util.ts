import Vue from "vue";
import axios from "axios";

export function getCurrentRouteFromLocation() {
  const hashParts = window.location.hash.split("#");
  if (!!hashParts[1]) {
    return hashParts[1];
  } else {
    return "/";
  }
}

/**
 * Returns the endpoint based on the current environment
 */
export function apiBaseForEnvironment() {
  if (window.location.hostname === "localhost") {
    return "https://msac.lndo.site/jsonapi";
  } else {
    return `${window.location.origin}/jsonapi`;
  }
}

/**
 * Base object containing properties shared by all directory view state trees
 */
export const defaultViewState = {
  keywordSearchValue: "",
  selectedType: "",
  selectedCountyId: "",
  selectedCountyInternalId: "",
  resultsSortCriteria: "",
  results: [],
  fetchingResults: true,
  errorFetchingResults: false,
  included: [],
  currentPage: 0,
  canFetchMore: false,
  filters: {},
};

/**
 * Utility class providing actions shared by all directory views
 */
export class ViewActions {
  protected state: any = Vue.observable({});
  protected apiEndpoint: string;
  protected queryParams: Function;
  protected resultsPerPage: number = 9;

  constructor(state: any = Vue.observable({}), apiEndpoint: string = "", queryParams: Function = () => ({})) {
    this.state = state;
    this.apiEndpoint = apiEndpoint;
    this.queryParams = queryParams;
  }

  /**
   * Returns the keys of filters with changed values
   */
  public get dirtyFilterKeys(): string[] {
    return Object.keys(this.state.filters).filter((key) => {
      return JSON.stringify(this.state.filters[key].dirtyValue) !== JSON.stringify(this.state.filters[key].value);
    });
  }

  /**
   *
   * @param fetchNextPage
   */
  public fetchResults(fetchNextPage: boolean = false) {
    this.state.fetchingResults = true;
    this.state.errorFetchingResults = false;

    if (fetchNextPage) {
      this.state.currentPage = this.state.currentPage + 1;
    } else {
      this.state.currentPage = 0;
      this.state.results = [];
    }

    return axios
      .get(`${apiBaseForEnvironment()}${this.apiEndpoint}`, {
        // paramsSerializer(params) {
        //     return qs.stringify(params, { arrayFormat: "repeat" });
        // },
        params: {
          ...this.queryParams(),
          "page[offset]": this.state.currentPage * this.resultsPerPage,
          "page[limit]": this.resultsPerPage,
        },
      })
      .then((response) => {
        this.state.canFetchMore = response.data.links.hasOwnProperty("next");
        this.state.fetchingResults = false;
        this.state.results = [...this.state.results, ...response.data.data];
        if (response.data.hasOwnProperty("included")) {
          this.state.included = [...this.state.included, ...response.data.included];
        }
      })
      .catch((error) => {
        console.error(error);
        this.state.fetchingResults = false;
        this.state.errorFetchingResults = true;
      });
  }

  /**
   * Update filter state with changed values
   */
  public commitFilters() {
    this.dirtyFilterKeys.forEach((key) => {
      const filterObj = this.state.filters[key];
      this.state.filters[key] = {
        ...filterObj,
        value: filterObj.dirtyValue,
        committed: true,
      };
    });
  }

  /**
   * Reset a filter to its default value and un-commit it
   * @param filter
   */
  public clearFilter(filter) {
    const filterObj = this.state.filters[filter.key];
    this.state.filters[filter.key] = {
      ...filterObj,
      dirtyValue: filterObj.default,
      value: filterObj.default,
      committed: false,
    };
  }

  /**
   * Revert filter state to previously committed value
   */
  public cancelFiltering() {
    Object.keys(this.state.filters).forEach((key) => {
      const filterObj = this.state.filters[key];
      this.state.filters[key] = {
        ...filterObj,
        dirtyValue: filterObj.value,
      };
    });
  }
}

/**
 * Utility class providing getters shared by all directory views
 */
export class ViewGetters {
  protected state: any = Vue.observable({});

  constructor(state: any) {
    this.state = state;
  }

  /**
   * Returns a boolean indicating whether or not the results request has completed
   */
  public fetchedResults(): boolean {
    return !this.state.fetchingResults && !this.state.errorFetchingResults;
  }

  /**
   * Returns objects for changed filters with their label and filter key
   * to use when outputting the list of selected filters above the feed.
   */
  public selectedFilters(): any[] {
    return Object.keys(this.state.filters)
      .filter((key) => {
        const filterObj = this.state.filters[key];
        const filterChanged = JSON.stringify(filterObj.value) !== JSON.stringify(filterObj.default);
        return filterObj.committed && filterChanged;
      })
      .map((key) => {
        const filterObj = this.state.filters[key];
        return {
          label: filterObj.label,
          key,
        };
      });
  }

  /**
   * Return a flattened array of all selected artistic category ID's
   * from the dictionary with ID's grouped by parent ID
   */
  public selectedArtisticCategoryIds(): string[] {
    if (this.state.filters.hasOwnProperty("artisticCategories")) {
      return Object.keys(this.state.filters.artisticCategories.value).reduce((acc, cur) => {
        return [...acc, ...this.state.filters.artisticCategories.value[cur]];
      }, []);
    } else {
      return [];
    }
  }

  /**
   * This returns a dictionary of all included resources grouped by
   * their node type and then by id within that grouping.
   */
  public includedByType(): any {
    return this.state.included.reduce((acc, cur) => {
      if (!acc.hasOwnProperty(cur.type)) {
        acc[cur.type] = {};
      }

      acc[cur.type] = {
        ...acc[cur.type],
        [cur.id]: cur,
      };

      return acc;
    }, {});
  }
}

/**
 * Returns the endpoint based on the current environment for new rosters views
 */
export function apiBaseForEnvironmentAlpha() {
  if (window.location.hostname === "localhost") {
    return "https://msac.lndo.site/_api";
  } else {
    return `${window.location.origin}/_api`;
  }
}

/**
 * Utility class providing actions shared by new rosters views
 */
export class ViewActionsAlpha {
  protected state: any = Vue.observable({});
  protected apiEndpoint: string;
  protected queryParams: Function;
  protected resultsPerPage: number = 9;

  constructor(state: any = Vue.observable({}), apiEndpoint: string = "", queryParams: Function = () => ({})) {
    this.state = state;
    this.apiEndpoint = apiEndpoint;
    this.queryParams = queryParams;
  }

  /**
   * Returns the keys of filters with changed values
   */
  public get dirtyFilterKeys(): string[] {
    return Object.keys(this.state.filters).filter((key) => {
      return JSON.stringify(this.state.filters[key].dirtyValue) !== JSON.stringify(this.state.filters[key].value);
    });
  }

  /**
   *
   * @param fetchNextPage
   */
  public fetchResults(fetchNextPage: boolean = false) {
    this.state.fetchingResults = true;
    this.state.errorFetchingResults = false;

    if (fetchNextPage) {
      this.state.currentPage = this.state.currentPage + 1;
    } else {
      this.state.currentPage = 0;
      this.state.results = [];
    }

    return axios
      .get(`${apiBaseForEnvironmentAlpha()}${this.apiEndpoint}`, {
        // paramsSerializer(params) {
        //     return qs.stringify(params, { arrayFormat: "repeat" });
        // },
        params: {
          ...this.queryParams(),
          offset: this.state.currentPage * this.resultsPerPage,
          items_per_page: this.resultsPerPage + 1, // To check if it has more data or not
        },
      })
      .then((response) => {
        this.state.canFetchMore = response.data.length > this.resultsPerPage;
        this.state.fetchingResults = false;
        var _data = response.data;

        if (_data.length > this.resultsPerPage) _data.pop();
        this.state.results = [...this.state.results, ..._data];
      })
      .catch((error) => {
        console.error(error);
        this.state.fetchingResults = false;
        this.state.errorFetchingResults = true;
      });
  }
}
