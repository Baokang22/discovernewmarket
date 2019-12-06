<?php /*Template Name: careers */  get_header(); ?>


<!-- Homepage Main Carousel -->
<?php get_template_part( 'inc/carousels/main-carousel'); ?>

<?php while (have_posts()) : the_post(); ?>
	<section class="intro-careers">
		<div class="container">
			<div class="carousel-wrap">
				<div class="row">
					
					<div class="col-md-10">
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
		<?php  $content = get_field('left_paragraph_content'); ?>
		<?php if($content) :  ?>
	<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="footer-top">

		
	
	<section class="content-generic">
		<div class="container">
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
	<?php  endif;  ?>


	<!-- Latest News -->
	<?php get_template_part( 'inc/carousels/news'); ?>
	<!-- Latest News -->
	<!-- Talk of the Town -->
	<?php get_template_part( 'inc/feeds/social-feed'); ?>
	<!-- Talk of the Town -->
<?php endwhile; ?>
<?php get_footer(); ?>