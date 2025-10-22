import * as Tablesaw from "tablesaw";

/**
 * Creates a text input on click with its value set to the link's href,
 * then copies the input's value to the clipboard and removes the element.
 */
export function initCopyProfileUrlButton() {
  const profileLink = document.querySelector(".msac_profiles-dashboard__profile-url") as HTMLAnchorElement;
  const button = document.querySelector(".msac_profiles-dashboard__copy-profile-btn .button") as HTMLButtonElement;
  if (profileLink && button) {
    const tooltip = button.querySelector(".tooltip") as HTMLElement;
    button.addEventListener("click", () => {
      const hrefInput = document.createElement("INPUT") as HTMLInputElement;
      hrefInput.type = "text";
      hrefInput.value = profileLink.href;
      hrefInput.style.opacity = "0";
      hrefInput.style.position = "fixed";
      document.body.appendChild(hrefInput);
      hrefInput.select();
      hrefInput.setSelectionRange(0, 99999);
      document.execCommand("copy");
      document.body.removeChild(hrefInput);
      button.disabled = true;
      // Display tooltip
      tooltip.classList.remove("tooltip--leave");
      tooltip.classList.add("tooltip--enter");
      setTimeout(() => {
        tooltip.classList.remove("tooltip--enter");
        tooltip.classList.add("tooltip--leave");
        button.disabled = false;
      }, 1500);
    });
  }
}

export function initProfileSocialSharing() {
  const shareLinks = document.querySelectorAll(".msac_profiles-dashboard__share-social-link") as NodeListOf<
    HTMLAnchorElement
  >;
  if (shareLinks.length) {
    for (let i = 0; i < shareLinks.length; i++) {
      shareLinks[i].addEventListener("click", (event) => {
        event.preventDefault();
        const target = event.currentTarget as HTMLAnchorElement;
        const url = target.href;
        const height = 600;
        const width = 600;
        const params = `menubar=no,toolbar=no,status=no,width=${width},height=${height},top=${(window.innerHeight -
          height) /
          2},left=${(window.innerWidth - width) / 2}`;
        window.open(url, null, params);
      });
    }
  }
}

function initProfileTables() {
  const tables = document.querySelectorAll(".msac_profiles__table-wrap table") as NodeListOf<HTMLTableElement>;
  for (let i = 0; i < tables.length; i++) {
    Tablesaw.init(tables[i]);
  }
}

function overrideDefaultStateOption() {
  const stateDropdown = document.querySelector(".administrative-area.form-select") as HTMLSelectElement;
  const defaultOption = stateDropdown?.querySelector("option[value='']") as HTMLOptionElement;
  if (defaultOption) {
    defaultOption.textContent = "";
  }
}

function overrideWebsiteFieldLabels() {
  const websiteField = document.querySelector(".field--name-field-artist-websites") as HTMLElement;
  const urlLabels = websiteField?.querySelectorAll(".js-form-type-url label") as NodeListOf<HTMLLabelElement>;
  const titleLabels = websiteField?.querySelectorAll(".js-form-type-textfield label") as NodeListOf<HTMLLabelElement>;
  if (urlLabels) {
    for (let i = 0; i < urlLabels.length; i++) {
      const urlLabel = urlLabels[i];
      const titleLabel = titleLabels[i];
      if (urlLabel && titleLabel) {
        urlLabel.textContent = `Website #${i + 1}`;
        titleLabel.textContent = `Website #${i + 1} Title`;
      }
    }
  }
}

// Prevent the profile photo from overlapping the hero image caption by
// removing its negative margin-top when the caption is present.
function removeProfilePhotoMarginWhenHeroCaptionPresent() {
  const heroCaption = document.querySelector(".hero__media-caption") as HTMLElement;
  const profilePhoto = document.querySelector(".profile-photo__container") as HTMLElement;
  if (!!heroCaption && !!profilePhoto) {
    profilePhoto.classList.add("silc-mtop--0-1023");
  }
}

export class WorkDetails {
  protected element: HTMLElement;
  protected toggle: HTMLElement;
  protected info: HTMLElement;
  protected expanded: boolean = false;

  constructor(element: HTMLElement) {
    if (!!element) {
      this.element = element;
      this.toggle = this.element.querySelector(".work__more-info");
      this.info = this.element.querySelector(".work__info");
      if (!!this.toggle && !!this.info) {
        this.init();
      }
    }
  }

  protected init() {
    this.convertToggleToButton();
    this.handleToggleClick();
    this.toggleVisibility();
  }

  protected convertToggleToButton() {
    const button = document.createElement("BUTTON") as HTMLButtonElement;

    button.className = this.toggle.className;
    button.setAttribute("aria-controls", this.toggle.getAttribute("href").replace("#", ""));
    button.innerHTML = this.toggle.innerHTML;

    this.toggle.parentElement.replaceChild(button, this.toggle);

    this.toggle = button;
  }

  protected handleToggleClick() {
    this.toggle.addEventListener("click", () => {
      this.expanded = !this.expanded;
      this.toggleVisibility();
    });
  }

  protected toggleVisibility() {
    this.toggle.setAttribute("aria-expanded", `${this.expanded}`);
    this.info.setAttribute("aria-expanded", `${this.expanded}`);
  }
}

function initWorkDetails() {
  const nodes = document.querySelectorAll(".profile__works-list-item") as NodeListOf<HTMLElement>;
  for (let i = 0; i < nodes.length; i++) {
    new WorkDetails(nodes[i]);
  }
}

export default function initProfiles() {
  initCopyProfileUrlButton();
  initProfileSocialSharing();
  initProfileTables();
  overrideDefaultStateOption();
  overrideWebsiteFieldLabels();
  removeProfilePhotoMarginWhenHeroCaptionPresent();
  initWorkDetails();
}
