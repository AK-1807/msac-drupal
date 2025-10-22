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
        <organizations-view-feed-item :data="result" />
      </li>
    </arts-directory-feed>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryFeed from "./arts-directory-feed.vue";
import OrganizationsViewFeedItem from "./organizations-view-feed-item.vue";
import { state as viewState, actions as viewActions, getters as viewGetters } from "./organizations-view-store";

export default {
  beforeCreate() {
    viewActions.fetchResults();
  },
  components: {
    "arts-directory-feed": ArtsDirectoryFeed,
    "organizations-view-feed-item": OrganizationsViewFeedItem,
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
        const services = this.servicesForResult(result);
        const output = {
          id: result.id,
          title: result.attributes.title,
          categories: categories.join(", "),
          url: result.attributes.path.alias,
          body: services.join(", "),
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
      const thumbnailRel = result.relationships.field_org_image;
      return included?.[thumbnailRel?.data?.type]?.[thumbnailRel?.data?.id];
    },
    categoriesForResult(result: any) {
      const included = viewGetters.includedByType();
      const categoriesRel = result.relationships.field_org_artistic_categories;
      return categoriesRel.data.map((obj) => included?.[obj.type]?.[obj.id]?.attributes?.name).filter((cat) => !!cat);
    },
    servicesForResult(result: any) {
      const included = viewGetters.includedByType();
      const servicesRel = result.relationships.field_org_services;
      const servicesParent = included?.[servicesRel?.data?.type]?.[servicesRel?.data?.id];
      const serviceItemRels = servicesParent?.relationships?.field_services_items?.data || [];
      return serviceItemRels
        .map((obj) => included?.[obj?.type]?.[obj?.id]?.attributes?.field_services_item_title)
        .filter((service) => !!service);
    },
  },
};
</script>
