<template>
  <div class="arts-directory__sort">
    <label class="form-label" for="artwork-view-sort-options">Sort By:</label>
    <select
      class="select"
      id="artwork-view-sort-options"
      @change="handleChange"
      v-model="viewState.resultsSortCriteria"
    >
      <option value="">Randomized</option>
      <option value="alpha">Alphabetical</option>
      <option value="price_range_asc">Price Low to High</option>
      <option value="price_range_desc">Price High to Low</option>
    </select>
  </div>
</template>

<script lang="ts">
import { state as viewState, actions as viewActions } from "./artwork-view-store";

export default {
  computed: {
    viewState() {
      return viewState;
    },
  },
  methods: {
    handleChange() {
      viewActions.fetchResults();
    },
  },
};
</script>
