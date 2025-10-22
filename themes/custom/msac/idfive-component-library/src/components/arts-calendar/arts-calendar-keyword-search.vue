<template>
  <form class="arts-calendar__keyword-search" v-on:submit="handleSubmit($event)">
    <div class="form-item">
      <label for="arts-calendar-keyword-input">Search by Keyword</label>
      <input
        class="arts-calendar__keyword-search-input text-input"
        type="text"
        id="arts-calendar-keyword-input"
        v-model="state.searchValue"
      />
    </div>
    <button class="arts-calendar__keyword-search-submit button" type="submit">Search</button>
  </form>
</template>

<script lang="ts">
import { state, actions } from "./store";

export default {
  computed: {
    state() {
      return state;
    },
  },
  methods: {
    handleSubmit(event) {
      event.preventDefault();
      const target = event.currentTarget as HTMLFormElement;
      actions.fetchEvents();
    },
  },
};
</script>
