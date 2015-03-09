<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="nav-header">
  </div>

  <div class="wrap contactheader" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-sm-12">
          <h2>Let’s talk business improvement</h2>
          <h3>We really do make a positive and significant difference to all our clients’ business performance and results, please contact us to discuss your exact needs. There's flexibility around your level of investment and we're easy to talk to.</h3>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap mapdetails" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-sm-3 details">
          <h4>Call us on:</h4>
          <h5>+44 (0) 1244 68 10 68</h5>
          <h4>Email us at:</h4>
          <h5><a href="mailto:tellmemore@sewells.com">tellmemore@sewells.com</a></h5>
          <h4>
              Sewells</br>
              Holden House</br>
              Chester Business Park</br>
              Chester</br>
              CH4 9QU
          </h4>
        </div>
        <div class="col-sm-9 gmap">
          <script type="text/javascript">
            function initialize() {
              var mapOptions = {
                center: { lat: 53.160137, lng: -2.900518},
                zoom: 11,
                scrollwheel: false
              };

              var styles = [
                {
                  stylers: [
                    { hue: "#6A8F82" },
                    { saturation: -20 }
                  ]
                },{
                  featureType: "road",
                  elementType: "geometry",
                  stylers: [
                    { lightness: 100 },
                    { visibility: "simplified" }
                  ]
                },{
                  featureType: "road",
                  elementType: "labels",
                  stylers: [
                    { visibility: "off" }
                  ]
                }
              ];

              
              var map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);
              map.setOptions({styles: styles});
              var marker = new google.maps.Marker({
                  position: { lat: 53.160137, lng: -2.900518},
                  animation: google.maps.Animation.DROP,
                  map: map,
                  title:"Hello World!"
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
          </script>
          <div id="map-canvas"></div>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap contactdirections" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="">
          <div class="col-sm-12">
            <h2>Directions</h2>
          </div>
        </div>
          <div class="col-xs-3 directions">
            <p>Directions from M56</p>
          </div>
          <div class="col-xs-9 directions">
            <p>At junction 15, take the exit marked M53 Chester/North Wales. Follow the road until the motorway ends and becomes the A55. </p>
          </div>
          <div class="col-xs-3 directions">
            <p>Directions from M6</p>
          </div>
          <div class="col-xs-9 directions">
            <p>At junction 20 take the exit marked M56 Westbound towards Chester. Continue until jct 15, take the exit marked M53 Chester/North Wales. </p>
          </div>
          <div class="col-xs-3 directions">
            <p>Directions from M1</p>
          </div>
          <div class="col-xs-9 directions">
            <p>Follow the road until the motorway ends and becomes the A55.</p>
          </div>
          <div class="col-xs-3 directions">
            <p>Directions from A55</p>
          </div>
          <div class="col-xs-9 directions">
            <p>At junction 42 take the exit marked M62 Westbound, follow the M62 until junction 10. Take the exit marked M6 Southbound, continue until junction 20.Take the exit marked M56 Westbound towards Chester. Continue until junction 15, take the exit marked M53 Chester/North Wales. Follow the road until the motorway ends and becomes the A55.</p>
            <p>Continue along the A55 (do not follow any signs to Chester) and take the exit marked A483 to Wrexham.</p>
            <p>Travel up the A483 slip road, staying in the right hand lane, towards the roundabout. Negotiating the roundabout, take the third exit off, (signposted to Chester Business Park).</p>
            <p>At the next roundabout turn right onto the Business Park. After passing the ‘Bank of Scotland’ building on the left continue a few hundred yards towards the next roundabout.</p>
            <p>At the next roundabout, turn left and left again into the Sewells car park.</p>
          </div>
          <div class="col-xs-3 directions">
            <p>Car Parking</p>
          </div>
          <div class="col-xs-9 directions">
            <p>Car parking is provided behind Holden House with visitor spaces allocated near the entrance, and the main entrance overlooks the car park.</p>
          </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->




  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
