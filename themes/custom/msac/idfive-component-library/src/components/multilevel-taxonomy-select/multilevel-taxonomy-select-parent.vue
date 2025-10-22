<template>
  <div class="multilevel-taxonomy-select__parent">
    <div class="multilevel-taxonomy-select__checkbox form-item-checkbox">
      <input
        type="checkbox"
        class="form-checkbox"
        ref="input"
        :checked="this.isSelected"
        :id="checkboxId"
        :required="isRequired"
        @change="handleCheckboxChange($event)"
      />
      <label class="multilevel-taxonomy-select__checkbox-label" :for="checkboxId">{{ data.label }}</label>
    </div>
    <multilevel-taxonomy-select-child
      v-if="showChildDropdown"
      v-on="$listeners"
      :options="data.children"
      :child-name="childName"
      :selected-children="selectedChildren"
    />
  </div>
</template>

<script lang="ts">
import * as indefinite from "indefinite";
import * as pluralize from "pluralize";
import MultilevelTaxonomySelectChild from "./multilevel-taxonomy-select-child.vue";

export default {
  props: {
    data: {
      type: Object,
      required: true,
    },
    parentName: {
      type: String,
      default: "option",
    },
    childName: {
      type: String,
      default: "option",
    },
    selectedParents: {
      type: Array,
      required: true,
    },
    selectedChildren: {
      type: Array,
      required: true,
    },
    onCheckboxChange: {
      type: Function,
      default: () => {},
    },
  },
  components: {
    "multilevel-taxonomy-select-child": MultilevelTaxonomySelectChild,
  },
  computed: {
    checkboxId() {
      return `multilevel-taxonomy-select-parent-checkbox-${this.data.id}`;
    },
    showChildDropdown() {
      return this.isSelected && this.data.children.length;
    },
    isSelected() {
      return this.selectedParents.indexOf(this.data.id) !== -1;
    },
    isRequired() {
      return this.selectedParents.length === 0;
    },
    validationMessage() {
      return `Please select ${indefinite(this.parentName).toLowerCase()}.`;
    },
  },
  methods: {
    handleCheckboxChange(event) {
      const target = event.target as HTMLInputElement;
      const checkbox = document.getElementById(this.data.input) as HTMLInputElement;
      if (checkbox) {
        checkbox.checked = !checkbox.checked;
      }
      this.$emit("update-selected-parents", this.data.id);
    },
  },
  watch: {
    isRequired: {
      immediate: true,
      handler: function(newVal) {
        this.$nextTick(() => {
          this.$refs.input.setCustomValidity(newVal ? this.validationMessage : "");
        });
      },
    },
  },
};
</script>
