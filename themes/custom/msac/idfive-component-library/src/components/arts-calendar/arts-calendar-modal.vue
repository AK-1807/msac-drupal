<template>
  <div class="arts-calendar__modal modal" :id="id" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close v-if="!!event">
      <div class="modal__container" role="dialog" aria-modal="true" :aria-labelledby="`${id}-title`">
        <div class="modal__header">
          <button class="modal__close" :aria-label="`Close ${event.title} modal`" data-micromodal-close>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <g fill="#FFF" fill-rule="evenodd">
                <path
                  d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"
                />
                <path d="M10.907 6v4.908H6v2.185h4.907V18h2.185v-4.907H18v-2.185h-4.908V6z" />
              </g>
            </svg>
          </button>
          <h2 class="modal__title" :id="`${id}-title`" v-if="event.title" v-html="event.title"></h2>
          <div class="arts-calendar__modal-city" v-if="event.city" v-html="event.city"></div>
          <div class="arts-calendar__modal-event-category" v-if="event.category" v-html="event.category"></div>
        </div>
        <div class="modal__content" :id="`${id}}-content`">
          <div class="arts-calendar__modal-section arts-calendar__modal-details">
            <div class="arts-calendar__modal-thumbnail" v-if="event.image">
              <img :src="event.image.src" :alt="event.image.alt" />
            </div>
            <div>
              <div class="arts-calendar__modal-description" v-if="event.description" v-html="event.description"></div>
              <strong class="arts-calendar__modal-cost" v-if="event.cost">Cost: {{ formattedCost }}</strong>
            </div>
          </div>
          <div class="arts-calendar__modal-section arts-calendar__modal-contact">
            <div class="arts-calendar__modal-contact-method">
              <div class="icon-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="22" viewBox="0 0 17 22">
                  <g fill="none" fill-rule="evenodd">
                    <path
                      d="M8.5 22C14.167 15.974 17 11.424 17 8.35 17 3.737 13.194 0 8.5 0S0 3.738 0 8.35C0 11.423 2.833 15.973 8.5 22z"
                      fill="#FFF"
                    />
                    <circle fill="#000" cx="8.5" cy="8.5" r="3.5" />
                  </g>
                </svg>
              </div>
              <div v-if="event.address.street_1">
                <div>{{ event.address.street_1 }}</div>
                <div v-if="event.address.street_2">
                  {{ event.address.street_2 }}
                </div>
                <div v-if="event.address.street_3">
                  {{ event.address.street_3 }}
                </div>
                <div>
                  <span>{{ event.address.city }}, </span>
                  <span>{{ event.address.state }}</span>
                  <span>{{ event.address.zip }}</span>
                </div>
              </div>
            </div>
            <div class="arts-calendar__modal-contact-method" v-if="event.email">
              <div class="icon-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12">
                  <path
                    d="M14 3.55c-.234.258-.5.485-.781.68a149.632 149.632 0 00-3.89 2.699c-.657.485-1.47 1.079-2.321 1.079h-.016c-.851 0-1.664-.594-2.32-1.08-1.274-.93-2.586-1.814-3.883-2.697A4.37 4.37 0 010 3.55V9.76c0 .688.563 1.251 1.25 1.251h11.5c.688 0 1.25-.563 1.25-1.251V3.55zm0-2.299A1.26 1.26 0 0012.75 0H1.25C.414 0 0 .657 0 1.423c0 .712.79 1.596 1.344 1.971 1.21.845 2.437 1.69 3.648 2.542.508.352 1.367 1.071 2 1.071h.016c.633 0 1.492-.72 2-1.071 1.21-.853 2.437-1.697 3.656-2.542C13.352 2.917 14 2.127 14 1.251z"
                    fill="#FFF"
                    fill-rule="evenodd"
                  />
                </svg>
              </div>
              <a :href="`mailto:${event.email}`">{{ event.email }}</a>
            </div>
            <div class="arts-calendar__modal-contact-method" v-if="event.phone">
              <div class="icon-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                  <path
                    d="M13.2 10.8C12 12 12 13.2 10.8 13.2S8.4 12 7.2 10.8C6 9.6 4.8 8.4 4.8 7.2 4.8 6 6 6 7.2 4.8S4.8 0 3.6 0C2.4 0 0 3.6 0 3.6c0 2.4 2.466 7.266 4.8 9.6C7.134 15.534 12 18 14.4 18c0 0 3.6-2.4 3.6-3.6 0-1.2-3.6-4.8-4.8-3.6z"
                    fill="#FFF"
                    fill-rule="nonzero"
                  />
                </svg>
              </div>
              <a :href="`tel:${event.phone}`">{{ event.phone }}</a>
            </div>
          </div>
          <div class="arts-calendar__modal-section arts-calendar__modal-datetime" v-if="eventDates">
            <h3 class="arts-calendar__modal-subheading">
              Date and Time
            </h3>
            <div>
              <p>{{ eventDates }}</p>
              <p v-if="eventHours">{{ eventHours }}</p>
            </div>
          </div>
          <div class="arts-calendar__modal-section arts-calendar__modal-more-info" v-if="event.external_url">
            <h3 class="arts-calendar__modal-subheading">
              For More Information
            </h3>
            <a :href="event.external_url">{{ event.external_url }}</a>
          </div>
          <div class="arts-calendar__modal-section arts-calendar__modal-wheelchair-access">
            <h3 class="arts-calendar__modal-subheading">
              Wheelchair Access
            </h3>
            <div>
              <p v-html="`${event.wheelchair_access ? 'Yes' : 'No'}`"></p>
            </div>
          </div>
          <div class="arts-calendar__modal-section arts-calendar__modal-share" v-if="event.external_url">
            <h3 class="arts-calendar__modal-subheading">Share</h3>
            <ul class="arts-calendar__modal-share-links">
              <li>
                <a :href="facebookShareUrl" v-on:click="handleShareClick($event)" class="icon-circle">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="16"
                    height="16"
                    viewBox="0 0 18 18"
                  >
                    <defs>
                      <path
                        d="M17.007 0H.993A.993.993 0 000 .993v16.014c0 .548.445.993.993.993h8.621v-6.97H7.27V8.312h2.345V6.309c0-2.324 1.42-3.59 3.494-3.59.994 0 1.848.074 2.096.107v2.43h-1.438c-1.128 0-1.346.536-1.346 1.322v1.735h2.69l-.35 2.716h-2.34V18h4.587a.993.993 0 00.993-.993V.993A.993.993 0 0017.007 0"
                        id="facebook-a"
                      />
                    </defs>
                    <use xlink:href="#facebook-a" fill-rule="evenodd" />
                  </svg>
                  <span class="visible-for-screen-readers">Share {{ event.title }} via Facebook</span>
                </a>
              </li>
              <li>
                <a :href="twitterShareUrl" v-on:click="handleShareClick($event)" class="icon-circle">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="19"
                    height="16"
                    viewBox="0 0 24 20"
                  >
                    <defs>
                      <path
                        d="M33 20.385c-.897.384-1.794.692-2.841.769 1.047-.616 1.794-1.616 2.168-2.77-.972.616-2.019 1-3.14 1.231-.897-1-2.168-1.615-3.514-1.615-2.692 0-4.935 2.23-4.935 5.077 0 .385.075.77.15 1.154C16.776 24 13.187 22 10.72 18.923a4.948 4.948 0 00-.673 2.539c0 1.769.897 3.307 2.168 4.23a4.47 4.47 0 01-2.243-.615v.077c0 2.461 1.72 4.461 3.963 4.923-.449.077-.823.154-1.271.154-.3 0-.599 0-.898-.077.598 2 2.468 3.461 4.561 3.538-1.645 1.385-3.813 2.154-6.13 2.154-.375 0-.823 0-1.197-.077C11.243 37.154 13.86 38 16.626 38c9.047 0 13.981-7.692 13.981-14.385V23c.898-.77 1.72-1.615 2.393-2.615z"
                        id="twitter-a"
                      />
                    </defs>
                    <use fill-rule="nonzero" xlink:href="#twitter-a" transform="translate(-9 -18)" />
                  </svg>
                  <span class="visible-for-screen-readers">Share {{ event.title }} via Twitter</span>
                </a>
              </li>
              <li>
                <a :href="emailShareUrl" target="_blank" class="icon-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12">
                    <path
                      d="M14 3.55c-.234.258-.5.485-.781.68a149.632 149.632 0 00-3.89 2.699c-.657.485-1.47 1.079-2.321 1.079h-.016c-.851 0-1.664-.594-2.32-1.08-1.274-.93-2.586-1.814-3.883-2.697A4.37 4.37 0 010 3.55V9.76c0 .688.563 1.251 1.25 1.251h11.5c.688 0 1.25-.563 1.25-1.251V3.55zm0-2.299A1.26 1.26 0 0012.75 0H1.25C.414 0 0 .657 0 1.423c0 .712.79 1.596 1.344 1.971 1.21.845 2.437 1.69 3.648 2.542.508.352 1.367 1.071 2 1.071h.016c.633 0 1.492-.72 2-1.071 1.21-.853 2.437-1.697 3.656-2.542C13.352 2.917 14 2.127 14 1.251z"
                      fill="#FFF"
                      fill-rule="evenodd"
                    />
                  </svg>
                  <span class="visible-for-screen-readers">Share {{ event.title }} via Email</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import * as moment from "moment-timezone";

export default {
  props: {
    id: {
      type: String,
      required: true,
    },
    eventId: {
      type: Number,
      required: true,
    },
    event: {
      type: Object,
    },
  },
  computed: {
    formattedCost() {
      return this.event.cost.toLocaleString("en-US", {
        style: "currency",
        currency: "USD",
      });
    },
    facebookShareUrl() {
      return `https://www.facebook.com/sharer.php?u=${this.event.external_url}`;
    },
    twitterShareUrl() {
      return `https://twitter.com/intent/tweet?url=${this.event.external_url}`;
    },
    emailShareUrl() {
      return `https://www.addthis.com/tellfriend_v2.php?v=300&winname=addthis&pub=ra-5b5fcd994a9bdcc1&source=tbx-300&lng=en&s=email&wid=271h&url=${this.event.external_url}&title=${this.event.title}&ate=AT-ra-5b5fcd994a9bdcc1/-/-/5e8b6c29f15c3d69/2&uid=5bdb56941d4d4c32&uud=1&ct=1&ui_email_to=&ui_email_from=&ui_email_note=&tt=0&captcha_provider=recaptcha2&pro=0&rb=false`;
    },
    eventDates() {
      const dates = this.event.dates;
      const startDate = moment(dates[0]).startOf("day");
      const endDate = moment(dates[dates.length - 1]).startOf("day");

      // let output = "";

      // if (startDate.isSame(endDate, "year")) {
      //     if (startDate.isSame(endDate, "month")) {
      //         output = `${startDate.format("MMMM D")}-${endDate.format("D, YYYY")}`;
      //     } else {
      //         output = `${startDate.format("MMMM D")}-${endDate.format("MMMM D, YYYY")}`
      //     }
      // } else {
      //     output = `${startDate.format("MMMM D, YYYY")}-${endDate.format("MMMM D, YYYY")}`;
      // }

      return `${startDate.format("MMMM D, YYYY")}-${endDate.format("MMMM D, YYYY")}`;
    },
    eventHours() {
      return this.event.time;
    },
  },
  methods: {
    handleShareClick(event) {
      event.preventDefault();
      const target = event.currentTarget as HTMLAnchorElement;
      const url = target.href;
      const height = 600;
      const width = 600;
      const params = `menubar=no,toolbar=no,status=no,width=${width},height=${height},top=${(window.innerHeight -
        height) /
        2},left=${(window.innerWidth - width) / 2}`;
      window.open(url, null, params);
    },
  },
};
</script>
