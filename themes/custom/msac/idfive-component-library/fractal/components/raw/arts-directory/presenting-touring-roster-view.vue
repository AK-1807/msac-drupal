<template>
  <div class="arts-directory__view arts-directory__view--artist">
    <h2 class="arts-directory__view-heading h3">
      Presenting &amp; Touring Roster
    </h2>
    <presenting-touring-roster-view-search />
    <presenting-touring-roster-view-results />
  </div>
</template>

<script lang="ts">
import PresentingTouringRosterViewSearch from "./presenting-touring-roster-view-search.vue";
import PresentingTouringRosterViewResults from "./presenting-touring-roster-view-results.vue";

export default {
  components: {
    "presenting-touring-roster-view-search": PresentingTouringRosterViewSearch,
    "presenting-touring-roster-view-results": PresentingTouringRosterViewResults,
  },
};
</script>
