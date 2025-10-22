import ArtworkView from "./artwork-view.vue";
import ArtistsView from "./artists-view.vue";
import OrganizationsView from "./organizations-view.vue";
import AEDistrictsView from "./ae-districts-view.vue";
import PresentingRosters from "./presenting-rosters-view.vue";
import TeachingRosters from "./teaching-rosters-view.vue";

// Junkies
import PresentingTouringRosterView from "./presenting-touring-roster-view.vue";
import TeachingArtistRosterView from "./teaching-artist-roster-view.vue";
import TeachingOrganizationRosterView from "./teaching-organization-roster-view.vue";

const routes = {
  "/works": {
    component: ArtworkView,
  },
  "/artists": {
    component: ArtistsView,
  },
  "/organizations": {
    component: OrganizationsView,
  },
  "/districts": {
    component: AEDistrictsView,
  },
  "/presenting-rosters": {
    component: PresentingRosters,
  },
  "/teaching-rosters": {
    component: TeachingRosters,
  },
};

export default routes;
