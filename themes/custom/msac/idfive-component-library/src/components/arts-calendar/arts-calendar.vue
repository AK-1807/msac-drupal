<template>
  <div class="arts-calendar">
    <div class="silc-grid silc-grid--collapse silc-grid--justify-center">
      <div
        class="silc-grid__col silc-grid__col--8-550 silc-grid__col--7-800 silc-grid__col--6-1024 silc-grid__col--4-1200"
      >
        <calendar
          :start-date="startDate"
          :end-date="endDate"
          v-on:update:startDate="startDateChange"
          v-on:update:endDate="endDateChange"
        />
        <a href="https://mdyoda.milesmediagroup.com/Login.aspx" target="_blank" class="button silc-mtop--2"
          >Add Your Event</a
        >
        <p class="h5 silc-mtop--3">
          Add to MSAC's calendar by logging in to VisitMaryland and tagging your event Performing Arts, Visual Arts, or
          Literary Arts.
        </p>
      </div>
      <div class="silc-grid__col silc-grid__col--8-1200">
        <div class="arts-calendar__search">
          <arts-calendar-keyword-search />
          <arts-calendar-filters />
        </div>
        <arts-calendar-feed />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import Calendar from "../calendar/calendar.vue";
import ArtsCalendarKeywordSearch from "./arts-calendar-keyword-search.vue";
import ArtsCalendarFeed from "./arts-calendar-feed.vue";
import ArtsCalendarFilters from "./arts-calendar-filters.vue";
import * as qs from "qs";
import * as moment from "moment-timezone";
import { state } from "./store";

export default {
  beforeCreate() {
    const parsedQueryString = qs.parse(window.location.search, { ignoreQueryPrefix: true });
    if (parsedQueryString?.date) {
      state.startDate = moment(parsedQueryString.date).startOf("day");
    }
    if (parsedQueryString?.eid) {
      state.selectedEventId = parseInt(parsedQueryString.eid);
    }
  },
  computed: {
    startDate() {
      return state.startDate;
    },
    endDate() {
      return state.endDate;
    },
  },
  components: {
    "arts-calendar-keyword-search": ArtsCalendarKeywordSearch,
    "arts-calendar-feed": ArtsCalendarFeed,
    "arts-calendar-filters": ArtsCalendarFilters,
    calendar: Calendar,
  },
  methods: {
    startDateChange(dayMoment) {
      state.startDate = dayMoment;
    },
    endDateChange(dayMoment) {
      state.endDate = dayMoment;
    },
  },
};
</script>
