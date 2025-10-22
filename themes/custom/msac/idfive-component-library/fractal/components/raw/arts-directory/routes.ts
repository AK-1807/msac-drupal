import ArtworkView from "./artwork-view.vue";
import ArtistsView from "./artists-view.vue";
import OrganizationsView from "./organizations-view.vue";
import AEDistrictsView from "./ae-districts-view.vue";
import PresentingTouringRosterView from "./presenting-touring-roster-view.vue";
import TeachingArtistRosterView from "./teaching-artist-roster-view.vue";

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
  "/presenting-touring-roster": {
    component: PresentingTouringRosterView,
  },
  "/teaching-artist-roster": {
    component: TeachingArtistRosterView,
  },
};

export default routes;
