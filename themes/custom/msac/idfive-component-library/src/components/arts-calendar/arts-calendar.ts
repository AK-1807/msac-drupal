import Vue from "vue";
import MicroModal from "micromodal";
import ArtsCalendar from "./arts-calendar.vue";

Object.defineProperty(Vue.prototype, "$modal", { value: MicroModal });

export default function initArtsCalendar() {
  const el = document.getElementById("arts-calendar-root") as HTMLElement;
  if (el) {
    new Vue({
      components: {
        "arts-calendar": ArtsCalendar,
      },
      el,
    });
  }
}
