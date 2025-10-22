<template>
  <div class="arts-directory__view arts-directory__view--artist">
    <h2 class="arts-directory__view-heading h3">
      Presenting &amp; Touring Roster
    </h2>
    <presenting-rosters-view-search />
    <presenting-rosters-view-sort />
    <presenting-rosters-view-results />
  </div>
</template>

<script lang="ts">
import PresentingRostersViewSearch from "./presenting-rosters-view-search.vue";
import PresentingRostersViewSort from "./presenting-rosters-view-sort.vue";
import PresentingRostersViewResults from "./presenting-rosters-view-results.vue";

export default {
  components: {
    "presenting-rosters-view-search": PresentingRostersViewSearch,
    "presenting-rosters-view-sort": PresentingRostersViewSort,
    "presenting-rosters-view-results": PresentingRostersViewResults,
  },
};
</script>
