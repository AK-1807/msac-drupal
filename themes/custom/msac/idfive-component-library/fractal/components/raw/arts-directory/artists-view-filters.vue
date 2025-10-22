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
    <div class="arts-directory__filters-modal modal" id="artists-filters-modal" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="artists-filters-modal-title">
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
            <h2 class="modal__title" id="artists-filters-modal-title">
              Filter Artists and Performers
            </h2>
          </div>
          <div class="modal__content" id="artists-filters-modal-content">
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
              <div class="form-item" v-if="bookingPricesFetched">
                <label for="artists-booking-price-filter">Booking Price</label>
                <select class="select" id="artists-booking-price-filter" v-model="filters.bookingPrice.dirtyValue">
                  <option value="">Any Price</option>
                  <option v-for="price in bookingPriceFilters" :value="price.value" :key="price.value">
                    {{ price.name }}
                  </option>
                </select>
              </div>
              <div class="form-item" v-if="aeDistrictsFetched">
                <label for="artists-ae-district-filter">A&amp;E District</label>
                <select class="select" id="artists-ae-district-filter" v-model="filters.aeDistrict.dirtyValue">
                  <option value="">Any District</option>
                  <option v-for="district in aeDistrictFilters" :value="district.value" :key="district.value">
                    {{ district.name }}
                  </option>
                </select>
              </div>
              <div class="form-item form-item-checkbox">
                <input
                  type="checkbox"
                  id="artists-independent-artist-filter"
                  class="form-checkbox"
                  v-model="filters.independentArtistWinner.dirtyValue"
                />
                <label for="artists-independent-artist-filter">Independent Artist Award Winner</label>
              </div>
              <div class="form-item form-item-checkbox">
                <input
                  type="checkbox"
                  id="artists-presenting-touring-filter"
                  class="form-checkbox"
                  v-model="filters.presentingTouring.dirtyValue"
                />
                <label for="artists-presenting-touring-filter">Maryland Touring Grant Funding Available</label>
              </div>
              <div v-if="artsInEducationFetched">
                <h3 class="h5">
                  Arts In Education Funding Available:
                </h3>
                <div class="form-item form-item-checkbox">
                  <input
                    type="checkbox"
                    class="form-checkbox"
                    id="select-all-aei-filters"
                    v-model="viewState.selectAllArtsInEducationFilters"
                  />
                  <label for="select-all-aei-filters">
                    View All Artists With Arts In Education Funding
                  </label>
                </div>
                <div :hidden="viewState.selectAllArtsInEducationFilters">
                  <fieldset>
                    <legend>Population Types:</legend>
                    <div
                      class="form-item form-item-checkbox"
                      v-for="option in artsInEducationFilters"
                      :key="option.value"
                    >
                      <input
                        type="checkbox"
                        class="form-checkbox"
                        :id="`population-type-filter-${option.value}`"
                        :value="option.value"
                        v-model="filters.populationTypes.dirtyValue"
                      />
                      <label :for="`population-type-filter-${option.value}`">
                        {{ option.name }}
                      </label>
                    </div>
                  </fieldset>
                  <fieldset>
                    <legend>Engagement Types:</legend>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-lectures-filter"
                        class="form-checkbox"
                        v-model="filters.lectures.dirtyValue"
                      />
                      <label for="artists-lectures-filter">Lectures</label>
                    </div>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-online-programs-filter"
                        class="form-checkbox"
                        v-model="filters.onlinePrograms.dirtyValue"
                      />
                      <label for="artists-online-programs-filter">Online Programs</label>
                    </div>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-out-of-school-time-filter"
                        class="form-checkbox"
                        v-model="filters.outOfSchoolTime.dirtyValue"
                      />
                      <label for="artists-out-of-school-time-filter">Out of School Time</label>
                    </div>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-residency-filter"
                        class="form-checkbox"
                        v-model="filters.residency.dirtyValue"
                      />
                      <label for="artists-residency-filter">Residency</label>
                    </div>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-visiting-performance-filter"
                        class="form-checkbox"
                        v-model="filters.visitingPerformance.dirtyValue"
                      />
                      <label for="artists-visiting-performance-filter">Visiting Performance</label>
                    </div>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-workshop-filter"
                        class="form-checkbox"
                        v-model="filters.workshop.dirtyValue"
                      />
                      <label for="artists-workshop-filter">Workshop</label>
                    </div>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-professional-development-filter"
                        class="form-checkbox"
                        v-model="filters.professionalDevelopment.dirtyValue"
                      />
                      <label for="artists-professional-development-filter">Professional Development</label>
                    </div>
                    <div class="form-item form-item-checkbox">
                      <input
                        type="checkbox"
                        id="artists-field-trip-filter"
                        class="form-checkbox"
                        v-model="filters.fieldTrip.dirtyValue"
                      />
                      <label for="artists-field-trip-filter">Field Trip</label>
                    </div>
                  </fieldset>
                </div>
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
import { getters as globalGetters } from "./store";
import { state as viewState, getters as viewGetters, actions as viewActions } from "./artists-view-store";
import ArtisticCategoryFilter from "./artistic-category-filter.vue";
import * as _kebabCase from "lodash.kebabcase";

export default {
  components: {
    "artistic-category-filter": ArtisticCategoryFilter,
  },
  computed: {
    viewState() {
      return viewState;
    },
    filters() {
      return viewState.filters;
    },
    artisticCategoriesFetched() {
      return globalGetters.artisticCategoriesFetched();
    },
    artisticCategoryFilters() {
      return globalGetters.artisticCategoryFilters();
    },
    aeDistrictsFetched() {
      return globalGetters.aeDistrictsFetched();
    },
    aeDistrictFilters() {
      return globalGetters.aeDistrictFilters();
    },
    bookingPricesFetched() {
      return globalGetters.bookingPricesFetched();
    },
    bookingPriceFilters() {
      return globalGetters.bookingPriceFilters();
    },
    artsInEducationFetched() {
      return globalGetters.artisticCategoriesFetched();
    },
    artsInEducationFilters() {
      return globalGetters.artsInEducationFilters();
    },
    selectedFilters() {
      return viewGetters.selectedFilters();
    },
  },
  methods: {
    updateSelectedArtworkTypeOptions(artworkTypeId, options) {
      const clonedState = {
        ...viewState.filters.artisticCategories.dirtyValue,
      };
      if (options.length) {
        viewState.filters.artisticCategories.dirtyValue = {
          ...clonedState,
          [artworkTypeId]: options,
        };
      } else {
        delete clonedState[artworkTypeId];
        viewState.filters.artisticCategories.dirtyValue = clonedState;
      }
    },
    showFiltersModal() {
      this.$modal.show("artists-filters-modal");
    },
    selectedArtworkTypeOptionsById(artworkTypeId) {
      return viewState.filters.artisticCategories.dirtyValue[artworkTypeId] || [];
    },
    isArtworkTypeSelected(artworkTypeId) {
      return viewState.filters.artisticCategories.dirtyValue.hasOwnProperty(artworkTypeId);
    },
    handleAeDistrictChange(aeDistrictId) {
      viewState.filters.aeDistrict.dirtyValue = aeDistrictId;
    },
    handleFilterSubmit(event) {
      event.preventDefault();
      viewActions.commitFilters();
      viewActions.fetchResults();
      this.$modal.close("artists-filters-modal");
    },
    handleFilterCancelClick() {
      viewActions.cancelFiltering();
      this.$modal.close("artists-filters-modal");
    },
    handleFilterTagClick(filter) {
      viewActions.clearFilter(filter);
      viewActions.fetchResults();
    },
  },
};
</script>
