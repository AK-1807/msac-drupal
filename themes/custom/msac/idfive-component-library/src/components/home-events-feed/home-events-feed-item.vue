<template>
  <li class="feed-item">
    <a :href="url" class="feed-item__cta">
      <span class="feed-item__title h3" v-html="event.title"></span>
      <span class="feed-item__location" v-html="event.city"></span>
    </a>
  </li>
</template>

<script lang="ts">
import * as moment from "moment-timezone";
export default {
  props: {
    event: {
      type: Object,
      required: true,
    },
  },
  computed: {
    url() {
      const dateParam = encodeURIComponent(moment(this.event.date).format("M/D/YY"));
      const eid = encodeURIComponent(this.event.id);
      return `/calendar?date=${dateParam}&eid=${eid}`;
    },
  },
};
</script>
