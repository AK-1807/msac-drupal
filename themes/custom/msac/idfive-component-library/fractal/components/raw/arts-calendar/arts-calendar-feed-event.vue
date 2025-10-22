<template>
  <div class="arts-calendar__feed-event">
    <h3 class="arts-calendar__feed-event-title">
      <a :href="`#${modalId}`" v-on:click.prevent="handleTitleClick" aria-haspopup="dialog" aria-controls="event-modal" data-modal-open>{{ event.title }}</a>
    </h3>
    <div class="arts-calendar__feed-event-city">
      {{ event.city }}
    </div>
  </div>
</template>

<script lang="ts">
import * as moment from "moment-timezone";
import { state, actions } from "./store";

export default {
  props: {
    modalId: {
      type: String,
      required: true,
    },
    event: {
      type: Object,
      required: true,
    },
  },
  methods: {
    handleTitleClick() {
      actions.fetchEventDataById(this.event.id).then((data) => {
        this.$modal.show(this.modalId);
        this.$modal.focus();
      });
    },
  },
};
</script>
