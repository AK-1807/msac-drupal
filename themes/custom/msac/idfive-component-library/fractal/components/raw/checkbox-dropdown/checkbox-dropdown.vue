<template>
  <div class="checkbox-dropdown" v-click-outside="dismissDropdown">
    <div class="checkbox-dropdown__default-slot">
      <slot></slot>
    </div>
    <button
      type="button"
      aria-haspopup="true"
      :id="buttonId"
      :aria-expanded="`${expanded}`"
      :aria-controls="listboxId"
      @click="toggleExpanded"
      class="checkbox-dropdown__toggle"
    >
      {{ label }}
    </button>
    <ul
      class="checkbox-dropdown__listbox"
      role="listbox"
      tabindex="0"
      aria-multiselectable="true"
      :id="listboxId"
      :aria-hidden="`${!expanded}`"
      :aria-expanded="`${expanded}`"
    >
      <li
        class="checkbox-dropdown__item"
        role="option"
        v-for="option in options"
        :key="option.id"
        :aria-selected="`${optionIsSelected(option.id)}`"
        @click="updateSelectedOptions(option)"
      >
        <div aria-hidden="true" class="checkbox-dropdown__item-checkbox"></div>
        <span>{{ option.label }}</span>
      </li>
    </ul>
  </div>
</template>

<script lang="ts">
import { v4 as uuidv4 } from "uuid";
import * as indefinite from "indefinite";
import * as pluralize from "pluralize";

export default {
  mounted() {
    this.options = this.parseOptionsFromDefaultSlotHTML();
    this.initiallySetSelectedOptions();
    this.checkForNoSelectedOptions();
  },
  beforeDestroy() {
    this.resetAllSelectedOptions();
  },
  data() {
    return {
      options: [],
      expanded: false,
      selectedOptionsById: {},
    };
  },
  directives: {
    clickOutside: {
      bind(el, binding, vnode) {
        el.clickOutsideEvent = (event) => {
          if (!el.contains(event.target)) {
            vnode.context[binding.expression](event);
            event.stopPropagation();
          }
        };
        document.body.addEventListener("click", el.clickOutsideEvent);
      },
      unbind(el) {
        if (el.clickOutsideEvent) {
          document.body.removeEventListener("click", el.clickOutsideEvent);
        }
      },
    },
  },
  props: {
    optionName: {
      type: String,
      default: "option",
    },
  },
  computed: {
    buttonId() {
      return `button-${uuidv4()}`;
    },
    listboxId() {
      return `listbox-${uuidv4()}`;
    },
    label() {
      return `Select ${pluralize(this.optionName).toLowerCase()}`;
    },
    validationMessage() {
      return `Please select ${indefinite(this.optionName).toLowerCase()}.`;
    },
  },
  methods: {
    parseOptionsFromDefaultSlotHTML() {
      const output = [] as any;
      const slotHTML = this.$el.querySelector(".checkbox-dropdown__default-slot") as HTMLElement;
      const checkboxFields = slotHTML.querySelectorAll(".js-form-type-checkbox") as NodeListOf<HTMLElement>;
      // Hide the actual inputs from screen readers to prevent them
      // from reading the inputs as well as the custom component
      slotHTML.firstElementChild.setAttribute("aria-hidden", "true");
      slotHTML.firstElementChild.setAttribute("tabindex", "-1");
      for (let i = 0; i < checkboxFields.length; i++) {
        const input = checkboxFields[i].querySelector("input[type='checkbox']") as HTMLInputElement;
        const label = checkboxFields[i].querySelector("label") as HTMLLabelElement;
        output.push({
          id: input.value,
          input: input.id,
          label: label.textContent,
        });
      }
      return output;
    },
    toggleExpanded() {
      this.expanded = !this.expanded;
    },
    updateSelectedOptions(option: any) {
      const clonedState = { ...this.selectedOptionsById };
      const checkbox = document.getElementById(option.input) as HTMLInputElement;
      if (this.selectedOptionsById.hasOwnProperty(option.id)) {
        delete clonedState[option.id];
      } else {
        clonedState[option.id] = option;
      }
      this.selectedOptionsById = clonedState;
      if (checkbox) {
        checkbox.checked = !checkbox.checked;
      }
      this.checkForNoSelectedOptions();
    },
    optionIsSelected(id: string) {
      return this.selectedOptionsById.hasOwnProperty(id);
    },
    resetAllSelectedOptions() {
      // Loop over all selected options to toggle their state and deselect checkboxes
      Object.keys(this.selectedOptionsById).forEach((optionId) => {
        this.updateSelectedOptions(this.selectedOptionsById[optionId]);
      });
    },
    initiallySetSelectedOptions() {
      this.options.forEach((option) => {
        const checkbox = document.getElementById(option.input) as HTMLInputElement;

        if (checkbox?.checked) {
          this.selectedOptionsById = {
            ...this.selectedOptionsById,
            [option.id]: option,
          };
        }
      });
    },
    dismissDropdown() {
      this.expanded = false;
    },
    checkForNoSelectedOptions() {
      const noOptionsSelected = Object.keys(this.selectedOptionsById).length === 0;

      // Set options to be required if none are selected to
      // prevent users from submitting without selecting one
      this.options.forEach((option) => {
        const checkbox = document.getElementById(option.input) as HTMLInputElement;
        checkbox.required = noOptionsSelected;
        checkbox.setCustomValidity(noOptionsSelected ? this.validationMessage : "");
      });
    },
  },
};
</script>
