<template>
  <div class="arts-explorer__filters">
    <div class="arts-explorer__filter">
      <label class="label" for="arts-explorer-poi-category">Show me:</label>
      <select
        class="select"
        id="arts-explorer-poi-category"
        @change="handleLocationTypeChange($event.target.value)"
        v-if="locationTypesFetched"
      >
        <option value="" :selected="!!selectedLocationTypeId">Everything</option>
        <option
          v-for="locationType in locationTypes"
          :value="locationType.id"
          :selected="selectedLocationTypeId === locationType.id"
          :key="locationType.id"
        >
          {{ locationType.attributes.name }}
        </option>
      </select>
    </div>
    <div class="arts-explorer__filter">
      <label class="label" for="arts-explorer-counties">Located In:</label>
      <select
        class="select"
        id="arts-explorer-counties"
        @change="handleCountyChange($event.target.value)"
        v-if="countiesFetched"
      >
        <option value="" :selected="!!selectedCountyId">All of Maryland</option>
        <option
          v-for="county in sortedCounties"
          :value="county.id"
          :selected="selectedCountyId == county.id"
          :key="county.id"
        >
          {{ county.attributes.name }}
        </option>
      </select>
    </div>
  </div>
</template>

<script lang="ts">
import { state, getters } from "./store";

export default {
  computed: {
    selectedLocationTypeId() {
      return state.selectedLocationTypeId;
    },
    selectedCountyId() {
      return state.selectedCountyId;
    },
    locationTypes() {
      return state.locationTypes;
    },
    counties() {
      return state.counties;
    },
    selectedLocationId() {
      return state.selectedLocationId;
    },
    filteredLocationsById() {
      return getters.filteredLocationsById();
    },
    countiesFetched() {
      return !state.fetchingCounties && !state.errorFetchingCounties;
    },
    locationTypesFetched() {
      return !state.fetchingLocationTypes && !state.errorFetchingLocationTypes;
    },
    sortedCounties() {
      return this.counties.sort((a, b) => {
        const aName = a.attributes.name as string;
        const bName = b.attributes.name as string;
        return aName.localeCompare(bName);
      });
    },
  },
  watch: {
    filteredLocationsById(newVal) {
      // If the currently selected POI was hidden by a filter, deselect it
      if (!newVal.hasOwnProperty(state.selectedLocationId)) {
        state.selectedLocationId = null;
      }
    },
  },
  methods: {
    handleLocationTypeChange(locationTypeId) {
      state.selectedLocationTypeId = locationTypeId;
    },
    handleCountyChange(countyId) {
      state.selectedCountyId = countyId;
    },
  },
};
</script>
