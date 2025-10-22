/**
 * Modules
 */
import focusWithin from "focus-within";
import * as objectFitImages from "object-fit-images";

import { silcCoreInit } from "silc-core";
import { silcAccordionInit } from "silc-accordion";
import { silcNavInit } from "silc-nav";
import { SilcCarouselInit } from "../components/carousel/carousel";
import Tablesaw from "../components/table/table";
import Modal from "../components/modal/modal";
import lazyLoadInit from "../components/lazyload/_lazyload";
import cardsInit from "../components/card/card";
import siteHeaderInit from "../components/site-header/site-header";
import siteSearchInit from "../components/site-search/site-search";
import initHomepage from "../components/pages/home";
import initHomeEventsFeed from "../components/home-events-feed/home-events-feed";
import initArtsExplorer from "../components/arts-explorer/arts-explorer";
import initAEDistrictMap from "../components/ae-district-map/ae-district-map";
import initArtsCalendar from "../components/arts-calendar/arts-calendar";
import initFeaturedWorkCarousels from "../components/featured-work-carousel/featured-work-carousel";
import initCollapsibleText from "../components/collapsible-text/collapsible-text";
import initArtsDirectory from "../components/arts-directory/arts-directory";
import initProfiles from "../components/pages/profile";
import initMultilevelTaxonomySelects from "../components/multilevel-taxonomy-select/multilevel-taxonomy-select";
import initCheckboxDropdowns from "../components/checkbox-dropdown/checkbox-dropdown";

/**
 * Init
 */
focusWithin(document);
objectFitImages();
silcCoreInit();
silcAccordionInit();
silcNavInit();
SilcCarouselInit();
Tablesaw.init();
Modal.init();
lazyLoadInit();
cardsInit();
siteHeaderInit();
siteSearchInit();
initHomepage();
initHomeEventsFeed();
initArtsExplorer();
initAEDistrictMap();
initArtsCalendar();
initFeaturedWorkCarousels();
initCollapsibleText();
initArtsDirectory();
initProfiles();
initMultilevelTaxonomySelects();
initCheckboxDropdowns();
