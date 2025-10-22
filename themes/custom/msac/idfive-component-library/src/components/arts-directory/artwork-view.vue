<template>
  <div class="arts-directory__view arts-directory__view--artwork">
    <h2 class="arts-directory__view-heading h3">Artwork</h2>
    <artwork-view-search />
    <artwork-view-filters />
    <artwork-view-sort />
    <artwork-view-results />
  </div>
</template>

<script lang="ts">
import ArtworkViewFilters from "./artwork-view-filters.vue";
import ArtworkViewSort from "./artwork-view-sort.vue";
import ArtworkViewSearch from "./artwork-view-search.vue";
import ArtworkViewResults from "./artwork-view-results.vue";

export default {
  components: {
    "artwork-view-search": ArtworkViewSearch,
    "artwork-view-filters": ArtworkViewFilters,
    "artwork-view-sort": ArtworkViewSort,
    "artwork-view-results": ArtworkViewResults,
  },
};
</script>
