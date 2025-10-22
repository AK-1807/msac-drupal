<template>
  <div class="arts-directory__view-filters">
    <button class="arts-directory__filter-modal-trigger button" @click="showFiltersModal">
      Filter
    </button>
    <ul class="arts-directory__selected-filters-list">
      <li class="arts-directory__selected-filters-list-item" v-for="filter in selectedFilters" :key="filter.key">
        <button class="arts-directory__selected-filter" @click="handleFilterTagClick(filter)">
          {{ filter.label }}
        </button>
      </li>
    </ul>
    <div class="arts-directory__filters-modal modal" id="artwork-filters-modal" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="artwork-filters-modal-title">
          <div class="modal__header">
            <button class="modal__close" aria-label="Close modal" data-micromodal-close>
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g fill="#FFF" fill-rule="evenodd">
                  <path
                    d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"
                  />
                  <path d="M10.907 6v4.908H6v2.185h4.907V18h2.185v-4.907H18v-2.185h-4.908V6z" />
                </g>
              </svg>
            </button>
            <h2 class="modal__title" id="artwork-filters-modal-title">
              Filter Artwork
            </h2>
          </div>
          <div class="modal__content" id="artwork-filters-modal-content">
            <form @submit="handleFilterSubmit($event)">
              <div class="form-item" v-if="artisticCategoriesFetched">
                <fieldset>
                  <legend>Type of Art</legend>
                  <artistic-category-filter
                    v-for="category in artisticCategoryFilters"
                    :key="category.id"
                    :checkboxName="`art-type-${category.id}`"
                    :checkboxLabel="category.name"
                    :selectName="`art-type-${category.id}-options`"
                    :selectLabel="`${category.name} Options`"
                    :selectOptions="category.options"
                    :selectedOptions="selectedArtworkTypeOptionsById(category.id)"
                    :isSelected="isArtworkTypeSelected(category.id)"
                    :parentValue="category.id"
                    :onChange="updateSelectedArtworkTypeOptions"
                  />
                </fieldset>
              </div>
              <div class="form-item" v-if="priceRangesFetched">
                <label for="artwork-price-filter">Price</label>
                <select class="select" id="artwork-price-filter" v-model="filters.priceRange.dirtyValue">
                  <option value="">Any Price</option>
                  <option v-for="price in priceRangeFilters" :value="price.value" :key="price.value">
                    {{ price.name }}
                  </option>
                </select>
              </div>
              <button type="submit" class="button">Apply</button>
              <button type="button" class="button" @click="handleFilterCancelClick">
                Cancel
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { state as globalState, getters as globalGetters } from "./store";
import { state as viewState, getters as viewGetters, actions as viewActions } from "./artwork-view-store";
import ArtisticCategoryFilter from "./artistic-category-filter.vue";
import * as _kebabCase from "lodash.kebabcase";

export default {
  components: {
    "artistic-category-filter": ArtisticCategoryFilter,
  },
  computed: {
    filters() {
      return viewState.filters;
    },
    artisticCategoriesFetched() {
      return globalGetters.artisticCategoriesFetched();
    },
    artisticCategoryFilters() {
      return globalGetters.artisticCategoryFilters();
    },
    priceRangesFetched() {
      return globalGetters.priceRangesFetched();
    },
    priceRangeFilters() {
      return globalGetters.priceRangeFilters();
    },
    selectedFilters() {
      return viewGetters.selectedFilters();
    },
  },
  methods: {
    updateSelectedArtworkTypeOptions(artworkTypeId, options) {
      const cloned = {
        ...viewState.filters.artisticCategories.dirtyValue,
      };
      if (options.length > 0) {
        viewState.filters.artisticCategories.dirtyValue = {
          ...cloned,
          [artworkTypeId]: options,
        };
      } else {
        delete cloned[artworkTypeId];
        viewState.filters.artisticCategories.dirtyValue = cloned;
      }
    },
    showFiltersModal() {
      this.$modal.show("artwork-filters-modal");
      
      this.$nextTick(() => {
        setTimeout(() => {
        const closeButton = document.querySelector(" .modal__close") as HTMLButtonElement;
        console.log(closeButton)
        if (closeButton) {
          closeButton.focus();
        }
         }, 50);
      });
    },
    selectedArtworkTypeOptionsById(artworkTypeId) {
      return viewState.filters.artisticCategories.dirtyValue[artworkTypeId] || [];
    },
    isArtworkTypeSelected(artworkTypeId) {
      return viewState.filters.artisticCategories.dirtyValue.hasOwnProperty(artworkTypeId);
    },
    handleFilterSubmit(event) {
      event.preventDefault();
      viewActions.commitFilters();
      viewActions.fetchResults();
      this.$modal.close("artwork-filters-modal");
    },
    handleFilterCancelClick() {
      viewActions.cancelFiltering();
      this.$modal.close("artwork-filters-modal");
    },
    handleFilterTagClick(filter) {
      viewActions.clearFilter(filter);
      viewActions.fetchResults();
    },
  },
};
</script>
