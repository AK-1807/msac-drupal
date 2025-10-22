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
        <artists-view-feed-item :data="result" />
      </li>
    </arts-directory-feed>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryFeed from "./arts-directory-feed.vue";
import ArtistsViewFeedItem from "./artists-view-feed-item.vue";
import { state as viewState, actions as viewActions, getters as viewGetters } from "./artists-view-store";

export default {
  beforeCreate() {
    viewActions.fetchResults();
  },
  components: {
    "arts-directory-feed": ArtsDirectoryFeed,
    "artists-view-feed-item": ArtistsViewFeedItem,
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
        const categories = this.categoriesForResult(result);
        const featuredWork = this.featuredWorkForResult(result);
        const output = {
          id: result.id,
          title: result.attributes.title,
          subtitle: categories.join(", "),
          url: result.attributes.path.alias,
          thumbnail: thumbnail?.attributes?.uri?.url,
          featuredWork: null,
        };

        if (featuredWork.work && featuredWork.thumbnail) {
          output.featuredWork = {
            name: featuredWork.work.attributes.title,
            thumbnail: featuredWork.thumbnail.attributes.uri.url,
          };
        }

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
      const thumbnailRel = result.relationships.field_artist_photo;
      return included?.[thumbnailRel?.data?.type]?.[thumbnailRel?.data?.id];
    },
    categoriesForResult(result: any) {
      const included = viewGetters.includedByType();
      const categoriesRel = result.relationships.field_artist_artistic_categories;
      return categoriesRel.data.map((obj) => included?.[obj.type]?.[obj.id]?.attributes.name).filter((cat) => !!cat);
    },
    featuredWorkForResult(result: any) {
      const included = viewGetters.includedByType();
      const featuredWorkRel = result.relationships.field_artist_p_work;
      const featuredWork = included?.[featuredWorkRel?.data?.type]?.[featuredWorkRel?.data?.id];
      const thumbnailRel = featuredWork?.relationships?.field_work_image;
      const thumbnail = included?.[thumbnailRel?.data?.type]?.[thumbnailRel?.data?.id];
      return {
        work: featuredWork,
        thumbnail,
      };
    },
  },
};
</script>
