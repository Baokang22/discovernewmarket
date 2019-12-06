<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="col-md-12">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>