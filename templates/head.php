<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/assets/vendor/fancybox/jquery.fancybox.css">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <link rel="icon" type="image/x-icon" href="<?php echo get_site_url(); ?>/favicon.ico" />
  <script type="text/javascript" src="<? echo get_template_directory_uri() ?>/assets/vendor/fancybox/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543ea41265e02033"></script>
  <script type='text/javascript' src='https://www.wishpond.com/wp_script/388801.js' defer></script>
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5zXcixAEdQt_ndOk1kJ4ipNCO0mH7BzQ">
  </script>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-2720123-1', 'auto');
    ga('send', 'pageview');

  </script>

  <script type="text/javascript">
  (function() {
    var d = document,
        s = d.createElement('script'),
        init = function() {try {window.lm("7dda3659aee295d3d45d");}catch(e){if (typeof console == "object"){console.log(e);}}},
        embedder = d.getElementsByTagName('script')[0];
    s.src = '//linkmetrics.s3.amazonaws.com/lm.js?v=2'; s.async = true; s.type = 'text/javascript';
    embedder.parentNode.insertBefore(s, embedder);
    window.attachEvent ? window.attachEvent('onload', init) : window.addEventListener('load', init, false);
  })();
  </script>
  
</head>
