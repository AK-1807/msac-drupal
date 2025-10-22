import Vue from "vue";
import axios from "axios";
import * as _get from "lodash.get";
import * as _snakeCase from "lodash.snakecase";
import { transformAPIDataToPolygonData } from "./util";

const apiHost = () => {
  if (window.location.hostname === "localhost") {
    return "https://msac.lndo.site";
  } else {
    return window.location.origin;
  }
};
const apiBase = `${apiHost()}/jsonapi`;

export const state = Vue.observable({
  selectedLocationTypeId: null,
  selectedCountyId: null,
  selectedLocationId: null,
  locations: [],
  locationMedia: [],
  locationFiles: [],
  fetchingLocations: true,
  errorFetchingLocations: false,
  counties: [],
  fetchingCounties: true,
  errorFetchingCounties: false,
  locationTypes: [],
  fetchingLocationTypes: true,
  errorFetchingLocationTypes: false,
  fetchingCountyPolygonData: false,
  errorFetchingCountyPolygonData: false,
  countyPolygonData: [],
});

export const getters = {
  locationsWithThumbnails() {
    return state.locations.map((location) => {
      const mediaId = _get(location, "relationships.field_location_image.data.id");
      const thumbnailUrl = _get(this.locationFilesByMediaId(), `[${mediaId}].attributes.uri.url`);
      return {
        ...location,
        thumbnail: !!thumbnailUrl ? `${apiHost()}${thumbnailUrl}` : "",
      };
    });
  },
  filteredLocations() {
    return this.locationsWithThumbnails()
      .filter((location) =>
        !!state.selectedLocationTypeId
          ? location.relationships.field_location_type.data.id === state.selectedLocationTypeId
          : true
      )
      .filter((location) =>
        !!state.selectedCountyId
          ? _get(location, "relationships.field_location_county.data.id", "") === state.selectedCountyId
          : true
      );
  },
  filteredLocationsById() {
    return this.filteredLocations().reduce(
      (acc, cur) => ({
        ...acc,
        [cur.id]: cur,
      }),
      {}
    );
  },
  locationTypesById() {
    return state.locationTypes.reduce(
      (acc, cur) => ({
        ...acc,
        [cur.id]: cur,
      }),
      {}
    );
  },
  countiesById() {
    return state.counties.reduce(
      (acc, cur) => ({
        ...acc,
        [cur.id]: cur,
      }),
      {}
    );
  },
  // Convert array of all county polygons to a dictionary of polygon point arrays by GIS ObjectID
  countyPolygonDataById() {
    return state.countyPolygonData.reduce((acc, cur) => {
      if (!acc.hasOwnProperty(cur.id)) {
        acc[cur.id] = [];
      }

      return {
        ...acc,
        [cur.id]: cur.polygons,
      };
    }, {});
  },
  locationMediaById() {
    return state.locationMedia.reduce(
      (acc, cur) => ({
        ...acc,
        [cur.id]: cur,
      }),
      {}
    );
  },
  locationFilesById() {
    return state.locationFiles.reduce(
      (acc, cur) => ({
        ...acc,
        [cur.id]: cur,
      }),
      {}
    );
  },
  locationFilesByMediaId() {
    return state.locationMedia.reduce((acc, cur) => {
      const fileId = _get(cur, "relationships.field_media_image.data.id");
      if (!!fileId) {
        acc[cur.id] = this.locationFilesById()[fileId];
      }
      return acc;
    }, {});
  },
  locationsFetched() {
    return !state.fetchingLocations && !state.errorFetchingLocations;
  },
};

export const actions = {
  fetchLocations() {
    state.fetchingLocations = true;
    return axios
      .get(`${apiBase}/node/location`, {
        params: {
          include: "field_location_image,field_location_image.thumbnail",
          "page[limit]": 200,
        },
      })
      .then((response) => {
        state.locations = response.data.data;
        state.locationMedia = _get(response.data, "included", []).filter((obj) => obj.type === "media--image");
        state.locationFiles = _get(response.data, "included", []).filter((obj) => obj.type === "file--file");
        state.fetchingLocations = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingLocations = false;
        state.errorFetchingLocations = true;
      });
  },
  fetchLocationTypes() {
    state.fetchingLocationTypes = true;
    axios
      .get(`${apiBase}/taxonomy_term/location_types`)
      .then((response) => {
        state.locationTypes = response.data.data;
        state.fetchingLocationTypes = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingLocationTypes = false;
        state.errorFetchingLocationTypes = true;
      });
  },
  fetchCounties() {
    state.fetchingCounties = true;
    axios
      .get(`${apiBase}/taxonomy_term/counties`)
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
  fetchCountyPolygonData(objectId) {
    state.fetchingCountyPolygonData = true;
    state.errorFetchingCountyPolygonData = false;
    return axios
      .get("https://geodata.md.gov/imap/rest/services/Boundaries/MD_PhysicalBoundaries/FeatureServer/1/query", {
        params: {
          where: `OBJECTID=${objectId}`,
          outFields: "OBJECTID",
          outSR: 4326,
          f: "json",
        },
      })
      .then((response) => {
        state.countyPolygonData = [...state.countyPolygonData, transformAPIDataToPolygonData(response.data)];
        state.fetchingCountyPolygonData = false;
      })
      .catch((error) => {
        console.error(error);
        state.fetchingCountyPolygonData = false;
        state.errorFetchingCountyPolygonData = true;
      });
  },
};

export const methods = {
  snakeCaseLocationType(locationTypeId) {
    const locationType = getters.locationTypesById()[locationTypeId];
    return !!locationType ? _snakeCase(locationType.attributes.name) : "";
  },
  getLocationUrl(path, url, no_link) {
    return no_link ? false : url ? url.url : `${window.location.origin}${path.alias}`;
  },
};
