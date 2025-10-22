<template>
  <div class="arts-directory__view arts-directory__view--artist">
    <h2 class="arts-directory__view-heading h3">
      Teaching Artist Roster
    </h2>
    <teaching-artist-roster-view-search />
    <teaching-artist-roster-view-results />
  </div>
</template>

<script lang="ts">
import TeachingArtistRosterViewSearch from "./teaching-artist-roster-view-search.vue";
import TeachingArtistRosterViewResults from "./teaching-artist-roster-view-results.vue";

export default {
  components: {
    "teaching-artist-roster-view-search": TeachingArtistRosterViewSearch,
    "teaching-artist-roster-view-results": TeachingArtistRosterViewResults,
  },
};
</script>
