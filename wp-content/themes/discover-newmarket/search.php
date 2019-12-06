<?php $user = wp_get_current_user();?>
<?php $user_val = $user->data->user_nicename; ?>
<?php if ($user_val == 'corporate'): ?>
<?php get_header('corporate'); ?>
<?php else: ?>
<?php get_header(); ?>
<?php endif; ?>
<section class="local-secrets search-page clip-path-search">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-10">
				<div class="secret-wrap">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-12 secret-inner">
						<div class="content">
							<h1><?php the_title(); ?></h1>
							<?php $content = get_the_content();
							if (strlen($content) > 200) {
							$content = substr($content, 0, 197) . '...';
							}
							echo strip_tags($content);
							?>
						</div>
					</div>
					<div class="button">
						<a href="<?php echo get_permalink(); ?>" class="blue-btn">view page</a>
					</div>
					<?php endwhile;
					else : ?>
				<div class="col-md-12 secret-inner">
						<div class="content">
							<h1>Sorry no results were returned.</h1>
						</div>
					</div>
					<?php   endif;
					?>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- Latest News -->
<?php get_template_part( 'inc/carousels/news'); ?>
<!-- Latest News -->
<!-- Talk of the Town -->
<?php get_template_part( 'inc/feeds/social-feed'); ?>
<!-- Talk of the Town -->
<?php get_footer(); ?>