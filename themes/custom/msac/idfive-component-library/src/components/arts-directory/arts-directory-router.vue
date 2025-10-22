<template>
  <div class="outer-pad">
    <div class="silc-grid silc-grid--justify-center silc-grid--collapse">
      <div class="silc-grid__col silc-grid__col--10-800 silc-grid__col--8-1200">
        <component v-if="!!currentView" :is="currentView"></component>
        <div v-else></div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import routes from "./routes";
import { state } from "./store";
import { getCurrentRouteFromLocation } from "./util";

export default {
  beforeMount() {
    window.addEventListener("popstate", () => {
      state.currentRoute = getCurrentRouteFromLocation();
    });

    // Remove trailing slash in pathname on initial load
    // to prevent
    if (window.location.pathname.substr(-1) === "/") {
      window.history.pushState(
        null,
        null,
        `${window.location.origin}${window.location.pathname.replace(/\/$/, "")}${window.location.hash}`
      );
      state.currentRoute = getCurrentRouteFromLocation();
    }
  },
  computed: {
    currentView() {
      if (!!routes[state.currentRoute]) {
        return routes[state.currentRoute].component;
      } else {
        return null;
      }
    },
  },
};
</script>
