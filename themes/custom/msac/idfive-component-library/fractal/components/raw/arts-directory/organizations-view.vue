<template>
  <div class="arts-directory__view arts-directory__view--organizations">
    <h2 class="arts-directory__view-heading h3">
      Organizations &amp; Businesses
    </h2>
    <organizations-view-search />
    <organizations-view-filters />
    <organizations-view-sort />
    <organizations-view-results />
  </div>
</template>

<script lang="ts">
import OrganizationsViewFilters from "./organizations-view-filters.vue";
import OrganizationsViewSort from "./organizations-view-sort.vue";
import OrganizationsViewSearch from "./organizations-view-search.vue";
import OrganizationsViewResults from "./organizations-view-results.vue";

export default {
  components: {
    "organizations-view-search": OrganizationsViewSearch,
    "organizations-view-filters": OrganizationsViewFilters,
    "organizations-view-sort": OrganizationsViewSort,
    "organizations-view-results": OrganizationsViewResults,
  },
};
</script>
