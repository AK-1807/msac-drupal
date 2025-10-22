<template>
  <form class="arts-directory__view-search" v-on:submit.prevent="handleSubmit($event)">
    <div class="form-item">
      <label for="teaching-rosters-view-search-input">Search by Name</label>
      <input
        class="arts-directory__search-input text-input"
        type="text"
        id="teaching-rosters-view-search-input"
        v-model="viewState.keywordSearchValue"
        ref="input"
      />
    </div>
    <div class="form-item">
      <label for="teaching-rosters-view-county-select">Located In</label>
      <select
        class="select"
        id="teaching-rosters-view-county-select"
        v-if="countiesFetched"
        v-model="viewState.selectedCountyInternalId"
      >
        <option value="">All of Maryland</option>
        <option v-for="county in counties" :value="county.attributes.drupal_internal__tid" :key="county.id">
          {{ county.attributes.name }}
        </option>
      </select>
    </div>
    <button class="arts-directory__search-submit button" type="submit">
      Browse
    </button>
  </form>
</template>

<script lang="ts">
import { getters as globalGetters } from "./store";
import { state as viewState, actions as ViewActionsAlpha } from "./teaching-rosters-view-store";

export default {
  mounted() {
    this.$refs.input.focus();
  },
  computed: {
    viewState() {
      return viewState;
    },
    counties() {
      return globalGetters.sortedCounties();
    },
    countiesFetched() {
      return globalGetters.countiesFetched();
    },
  },
  methods: {
    handleSubmit(event) {
      event.preventDefault();
      ViewActionsAlpha.fetchResults();
    },
  },
};
</script>
