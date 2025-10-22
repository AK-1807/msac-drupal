export class Card {
  protected element: HTMLElement;
  protected cta: HTMLAnchorElement;
  protected clickable: boolean = false;

  constructor(element: HTMLElement) {
    if (element) {
      this.element = element;
      this.cta = this.element.querySelector(".card__cta");
      this.clickable = this.cta && JSON.parse(this.element.dataset.clickable);
      this.init();
    }
  }

  init() {
    if (this.clickable) {
      this.makeEntireCardClickable();
    }
  }

  /**
   * Force the root card div to act like an anchor tag
   */
  makeEntireCardClickable() {
    this.element.setAttribute("role", "link");
    this.element.setAttribute("href", this.cta.href);
    this.element.setAttribute("tabindex", "0");

    this.element.addEventListener("click", (event) => {
      const target = event.target as HTMLElement;
      if (target.tagName !== "A") {
        if (this.cta.target == "_blank") {
          const newTab = window.open();
          newTab.location.href = this.element.getAttribute("href");
        } else {
          window.location.href = this.element.getAttribute("href");
        }
      }
    });

    this.element.addEventListener("keydown", (event) => {
      const target = event.target as HTMLElement;
      if (event.keyCode === 13 || event.keyCode === 32) {
        if (target.tagName !== "A") {
          window.location.href = this.element.getAttribute("href");
        }
      }
    });
  }
}

export default function cardsInit() {
  const cards = document.querySelectorAll(".card") as NodeListOf<HTMLElement>;
  for (let i = 0; i < cards.length; i++) {
    new Card(cards[i]);
  }
}
