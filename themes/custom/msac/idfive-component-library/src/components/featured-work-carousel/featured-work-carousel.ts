import * as Flickity from "flickity";
import * as FlickityFade from "flickity-fade";
import MicroModal from "micromodal";
import "flickity-imagesloaded";
import { v4 as uuidv4 } from "uuid";
import * as qs from "qs";

export class FeaturedWorkCarousel {
  element: HTMLElement;
  modal: HTMLElement;
  thumbnailCarouselHolderNode: HTMLElement;
  thumbnailCarousel: Flickity;
  thumbnailSlides: NodeListOf<HTMLElement>;
  modalCarouselHolderNode: HTMLElement;
  modalCarousel: FlickityFade;

  constructor(element) {
    if (element) {
      this.element = element;
      this.thumbnailCarouselHolderNode = this.element.querySelector(
        ".featured-work-carousel__thumbnail-carousel-holder"
      ) as HTMLElement;
      this.modalCarouselHolderNode = this.element.querySelector(
        ".featured-work-carousel__modal-carousel-holder"
      ) as HTMLElement;
      this.thumbnailSlides = this.thumbnailCarouselHolderNode.querySelectorAll(".carousel__slide") as NodeListOf<
        HTMLElement
      >;

      if (this.thumbnailSlides.length === 3) {
        this.thumbnailCarouselHolderNode.classList.add("hide-flickity--1200");
      } else if (this.thumbnailSlides.length < 3 && this.thumbnailSlides.length > 1) {
        this.thumbnailCarouselHolderNode.classList.add("hide-flickity--800");
      } else if (this.thumbnailSlides.length === 1) {
        this.thumbnailCarouselHolderNode.classList.add("hide-flickity");
        this.modalCarouselHolderNode.classList.add("hide-flickity");
      }

      this.thumbnailCarousel = new Flickity(this.thumbnailCarouselHolderNode.querySelector(".carousel"), {
        contain: true,
        imagesLoaded: true,
        wrapAround: true,
        lazyLoad: 3,
        prevNextButtons: false,
        adaptiveHeight: true,
        cellAlign: "left",
      });

      this.modalCarousel = new FlickityFade(this.modalCarouselHolderNode.querySelector(".carousel"), {
        contain: true,
        imagesLoaded: true,
        wrapAround: true,
        lazyLoad: 2,
        prevNextButtons: false,
        adaptiveHeight: true,
        fade: true,
      });
      this.addCarouselEventListeners();
      this.modal = this.element.querySelector(".featured-work-carousel__modal") as HTMLElement;
      this.setModalId();
      this.addModalTriggerEventListeners();
      this.showSelectedWorkOnPageLoad();
    }
  }

  addCarouselEventListeners() {
    const modalNextButton = this.modalCarouselHolderNode.querySelector(".carousel__nav-next") as HTMLElement;
    const modalPreviousButton = this.modalCarouselHolderNode.querySelector(".carousel__nav-previous") as HTMLElement;
    const thumbnailNextButton = this.thumbnailCarouselHolderNode.querySelector(".carousel__nav-next") as HTMLElement;
    const thumbnailPreviousButton = this.thumbnailCarouselHolderNode.querySelector(
      ".carousel__nav-previous"
    ) as HTMLElement;

    modalNextButton.addEventListener("click", () => {
      this.modalCarousel.next();
    });

    modalPreviousButton.addEventListener("click", () => {
      this.modalCarousel.previous();
    });

    thumbnailNextButton.addEventListener("click", () => {
      this.thumbnailCarousel.next();
    });

    thumbnailPreviousButton.addEventListener("click", () => {
      this.thumbnailCarousel.previous();
    });

    // Couple state of thumbnail carousel to modal carousel
    this.modalCarousel.on("change", (index) => {
      if (this.thumbnailCarouselHolderNode.classList.contains("hide-flickity")) {
        return;
      } else if (
        this.thumbnailCarouselHolderNode.classList.contains("hide-flickity--800") &&
        window.matchMedia("(min-width: 800px)").matches
      ) {
        return;
      } else if (
        this.thumbnailCarouselHolderNode.classList.contains("hide-flickity--1200") &&
        window.matchMedia("(min-width: 1200px)").matches
      ) {
        return;
      }

      this.thumbnailCarousel.select(index);
    });

    this.thumbnailCarousel.on("change", (index) => {
      this.modalCarousel.select(index);
    });
  }

  addModalTriggerEventListeners() {
    const triggers = this.element.querySelectorAll(".carousel__modal-trigger") as NodeListOf<HTMLButtonElement>;
    for (let i = 0; i < triggers.length; i++) {
      const trigger = triggers[i];
      trigger.addEventListener("click", () => {
        MicroModal.show(this.modal.id);
        this.modalCarousel.select(i);
      });
    }
  }

  setModalId() {
    const id = uuidv4();
    const container = this.modal.querySelector(".modal__container") as HTMLElement;
    const title = this.modal.querySelector(".modal__title") as HTMLElement;
    const content = this.modal.querySelector(".modal__content") as HTMLElement;
    this.modal.setAttribute("id", id);
    title.setAttribute("id", `${id}__title`);
    container.setAttribute("aria-labelledby", `${id}__title`);
    content.setAttribute("id", `${id}__content`);
  }

  showSelectedWorkOnPageLoad() {
    const parsedQueryString = qs.parse(window.location.search, { ignoreQueryPrefix: true });
    if (parsedQueryString.hasOwnProperty("wid")) {
      for (let i = 0; i < this.thumbnailSlides.length; i++) {
        const slide = this.thumbnailSlides[i];
        if (parsedQueryString.wid === slide.dataset.wid) {
          const modalTrigger = slide.querySelector(".carousel__modal-trigger") as HTMLButtonElement;
          modalTrigger.click();
          return;
        }
      }
    }
  }
}

export default function initFeaturedWorkCarousels() {
  const carousels = document.querySelectorAll(".featured-work-carousel") as NodeList;

  if (carousels.length > 0) {
    for (let i = 0; i < carousels.length; i++) {
      new FeaturedWorkCarousel(carousels[i]);
    }
  }
}
