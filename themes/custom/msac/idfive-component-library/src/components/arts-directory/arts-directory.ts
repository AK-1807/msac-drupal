import Vue from "vue";
import MicroModal from "micromodal";
import ArtsDirectory from "./arts-directory.vue";

export default function initArtsDirectory() {
  const el = document.getElementById("arts-directory-root") as HTMLElement;
  if (el) {
    Object.defineProperty(Vue.prototype, "$modal", { value: MicroModal });

    new Vue({
      components: {
        "arts-directory": ArtsDirectory,
      },
      el,
    });
  }
}
