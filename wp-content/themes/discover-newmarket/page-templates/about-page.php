<?php /*Template Name: About Us */ get_header(); ?>


<!-- Homepage Main Carousel -->
<?php /* get_template_part( 'inc/carousels/main-carousel'); */ ?>

<?php while (have_posts()) : the_post(); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="footer-top">
	<section class="intro-content-sec">
		<div class="container">
			<div class="carousel-wrap">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-10">
					<div class="about-filters">
						<a href="#The Team">The Team</a>
						<a href="#Our Supporters">Our Supporters</a>
						<a href="#careers">Careers</a>
					</div>
				</div>
			</div>
				<div class="row">
					
					<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-10">
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
	<section class="content-generic">
		<div class="container">
			
			<div class="row padding-top-5x">
				<div class="col-md-6">
					<div class="content-one">
						<h2 id="<?php the_field('left_paragraph_title'); ?>"><?php the_field('left_paragraph_title'); ?></h2>
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
	


	<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/grey-bottom.png" class="img-responsive" alt="grey-bottom" style="margin-top: 10rem; margin-bottom: 5rem;">

	<section class="content-partner">
		<div class="container">
			<h2 id="<?php the_field('parters_title'); ?>">
				<?php the_field('parters_title'); ?>
			</h2>
 <?php while( have_rows('partner') ): the_row();
                            $image = get_sub_field('partner_logo');
                            $desc = get_sub_field('partner_description');
                            ?>
                           
                            <div class="row parners">
                        		<div class="col-md-2 part-logo">
                            	        <img src="<?php echo $image[url]; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>"/>
                            	</div>
								<div class="col-md-10 part-desc">
                            	  <?php echo $desc?>
                            	</div>
                            </div>
                      
                            <?php endwhile; ?>
</div>

<div id="careers">
<h2 style="margin-top: 4rem; margin-bottom: 4rem;" class="careers-cta"><a href="/careers">Click here</a> to view careers with Discover Newmarket</h2>
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