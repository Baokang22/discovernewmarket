<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<!-- Main Carousel -->
<?php get_template_part( 'inc/carousels/main-carousel'); ?>
<!-- Main Carousel -->
<?php /* 
	<?php if(has_post_thumbnail()) : ?>
	<section class="intro-content-sec">
		<div class="container">
			<div class="carousel-wrap">
				<div class="row">
					<div class="col-md-2">
					</div>
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
	<?php else : ?>
		<?php //do Nothing ?>
	<?php endif; ?>
	*/ ?>
	<section class="content-generic" style="margin-top:-5rem; margin-bottom:-5rem;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title-pink"><?php the_title(); ?></h2>
				</div>
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
		<svg preserveAspectRatio="none" class="slant-upper" viewBox="0 0 841.889 595.281">
			<polygon fill="#fff" points="841.89,595.281 0,595.281 841.89,0  "/>
		</svg>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<h2><?php the_field('callout_text'); ?></h2>
				</div>
			</div>
		</div>
		<svg preserveAspectRatio="none" class="slant-lower" viewBox="0 0 87.5 15.583">
			<polygon fill="#fff" points="87.5,15.583 0,0 87.5,0 "/>
		</svg>
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