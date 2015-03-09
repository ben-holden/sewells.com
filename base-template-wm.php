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
      <div class="wmquote1"></div>
      <div class="wmquote2"></div>
      <div class="wmlogo"></div>
      <h1>
        <?php //echo roots_title(); ?>
        A powerful and dynamic two-day programme that increases personal effectiveness and success
      </h1>
    </div>
  </div>

  <div class="wrap wmpanel1" role="document">
    <div class="content row container">
      <main class="main" role="main"> 
        <h2>“Working Miracles … with Performance™” will guide you through tried and tested, step-by-step strategies that are simple to apply and will allow you to take control of your future – both professionally and personally.</h2>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap wmpanel2" role="document">
    <div class="content row container">
      <div class="col-sm-4">
        <h2>What does it do for me?</h2>
        <ul>
          <li>Helps you understand what you’re capable of achieving</li>
          <li>Enables you to release your untapped potential</li>
          <li>Inspires you to believe in yourself – and that YOU can make the necessary changes</li>
          <li>Motivates you to be able to improve any aspect of your performance – personally and professionally</li>
      </div>
      <div class="col-sm-4">
        <h2>What does it do for my business?</h2>
        <ul>
          <li>Gives leaders, like you, the tools to drive performance and results </li>
          <li>Creates high-performance ‘winning’ cultures – change-ready, adaptable, flexible … and UNSTOPPABLE!</li>
          <li>Strengthens communication skills to motivate and inspire everyone to be fully engaged, every day</li>
          <li>Develops brilliant team spirit within and between teams so that they perform successfully!</li>
      </div>
      <div class="col-sm-4">
        <h2>What does it do for all of us?</h2>
        <ul>
          <li>Creates a clear direction for everyone to follow – and develops an ‘unstoppable’ culture</li>
          <li>Ensures everyone knows what they need to do, how to do it and why it’s important, in order to achieve goals and objectives</li>
          <li>Turns strategic intent into operational excellence through brilliant execution</li>
      </div>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap wmpanel1" role="document">
    <div class="content row container">
        <h2><strong>Guarantee</strong> - if you don’t set or achieve more goals in the next 12 months than ever before, as a result of attending “Working Miracles … with Performance™” we will happily refund 100% of your money. </h2>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap wmpanel3" role="document">
    <div class="content row container">
        <h2>Complete the form below to register your interest in attending <br>“Working Miracles … with Performance™” in 2015</h2>
        <p>The two-day “masterclass” our clients say is “the world’s best leadership and personal development workshop.”</p>
      <!-- Begin MailChimp Signup Form -->
  
      <div id="mc_embed_signup">
      <form action="//sewells.us9.list-manage.com/subscribe/post?u=392cd7439b9f048698e756ffc&amp;id=17f917f45d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
            <div class="form-group">
              <label for="mce-NAME" class="col-sm-4 control-label">Name: <strong>*</strong></label>
              <div class="col-sm-8 mc-field-group">
                <input type="text" value="" name="NAME" class="form-control" id="mce-NAME" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="mce-EMAIL" class="col-sm-4 control-label">Email Address: <strong>*</strong></label>
              <div class="col-sm-8 mc-field-group">
                <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="mce-COMPANY" class="col-sm-4 control-label">Company:</label>
              <div class="col-sm-8 mc-field-group">
                <input type="text" value="" name="COMPANY" class="form-control" id="mce-COMPANY" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="mce-TEL" class="col-sm-4 control-label">Telephone:</label>
              <div class="col-sm-8 mc-field-group">
                <input type="text" value="" name="TEL" class="form-control" id="mce-TEL" placeholder="">
              </div>
            </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div> 
            <div class="form-group">
              <label for="required" class="col-sm-4 control-label requiredfield"><strong>*</strong> denotes required field</label>
              <div class="col-sm-8 register">
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_392cd7439b9f048698e756ffc_20876abe36" tabindex="-1" value=""></div>
                <button type="submit" value="Subscribe" class="btn btn-primary" id="mc-embedded-subscribe">REGISTER NOW</button>
              </div>
            </div>
          </div>
      </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='NAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='COMPANY';ftypes[2]='text';fnames[3]='TEL';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
      <h3>Or call us now on <span>01244 681068</span> to secure your place.</h3>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  
  
  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
