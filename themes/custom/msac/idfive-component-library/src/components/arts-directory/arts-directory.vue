<template>
  <div class="arts-directory">
    <arts-directory-navigator></arts-directory-navigator>
    <arts-directory-router></arts-directory-router>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryNavigator from "./arts-directory-navigator.vue";
import ArtsDirectoryRouter from "./arts-directory-router.vue";
import { actions } from "./store";

export default {
  beforeCreate() {
    actions.fetchCounties();
    actions.fetchArtisticCategories();
    actions.fetchPriceRanges();
    actions.fetchAeDistricts();
    actions.fetchBookingPrices();
    actions.fetchArtsInEducation();
  },
  components: {
    "arts-directory-navigator": ArtsDirectoryNavigator,
    "arts-directory-router": ArtsDirectoryRouter,
  },
};
</script>
