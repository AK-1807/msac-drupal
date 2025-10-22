import { v4 as uuidv4 } from "uuid";

export class CollapsibleText {
  element: HTMLElement;
  toggle: HTMLButtonElement;
  collapsibleNode: HTMLElement;
  isCollapsed: boolean;

  constructor(element: HTMLElement) {
    if (element) {
      this.element = element;
      this.isCollapsed = true;
      this.init();
    }
  }

  init() {
    this.createCollapsibleNode();
    this.toggleCollapsibleArea();
  }

  createCollapsibleNode() {
    if (this.element.querySelectorAll("p").length > 1) {
      const id = `collapsible-text-${uuidv4()}`;
      const childNodes = Array.from(this.element.children) as HTMLElement[];
      const firstParagraph = this.element.querySelector("p") as HTMLElement;
      const indexOfFirstParagraph = childNodes.indexOf(firstParagraph);
      const nodesToWrap = childNodes.slice(indexOfFirstParagraph + 1);
      const collapsibleNode = document.createElement("DIV") as HTMLElement;
      const collapsibleNodeInner = document.createElement("DIV") as HTMLElement;
      const toggle = document.createElement("BUTTON") as HTMLButtonElement;

      collapsibleNode.id = id;
      collapsibleNode.className = "collapsible-text__collapse";

      toggle.className = "collapsible-text__toggle";
      toggle.setAttribute("aria-controls", id);

      for (let i = 0; i < nodesToWrap.length; i++) {
        collapsibleNodeInner.appendChild(nodesToWrap[i]);
      }

      toggle.addEventListener("click", () => {
        this.isCollapsed = !this.isCollapsed;
        this.toggleCollapsibleArea();
      });

      collapsibleNode.addEventListener("transitionend", (event) => {
        const target = event.target as HTMLElement;
        if (event.propertyName === "height") {
          target.style.height = null;
          target.setAttribute("tabindex", `${this.isCollapsed ? "-1" : "0"}`);
          target.setAttribute("aria-hidden", `${this.isCollapsed}`);
        }
      });

      collapsibleNode.appendChild(collapsibleNodeInner);
      this.element.appendChild(collapsibleNode);
      this.element.appendChild(toggle);

      this.collapsibleNode = collapsibleNode;
      this.toggle = toggle;
    }
  }

  toggleCollapsibleArea() {
    if (this.collapsibleNode) {
      this.toggle.setAttribute("aria-expanded", `${!this.isCollapsed}`);
      this.toggle.textContent = this.isCollapsed ? "More…" : "Less…";

      if (this.isCollapsed) {
        this.collapsibleNode.style.height = `${this.collapsibleNode.firstElementChild.clientHeight}px`;
        setTimeout(() => {
          this.collapsibleNode.style.height = "0px";
        }, 50);
      } else {
        this.collapsibleNode.style.height = "0px";
        setTimeout(() => {
          this.collapsibleNode.style.height = `${this.collapsibleNode.firstElementChild.clientHeight}px`;
        }, 50);
      }
    }
  }
}

export default function initCollapsibleText() {
  const elements = document.querySelectorAll(".collapsible-text") as NodeListOf<HTMLElement>;

  for (let i = 0; i < elements.length; i++) {
    new CollapsibleText(elements[i]);
  }
}
