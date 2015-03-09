<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!-- <div class="remodal-bg"> -->

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
    <div class="content container">
      <h1>
        <?php //echo roots_title(); ?>
        Business improvement solutions that work
      </h1>
      <h2>With 50 years experience we are the UK’s leading provider of business improvement programmes, proven to always exceed our clients' ambitious objectives from any programme we run.</h2>
      <a href='#wp_popup_385263' type='popup' class="btn btn-primary">Start your business transformation today</a>
    </div>
  </div>

  <div class="wrap homeservices" role="document">
    <div class="content container">
      <main class="main" role="main">
        <h3>We work with businesses large and small to enhance their business performance in all areas.</h3>
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <img src="<? echo get_template_directory_uri() ?>/assets/img/salesicon@2X.png" width="92" alt="Sales & Profit Growth"/>
            <h4><a href='<?php echo get_site_url(); ?>/sales-and-profit-growth'>Sales and<br>Profit Growth</a></h4>
          </div>
          <div class="col-sm-3 col-xs-6">
            <img src="<? echo get_template_directory_uri() ?>/assets/img/custcareicon@2X.png" width="92" alt="Customer Loyalty & Satisfaction" />
            <h4><a href='<?php echo get_site_url(); ?>/motivation-landing-page'>Creating High<br>Performance Cultures</a></h4>
          </div>
          <div class="col-sm-3 col-xs-6">
            <img src="<? echo get_template_directory_uri() ?>/assets/img/changeicon@2X.png" width="92" alt="Leading Positive Change" />
            <h4><a href='<?php echo get_site_url(); ?>/enabling-positive-change-landing-page'>Enabling Positive<br>Change</a></h4>
          </div>
          <div class="col-sm-3 col-xs-6">
            <img src="<? echo get_template_directory_uri() ?>/assets/img/leadershipicon@2X.png" width="92" alt="Inspirational Leadership" />
            <h4><a href='<?php echo get_site_url(); ?>/inspirational-leadership'>Inspirational<br>Leadership</a></h4>
          </div>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap homeclients" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <h4>SOME OF THE WORLD’S MOST RESPECTED COMPANIES TRUST SEWELLS</h4>
        <div class="clientlogos"></div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap homevideo" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-sm-6">
          <div class="videocontainer"><iframe src="//player.vimeo.com/video/112210913" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
        </div>
        <div class="col-sm-6">
          <h4>Sewells Chairman, Dr. William Holden, explains what makes our programmes so effective in transforming business performance.</h4>
          <h5>Click video to watch. 1 min.</h5>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap hometestimonials" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <h3>WHAT OUR CUSTOMERS SAY ABOUT SEWELLS UNIQUE AND POWERFUL APPROACH</h3>
        <div class="col-sm-4 testimonial1">
          <p>Once the Sewells team moved in and ‘weaved their magic’, our overall sales increased by 100% in four years in an extremely flat market.</p>
          <h4 class="person"> Executive Vice President - Honda UK</h4>
        </div>
        <div class="col-sm-4 testimonial2">
          <p>The programme was tailor made for Shell and met our requirements perfectly. In one year we doubled sales and tripled them over the next three.</p>
          <h4 class="person">Key Account Manager - Shell</h4>
        </div>   
        <div class="col-sm-4 testimonial3">
          <p>The merger with the Nationwide was smoother due to Sewells. It made a huge difference and we have a common language, openness and team work.</p>
          <h4 class="person">CEO - Cheshire Building Society</h4>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap wmpanel" role="document">
    <div class="content row container">
      <div class="col-sm-3 wmlogo"><a href="<?php echo get_site_url(); ?>/workingmiracles"><img src="<? echo get_template_directory_uri() ?>/assets/img/wmlogohome.png" alt="Working Miracles with Performance" /></a></div>
      <div class="col-sm-9 wmtext"> 
        <h2>A powerful and dynamic two-day programme that increases personal effectiveness and success. <strong>Now booking for 2015.</strong></h2>
        <a href="<?php echo get_site_url(); ?>/workingmiracles">REGISTER NOW</a>
      </div>
      </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap calltoaction" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-sm-6 ebookpics">
        </div>
        <div class="col-sm-6" id="mc_embed_signup">
          <h2>Start your business performance transformation today</h2>
          <h4>Get our <strong>100% free</strong> eReport starter pack containing 4 essential guides to improving your business right now.</h4>
          <form action="//sewells.us9.list-manage.com/subscribe/post?u=392cd7439b9f048698e756ffc&amp;id=20876abe36" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
            <div class="form-group">
              <label for="mce-NAME" class="col-md-4 control-label">Name: <strong>*</strong></label>
              <div class="col-md-8 mc-field-group">
                <input type="text" value="" name="NAME" class="form-control" id="mce-NAME" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="mce-EMAIL" class="col-md-4 control-label">Email Address: <strong>*</strong></label>
              <div class="col-md-8 mc-field-group">
                <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="mce-COMPANY" class="col-md-4 control-label">Company:</label>
              <div class="col-md-8 mc-field-group">
                <input type="text" value="" name="COMPANY" class="form-control" id="mce-COMPANY" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="mce-TEL" class="col-md-4 control-label">Telephone:</label>
              <div class="col-md-8 mc-field-group">
                <input type="text" value="" name="TEL" class="form-control" id="mce-TEL" placeholder="">
              </div>
            </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div> 
            <div class="form-group">
              <label for="required" class="col-md-6 control-label requiredfield"><strong>*</strong> denotes required field</label>
              <div class="col-md-6 getstarted">
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_392cd7439b9f048698e756ffc_20876abe36" tabindex="-1" value=""></div>
                <button type="submit" value="Subscribe" class="btn btn-primary" id="mc-embedded-subscribe">GET STARTED NOW</button>
              </div>
              <div class="col-md-12 spam">We hate SPAM and won't share your email.</div>
            </div>
          </div>
          </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='NAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='COMPANY';ftypes[2]='text';fnames[3]='TEL';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->



  
  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
