<template>
  <div class="arts-explorer__map"></div>
</template>

<script lang="ts">
import { Loader } from "google-maps";
import * as _get from "lodash.get";
import { getters, actions, state, methods } from "./store";
import generatePopupClass from "./popup";
import mapStyles from "../../js/map-styles";

const defaultMarkerIcon = {
  url: `data:image/svg+xml;charset=UTF-8;base64,${btoa(
    `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 38 47" height="39" width="30"><defs><filter x="-23.3%" y="-12.8%" width="146.7%" height="135.9%" filterUnits="objectBoundingBox" id="a"><feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" in="shadowBlurOuter1"/></filter><path d="M1698 1567c10-10.683 15-18.75 15-24.199 0-8.174-6.716-14.801-15-14.801-8.284 0-15 6.627-15 14.801 0 5.45 5 13.516 15 24.199z" id="b"/></defs><g transform="translate(-1679 -1526)" fill="none" fill-rule="evenodd"><use fill="#000" filter="url(#a)" xlink:href="#b"/><path stroke="#979797" stroke-width="2" d="M1698 1529c-3.868 0-7.37 1.546-9.904 4.047-2.53 2.496-4.096 5.945-4.096 9.754 0 5.181 4.761 12.739 13.999 22.73 9.24-9.99 14.001-17.548 14.001-22.73 0-3.81-1.566-7.258-4.096-9.754A14.057 14.057 0 001698 1529z" stroke-linejoin="square" fill="#FFFFFF"/></g></svg>`
  )}`,
};
const activeMarkerIcon = {
  url: `data:image/svg+xml;charset=UTF-8;base64,${btoa(
    `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 38 47" height="39" width="30"><defs><filter x="-23.3%" y="-12.8%" width="146.7%" height="135.9%" filterUnits="objectBoundingBox" id="a"><feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" in="shadowBlurOuter1"/></filter><path d="M2192 1932c10-10.683 15-18.75 15-24.199 0-8.174-6.716-14.801-15-14.801-8.284 0-15 6.627-15 14.801 0 5.45 5 13.516 15 24.199z" id="b"/></defs><g transform="translate(-2173 -1891)" fill="none" fill-rule="evenodd"><use fill="#000" filter="url(#a)" xlink:href="#b"/><path stroke="#000" stroke-width="2" d="M2192 1894c-3.868 0-7.37 1.546-9.904 4.047-2.53 2.496-4.096 5.945-4.096 9.754 0 5.181 4.761 12.739 13.999 22.73 9.24-9.99 14.001-17.548 14.001-22.73 0-3.81-1.566-7.258-4.096-9.754A14.057 14.057 0 002192 1894z" stroke-linejoin="square" fill="#FFC838"/></g></svg>`
  )}`,
};
const loader = new Loader("AIzaSyD0Q_qKcDfzDAPOj9k8MMlWy4pkRJXZT6Y");

export default {
  beforeMount() {
    this.loadingMaps = true;
    loader
      .load()
      .then((google) => {
        this.google = google;
        this.loadingMaps = false;
        this.initMap();
      })
      .catch(() => {
        this.loadingMaps = false;
        this.errorLoadingMaps = true;
      });
  },
  data() {
    return {
      google: null,
      map: null,
      markers: null,
      countyPolygons: [],
      loadingMaps: true,
      errorLoadingMaps: false,
    };
  },
  computed: {
    markerData() {
      const Popup = generatePopupClass(this.google);
      return getters.locationsWithThumbnails().map((location) => {
        const { title, path } = location.attributes;
        const locationTypeId = location.relationships.field_location_type.data.id;
        const position = new this.google.maps.LatLng({
          lat: parseFloat(location.attributes.field_location_latitude),
          lng: parseFloat(location.attributes.field_location_longitude),
        });
        const marker = new this.google.maps.Marker({
          animation: this.google.maps.Animation.DROP,
          icon: defaultMarkerIcon,
          position,
        });
        const popup = new Popup(position, {
          url: methods.getLocationUrl(
            path,
            location.attributes.field_location_url,
            location.attributes.field_location_no_linking
          ),
          category: methods.snakeCaseLocationType(locationTypeId),
          thumbnail: location.thumbnail,
          title,
        });
        marker.addListener("click", () => {
          state.selectedLocationId = state.selectedLocationId !== location.id ? location.id : null;
        });

        return {
          locationId: location.id,
          marker,
          popup,
        };
      });
    },
    markersByLocationId() {
      return this.markerData.reduce(
        (acc, cur) => ({
          ...acc,
          [cur.locationId]: cur,
        }),
        {}
      );
    },
    filteredLocationsById() {
      return getters.filteredLocationsById();
    },
    selectedLocationId() {
      return state.selectedLocationId;
    },
    selectedCountyId() {
      return state.selectedCountyId;
    },
    selectedCounty() {
      return getters.countiesById()[state.selectedCountyId];
    },
    countyPolygonDataById() {
      return getters.countyPolygonDataById();
    },
    countyPolygonsById() {
      return this.countyPolygons.reduce((acc, cur) => {
        if (!acc.hasOwnProperty(cur.id)) {
          acc[cur.id] = [];
        }

        return {
          ...acc,
          [cur.id]: [...acc[cur.id], cur.polygon],
        };
      }, {});
    },
    locationTypesById() {
      return getters.locationTypesById();
    },
  },
  watch: {
    filteredLocationsById(newVal) {
      // Set visibility of markers based on filtered locations
      Object.keys(this.markersByLocationId).forEach((locationId) => {
        const isVisible = newVal.hasOwnProperty(locationId);
        const { marker, popup } = this.markersByLocationId[locationId];

        marker.setVisible(isVisible);

        // Hide popup if it's currently shown
        if (!isVisible && popup.isVisible) {
          popup.toggleVisibility(false);
        }
      });
    },
    selectedLocationId(newVal, oldVal) {
      const activeMarker = this.markersByLocationId[newVal];
      const previouslyActiveMarker = this.markersByLocationId[oldVal];

      if (!!previouslyActiveMarker) {
        // Toggle state of previously selected marker
        previouslyActiveMarker.popup.toggleVisibility(false);
        previouslyActiveMarker.marker.setIcon(defaultMarkerIcon);
      }

      if (!!activeMarker) {
        // Add the popup to the map if it hasn't already been added
        if (!activeMarker.popup.getMap()) {
          activeMarker.popup.setMap(this.map);
        }

        // Toggle state of selected marker
        activeMarker.popup.toggleVisibility(true);
        activeMarker.marker.setIcon(activeMarkerIcon);

        this.map.panTo(activeMarker.marker.getPosition());
      }
    },
    selectedCounty(newVal, oldVal) {
      const newGISObjectId = newVal?.attributes?.field_object_id;
      const oldGISObjectId = oldVal?.attributes?.field_object_id;

      // Hide previously visible polygon
      if (!!oldGISObjectId && this.countyPolygonsById.hasOwnProperty(oldGISObjectId)) {
        for (let i = 0; i < this.countyPolygonsById[oldGISObjectId].length; i++) {
          this.countyPolygonsById[oldGISObjectId][i].setVisible(false);
        }
      }

      // Fetch polyline data for selected county if it hasn't been fetched yet
      if (!!newGISObjectId) {
        if (!getters.countyPolygonDataById().hasOwnProperty(newGISObjectId)) {
          actions.fetchCountyPolygonData(newGISObjectId).then(() => {
            this.addPolygonsToMap(newGISObjectId);
          });
        } else {
          // Show polygons if they've already been added to the map previously
          for (let i = 0; i < this.countyPolygonsById[newGISObjectId].length; i++) {
            this.countyPolygonsById[newGISObjectId][i].setVisible(true);
          }
          this.setMapZoomForPolygons(newGISObjectId);
        }
      } else {
        this.resetMap();
      }
    },
  },
  methods: {
    initMap() {
      // Latlng of Maryland
      const center = new this.google.maps.LatLng({
        lat: 39.0458,
        lng: -76.6413,
      });
      const zoomControlOptions = {
        position: this.google.maps.ControlPosition.LEFT_TOP,
      };

      // Create map
      this.map = new this.google.maps.Map(this.$el, {
        styles: mapStyles,
        disableDefaultUI: true,
        zoomControl: true,
        zoom: 12,
        zoomControlOptions,
        center,
      });

      // Wait until map has fully rendered before adding markers
      this.google.maps.event.addListenerOnce(this.map, "tilesloaded", () => {
        this.plotMarkers();
        this.map.setZoom(this.getInitialZoomLevel());
      });

      this.google.maps.event.addListener(this.map, "click", () => {
        state.selectedLocationId = null;
      });
    },
    resetMap() {
      const center = new this.google.maps.LatLng({
        lat: 39.0458,
        lng: -76.6413,
      });

      this.map.setCenter(center);
      this.map.setZoom(this.getInitialZoomLevel());
    },
    plotMarkers() {
      this.markerData.forEach((markerObj) => {
        markerObj.marker.setMap(this.map);
      });
    },
    getInitialZoomLevel() {
      // Constants for MD's geography
      const mdNECorner = new this.google.maps.LatLng(39.7425, -75.045);
      const mdSWCorner = new this.google.maps.LatLng(37.8713, -79.4938);

      const mapType = this.map.mapTypes.get(this.map.getMapTypeId());
      const mapProjection = this.map.getProjection();
      const mapDiv = this.map.getDiv();
      const maxZoom = mapType.maxZoom || 21;
      const minZoom = mapType.minZoom || 0;
      const ne = mapProjection.fromLatLngToPoint(mdNECorner);
      const sw = mapProjection.fromLatLngToPoint(mdSWCorner);
      const worldCoordWidth = Math.abs(ne.x - sw.x);
      const worldCoordHeight = Math.abs(ne.y - sw.y);
      const mapDivWidth = mapDiv.offsetWidth;
      const mapDivHeight = mapDiv.offsetHeight;
      const fitPad = 40;

      for (let zoom = maxZoom; zoom >= minZoom; --zoom) {
        if (
          worldCoordWidth * (1 << zoom) + 2 * fitPad < mapDivWidth &&
          worldCoordHeight * (1 << zoom) + 2 * fitPad < mapDivHeight
        ) {
          return zoom;
        }
      }

      return 0;
    },
    addPolygonsToMap(objectId) {
      const polygonData = getters.countyPolygonDataById()[objectId];
      const polygons = polygonData.map((points) => {
        return new this.google.maps.Polygon({
          paths: points,
          strokeColor: "#B6B6B6",
          strokeWeight: 2,
          fillColor: "#FFC838",
          fillOpacity: 0.5,
        });
      });

      for (let i = 0; i < polygons.length; i++) {
        const polygon = polygons[i];

        // Cache Maps.Polygon object for later reference if a user reselects this county
        this.countyPolygons = [
          ...this.countyPolygons,
          {
            id: objectId,
            polygon,
          },
        ];

        polygon.setMap(this.map);
      }

      this.setMapZoomForPolygons(objectId);
    },
    setMapZoomForPolygons(objectId) {
      const polygonData = getters.countyPolygonDataById()[objectId];
      const allPolygonCoords = polygonData.reduce((acc, cur) => {
        return [...acc, ...cur];
      }, []);
      const bounds = new this.google.maps.LatLngBounds();

      for (let i = 0; i < allPolygonCoords.length; i++) {
        bounds.extend(allPolygonCoords[i]);
      }

      this.map.fitBounds(bounds);
    },
  },
};
</script>
