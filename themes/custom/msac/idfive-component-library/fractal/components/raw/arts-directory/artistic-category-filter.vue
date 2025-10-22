<template>
  <div class="artistic-category-filter">
    <div class="artistic-category-filter__checkbox form-item-checkbox">
      <button>
      <input
        type="checkbox"
        class="form-checkbox"
        :id="formattedCheckboxName"
        :checked="isSelected"
        @change="handleCheckboxChange($event)"
      />
      <label :for="formattedCheckboxName">{{ checkboxLabel }}</label></button>
    </div>
    <div class="artistic-category-filter__select" :aria-hidden="!isSelected" v-if="!!selectOptions.length">
      <label :for="formattedSelectName" class="visible-for-screen-readers">{{ selectLabel }}</label>
      <select class="form-select" ref="selectInput" :id="formattedSelectName" @change="handleSelectChange($event)">
        <option value="" :selected="allOptionsSelected">All</option>
        <option
          v-for="(option, i) in selectOptions"
          :value="option.value"
          :key="`${formattedSelectName}-option-${i}`"
          :selected="selectedOptions.length === 1 && selectedOptions[0] === option.value"
        >
          {{ option.name }}
        </option>
      </select>
    </div>
  </div>
</template>

<script lang="ts">
import * as _kebabCase from "lodash.kebabcase";
export default {
  data() {
    const selectedOptionsLength = this.selectedOptions.length;
    return {
      allOptionsSelected: selectedOptionsLength === this.selectOptions.length,
    };
  },
  props: {
    onChange: {
      type: Function,
      default: () => {},
    },
    checkboxName: {
      type: String,
      required: true,
    },
    checkboxLabel: {
      type: String,
      required: true,
    },
    parentValue: {
      type: String,
      required: true,
    },
    selectName: {
      type: String,
      required: true,
    },
    selectLabel: {
      type: String,
      required: true,
    },
    selectOptions: {
      type: Array,
      required: true,
    },
    selectedOptions: {
      type: Array,
      default: [],
    },
    isSelected: {
      type: Boolean,
      required: true,
    },
  },
  computed: {
    formattedCheckboxName() {
      return _kebabCase(this.checkboxName);
    },
    formattedSelectName() {
      return _kebabCase(this.selectName);
    },
    allSelectValues() {
      return this.selectOptions.map((option) => option.value);
    },
  },
  methods: {
    handleCheckboxChange(event) {
      const target = event.currentTarget as HTMLInputElement;
      this.allOptionsSelected = target.checked;
      this.selectedOption = null;
      if (target.checked) {
        this.onChange(this.parentValue, this.allSelectValues);
        this.$nextTick(() => {
          this.$refs.selectInput.focus();
        });
      } else {
        this.onChange(this.parentValue, []);
      }
    },
    handleSelectChange(event) {
      const target = event.currentTarget as HTMLSelectElement;
      this.selectedOption = target.value;
      if (!!this.selectedOption) {
        this.onChange(this.parentValue, [this.selectedOption]);
      } else {
        this.onChange(this.parentValue, this.allSelectValues);
      }
    },
  },
};
</script>
