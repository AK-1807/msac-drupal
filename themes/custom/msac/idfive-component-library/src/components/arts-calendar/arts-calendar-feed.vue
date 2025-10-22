<template>
  <div class="arts-calendar__feed">
    <h2>Events for {{ selectedDateFormatted }}</h2>
    <div v-if="!fetchingEvents">
      <ul class="arts-calendar__feed-events" v-if="!!eventsForDisplay.length">
        <li class="arts-calendar__feed-events-item" v-for="event in eventsForDisplay" :key="event.id">
          <arts-calendar-feed-event :modal-id="modalId(event.id)" :event="event" />
          <arts-calendar-modal :id="modalId(event.id)" :event-id="event.id" :event="formattedEventDataById[event.id]" />
        </li>
      </ul>
      <p v-else-if="errorFetchingEvents">
        There was an error fetching events for the selected criteria. Please try another search.
      </p>
      <p v-else>
        No results found for the selected criteria. Please try another search.
      </p>
    </div>
    <div v-else>
      <div class="msac-loading-spinner">
        <div role="presentation"></div>
        <div role="presentation"></div>
        <div role="presentation"></div>
        <div role="presentation"></div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import * as moment from "moment-timezone";
import ArtsCalendarFeedEvent from "./arts-calendar-feed-event.vue";
import ArtsCalendarModal from "./arts-calendar-modal.vue";
import { state, getters, actions } from "./store";

export default {
  components: {
    "arts-calendar-feed-event": ArtsCalendarFeedEvent,
    "arts-calendar-modal": ArtsCalendarModal,
  },
  computed: {
    startTimestamp() {
      return getters.startTimestamp();
    },
    endTimestamp() {
      return getters.endTimestamp();
    },
    selectedDateFormatted() {
      const start = moment(state.startDate)
        .tz("America/New_York")
        .format("MMMM D, YYYY");
      if (!state.endDate || (!!state.endDate && state.endDate.isSame(state.startDate, "day"))) {
        return start;
      } else {
        const end = moment(state.endDate)
          .tz("America/New_York")
          .format("MMMM D, YYYY");
        return `${start}-${end}`;
      }
    },
    eventsForDisplay() {
      return getters.filteredEvents().map((event) => ({
        id: event.EventId,
        title: event.Title,
        city: event.City,
        date: event.NextOccur,
      }));
    },
    eventColumns() {
      const median = Math.ceil(state.events.length / 2);
      return [...this.eventsForDisplay.slice(0, median), ...this.eventsForDisplay.slice(median)];
    },
    formattedEventDataById() {
      return getters.formattedEventDataById();
    },
    fetchingEvents() {
      return state.fetchingEvents;
    },
    errorFetchingEvents() {
      return !state.fetchingEvents && state.errorFetchingEvents;
    },
  },
  watch: {
    startTimestamp: {
      immediate: true,
      handler() {
        actions.fetchEvents();
      },
    },
    endTimestamp: {
      immeditate: true,
      handler() {
        actions.fetchEvents();
      },
    },
    eventsForDisplay: {
      immediate: true,
      handler(newVal, oldVal) {
        if (!oldVal?.length && !!newVal?.length && state.selectedEventId) {
          actions.fetchEventDataById(state.selectedEventId).then((data) => {
            this.$nextTick(() => {
              this.$modal.show(this.modalId(state.selectedEventId));
            });
          });
        }
      },
    },
  },
  methods: {
    modalId(id: number) {
      return `arts-calendar-feed-modal-${id}`;
    },
  },
};
</script>
