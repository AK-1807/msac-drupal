import Vue from "vue";
import ArtsExplorer from "./arts-explorer.vue";

export default function initArtsExplorer() {
  const el = document.getElementById("arts-explorer-root") as HTMLElement;
  if (el) {
    new Vue({
      components: {
        "arts-explorer": ArtsExplorer,
      },
      el,
    });
  }
}
