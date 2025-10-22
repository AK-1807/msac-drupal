<template>
  <div class="arts-directory__view arts-directory__view--ae-districts">
    <h2 class="arts-directory__view-heading h3">
      Arts &amp; Entertainment Districts
    </h2>
    <ae-districts-view-search />
    <ae-districts-view-results />
  </div>
</template>

<script lang="ts">
import AeDistrictsViewSearch from "./ae-districts-view-search.vue";
import AeDistrictsViewResults from "./ae-districts-view-results.vue";

export default {
  components: {
    "ae-districts-view-search": AeDistrictsViewSearch,
    "ae-districts-view-results": AeDistrictsViewResults,
  },
};
</script>
