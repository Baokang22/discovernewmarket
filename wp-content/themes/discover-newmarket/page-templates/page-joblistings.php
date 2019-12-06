<?php /*Template Name: Job Listings*/ get_header(); ?>
<?php get_template_part( 'inc/map/map-individual'); ?>
<section class="job-listings-template">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				$args = array( 'posts_per_page' => -1,
					'post_type' => 'jobs',
					'orderby'   => 'menu_order',
					'order'    => 'DESC');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				
				<div class="job-box">
					<div class="job-content">
						<p class="small">Jobs</p>
						<h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?>
						</p>
						<a href="<?php the_field('job_url'); ?>" class="pink-btn" target="_blank">view job</a>
						
					</div>
					<div class="job-contact">
						<div class="job-location">
							<div class="pin">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="Love Newmarket Logo"/>
							</div>
							<div class="details">
								<p class="small">Location</p>
								<?php
								$location = get_field('map');
								if( !empty($location) ):
									?>
								<p class="normal">
									
									<?php echo $location['address']; ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
					<div class="job-contactnumber">
						<div class="pin">
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="Love Newmarket Logo"/>
						</div>
						<div class="details">
							<p class="small">Contact</p>
							<p class="normal"><?php the_field('contact_phone_number'); ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach;
		wp_reset_postdata();?>
	</div>
</div>
</div>
</section>
<!-- Featured Job -->
<section class="featured-jobs">
	<div class="container">
		<div class="row">
			
			<div class="featured-content">
				<?php
				$args = array( 'posts_per_page' => 1,
					'post_type' => 'jobs',
					'orderby'   => 'menu_order',
					'order'    => 'DESC',
					'meta_query' => array(
							array(
								'key'   => 'job_pinned',
								'compare' => '=',
								'value'   => '1',
								)
							)
					);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="col-md-8">
					<p class="small">Featured Job</p>
					<h2><?php the_title(); ?></h2>
					<div class="job-featured-description">
					<p>	Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
						sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
						nesciunt
						Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
						sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
						nesciunt.
						Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
						sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
						nesciunt.
					</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="job-image">
						<?php the_post_thumbnail(); ?>
						<div class="job-contact">
							<div class="job-location">
								<div class="pin">
									<img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="Love Newmarket Logo"/>
								</div>
								<div class="details">
									<p class="small">Location</p>
									<?php
									$location = get_field('map');
									if( !empty($location) ):
										?>
									<p class="normal">
										
										<?php echo $location['address']; ?>
									</p>
								<?php endif; ?>
							</div>
						</div>
						<div class="job-contactnumber">
							<div class="pin">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="Love Newmarket Logo"/>
							</div>
							<div class="details">
								<p class="small">Contact</p>
								<p class="normal"><?php the_field('contact_phone_number'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach;
		wp_reset_postdata();?>

	</div>
	<div class="col-md-4"></div>
</div>
</div>
</section>
<!-- Featured Job -->
<!-- Lets Get Social -->
<?php get_template_part( 'inc/feeds/lets-get-social'); ?>
<!-- Lets Get Social -->
<!-- Talk of the Town -->
<?php get_template_part( 'inc/feeds/social-feed'); ?>
<!-- Talk of the Town -->
<?php get_footer(); ?>