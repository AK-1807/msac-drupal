<template>
  <div class="arts-calendar__filters">
    <div class="h4">Filter By</div>
    <div class="silc-grid silc-grid--collapse">
      <div class="silc-grid__col silc-grid__col--6-800">
        <div class="form-input">
          <label class="form-label" for="calendar-event-type">Category</label>
          <select id="calendar-event-type" class="form-select" v-model="state.selectedCategory">
            <option value="">All Events</option>
            <option v-for="category in categories" :value="category" :key="category" v-html="category"> </option>
          </select>
        </div>
      </div>
      <div class="silc-grid__col silc-grid__col--6-800">
        <div class="form-input">
          <label class="form-label" for="calendar-event-county">County</label>
          <select id="calendar-event-county" class="form-select" v-model="state.selectedCounty">
            <option value="">All Counties</option>
            <option v-for="county in counties" :value="county" :key="county" v-html="county"> </option>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { state, actions } from "./store";

export default {
  computed: {
    state() {
      return state;
    },
    selectedCategory() {
      return state.selectedCategory;
    },
    selectedCounty() {
      return state.selectedCounty;
    },
    categories() {
      return state.categories;
    },
    counties() {
      return state.counties;
    },
  },
};
</script>
