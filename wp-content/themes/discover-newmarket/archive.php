<?php get_header(); ?>
<div class="col-md-12">
	<h1 class="page-title"><?php single_term_title(); ?></h1>
</div>

<div class="col-md-12">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-12">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>