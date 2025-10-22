<template>
  <div class="arts-directory__view arts-directory__view--artist">
    <h2 class="arts-directory__view-heading h3">
      Teaching Artist Roster
    </h2>
    <teaching-rosters-view-search />
    <teaching-rosters-view-sort />
    <teaching-rosters-view-results />
  </div>
</template>

<script lang="ts">
import TeachingRostersViewSearch from "./teaching-rosters-view-search.vue";
import TeachingRostersViewSort from "./teaching-rosters-view-sort.vue";
import TeachingRostersViewResults from "./teaching-rosters-view-results.vue";

export default {
  components: {
    "teaching-rosters-view-search": TeachingRostersViewSearch,
    "teaching-rosters-view-sort": TeachingRostersViewSort,
    "teaching-rosters-view-results": TeachingRostersViewResults,
  },
};
</script>
