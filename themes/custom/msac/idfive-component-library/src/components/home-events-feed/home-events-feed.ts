import Vue from "vue";
import HomeEventsFeed from "./home-events-feed.vue";

export default function initHomeEventsFeed() {
  const el = document.getElementById("home-events-feed-root") as HTMLElement;
  if (el) {
    new Vue({
      components: {
        "home-events-feed": HomeEventsFeed,
      },
      el,
    });
  }
}
