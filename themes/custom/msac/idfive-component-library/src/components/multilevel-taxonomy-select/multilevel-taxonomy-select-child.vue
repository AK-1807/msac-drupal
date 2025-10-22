<template>
  <div class="multilevel-taxonomy-select__child-wrap">
    <div class="multilevel-taxonomy-select__child">
      <div class="multilevel-taxonomy-select__dropdown" v-click-outside="dismissDropdown">
        <button
          type="button"
          aria-haspopup="true"
          :id="buttonId"
          :aria-expanded="`${expanded}`"
          :aria-controls="listboxId"
          @click="toggleExpanded"
          class="multilevel-taxonomy-select__dropdown-toggle"
        >
          {{ label }}
        </button>
        <ul
          class="multilevel-taxonomy-select__dropdown-listbox"
          role="listbox"
          tabindex="0"
          aria-multiselectable="true"
          :id="listboxId"
          :aria-hidden="`${!expanded}`"
          :aria-expanded="`${expanded}`"
        >
          <li
            class="multilevel-taxonomy-select__dropdown-item"
            role="option"
            v-for="option in options"
            :key="option.id"
            :aria-selected="`${optionIsSelected(option.id)}`"
            @click="handleOptionClick(option)"
          >
            <div aria-hidden="true" class="multilevel-taxonomy-select__dropdown-item-checkbox"></div>
            <span>{{ option.label }}</span>
          </li>
        </ul>
      </div>
    </div>
    <multilevel-taxonomy-select-child
      v-if="availableChildOptions.length"
      v-on="$listeners"
      :options="availableChildOptions"
      :selected-children="selectedChildren"
      :on-dropdown-expanded="onDropdownExpanded"
    >
    </multilevel-taxonomy-select-child>
  </div>
</template>

<script lang="ts">
import * as indefinite from "indefinite";
import * as pluralize from "pluralize";
import { v4 as uuidv4 } from "uuid";

export default {
  name: "multilevel-taxonomy-select-child",
  mounted() {
    this.updateValidation();
  },
  beforeDestroy() {
    this.resetAllSelectedOptions();
  },
  data() {
    return {
      expanded: false,
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
    options: {
      type: Array,
      required: true,
    },
    selectedChildren: {
      type: Array,
      required: true,
    },
    childName: {
      type: String,
      default: "option",
    },
    onDropdownExpanded: {
      type: Function,
      default: () => {},
    },
  },
  computed: {
    labelId() {
      return `label-${uuidv4()}`;
    },
    buttonId() {
      return `button-${uuidv4()}`;
    },
    listboxId() {
      return `listbox-${uuidv4()}`;
    },
    label() {
      return pluralize(this.childName.toLowerCase());
    },
    validationMessage() {
      return `Please select ${indefinite(this.childName).toLowerCase()}.`;
    },
    selectedOptionsById() {
      return this.options.reduce((acc, cur) => {
        if (this.selectedChildren.indexOf(cur.id) !== -1) {
          acc[cur.id] = cur;
        }
        return acc;
      }, {});
    },
    availableChildOptions() {
      const optionsById = Object.keys(this.selectedOptionsById).reduce((acc, cur) => {
        // Create a dictionary of child options to prevent duplicates being added
        const childOptionsById = this.selectedOptionsById[cur].children.reduce(
          (acc, cur) => ({
            ...acc,
            [cur.id]: cur,
          }),
          {}
        );
        return {
          ...acc,
          ...childOptionsById,
        };
      }, {});
      return Object.keys(optionsById).map((optionId) => optionsById[optionId]);
    },
  },
  methods: {
    toggleExpanded() {
      this.expanded = !this.expanded;
      this.onDropdownExpanded(this.expanded);
    },
    handleOptionClick(option: any) {
      const checkbox = document.getElementById(option.input) as HTMLInputElement;
      if (checkbox) {
        checkbox.checked = !checkbox.checked;
      }
      this.$emit("update-selected-children", option.id);
      this.$nextTick(() => {
        this.updateValidation();
      });
    },
    optionIsSelected(id: string) {
      return this.selectedChildren.indexOf(id) !== -1;
    },
    dismissDropdown() {
      this.expanded = false;
    },
    updateValidation() {
      const noOptionsSelected = Object.keys(this.selectedOptionsById).length === 0;

      // Set options to be required if none are selected to
      // prevent users from submitting without selecting one
      this.options.forEach((option) => {
        const checkbox = document.getElementById(option.input) as HTMLInputElement;
        checkbox.required = noOptionsSelected;
        checkbox.setCustomValidity(noOptionsSelected ? this.validationMessage : "");
      });
    },
    resetAllSelectedOptions() {
      // Remove selected options from internal state
      Object.keys(this.selectedOptionsById).forEach((id) => {
        const option = this.selectedOptionsById[id];
        this.$emit("update-selected-children", option.id);
      });

      // Remove custom validation and uncheck inputs
      this.options.forEach((option) => {
        const checkbox = document.getElementById(option.input) as HTMLInputElement;
        checkbox.checked = false;
        checkbox.required = false;
        checkbox.setCustomValidity("");
      });
    },
  },
};
</script>
