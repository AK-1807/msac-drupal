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
        <presenting-rosters-view-feed-item :data="result" />
      </li>
    </arts-directory-feed>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryFeed from "./arts-directory-feed.vue";
import PresentingRostersViewFeedItem from "./presenting-rosters-view-feed-item.vue";
import { state as viewState, actions as viewActions, getters as viewGetters } from "./presenting-rosters-view-store";

export default {
  beforeCreate() {
    viewActions.fetchResults();
  },
  components: {
    "arts-directory-feed": ArtsDirectoryFeed,
    "presenting-rosters-view-feed-item": PresentingRostersViewFeedItem,
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
        const featuredWork = this.featuredWorkForResult(result);
        const output = {
          id: result.id,
          title: result.title,
          subtitle: result.type == "artist" ? result.artist_category : result.org_category,
          url: result.url,
          thumbnail: result.type == "artist" ? result.artist_photo : result.org_photo,
          featuredWork: featuredWork,
        };

        return output;
      });
    },
  },
  methods: {
    handleFetch() {
      viewActions.fetchResults(true);
    },

    featuredWorkForResult(result: any) {
      var worksStr = result.type == "artist" ? result.artist_works : result.org_works;
      worksStr = worksStr.replace(/\\n/g, "");

      var worksObj = null;

      try {
        worksObj = JSON.parse(worksStr);
      } catch (e) {}

      if (worksObj) {
        //
        if (!worksObj.image) return null;
      }

      return worksObj;
    },
  },
};
</script>
