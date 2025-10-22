import * as _debounce from "lodash.debounce";
import * as Flickity from "flickity";
import * as FlickityFade from "flickity-fade";
import "flickity-imagesloaded";

// Add support for listening to player events
["play", "stop", "pause", "unpause"].forEach((action) => {
  const methodName = `${action}Player`;
  Flickity.prototype[methodName] = function() {
    this.player[action]();
    this.dispatchEvent(methodName);
  };
});

const autoPlay = 6000 as number;

class HeroCarousel {
  element: HTMLElement;
  elementNavNext: HTMLElement;
  elementNavPrevious: HTMLElement;
  elementPlayPause: HTMLElement;
  carousel: Flickity;
  carouselNode: HTMLElement;
  carouselNav: HTMLElement;
  slideCount: number;
  initialTimestamp: number;
  lastFocusedElement: HTMLElement | null;

  constructor(element) {
    this.element = element;
    this.lastFocusedElement = null;
    if (this.element && this.element.querySelector(".carousel")) {
      this.carouselNode = this.element.querySelector(".carousel");
      this.slideCount = this.carouselNode.childElementCount;
      this.carouselNav = this.element.querySelector(".carousel__nav");
      this.elementNavNext = this.element.querySelector(".carousel__nav-next") as HTMLElement;
      this.elementNavPrevious = this.element.querySelector(".carousel__nav-previous") as HTMLElement;
      this.elementPlayPause = this.element.querySelector(".carousel__nav-play-pause") as HTMLElement;
      const isFade = this.carouselNode.classList.contains("carousel--fade");
      const flickityClass = isFade ? FlickityFade : Flickity;
      if (this.slideCount > 1) {
        this.carousel = new flickityClass(this.carouselNode, {
          contain: true,
          imagesLoaded: true,
          wrapAround: true,
          // lazyLoad: 2,
          prevNextButtons: false,
          adaptiveHeight: true,
          fade: isFade,
          pageDots: false,
          pauseAutoPlayOnHover: false,
          autoPlay: autoPlay,
          on: {
            change: (index) => {
              // Prevent focus shifts during auto-advancement
              const activeElement = document.activeElement;
              if (activeElement && this.carouselNode.contains(activeElement)) {
                // Store the currently focused element
                this.lastFocusedElement = activeElement as HTMLElement;
              }
            }
          }
        });
        this.createPageDots();
        this.addCarouselEventlisteners();
        this.updatePlayPauseState();
        this.handleWindowVisibilityChange();
      }
    }
  }

  addCarouselEventlisteners() {
    // onClick
    this.elementNavNext.addEventListener("click", () => {
      this.carousel.next();
      this.carousel.pausePlayer();
      // Store current focus before navigation
      const activeElement = document.activeElement;
      if (activeElement && this.carouselNode.contains(activeElement)) {
        this.lastFocusedElement = activeElement as HTMLElement;
      }
    });

    this.elementNavPrevious.addEventListener("click", () => {
      this.carousel.previous();
      this.carousel.pausePlayer();
      // Store current focus before navigation
      const activeElement = document.activeElement;
      if (activeElement && this.carouselNode.contains(activeElement)) {
        this.lastFocusedElement = activeElement as HTMLElement;
      }
    });

    this.elementPlayPause.addEventListener("click", () => {
      if (this.carousel.player.state !== "playing") {
        this.carousel.playPlayer();
      } else {
        this.carousel.pausePlayer();
      }
      this.updatePlayPauseState();
    });

    this.carousel.on("change", (index) => {
      const pageDots = this.carouselNav.querySelectorAll(".dot") as NodeListOf<HTMLLIElement>;
      const activeDot = this.carouselNav.querySelector(".dot.is-selected");
      if (pageDots[index]) {
        if (activeDot) {
          activeDot.classList.remove("is-selected");
          activeDot.setAttribute("aria-current", null);
        }
        pageDots[index].classList.add("is-selected");
        pageDots[index].setAttribute("aria-current", "step");
      }
      
      // Handle focus management during auto-advancement
      const activeElement = document.activeElement;
      if (activeElement && this.carouselNode.contains(activeElement)) {
        this.lastFocusedElement = activeElement as HTMLElement;
      }
      
      // Restore focus after a brief delay to prevent focus shifts
      setTimeout(() => {
        this.restoreFocus();
        // Reset auto-play timer for consistent timing
        this.resetAutoPlayTimer();
      }, 50);
    });

    this.carousel.on("playPlayer", () => {
      this.updatePlayPauseState();
    });

    this.carousel.on("pausePlayer", () => {
      this.updatePlayPauseState();
    });

    this.carousel.on("stopPlayer", () => {
      this.updatePlayPauseState();
    });
  }

  createPageDots() {
    const dotsList = document.createElement("OL") as HTMLOListElement;
    dotsList.className = "flickity-page-dots";
    dotsList.setAttribute("aria-live", "off");
    for (let i = 0; i < this.slideCount; i++) {
      const dot = document.createElement("LI") as HTMLLIElement;
      const dotProgress = document.createElement("DIV");
      dot.className = "dot";
      if (i === 0) {
        dot.classList.add("is-selected");
        dot.setAttribute("aria-current", "step");
      }

      dot.setAttribute("aria-label", `Page dot ${i + 1}`);

      dot.addEventListener("click", () => {
        this.carousel.selectCell(i);
        // Store current focus before navigation
        const activeElement = document.activeElement;
        if (activeElement && this.carouselNode.contains(activeElement)) {
          this.lastFocusedElement = activeElement as HTMLElement;
        }
      });

      dotProgress.className = "dot__progress";
      dotProgress.setAttribute("role", "presentation");

      dot.appendChild(dotProgress);
      dotsList.appendChild(dot);
    }

    this.carouselNav.appendChild(dotsList);
  }

  updatePlayPauseState() {
    const playing = (this.carousel.player.state === "playing") as boolean;
    this.element.classList[playing ? "add" : "remove"]("home-hero__carousel--playing");
    this.element.classList[!playing ? "add" : "remove"]("home-hero__carousel--paused");
    if (this.elementPlayPause) {
      this.elementPlayPause.setAttribute(
        "aria-label",
        playing ? "Pause carousel" : "Play carousel"
      );
    }
  }

  handleWindowVisibilityChange() {
    document.addEventListener("visibilitychange", () => {
      if (document.visibilityState === "visible") {
        this.carousel.playPlayer();
      } else {
        this.carousel.pausePlayer();
      }
    });
  }

  restoreFocus() {
    // Restore focus to the last focused element if it exists and is still in the DOM
    if (this.lastFocusedElement && document.contains(this.lastFocusedElement)) {
      this.lastFocusedElement.focus();
    }
  }

  resetAutoPlayTimer() {
    // Reset the auto-play timer to ensure consistent timing
    if (this.carousel && this.carousel.player) {
      this.carousel.pausePlayer();
      setTimeout(() => {
        this.carousel.playPlayer();
      }, 100);
    }
  }
}

export function initHomeHeroCarousel() {
  const carousel = document.querySelector(".home-hero__carousel") as HTMLElement;
  new HeroCarousel(carousel);
}

export function initHomeHeroCTAs() {
  const ctas = document.querySelectorAll(".home-hero__cta") as NodeListOf<HTMLElement>;
  for (let i = 0; i < ctas.length; i++) {
    const cta = ctas[i];
    const description = cta.querySelector(".home-hero__cta-description") as HTMLElement;

    description.addEventListener("transitionend", (event) => {
      const target = event.target as HTMLElement;
      if (event.propertyName === "height" && target.classList.contains("hovered")) {
        target.style.height = "auto";
      }
    });

    cta.addEventListener("mouseenter", (event) => {
      const target = event.target as HTMLElement;
      target.classList.add("hovered");
      description.style.height = `${description.scrollHeight}px`;
    });

    cta.addEventListener("focus", (event) => {
      const target = event.target as HTMLElement;
      target.classList.add("hovered");
      description.style.height = `${description.scrollHeight}px`;
    });

    cta.addEventListener("mouseleave", (event) => {
      const target = event.target as HTMLElement;
      target.classList.remove("hovered");
      description.style.height = `${description.scrollHeight}px`;
      setTimeout(() => {
        description.style.height = null;
      }, 30);
    });

    cta.addEventListener("blur", (event) => {
      const target = event.target as HTMLElement;
      target.classList.remove("hovered");
      description.style.height = `${description.scrollHeight}px`;
      setTimeout(() => {
        description.style.height = null;
      }, 30);
    });
  }
}

/**
 * This sets the font-size of text elements inside the grid relative to the grid's width
 * (We can't use vw units because the outer-pad is a fixed rem amount).
 * */
function initHomeCalloutGrid() {
  const grid = document.querySelector(".home-callout-grid") as HTMLElement;
  const statisticBlocks = document.querySelectorAll(".home-callout-grid__cta-statistic") as NodeListOf<HTMLElement>;
  const statisticFontRatio = 48 / (1440 - 128); // At 1440px it should be 48px
  const impactBlocks = document.querySelectorAll(".home-callout-grid__cta-impact") as NodeListOf<HTMLElement>;
  const impactFontRatio = 36 / (1440 - 128);
  const impactButtons = document.querySelectorAll(".home-callout-grid__cta-impact .button") as NodeListOf<HTMLElement>;
  const impactButtonFontRatio = 18 / (1440 - 128);
  let fontSizeSet = false;

  const resize = () => {
    if (window.matchMedia("(min-width: 800px) and (max-width: 1920px)").matches) {
      fontSizeSet = true;

      for (let i = 0; i < statisticBlocks.length; i++) {
        statisticBlocks[i].style.fontSize = `${statisticFontRatio * grid.offsetWidth}px`;
      }

      for (let i = 0; i < impactBlocks.length; i++) {
        impactBlocks[i].style.fontSize = `${impactFontRatio * grid.offsetWidth}px`;
      }

      for (let i = 0; i < impactButtons.length; i++) {
        impactButtons[i].style.fontSize = `${impactButtonFontRatio * grid.offsetWidth}px`;
      }
    } else {
      if (fontSizeSet) {
        for (let i = 0; i < statisticBlocks.length; i++) {
          statisticBlocks[i].style.fontSize = null;
        }

        for (let i = 0; i < impactBlocks.length; i++) {
          impactBlocks[i].style.fontSize = null;
        }

        for (let i = 0; i < impactButtons.length; i++) {
          impactButtons[i].style.fontSize = null;
        }

        fontSizeSet = false;
      }
    }
  };

  window.addEventListener("resize", _debounce(resize, 50));
  resize();
}

function initDirectoryExplorer() {
  const form = document.querySelector(".home-directory-explorer__form") as HTMLFormElement;
  if (form) {
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      const target = event.target as HTMLFormElement;
      window.location.href = target.elements["topic"].value;
    });
  }
}

export default function initHomepage() {
  initHomeHeroCarousel();
  initHomeHeroCTAs();
  initHomeCalloutGrid();
  initDirectoryExplorer();
}
