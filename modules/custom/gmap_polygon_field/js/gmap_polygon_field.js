/**
 * @file
 * Javascript for Gmap polygon field.
 */

(function ($) {
  'use strict';

  Drupal.behaviors.gmap_polygon_field = {
    attach: function (context, settings) {

      // Add function to get Polygon bounds.
      function getPolyBounds(poly) {
        const bounds = new google.maps.LatLngBounds();
        const paths = poly.getPaths();
        let path;
        for (let i = 0; i < paths.getLength(); i++) {
          path = paths.getAt(i);
          for (let ii = 0; ii < path.getLength(); ii++) {
            bounds.extend(path.getAt(ii));
          }
        }
        return bounds;
      }

      $('.gmap_polygon_field_map').each(function () {
        if ($(this).hasClass('gmap-initialized')) {
          return;
        }
        const polyInput = $(
          $(this)
            .parent()
            .find('input.gmap_polygon_field.form-text')[0]
        );

        let changePolyText;
        let polyEdited;
        let polyPointAdded;
        let setListenersForPolygonPath;
        let removeVertex;

        const map = new google.maps.Map(this, {
          center: {lat: 50.08804, lng: 14.42076},
          zoom: 11,
          disableDoubleClickZoom: true
        });

        $(this).addClass('gmap-initialized');

        // Detect that we are in view only mode.
        const editable = $(this).hasClass('gmap-editable');

        const gmapSettings = {
          strokeColor: '#000000',
          strokeOpacity: 1.0,
          strokeWeight: 3,
          fillColor: '#000000'
        };
        if (
          drupalSettings.gmap_polygon_field.strokeColor.length === 7 &&
          drupalSettings.gmap_polygon_field.strokeColor[0] === '#'
        ) {
          gmapSettings.strokeColor =
            drupalSettings.gmap_polygon_field.strokeColor;
        }
        if (
          drupalSettings.gmap_polygon_field.fillColor.length === 7 &&
          drupalSettings.gmap_polygon_field.fillColor[0] === '#'
        ) {
          gmapSettings.fillColor = drupalSettings.gmap_polygon_field.fillColor;
        }
        if (!isNaN(parseFloat(drupalSettings.gmap_polygon_field.strokeOpacity))) {
          gmapSettings.strokeOpacity = parseFloat(
            drupalSettings.gmap_polygon_field.strokeOpacity
          );
        }
        if (!isNaN(parseFloat(drupalSettings.gmap_polygon_field.strokeWeight))) {
          gmapSettings.strokeWeight = parseFloat(
            drupalSettings.gmap_polygon_field.strokeWeight
          );
        }

        const poly = new google.maps.Polygon({
          strokeColor: gmapSettings.strokeColor,
          strokeOpacity: gmapSettings.strokeOpacity,
          strokeWeight: gmapSettings.strokeWeight,
          fillColor: gmapSettings.fillColor,
          map,
          editable
        });

        if (editable) {
          if (polyInput.val()) {
            poly.setPath(
              google.maps.geometry.encoding.decodePath(polyInput.val())
            );
          }

          changePolyText = function (path) {
            const encodeString = google.maps.geometry.encoding.encodePath(path);
            if (encodeString) {
              polyInput.val(encodeString);
            }
          };

          polyEdited = function (event) {
            const path = poly.getPath();
            changePolyText(path);
          };

          polyPointAdded = function (event) {
            const path = poly.getPath();
            path.push(event.latLng);
            changePolyText(path);
          };

          // Remove vertex from polygon.
          removeVertex = function (event) {
            const path = poly.getPath();
            const {vertex} = event;

            if (!path || typeof vertex === 'undefined') {
              return;
            }

            path.removeAt(vertex);
          };

          // Event for dragging polygon is not necessary.
          // google.maps.event.addListener(poly, 'dragend', polyEdited);
          // Listeners for events that changing poly path.
          setListenersForPolygonPath = function (p) {
            google.maps.event.addListener(p.getPath(), 'insert_at', polyEdited);
            google.maps.event.addListener(p.getPath(), 'remove_at', polyEdited);
            google.maps.event.addListener(p.getPath(), 'set_at', polyEdited);
          };

          setListenersForPolygonPath(poly);

          // Clicking on the map adds polygon point.
          google.maps.event.addListener(map, 'click', polyPointAdded);

          // Remove vertex clicking on the right mouse button.
          google.maps.event.addListener(poly, 'rightclick', removeVertex);

          // Edit polygon on input change.
          polyInput.bind('input', function () {
            poly.setPath(
              google.maps.geometry.encoding.decodePath($(this).val())
            );
            // We overwrote polygon path - we have to set events again.
            setListenersForPolygonPath(poly);
            // Show whole polygon.
            map.fitBounds(getPolyBounds(poly));
          });
        }
        else {
          const polyData = $(this).attr('data-polyline-encoded');
          if (polyData) {
            poly.setPath(google.maps.geometry.encoding.decodePath(polyData));
          }
        }

        // Zoom map to fit whole polygon.
        map.fitBounds(getPolyBounds(poly));
      });
    }
  };
})(jQuery);
