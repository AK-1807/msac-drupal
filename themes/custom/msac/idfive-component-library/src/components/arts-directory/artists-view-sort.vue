<template>
  <div class="arts-directory__sort">
    <label class="form-label" for="artists-view-sort-options">Sort By:</label>
    <select
      class="select"
      id="artists-view-sort-options"
      @change="handleChange"
      v-model="viewState.resultsSortCriteria"
    >
      <option value="">Randomized</option>
      <option value="alpha">Alphabetical</option>
    </select>
  </div>
</template>

<script lang="ts">
import { state as viewState, actions as viewActions } from "./artists-view-store";

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
