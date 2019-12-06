<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

	<?php if(is_page('Getting Here')) : ?>
		<?php get_template_part( 'inc/carousels/main-carousel'); ?>

	<section class="intro-content-sec-getting-here">
	<?php else: ?>
	<section class="intro-content-sec">
<?php endif; ?>
		<div class="container">
			<div class="carousel-wrap">
				<div class="row">
					<div class="col-md-12">
						<div class="intro-wrapper">
							<div class="featured-image">
								<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
							</div>
							<div class="intro-content">
								<h2>
									<?php the_field('intro_paragraph_title'); ?>
								</h2>
								<p>
									<?php the_field('intro_paragraph'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php if(is_page('Getting Here')) : ?>
		<!-- Do nothing -->
	<?php else: ?>
	<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<?php endif; ?>
	<section class="content-generic">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-12">
					<h2 class="page-title-pink"><?php /*the_title(); */?></h2>
				</div> -->
			</div>
			<div class="row padding-top-5x">
				<div class="col-md-6">
					<div class="content-one">
						<h2><?php the_field('left_paragraph_title'); ?></h2>
						<p><?php the_field('left_paragraph_content'); ?>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="content-two">
						<h2><?php the_field('right_paragraph_title'); ?></h2>
						<p><?php the_field('right_paragraph_content'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php /*
	<section class="callouts">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<h2><?php the_field('callout_text'); ?></h2>
				</div>
			</div>
		</div>

	</section>
	*/ ?>
	<!-- Latest News -->
	<?php get_template_part( 'inc/carousels/news'); ?>
	<!-- Latest News -->
	<!-- Talk of the Town -->
	<?php get_template_part( 'inc/feeds/social-feed'); ?>
	<!-- Talk of the Town -->
<?php endwhile; ?>
<?php get_footer(); ?>
