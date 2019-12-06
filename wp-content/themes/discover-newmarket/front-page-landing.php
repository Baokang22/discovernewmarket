<?php get_header(); ?>
<!-- Homepage Main Carousel -->
<?php get_template_part( 'inc/carousels/main-carousel'); ?>
<!-- Homepage Main Carousel -->
<!-- Welcome /  Events Carousel -->
<?php get_template_part( 'inc/carousels/events-carousel'); ?>
<!-- Welcome / Events Carousel -->
<!-- Things to Do -->
<?php get_template_part( 'inc/grids/things-to-do'); ?>
<!-- Things to Do -->
<!-- Events -->
<?php get_template_part( 'inc/carousels/events-carousel'); ?>
<!-- Events -->
<!-- Latest News -->
<?php get_template_part( 'inc/carousels/news'); ?>
<!-- Latest News -->
<!-- Talk of the Town -->
<div class="hidden-xs">
<?php get_template_part( 'inc/feeds/social-feed'); ?>
</div>
<!-- Talk of the Town -->
<?php get_footer(); ?>