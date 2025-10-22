<template>
  <div class="ae-district-map"></div>
</template>

<script lang="ts">
import { Loader } from "google-maps";
import axios from "axios";
import mapStyles from "../../js/map-styles";

export default {
  beforeMount() {
    Promise.all([this.loadGoogleMaps(), this.fetchAPIData()])
      .then(() => {
        this.initMap();
      })
      .catch((error) => {
        console.log(error);
      });
  },
  data() {
    return {
      google: null,
      polygon: null,
      apiData: null,
      loadingMaps: true,
      errorLoadingMaps: false,
      fetchingPolygonData: true,
      errorFetchingPolygonData: false,
    };
  },
  props: {
    objectId: {
      required: true,
      type: Number,
    },
  },
  computed: {
    // Transform data from GIS API to a format Google Maps can interpret
    polygonData() {
      const features = this.apiData.features?.[0];
      if (!!features) {
        return {
          lat: features.attributes?.latitude,
          lng: features.attributes?.longitude,
          polygons: features.geometry?.rings?.map((points) => {
            return points.map((point) => ({
              lat: point[1],
              lng: point[0],
            }));
          }),
        };
      }
    },
    // Return a flattened array of every point for all polygons to use for fitting map boundaries
    allPolygonCoords() {
      if (!!this.polygonData) {
        return this.polygonData.polygons.reduce((acc, cur) => {
          return [...acc, ...cur];
        }, []);
      }
    },
  },
  methods: {
    loadGoogleMaps() {
      const loader = new Loader("AIzaSyD0Q_qKcDfzDAPOj9k8MMlWy4pkRJXZT6Y");

      this.loadingMaps = true;
      return loader
        .load()
        .then((google) => {
          this.google = google;
          this.loadingMaps = false;
        })
        .catch((error) => {
          console.error(error);
          this.loadingMaps = false;
          this.errorLoadingMaps = true;
        });
    },
    initMap() {
      const center = new this.google.maps.LatLng({
        lat: parseFloat(this.polygonData.lat),
        lng: parseFloat(this.polygonData.lng),
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
        this.addPolygonToMap();
      });
    },
    fetchAPIData() {
      this.fetchingPolygonData = true;
      return axios
        .get("https://geodata.md.gov/imap/rest/services/BusinessEconomy/MD_IncentiveZones/FeatureServer/2/query", {
          params: {
            where: `OBJECTID=${this.objectId}`,
            outFields: "latitude,longitude",
            outSR: 4326,
            f: "json",
          },
        })
        .then((response) => {
          this.apiData = response.data;
          this.fetchingPolygonData = false;
        })
        .catch((error) => {
          console.error(error);
          this.fetchingPolygonData = false;
          this.errorFetchingPolygonData = true;
        });
    },
    addPolygonToMap() {
      const polygons = this.polygonData?.polygons?.map((points) => {
        return new this.google.maps.Polygon({
          paths: points,
          strokeColor: "#B6B6B6",
          strokeWeight: 2,
          fillColor: "#FFC838",
          fillOpacity: 0.5,
        });
      });

      for (let i = 0; i < polygons.length; i++) {
        polygons[i].setMap(this.map);
      }

      this.setMapZoom();
    },
    setMapZoom() {
      const bounds = new this.google.maps.LatLngBounds();

      for (let i = 0; i < this.allPolygonCoords.length; i++) {
        bounds.extend(this.allPolygonCoords[i]);
      }

      this.map.fitBounds(bounds);
    },
  },
};
</script>
