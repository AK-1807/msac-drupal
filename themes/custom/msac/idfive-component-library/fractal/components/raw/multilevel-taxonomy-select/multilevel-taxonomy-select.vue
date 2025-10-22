<template>
  <div class="multilevel-taxonomy-select">
    <div class="multilevel-taxonomy-select__default-slot">
      <slot></slot>
    </div>
    <multilevel-taxonomy-select-parent
      v-for="parent in taxonomyTree"
      :key="parent.id"
      :data="parent"
      :parent-name="parentName"
      :child-name="childName"
      :selected-parents="selectedParents"
      :selected-children="selectedChildren"
      @update-selected-parents="updateSelectedParents"
      @update-selected-children="updateSelectedChildren"
    />
  </div>
</template>

<script lang="ts">
import MultilevelTaxonomySelectParent from "./multilevel-taxonomy-select-parent.vue";

export default {
  mounted() {
    this.taxonomyTree = this.generateTreeFromDefaultSlotHTML();
  },
  data() {
    return {
      taxonomyTree: {},
      selectedParents: [],
      selectedChildren: [],
    };
  },
  props: {
    parentName: {
      type: String,
    },
    childName: {
      type: String,
    },
  },
  components: {
    "multilevel-taxonomy-select-parent": MultilevelTaxonomySelectParent,
  },
  methods: {
    generateTreeFromDefaultSlotHTML() {
      const output = [] as any;
      const slotHTML = this.$el.querySelector(".multilevel-taxonomy-select__default-slot") as HTMLElement;
      const checkboxFields = slotHTML.querySelectorAll(".js-form-type-checkbox") as NodeListOf<HTMLElement>;
      // Hide the actual inputs from screen readers to prevent them
      // from reading the inputs as well as the custom component
      slotHTML.firstElementChild.setAttribute("aria-hidden", "true");
      slotHTML.firstElementChild.setAttribute("tabindex", "-1");
      for (let i = 0; i < checkboxFields.length; i++) {
        const input = checkboxFields[i].querySelector("input[type='checkbox']") as HTMLInputElement;
        const label = checkboxFields[i].querySelector("label") as HTMLLabelElement;
        const labelChars = label.textContent.split("");
        let level = 0;
        // Hierarchy is denoted by a number of hyphens in the label matching the corresponding level
        for (let j = 0; j < labelChars.length; j++) {
          if (labelChars[j] === "-") {
            level++;
          } else {
            break;
          }
        }
        if (level === 0) {
          // If we're at the top level immediately add it to the output array at the base level
          output.push({
            id: input.value,
            children: [],
            input: input.id,
            label: label.textContent,
            level,
          });
          if (input.checked) {
            this.selectedParents.push(input.value);
          }
        } else {
          // If the level is greater than zero, we need to traverse the output tree
          // and place it in the correct parent node's children.
          let parent = output[output.length - 1];
          // If the parent has no children we don't need to traverse the tree,
          // we can just add this item directly to the parent node's children.
          if (parent.children.length) {
            let j = level;
            while (j > parent.level + 1) {
              parent = parent.children[parent.children.length - 1];
              j--;
            }
          }
          parent.children.push({
            id: input.value,
            children: [],
            input: input.id,
            label: label.textContent.replace(/^\-*/, ""),
            level,
          });
          if (input.checked) {
            this.selectedChildren.push(input.value);
          }
        }
      }
      return output;
    },
    updateSelectedParents(parentId) {
      if (this.selectedParents.indexOf(parentId) !== -1) {
        this.selectedParents = this.selectedParents.filter((id) => id !== parentId);
      } else {
        this.selectedParents = [...this.selectedParents, parentId];
      }
    },
    updateSelectedChildren(childId) {
      if (this.selectedChildren.indexOf(childId) !== -1) {
        this.selectedChildren = this.selectedChildren.filter((id) => id !== childId);
      } else {
        this.selectedChildren = [...this.selectedChildren, childId];
      }
    },
  },
};
</script>
