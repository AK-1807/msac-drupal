/**
 * @file
 * Defines the behavior of the custom idfive media entity browser view.
 * Extends defailt media entity browser for custom view
 */

(function ($) {
  /**
   * Attaches the behavior of the media entity browser view.
   */
  Drupal.behaviors.mediaEntityBrowserView = {
    attach(context, settings) {
      $(once('views-row-click-event', '.views-row', context)).each(function () {
        $(this).on('click', function() {
          const $row = $(this);
          const $input = $row.find(".views-field-entity-browser-select input");
          $input.prop("checked", !$input.prop("checked"));
          $row[$input.prop("checked") ? "addClass" : "removeClass"]("checked");
        });
      });
    }
  };
})(jQuery, Drupal);
