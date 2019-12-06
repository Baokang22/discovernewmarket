<?php /*Template Name: Whats On */ get_header(); ?>
<!-- Offers -->
<?php get_template_part( 'inc/grids/whats-on'); ?>
<!-- Offers -->
<?php get_template_part( 'inc/carousels/events-carousel'); ?>
<!-- Events -->
<!-- Latest News -->
<?php get_template_part( 'inc/carousels/news'); ?>
<!-- Latest News -->
<!-- Talk of the Town -->
<div class="hidden-xs">
<?php get_template_part( 'inc/feeds/social-feed'); ?>
</div>
<?php get_footer(); ?>