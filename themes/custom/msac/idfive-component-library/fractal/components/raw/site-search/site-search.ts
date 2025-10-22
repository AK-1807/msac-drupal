const focusableElements = [
  "a[href]:not([tabindex^='-']):not([inert])",
  "area[href]:not([tabindex^='-']):not([inert])",
  "input:not([disabled]):not([inert])",
  "select:not([disabled]):not([inert])",
  "textarea:not([disabled]):not([inert])",
  "button:not([disabled]):not([inert])",
  "iframe:not([tabindex^='-']):not([inert])",
  "audio:not([tabindex^='-']):not([inert])",
  "video:not([tabindex^='-']):not([inert])",
  "[contenteditable]:not([tabindex^='-']):not([inert])",
  "[tabindex]:not([tabindex^='-']):not([inert])",
];

export class SiteSearch {
  protected element: HTMLElement;
  protected trigger: HTMLElement;
  protected overlay: HTMLElement;
  protected closeBtn: HTMLAnchorElement;
  protected focusableChildren: HTMLElement[];
  protected input: HTMLInputElement;
  protected hidden: boolean = true;

  constructor(element: HTMLElement) {
    if (element) {
      this.element = element;
      this.overlay = this.element.querySelector(".site-search__dismiss");
      this.closeBtn = this.element.querySelector(".site-search__close");
      this.input = this.element.querySelector(".site-search__input");
      this.focusableChildren = Array.from(this.element.querySelectorAll(focusableElements.join(",")));
      this.trigger = document.querySelector(".site-header__search-toggle");

      this.init();
    }
  }

  protected init() {
    this.toggleVisibility();
    this.trapFocusWithinModal();
    this.handleTabbing();
    this.handleOverlayClick();
    this.handleCloseClick();
    this.convertTriggerToButton();
    this.handleTriggerClick();
  }

  protected trapFocusWithinModal() {
    document.body.addEventListener(
      "focus",
      (event) => {
        const target = event.target as HTMLElement;
        if (!this.hidden && !this.element.contains(target)) {
          const focused = (this.element.querySelector("[autofocus]") || this.focusableChildren[0]) as HTMLElement;
          if (focused) {
            focused.focus();
          }
        }
      },
      true
    );
  }

  protected handleTabbing() {
    document.addEventListener("keydown", (event) => {
      const target = event.target as HTMLElement;
      if (!this.hidden && event.which === 9) {
        const focusedIndex = this.focusableChildren.indexOf(target);
        // Shift focus to the last focusable element if the first
        // is currently active and the user is tabbing backwards.
        if (event.shiftKey && focusedIndex === 0) {
          event.preventDefault();
          this.focusableChildren[this.focusableChildren.length - 1].focus();
        }

        // Shift focus to the first focusable element if the last
        // is currently active and the user is tabbing forwards.
        if (!event.shiftKey && focusedIndex === this.focusableChildren.length - 1) {
          event.preventDefault();
          this.focusableChildren[0].focus();
        }
      }
    });
  }

  protected handleOverlayClick() {
    this.overlay.addEventListener("click", (event) => {
      if (event.target === event.currentTarget) {
        this.hidden = true;
        this.toggleVisibility();
      }
    });
  }

  protected handleCloseClick() {
    this.closeBtn.addEventListener("click", (event) => {
      event.preventDefault();
      this.hidden = true;
      this.toggleVisibility();
    });
  }

  protected handleTriggerClick() {
    this.trigger.addEventListener("click", (event) => {
      event.preventDefault();
      this.hidden = false;
      this.toggleVisibility();
      setTimeout(() => {
        this.input.focus();
      }, 50);
    });
  }

  protected toggleVisibility() {
    this.element.setAttribute("aria-hidden", `${this.hidden}`);

    for (let i = 0; i < this.focusableChildren.length; i++) {
      const child = this.focusableChildren[i] as HTMLElement;
      if (this.hidden) {
        child.setAttribute("tabindex", "-1");
      } else {
        child.removeAttribute("tabindex");
      }
    }
  }

  /**
   * Changes the trigger from its default no-js state as an anchor
   * with role="button" to an actual button element for JS users
   */
  protected convertTriggerToButton() {
    const button = document.createElement("BUTTON") as HTMLButtonElement;

    button.className = this.trigger.className;
    button.setAttribute("aria-label", this.trigger.getAttribute("aria-label"));
    button.setAttribute("aria-controls", this.trigger.getAttribute("aria-controls"));

    for (let i = 0; i < this.trigger.childElementCount; i++) {
      button.appendChild(this.trigger.children[i].cloneNode(true));
    }

    this.trigger.parentElement.replaceChild(button, this.trigger);

    this.trigger = button;
  }
}

export default function siteSearchInit() {
  const search = document.querySelector(".site-search") as HTMLElement;
  new SiteSearch(search);
}
