<?php
/**
 * @file
 * Template for B2B training pages
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="training-holder detail">

  <div class="head">
    <div class="row title">
      <div class="large-10 medium-12 large-centered medium-centered small-12 columns">
        <?php print $content['title']; ?>
      </div>
  </div>

  <?php if ($content['strapline']): ?>
    <div class="strapline row">
      <div class="large-11 medium-12 large-centered medium-centered small-12 columns">
        <?php print $content['strapline']; ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="large-centered medium-centered large-3 medium-5 small-6 small-centered columns divider">
      <?php print $content['sharethis']; ?>
    </div>
  </div>

  <div class="row social sharethis">
    <div class="large-4 large-centered medium-centered medium-8 small-12 columns">

    </div>
  </div>
</div>

<div class="body">
  <div class="panel-display row details">
    <div class="large-8 medium-7 small-12 columns">
      <?php print $content['contentmain']; ?>
    </div>
    <div class="large-4 medium-5 small-12 columns">
      <?php print $content['sidebar']; ?>
    </div>
  </div>

  <?php if ($content['testimonials']): ?>
  <div class="row testimonials">
    <div class="panel-panel small-12 medium-12 large-12 columns">
      <?php print $content['testimonials']; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($content['trainers']): ?>
  <div class="trainers">
    <div class="row">
      <div class="title large-12 medium-12 small-12 columns">
        <h2><?php print t("Trainer Biography"); ?></h2>
      </div>
    </div>

    <div class="row single">
      <div class="large-12 medium-12 small-12 columns">
        <?php print $content['trainers']; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($content['map']): ?>
    <div class="location-map">
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyDomlF408yDI1y45iFyS0TlPjhR-PKfLTg"></script>
      <?php print $content['map']; ?>
      <script type="text/javascript">
      jQuery(document).ready(function(){

        // Event Summary divider
        jQuery('.event-holder.simple .event_summary .divider').height(
          jQuery('.event-holder.simple .event_summary .large-8.medium-8.small-12 ul').height()
        );

        var gMap = false;

        // View map
        jQuery('.view.map .button').click(function(){
          jQuery('.overview.map.tab.address').fadeOut('medium');
          SetGoogleMapsOptions(gMap, true);
        });

        // Set the maps
        gMap = SetGoogleMaps(false);

        function SetGoogleMaps(controls)
        {
          /* Google Maps Integration */
          var geocoder;
          var map;

          var address = Drupal.settings.training_map.postal_code;
          // var address = "<?php echo $fullAddress['postal_code']; ?>";

          var latlng = new google.maps.LatLng(50.264421, -5.051039);
          var mapOptions = {
            zoom: 13,
            center: latlng,
            panControl: controls,
            zoomControl: true,
            scaleControl: true,
            scrollwheel: controls,
            draggable: controls
            };
          map = new google.maps.Map(document.getElementById('overview_map'), mapOptions);


          geocoder = new google.maps.Geocoder();
          geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              map.setCenter(results[0].geometry.location);
              var marker = new google.maps.Marker({
                  map: map,
                  position: results[0].geometry.location
                });
              google.maps.event.addListener(marker, 'click', function() {
                jQuery('.overview.map.tab.address').fadeIn('medium');
                SetGoogleMapsOptions(map, false);
              });

            }
          });

           return map;
        }

        function SetGoogleMapsOptions(map, options)
        {
          var mapOptions = {
            panControl: options,
            zoomControl: true,
            scaleControl: true,
            scrollwheel: options,
            draggable: options
          };

          map.setOptions(mapOptions);
        }

      });
    </script>
    </div>
  <?php endif; ?>

</div>

</div>
