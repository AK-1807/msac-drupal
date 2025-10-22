<template>
  <div class="arts-directory__navigator">
    <p class="h2">I want to&hellip;</p>
    <div class="silc-grid">
      <div class="silc-grid__col silc-grid__col--6-600 silc-grid__col--4-1200">
        <arts-directory-router-link href="/works">
          <template v-slot:heading>
            Browse artwork
          </template>
          <!-- <template v-slot:description>
                        Visual arts, literary art, music and more.
                    </template> -->
        </arts-directory-router-link>
      </div>
      <div class="silc-grid__col silc-grid__col--6-600 silc-grid__col--4-1200">
        <arts-directory-router-link href="/artists">
          <template v-slot:heading>
            Find an artist
          </template>
          <!-- <template v-slot:description>
                        For a performance or as part of the Arts in Education Program.
                    </template> -->
        </arts-directory-router-link>
      </div>
      <div class="silc-grid__col silc-grid__col--6-600 silc-grid__col--4-1200">
        <arts-directory-router-link href="/organizations">
          <template v-slot:heading>
            Find arts organizations and businesses
          </template>
          <!-- <template v-slot:description>
                        Galleries, non-profits, maker spaces, and other local businesses.
                    </template> -->
        </arts-directory-router-link>
      </div>
      <div class="silc-grid__col silc-grid__col--6-600 silc-grid__col--4-1200">
        <arts-directory-router-link href="/districts">
          <template v-slot:heading>
            Explore Arts & Entertainment Districts
          </template>
          <!-- <template v-slot:description>
                        Unique destinations for tourism and economic development.
                    </template> -->
        </arts-directory-router-link>
      </div>

      <div class="silc-grid__col silc-grid__col--6-600 silc-grid__col--4-1200">
        <arts-directory-router-link href="/presenting-rosters">
          <template v-slot:heading>
            View the Presenting & Touring Roster
          </template>
          <!-- <template v-slot:description>

                    </template> -->
        </arts-directory-router-link>
      </div>

      <div class="silc-grid__col silc-grid__col--6-600 silc-grid__col--4-1200">
        <arts-directory-router-link href="/teaching-rosters">
          <template v-slot:heading>
            View the Teaching Artist Roster
          </template>
          <!-- <template v-slot:description>

                    </template> -->
        </arts-directory-router-link>
      </div>

      <div class="silc-grid__col silc-grid__col--6-600 silc-grid__col--4-1200"></div>
    </div>
  </div>
</template>

<script lang="ts">
import ArtsDirectoryRouterLink from "./arts-directory-router-link.vue";

export default {
  components: {
    "arts-directory-router-link": ArtsDirectoryRouterLink,
  },
};
</script>
