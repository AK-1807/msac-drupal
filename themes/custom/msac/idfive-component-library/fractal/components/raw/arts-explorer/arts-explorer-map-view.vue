<template>
  <div class="arts-explorer__map-view" id="arts-explorer-map-view" :role="role" :aria-hidden="hidden && displayAsTab">
    <arts-explorer-map v-if="mapReady" />
  </div>
</template>

<script lang="ts">
import ArtsExplorerMap from "./arts-explorer-map.vue";
import { state } from "./store";

export default {
  components: {
    "arts-explorer-map": ArtsExplorerMap,
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
    mapReady() {
      return !state.fetchingLocations && !state.errorFetchingLocations;
    },
    role() {
      return this.displayAsTab ? "tabpanel" : null;
    },
  },
};
</script>
