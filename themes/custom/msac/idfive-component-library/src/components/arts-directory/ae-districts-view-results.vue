<template>
  <div class="arts-directory__results">
    <arts-directory-feed
      :results="results"
      :fetching-results="fetchingResults"
      :fetched-results="fetchedResults"
      :can-fetch-more="canFetchMore"
      :no-results="noResults"
      :on-fetch="handleFetch"
    >
      <li class="arts-directory__feed-list-item" v-for="result in results" :key="result.id">
        <ae-districts-view-feed-item :data="result" />
      </li>
    </arts-directory-feed>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryFeed from "./arts-directory-feed.vue";
import AEDistrictsViewFeedItem from "./ae-districts-view-feed-item.vue";
import * as _get from "lodash.get";
import { state as viewState, actions as viewActions, getters as viewGetters } from "./ae-districts-view-store";

export default {
  beforeCreate() {
    viewActions.fetchResults();
  },
  components: {
    "arts-directory-feed": ArtsDirectoryFeed,
    "ae-districts-view-feed-item": AEDistrictsViewFeedItem,
  },
  computed: {
    canFetchMore() {
      return viewState.canFetchMore;
    },
    fetchingResults() {
      return viewState.fetchingResults;
    },
    fetchedResults() {
      return viewGetters.fetchedResults();
    },
    noResults() {
      return this.fetchedResults && this.results.length === 0;
    },
    results() {
      return viewState.results.map((result) => {
        const thumbnail = this.thumbnailForResult(result);
        const county = this.countyForResult(result);
        const output = {
          id: result.id,
          title: result.attributes.title,
          county: county?.attributes?.name,
          url: result.attributes.path.alias,
          thumbnail: thumbnail?.attributes?.uri?.url,
        };

        return output;
      });
    },
  },
  methods: {
    handleFetch() {
      viewActions.fetchResults(true);
    },
    thumbnailForResult(result: any) {
      const included = viewGetters.includedByType();
      const thumbnailRel = result.relationships.field_district_photo;
      return included?.[thumbnailRel?.data?.type]?.[thumbnailRel?.data?.id];
    },
    countyForResult(result: any) {
      const included = viewGetters.includedByType();
      const countyRel = result.relationships.field_county;
      return included?.[countyRel?.data?.type]?.[countyRel?.data?.id];
    },
  },
};
</script>
