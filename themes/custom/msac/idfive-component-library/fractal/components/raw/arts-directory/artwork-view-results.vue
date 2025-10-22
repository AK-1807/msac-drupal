<template>
  <div class="arts-directory__results">
    <arts-directory-feed
      :results="results"
      :fetching-results="fetchingResults"
      :fetched-results="fetchedResults"
      :no-results="noResults"
      :can-fetch-more="canFetchMore"
      :on-fetch="handleFetch"
    >
      <li class="arts-directory__feed-list-item" v-for="result in results" :key="result.id">
        <artwork-view-feed-item :data="result" />
      </li>
    </arts-directory-feed>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryFeed from "./arts-directory-feed.vue";
import ArtworkViewFeedItem from "./artwork-view-feed-item.vue";
import * as _get from "lodash.get";
import { state as viewState, actions as viewActions, getters as viewGetters } from "./artwork-view-store";

export default {
  beforeCreate() {
    viewActions.fetchResults();
  },
  components: {
    "arts-directory-feed": ArtsDirectoryFeed,
    "artwork-view-feed-item": ArtworkViewFeedItem,
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
        const workType = result.attributes.field_work_type;
        const owner = this.ownerForResult(result);
        const thumbnail = this.thumbnailForResult(result);
        const categories = this.categoriesForResult(result);
        const output = {
          id: result.id,
          title: result.attributes.title,
          categories: categories.join(", "),
          url: null,
          thumbnail: thumbnail?.attributes?.uri?.url,
          owner: owner?.attributes?.title,
          forSale: result.attributes.field_work_for_sale,
        };

        if (!!owner) {
          output.url = `${owner.attributes.path.alias}?wid=${result.attributes.drupal_internal__nid}#featured-work--${workType}`;
        }

        return output;
      });
    },
  },
  methods: {
    handleFetch() {
      viewActions.fetchResults(true);
    },
    ownerForResult(result: any) {
      const included = viewGetters.includedByType();
      const ownerRel = result.relationships.field_work_owner;
      return included?.[ownerRel?.data?.type]?.[ownerRel?.data?.id];
    },
    thumbnailForResult(result: any) {
      const included = viewGetters.includedByType();
      const thumbnailRel = result.relationships.field_work_image;
      return included?.[thumbnailRel?.data?.type]?.[thumbnailRel?.data?.id];
    },
    categoriesForResult(result: any) {
      const included = viewGetters.includedByType();
      const categoriesRel = result.relationships.field_work_artistic_categories;
      return categoriesRel.data.map((obj) => included?.[obj.type]?.[obj.id]?.attributes?.name).filter((cat) => !!cat);
    },
  },
};
</script>
