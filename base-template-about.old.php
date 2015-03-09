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
      <h2>We work with organisations large and small to help transform their business performance for the better</h2>
      <a href='#wp_popup_349555' type='popup' class="btn btn-primary">Start your business transformation today</a>
    </div>
  </div>




  <div class="wrap aboutintro" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-sm-6">
          <h2>We are fanatical about always exceeding our customers’ performance improvement expectations.</h2>
          <p>We love working with other like-minded organisations whose executives and managers know that by unlocking their peoples’ potential and developing them to the full is the only way to maximise sales, profits and customer loyalty.</p>
          <ul>
            <li class="one">Motivational skills that lead to an unstoppable team spirit</li>
            <li class="two">Improving customer satisfaction and loyalty</li>
            <li class="three">Change centric skills development</li>
          </ul>
        </div>
        <div class="col-sm-6 introcta">
          <h2>Unlock the potential in your organisation today</h2>
          <h4>Arrange a <span class="riskfree">risk free</span> business performance consultation from one of our experts now. </h4>
          <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputName" class="col-md-4 control-label">Name: <strong>*</strong></label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputName" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-md-4 control-label">Email Address: <strong>*</strong></label>
                <div class="col-md-8">
                  <input type="email" class="form-control" id="inputEmail" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputCompany" class="col-md-4 control-label">Company:</label>
                <div class="col-md-8">
                  <input type="email" class="form-control" id="inputCompany" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputTelephone" class="col-md-4 control-label">Telephone:</label>
                <div class="col-md-8">
                  <input type="email" class="form-control" id="inputTelephone" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="required" class="col-md-6 control-label requiredfield"><strong>*</strong> denotes required field</label>
                <div class="col-md-6 getstarted">
                  <button type="submit" class="btn btn-primary">CONFIRM</button>
                </div>
                <div class="col-md-12 spam">We hate SPAM and won't share your email.</div>
              </div>
              
          </form>
          </div>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div class="wrap pressaction" role="document">
    <div class="content row container">
      <main class="main" role="main">
        <div class="col-xs-12">
          <h4>SEWELLS SUCCESS STORIES HAVE BEEN FEATURED IN</h4>
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
          <h3>Established for nearly 50 years, Sewells has helped companies large and small with unparalleled business growth; growth they only previously dared dream about.  We have helped them to implement much needed change by getting managers and staff to really ‘buy-in’ to the changes, and accept a deep sense of personal responsibility to make change happen… and make it sustainable.</h3>
          <a href="#" type="button" class="btn btn-primary">Start your business transformation today</a>
        </div>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
