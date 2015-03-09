<?php get_template_part('templates/page', 'header'); ?>

<div class="contactheader">
	<h2>
	  <?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?>
	</h2>
</div>

<h3><?php _e('It looks like this was the result of either:', 'roots'); ?></h3>
<p>a mistyped address</p>
<p>an out-of-date link</p>
<p>something being moved during website updates</p>

<?php get_search_form(); ?>
<p></p>
<p>Please <a href="<?php echo get_site_url(); ?>/contact">contact us</a> so we can help you find what you're looking for.</p>