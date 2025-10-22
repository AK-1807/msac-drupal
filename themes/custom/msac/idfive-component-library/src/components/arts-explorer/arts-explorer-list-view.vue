<template>
  <div class="arts-explorer__list-view" id="arts-explorer-list-view" :role="role" :aria-hidden="hidden && displayAsTab">
    <div class="arts-explorer__list-view-scroller">
      <ul class="arts-explorer__list-items" v-if="!noResultsFound">
        <li class="arts-explorer__list-item" v-for="location in locations" :key="location.id">
          <arts-explorer-list-location :location="location" />
        </li>
      </ul>
      <p v-else>No locations found, please try a different search.</p>
    </div>
  </div>
</template>

<script lang="ts">
import * as _get from "lodash.get";
import { getters } from "./store";
import ArtsExplorerListLocation from "./arts-explorer-list-location.vue";

export default {
  components: {
    "arts-explorer-list-location": ArtsExplorerListLocation,
  },
  props: {
    displayAsTab: {
      type: Boolean,
      required: true,
    },
    hidden: {
      type: Boolean,
      required: true,
    },
  },
  computed: {
    locations() {
      return getters.filteredLocations();
    },
    role() {
      return this.displayAsTab ? "tabpanel" : null;
    },
    noResultsFound() {
      return getters.locationsFetched() && !this.locations.length;
    },
  },
};
</script>
