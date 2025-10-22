<template>
  <div class="arts-directory__feed-item arts-directory__feed-item--artist">
    <div class="arts-directory__feed-item-thumbnail">
      <a v-if="data.url" :href="data.url">
        <img :src="thumbnail" :alt="`Thumbnail of ${data.title}`" />
      </a>
      <img v-else :src="thumbnail" :alt="`Thumbnail of ${data.title}`" />
    </div>
    <div class="arts-directory__feed-item-content">
      <div class="arts-directory__feed-item-content-left">
        <p class="arts-directory__feed-item-title h3">
          <a v-if="data.url" :href="data.url" v-html="data.title" />
          <span v-else v-html="data.title" />
        </p>
        <div class="arts-directory__feed-item-subtitle h6" v-if="data.subtitle" v-html="data.subtitle" />
        <div class="arts-directory__feed-item-owner h4" v-if="data.owner" v-html="data.owner" />
        <div class="arts-directory__feed-item-body" v-if="data.body" v-html="data.body" />
      </div>
      <div class="arts-directory__feed-item-content-right" v-if="data.featuredWork">
        <div class="arts-directory__feed-item-featured-work">
          <div class="arts-directory__feed-item-featured-work-thumbnail">
            <img :src="data.featuredWork.image" :alt="`Thumbnail of ${data.featuredWork.title}`" />
          </div>
          <div class="arts-directory__feed-item-featured-work-title" v-html="data.featuredWork.title"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
export default {
  props: {
    data: {
      type: Object,
      required: true,
    },
  },
  computed: {
    thumbnail() {
      return (
        this.data.thumbnail ||
        "/themes/custom/msac/idfive-component-library/build/img/MSAC_default_profile_image_square.jpg"
      );
    },
  },
};
</script>
