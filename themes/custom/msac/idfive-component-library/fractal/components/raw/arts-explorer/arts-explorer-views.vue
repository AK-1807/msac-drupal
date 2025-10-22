<template>
  <div class="arts-explorer__views">
    <ul v-if="displayAsTabs" role="tablist" class="arts-explorer__views-tabs">
      <li class="arts-explorer__views-tabs-item" role="presentation">
        <a
          href="#arts-explorer-map-view"
          id="arts-explorer-map-view-tab"
          class="button arts-explorer__views-tabs-button"
          @click.prevent="setDisplayMode('map')"
          aria-label="View map"
          :aria-selected="displayMode === 'map'"
          aria-controls="arts-explorer-map-view"
          >Map</a
        >
      </li>
      <li class="arts-explorer__views-tabs-item" role="presentation">
        <a
          href="#arts-explorer-list-view"
          id="arts-explorer-list-view-tab"
          class="button arts-explorer__views-tabs-button"
          @click.prevent="setDisplayMode('list')"
          aria-label="View list"
          :aria-selected="displayMode === 'list'"
          aria-controls="arts-explorer-list-view"
          >List</a
        >
      </li>
    </ul>
    <map-view :display-as-tab="displayAsTabs" :hidden="displayMode !== 'map'" />
    <list-view :display-as-tab="displayAsTabs" :hidden="displayMode !== 'list'" />
  </div>
</template>

<script lang="ts">
import * as _debounce from "lodash.debounce";
import MapView from "./arts-explorer-map-view.vue";
import ListView from "./arts-explorer-list-view.vue";

export default {
  components: {
    "map-view": MapView,
    "list-view": ListView,
  },
  data() {
    return {
      displayAsTabs: false,
      displayMode: "map",
    };
  },
  mounted() {
    this.handleResize();
  },
  methods: {
    handleResize() {
      const resize = () => {
        if (this.displayAsTabs !== window.matchMedia("(max-width: 1023px)").matches) {
          this.displayAsTabs = window.matchMedia("(max-width: 1023px)").matches;
        }
      };
      window.addEventListener("resize", _debounce(resize, 50));
      resize();
    },
    setDisplayMode(mode) {
      this.displayMode = mode;
    },
  },
};
</script>
