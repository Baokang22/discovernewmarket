<?php /*Template Name: Latest News */ get_header(); ?>
<!-- Offers -->
<?php get_template_part( 'inc/grids/latest-news'); ?>
<!-- Offers -->

<?php //get_template_part( 'inc/carousels/events-carousel'); ?>
<!-- Events -->
<!-- Latest News -->
<?php //get_template_part( 'inc/carousels/news'); ?>
<!-- Latest News -->
<!-- Talk of the Town -->
<div class="hidden-xs">
<?php get_template_part( 'inc/feeds/social-feed'); ?>
</div>
<?php get_footer(); ?>