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

  <div class="nav-header" <?php 
                          $themeta = get_post_meta($post->ID, 'bgcolor', true); 
                          if($themeta != '') {
                          echo 'style="background:' . get_post_meta($post->ID, 'bgcolor', true) . ';"';
                          }
                          ?>>
    <div class="content row container">
      <div class="col-sm-8">
        <h1>
          <?php //echo roots_title(); ?>
          <?php echo get_post_meta($post->ID, 'Heading', true); ?>
        </h1>
        <h2><?php echo get_post_meta($post->ID, 'Subheading', true); ?></h2>
      </div>
      <div class="col-sm-4 signupbox">
        <div class="signup-image"><?php echo the_post_thumbnail() ?></div>
        <h4><?php echo get_post_meta($post->ID, 'Signup_strap', true); ?></h4>
        <form action="//sewells.us9.list-manage.com/subscribe/post?u=392cd7439b9f048698e756ffc&amp;id=<?php echo get_post_meta($post->ID, 'mailchimp', true); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
          <div class="form-group">
            <div class="col-md-12 mc-field-group">
              <input type="email" class="form-control" name="EMAIL" id="inputEmail" placeholder="email address">
            </div>
          </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_392cd7439b9f048698e756ffc_9c7323e40d" tabindex="-1" value=""></div>
          <div class="form-group">
            <div class="col-md-12 getstarted">
              <button type="submit" class="btn btn-primary"><?php echo get_post_meta($post->ID, 'Signup_button', true); ?></button>
            </div>
            <div class="col-md-12 spam">We hate SPAM and won't share your email.</div>
          </div>
        </form>
      </div>
    </div>

  </div>




  <div class="wrap homeservices" role="document">
    <div class="content row container">
      <div class="col-sm-8">
        <main class="main" role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->
      </div>
      <div class="col-sm-4 signupbox xsonly">
        <div class="signup-image"><?php echo the_post_thumbnail() ?></div>
        <h4><?php echo get_post_meta($post->ID, 'Signup_strap', true); ?></h4>
        <form action="//sewells.us9.list-manage.com/subscribe/post?u=392cd7439b9f048698e756ffc&amp;id=<?php echo get_post_meta($post->ID, 'mailchimp', true); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
          <div class="form-group mc-field-group">
            <div class="col-md-12">
              <input type="email" class="form-control" name="EMAIL" id="inputEmail" placeholder="email address">
            </div>
          </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_392cd7439b9f048698e756ffc_9c7323e40d" tabindex="-1" value=""></div>
          <div class="form-group">
            <div class="col-md-12 getstarted">
              <button type="submit" class="btn btn-primary"><?php echo get_post_meta($post->ID, 'Signup_button', true); ?></button>
            </div>
            <div class="col-md-12 spam">We hate SPAM and won't share your email.</div>
          </div>
        </form>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      </div>
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
  
  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
