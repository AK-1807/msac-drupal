<template>
  <div class="arts-explorer__key">
    <div class="arts-explorer__key-heading">Key</div>
    <div class="arts-explorer__key-content">
      <ul class="arts-explorer__key-items">
        <li
          v-for="locationType in locationTypes"
          :key="`location-type-${locationType.id}`"
          :class="keyItemClass(locationType.id)"
        >
          {{ locationType.attributes.name }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script lang="ts">
import { state, methods } from "./store";

export default {
  computed: {
    locationTypes() {
      return state.locationTypes;
    },
  },
  methods: {
    keyItemClass(locationTypeId: string) {
      return {
        "arts-explorer__key-item": true,
        [`arts-explorer__key-item--${methods.snakeCaseLocationType(locationTypeId)}`]: true,
      };
    },
  },
};
</script>
