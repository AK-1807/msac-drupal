import * as _debounce from "lodash.debounce";

const focusableElements = [
  "a[href]",
  "area[href]",
  "input:not([disabled]):not([type='hidden']):not([aria-hidden])",
  "select:not([disabled]):not([aria-hidden])",
  "textarea:not([disabled]):not([aria-hidden])",
  "button:not([disabled]):not([aria-hidden])",
  "iframe",
  "object",
  "embed",
  "[contenteditable]",
  "[tabindex]:not([tabindex^='-'])",
].join(",");

export class SiteHeader {
  protected element: HTMLElement;
  protected toggle: HTMLElement;
  protected offcanvas: HTMLElement;
  protected offcanvasPrimary: HTMLElement;
  protected offcanvasRoot: HTMLElement;
  protected expanded: boolean = false;
  protected activeOffcanvasPage: HTMLElement;
  protected focusableChildren: NodeListOf<HTMLElement>;
  protected siteHeaderNavPrimaryMenus: NodeListOf<HTMLElement>;

  constructor(element: HTMLElement) {
    if (element) {
      this.element = element;
      this.toggle = this.element.querySelector(".site-header__offcanvas-toggle") as HTMLElement;
      this.offcanvas = this.element.querySelector(".site-header__offcanvas") as HTMLElement;
      this.offcanvasPrimary = this.element.querySelector(".site-header__offcanvas-primary") as HTMLElement;
      this.offcanvasRoot = this.element.querySelector(".site-header__offcanvas-root") as HTMLElement;
      this.focusableChildren = this.offcanvas.querySelectorAll(focusableElements) as NodeListOf<HTMLElement>;
      this.siteHeaderNavPrimaryMenus = this.element.querySelectorAll(".site-header__nav-primary >ul >li >a") as NodeListOf<HTMLElement>;

      this.init();
    }
  }

  protected init() {
    this.handleToggleClick();
    this.handleResize();
    this.handleTabbing();
    this.toggleOffcanvasVisibility();
    this.initOffcanvasPages();
    this.handleEscBtn();
  }

  protected handleEscBtn(){
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        this.siteHeaderNavPrimaryMenus.forEach((item) => {
          item.blur();
        });
      }
    });
  }

  protected handleToggleClick() {
    this.toggle.addEventListener("click", (event) => {
      event.preventDefault();
      this.expanded = !this.expanded;
      this.toggleOffcanvasVisibility();
    });
  }

  protected handleResize() {
    const resize = () => {
      if (this.activeOffcanvasPage) {
        this.offcanvasPrimary.style.height = `${this.activeOffcanvasPage.firstElementChild.clientHeight}px`;
      } else {
        this.offcanvasPrimary.style.height = `${this.offcanvasRoot.clientHeight}px`;
      }
    };

    window.addEventListener("resize", _debounce(resize, 50));
    resize();
  }

  protected handleTabbing() {
    const firstFocusableElement = this.element.querySelector(focusableElements) as HTMLElement;
    document.addEventListener("keydown", (event) => {
      // Trap focus when tabbing
      if (event.keyCode === 9) {
        if (this.expanded && !this.element.contains(document.activeElement)) {
          firstFocusableElement.focus();
        }
      }
    });
  }

  protected toggleOffcanvasVisibility() {
    this.toggle.setAttribute("aria-expanded", `${this.expanded}`);
    this.offcanvas.setAttribute("aria-hidden", `${!this.expanded}`);

    for (let i = 0; i < this.focusableChildren.length; i++) {
      const child = this.focusableChildren[i] as HTMLElement;
      if (this.expanded) {
        child.removeAttribute("tabindex");
      } else {
        child.setAttribute("tabindex", "-1");
      }
    }

    document.documentElement.classList[this.expanded ? "add" : "remove"]("offcanvas-expanded");
  }

  protected initOffcanvasPages() {
    const primaryItems = this.offcanvasRoot.querySelectorAll(".outer-pad > ul > li") as NodeListOf<HTMLElement>;
    for (let i = 0; i < primaryItems.length; i++) {
      const item = primaryItems[i];
      const parentLink = item.querySelector("a") as HTMLElement;
      const childList = item.querySelector("ul") as HTMLElement;
      if (childList) {
        const page = this.createOffcanvasPage(item) as HTMLElement;
        parentLink.setAttribute("aria-expanded", "false");
        parentLink.setAttribute("role", "button");
        parentLink.addEventListener("click", (event) => {
          event.preventDefault();
          const target = event.target as HTMLElement;
          const rootFocusableChildren = this.offcanvasRoot.querySelectorAll(focusableElements) as NodeListOf<
            HTMLElement
          >;
          const pageFocusableChildren = page.querySelectorAll(focusableElements) as NodeListOf<HTMLElement>;
          const pageFirstLink = page.querySelector("ul li a") as HTMLAnchorElement;
          target.setAttribute("aria-expanded", "true");

          page.style.display = "block";

          setTimeout(() => {
            this.offcanvasPrimary.scrollLeft = 0;
            page.setAttribute("aria-hidden", "false");
          }, 10);

          for (let i = 0; i < rootFocusableChildren.length; i++) {
            const child = rootFocusableChildren[i] as HTMLElement;
            child.setAttribute("tabindex", "-1");
          }

          for (let i = 0; i < pageFocusableChildren.length; i++) {
            const child = pageFocusableChildren[i] as HTMLElement;
            child.removeAttribute("tabindex");
          }

          pageFirstLink.focus();
          this.offcanvasPrimary.style.height = `${page.clientHeight}px`;
          this.activeOffcanvasPage = page;
        });
        this.offcanvasPrimary.appendChild(page);
      }
    }
  }

  protected createOffcanvasPage(item: HTMLElement): HTMLElement {
    const page = document.createElement("DIV") as HTMLElement;
    const pagePad = document.createElement("DIV") as HTMLElement;
    const backButton = document.createElement("BUTTON") as HTMLButtonElement;
    const pageList = document.createElement("UL") as HTMLElement;
    const parentLink = item.querySelector("a") as HTMLAnchorElement;

    page.className = "site-header__offcanvas-page";
    pagePad.className = "outer-pad";
    backButton.className = "site-header__offcanvas-page-back";

    backButton.innerHTML = `<span aria-hidden="true">&lt;&nbsp;</span>Back`;

    pageList.appendChild(item.cloneNode(true));

    pagePad.appendChild(backButton);
    pagePad.appendChild(pageList);
    page.appendChild(pagePad);

    page.setAttribute("aria-hidden", "true");

    const rootFocusableChildren = this.offcanvasRoot.querySelectorAll(focusableElements) as NodeListOf<HTMLElement>;
    const pageFocusableChildren = page.querySelectorAll(focusableElements) as NodeListOf<HTMLElement>;

    for (let i = 0; i < pageFocusableChildren.length; i++) {
      const child = pageFocusableChildren[i] as HTMLElement;
      child.setAttribute("tabindex", "-1");
    }

    page.addEventListener("transitionend", (event) => {
      const target = event.target as HTMLElement;
      if (target === event.currentTarget) {
        if (target.getAttribute("aria-hidden") === "true") {
          target.style.display = null;
        }
      }
    });

    backButton.addEventListener("click", () => {
      parentLink.setAttribute("aria-expanded", "false");
      page.setAttribute("aria-hidden", "true");

      for (let i = 0; i < rootFocusableChildren.length; i++) {
        const child = rootFocusableChildren[i] as HTMLElement;
        child.removeAttribute("tabindex");
      }

      for (let i = 0; i < pageFocusableChildren.length; i++) {
        const child = pageFocusableChildren[i] as HTMLElement;
        child.setAttribute("tabindex", "-1");
      }

      parentLink.focus();
      page.style.height = null;
      this.offcanvasPrimary.style.height = `${this.offcanvasRoot.clientHeight}px`;
      this.activeOffcanvasPage = null;
    });

    return page;
  }
}

export default function siteHeaderInit() {
  const header = document.querySelector(".site-header") as HTMLElement;
  new SiteHeader(header);
}
