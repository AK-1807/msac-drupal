<template>
  <div class="arts-explorer">
    <arts-explorer-filters />
    <arts-explorer-views />
    <arts-explorer-key />
  </div>
</template>

<script lang="ts">
import ArtsExplorerFilters from "./arts-explorer-filters.vue";
import ArtsExplorerViews from "./arts-explorer-views.vue";
import ArtsExplorerKey from "./arts-explorer-key.vue";
import { actions } from "./store";

export default {
  beforeMount() {
    actions.fetchLocations();
    actions.fetchCounties();
    actions.fetchLocationTypes();
  },
  components: {
    "arts-explorer-filters": ArtsExplorerFilters,
    "arts-explorer-views": ArtsExplorerViews,
    "arts-explorer-key": ArtsExplorerKey,
  },
};
</script>
