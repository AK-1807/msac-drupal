<template>
  <a :class="linkClass" :href="href" v-on:click.prevent="handleClick">
    <h3 class="arts-directory__navigator-link-heading">
      <slot name="heading"></slot>
    </h3>
    <div>
      <p class="silc-display--none silc-display--block-600">
        <slot name="description"></slot>
      </p>
    </div>
  </a>
</template>

<script lang="ts">
import { state } from "./store";

export default {
  props: {
    href: {
      type: String,
      required: true,
    },
  },
  computed: {
    isActive() {
      return state.currentRoute === this.href;
    },
    linkClass() {
      return {
        "arts-directory__navigator-link": true,
        "arts-directory__navigator-link--active": this.isActive,
      };
    },
  },
  methods: {
    handleClick() {
      window.history.pushState(
        null,
        null,
        `${window.location.origin}${window.location.pathname.replace(/\/$/, "")}#${this.href}`
      );
      state.currentRoute = this.href;
    },
  },
};
</script>
