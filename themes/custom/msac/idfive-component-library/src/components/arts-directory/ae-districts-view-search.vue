<template>
  <form class="arts-directory__view-search" v-on:submit.prevent="handleSubmit($event)">
    <div class="form-item">
      <label for="ae-districts-view-search-input">Search by Keyword</label>
      <input
        class="arts-directory__search-input text-input"
        type="text"
        id="ae-districts-view-search-input"
        v-model="viewState.keywordSearchValue"
        ref="input"
      />
    </div>
    <div class="form-item">
      <label for="ae-districts-view-county-select">Located In</label>
      <select
        class="select"
        id="ae-districts-view-county-select"
        v-if="countiesFetched"
        v-model="viewState.selectedCountyId"
      >
        <option value="">All of Maryland</option>
        <option v-for="county in counties" :value="county.id" :key="county.id">
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
import { state as viewState, actions as viewActions } from "./ae-districts-view-store";

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
      viewActions.fetchResults();
    },
  },
};
</script>
