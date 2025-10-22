import Vue from "vue";
import MultilevelTaxonomySelect from "./multilevel-taxonomy-select.vue";

export default function initMultilevelTaxonomySelects() {
  const els = document.querySelectorAll(".multilevel-taxonomy-select-root") as NodeListOf<HTMLElement>;
  if (els.length) {
    for (let i = 0; i < els.length; i++) {
      new Vue({
        components: {
          "multilevel-taxonomy-select": MultilevelTaxonomySelect,
        },
        mounted() {
          this.$el.classList.add("loaded");
        },
        el: els[i],
      });
    }
  }
}
