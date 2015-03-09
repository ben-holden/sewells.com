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
    <div class="content container">
      <h1>
        <?php //echo roots_title(); ?>
        Our tried and tested approach means we always produce incredible results
      </h1>
      <h2>We enable positive change with companies just like yours. Here are some of our successes. You could be next.</h2>
      <a href='#wp_popup_385263' type='popup' class="btn btn-primary">Start your business transformation today</a>
    </div>
  </div>

  <div class="wrap successespanel lightersuccess" role="document">
    <div class="content row container">
      <main class="main" role="main">  
        <div class="whatwedo"></div>
        <h2>Sewells ran a business transformation/culture change programme with a well known manufacturing organisation starting in June 2012.</h2>
        <div class="col-sm-12 resultspanel1"></div>
        <h4>In the first quarter of their 2012/13 financial year, they recorded sales and profit over 17.5% ahead of budget. In the previous two years their first quarter performance had been 15 – 20% below budget for revenue and profit.</h4>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap successespanel darkersuccess" role="document">
    <div class="content row container">
      <main class="main" role="main">  
        <div class="whatwedo"></div>
        <h2>Sewells ran a sales development/culture change programme with a well known financial services organisation beginning in June 2008.</h2>
        <div class="col-sm-12 resultspanel2"></div>
        <h4>The market had slumped by 35%, true relationship selling was embedded and the 'silo' culture replaced by a 'one team' unstoppable culture.</h4>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap successespanel lightersuccess" role="document">
    <div class="content row container">
      <main class="main" role="main">  
        <div class="whatwedo"></div>
        <h2>Sewells ran a global performance orientated leadership/culture change programme with a well known manufacturing organisation in June 2012.</h2>
        <div class="col-sm-12 resultspanel3"></div>
        <h4>Flatlining unit sales and earnings had become the 'norm' - managers were shown how to lead and inspire their teams - in a flat global market, their share is rocketing.</h4>
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
            <div class="form-group ">
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
