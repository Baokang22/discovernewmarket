<?php /*Template Name: Sitemap */ get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="sitemap">
	<div class="container container-color">
		<?php echo do_shortcode('[simple-sitemap types="page"]'); ?>
	</div>
</section>

<!-- Latest News -->
<?php get_template_part( 'inc/carousels/news'); ?>
<!-- Latest News -->
<!-- Talk of the Town -->
<?php get_template_part( 'inc/feeds/social-feed'); ?>
<!-- Talk of the Town -->
<?php endwhile; ?>
<?php get_footer(); ?>