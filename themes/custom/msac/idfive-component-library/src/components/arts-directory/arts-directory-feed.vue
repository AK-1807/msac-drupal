<template>
  <div class="arts-directory__feed">
    <p v-if="noResults">
      No results found. Please try again with different search criteria.
    </p>
    <ul class="arts-directory__feed-list" v-else>
      <slot></slot>
    </ul>
    <div class="msac-loading-spinner" v-if="fetchingResults">
      <div role="presentation"></div>
      <div role="presentation"></div>
      <div role="presentation"></div>
      <div role="presentation"></div>
    </div>
    <div class="arts-directory__feed-load-more" v-if="canFetchMore">
      <button class="button" @click="handleLoadMoreClick" v-if="!fetchingResults">
        Load More
      </button>
    </div>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryFeedItem from "./arts-directory-feed-item.vue";

export default {
  components: {
    "arts-directory-feed-item": ArtsDirectoryFeedItem,
  },
  props: {
    results: {
      type: Array,
      required: true,
    },
    fetchingResults: {
      type: Boolean,
      required: true,
    },
    fetchedResults: {
      type: Boolean,
      required: true,
    },
    noResults: {
      type: Boolean,
      required: true,
    },
    canFetchMore: {
      type: Boolean,
      required: true,
    },
    onFetch: {
      type: Function,
      default: () => {},
    },
  },
  methods: {
    handleLoadMoreClick() {
      this.onFetch();
    },
  },
};
</script>
