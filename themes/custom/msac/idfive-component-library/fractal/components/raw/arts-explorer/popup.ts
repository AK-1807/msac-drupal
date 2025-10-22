export default function generatePopupClass(google) {
  return class Popup extends google.maps.OverlayView {
    protected position: any;
    protected content: any;
    protected containerElement: HTMLElement;
    protected popupElement: HTMLElement;
    protected isVisible: boolean;

    constructor(position, content) {
      super();
      this.position = position;
      this.content = content;
      this.popupElement = this.generateMarkup();
      this.toggleVisibility(false);
    }

    private generateMarkup() {
      const root = document.createElement("DIV") as HTMLElement;
      const container = document.createElement("DIV") as HTMLElement;
      const thumbnail = document.createElement("DIV") as HTMLElement;
      const content = document.createElement("DIV") as HTMLElement;
      const title = document.createElement("DIV") as HTMLElement;
      const directions = document.createElement("A") as HTMLAnchorElement;

      root.className = "arts-explorer__map-popup";
      container.className = "arts-explorer__map-popup-container";
      thumbnail.className = "arts-explorer__map-popup-thumbnail";
      content.className = "arts-explorer__map-popup-content";
      title.className = "arts-explorer__map-popup-title";
      directions.className = "arts-explorer__map-popup-directions";

      root.classList.add(`arts-explorer__map-popup--${this.content.category}`);

      title.textContent = this.content.title;
      if (this.content.url) {
        title.setAttribute("href", this.content.url);
        title.setAttribute("role", "link");
        title.setAttribute("tabindex", "0");

        const navigateLink = (event) => {
          if (event.type === "click" || event.key === "Enter") {
            const url = new URL(this.content.url);
            const target = url.origin === window.location.origin;
            window.open(url.href, target ? "_self" : "_blank");
          }
        };
        title.addEventListener("click", navigateLink);
        title.addEventListener("keydown", navigateLink);
      }

      if (!!this.content.thumbnail) {
        thumbnail.style.backgroundImage = `url(${this.content.thumbnail})`;
      }

      directions.href = `https://www.google.com/maps/search/?api=1&query=${this.position.toUrlValue()}`;
      directions.target = "_blank";
      directions.innerHTML = `Get Directions<span class="visible-for-screen-readers"> to ${this.content.title} (opens in new tab/window)</span>`;

      content.appendChild(title);
      content.appendChild(directions);

      container.appendChild(thumbnail);
      container.appendChild(content);

      root.appendChild(container);

      return root;
    }

    private onAdd() {
      this.getPanes().floatPane.appendChild(this.popupElement);
    }

    private onRemove() {
      if (this.popupElement.parentElement) {
        this.popupElement.parentElement.removeChild(this.popupElement);
      }
    }

    private draw() {
      const popupPosition = this.getProjection().fromLatLngToDivPixel(this.position);
      const isDisplayed = Math.abs(popupPosition.x) < 4000 && Math.abs(popupPosition.y) < 4000;
      const display = isDisplayed ? "block" : "none";

      if (isDisplayed) {
        this.popupElement.style.left = `${popupPosition.x}px`;
        this.popupElement.style.top = `${popupPosition.y}px`;
      }

      if (this.popupElement.style.display !== display) {
        this.popupElement.style.display = display;
      }
    }

    public toggleVisibility(visible?: boolean) {
      this.isVisible = visible !== undefined ? visible : !this.isVisible;
      this.popupElement.classList[this.isVisible ? "add" : "remove"]("arts-explorer__map-popup--visible");
    }
  };
}
