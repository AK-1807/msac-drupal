<template>
  <button :class="classObj" :aria-label="`View ${name} on the map`" @click="handleClick">
    <span class="arts-explorer__list-location-info">
      <span class="arts-explorer__list-location-name">{{ name }}</span>
      <span v-if="!!city" class="arts-explorer__list-location-city">{{ city }}</span>
    </span>
  </button>
</template>

<script lang="ts">
import { state, methods } from "./store";

export default {
  props: {
    location: {
      type: Object,
      required: true,
    },
  },
  computed: {
    classObj() {
      return {
        "arts-explorer__list-location": true,
        [`arts-explorer__list-location--${methods.snakeCaseLocationType(
          this.location.relationships.field_location_type.data.id
        )}`]: true,
        "arts-explorer__list-location--selected": state.selectedLocationId === this.location.id,
      };
    },
    name() {
      return this.location.attributes.title;
    },
    city() {
      return this.location.attributes.field_location_address?.locality;
    },
  },
  methods: {
    handleClick() {
      state.selectedLocationId = this.location.id;
    },
  },
};
</script>
