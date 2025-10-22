import Vue from "vue";
import AEDistrictMap from "./ae-district-map.vue";

export default function initAEDistrictMap() {
  const el = document.getElementById("ae-district-map-root") as HTMLElement;
  if (el) {
    new Vue({
      components: {
        "ae-district-map": AEDistrictMap,
      },
      el,
    });
  }
}
