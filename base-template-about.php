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
        We transform business performance
      </h1>
      <h2>We work with organisations large and small ... and we've never failed to help positively transform their business performance.</h2>
      <a href='#wp_popup_385263' type='popup' class="btn btn-primary">Start your business transformation today</a>
    </div>
  </div>

  <div class="wrap aboutintro" role="document">
    <div class="content container">
      <main class="main" role="main">
        <h2>Our clients tell us we excel at...</h2>
        <div class="row">
          <div class="col-sm-6">
            <div class="excelat">
              <div class="about_tag">1</div>
              <h3>Developing a <strong>performance orientated</strong> environment ... where accountability is high and targets are exceeded</h3>
              <a href='#wp_popup_385494' type='popup'>Find out how we help exceed targets</a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="excelat">
              <div class="about_tag">2</div>
              <h3>Igniting a <strong>motivation and passion</strong> inside everyone ... so that competitors are left standing</h3>
              <a href='#wp_popup_385533' type='popup'>Find out how we ignite motivation and passion</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="excelat">
              <div class="about_tag">3</div>
              <h3>Eradicating <strong>dysfunctional teams</strong> and <strong>silo mentalities</strong> ... to increase operational efficiencies and profits</h3>
              <a href='#wp_popup_385539' type='popup'>Find out we how increase operational efficiencies</a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="excelat">
              <div class="about_tag">4</div>
              <h3>Demonstrating how to charge <strong>higher prices</strong> and <strong>grow market share</strong> ... even in price-sensitive marketplaces</h3>
              <a href='#wp_popup_385548' type='popup'>Find out how we help grow market share</a>
            </div>
          </div>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap pressaction" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-xs-12">
          <h4>SEWELLS SUCCESS STORIES HAVE BEEN FEATURED BY</h4>
          <img src="<? echo get_template_directory_uri() ?>/assets/img/presslogo1.png" alt="" />
          <img src="<? echo get_template_directory_uri() ?>/assets/img/presslogo2.png" alt="" />
          <img src="<? echo get_template_directory_uri() ?>/assets/img/presslogo3.png" alt="" />
          <img src="<? echo get_template_directory_uri() ?>/assets/img/presslogo4.png" alt="" />
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap resultsgraphics" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-xs-12">
          <img src="<? echo get_template_directory_uri() ?>/assets/img/about_graphic.jpg" alt="" />
          <h3>Established for over 50 years, Sewells has helped companies large and small with unparalleled business growth by implementing much needed change and getting everyone to accept a deep sense of personal responsibility to make change happen… and make it sustainable.</h3>
          <a href='<?php echo get_site_url(); ?>/successes' type="button" class="btn btn-primary">See some more of our successes</a>
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
