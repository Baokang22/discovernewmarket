<?php /*Template Name: Competition Page */ get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<?php if (get_field('carousel_images')) : ?>
		<?php get_template_part('inc/carousels/main-carousel'); ?>
	<section class="intro-content-sec-getting-here">
	<?php else : ?>
	<section class="intro-content-sec">
<?php endif; ?>
		<div class="container">
			<div class="carousel-wrap">
				<div class="row">
					<div class="col-md-12">
						<div class="intro-wrapper">
							<div class="featured-image">
								<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
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
	
    <section class="content-generic">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="content-one competition">
						<div class="row">
							<div class="col-md-6">
								<p><?php the_content(); ?></p>
							</div>
							<div class="col-md-6" style="margin-top: 30px;">
								<div style="margin-bottom: 30px;">
									<?php echo do_shortcode('[contact-form-7 id="6833" title="Competition"]'); ?>
								</div>
								<div>
									<p style="font-size: 16px; text-align: center;">Full terms and conditions can be found by <a href="https://discovernewmarket.co.uk/competition-terms-and-conditions/" style="text-decoration: underline;">clicking HERE</a>. Please note that by submitting a photograph for this competition that you are giving Discover Newmarket permission to use your photograph in any of their advertising materials, editorial, social channels, websites and/or in any promotional material connected to this competition.</p>
								</div>
							</div>
						</div>
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
	<?php get_template_part('inc/carousels/news'); ?>
	<!-- Latest News -->
	<!-- Talk of the Town -->
	<?php get_template_part('inc/feeds/social-feed'); ?>
	<!-- Talk of the Town -->
<?php endwhile; ?>
<?php get_footer(); ?>
