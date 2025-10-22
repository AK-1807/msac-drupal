<template>
  <li class="feed-item">
    <a :href="url" class="feed-item__cta">
      <h3 class="feed-item__title" v-html="event.title"></h3>
      <div class="feed-item__location" v-html="event.city"></div>
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
