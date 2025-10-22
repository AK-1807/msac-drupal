import Vue from "vue";
import CheckboxDropdown from "./checkbox-dropdown.vue";

export default function initCheckboxDropdowns() {
  const els = document.querySelectorAll(".checkbox-dropdown-root") as NodeListOf<HTMLElement>;
  if (els.length) {
    for (let i = 0; i < els.length; i++) {
      new Vue({
        components: {
          "checkbox-dropdown": CheckboxDropdown,
        },
        mounted() {
          this.$el.classList.add("loaded");
        },
        el: els[i],
      });
    }
  }
}
