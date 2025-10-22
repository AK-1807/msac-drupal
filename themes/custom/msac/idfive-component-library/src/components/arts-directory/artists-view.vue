<template>
  <div class="arts-directory__view arts-directory__view--artists">
    <h2 class="arts-directory__view-heading h3">Artists</h2>
    <artists-view-search />
    <artists-view-filters />
    <artists-view-sort />
    <artists-view-results />
  </div>
</template>

<script lang="ts">
import ArtistsViewFilters from "./artists-view-filters.vue";
import ArtistsViewSort from "./artists-view-sort.vue";
import ArtistsViewSearch from "./artists-view-search.vue";
import ArtistsViewResults from "./artists-view-results.vue";

export default {
  components: {
    "artists-view-search": ArtistsViewSearch,
    "artists-view-filters": ArtistsViewFilters,
    "artists-view-sort": ArtistsViewSort,
    "artists-view-results": ArtistsViewResults,
  },
};
</script>
