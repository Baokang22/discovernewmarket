<?php get_header(); ?>
<?php get_template_part( 'inc/map/map-individual'); ?>
<?php while (have_posts()) : the_post(); ?>
	<!-- Main Carousel -->
	
	<?php get_template_part( 'inc/carousels/main-carousel'); ?>
	<!-- Main Carousel -->
	<!-- Place Information -->
	<?php get_template_part( 'inc/misc/place-intro-content'); ?>
	<!-- Place Information -->
	<!-- News Offers Carousel -->
	<section class="news-offers-carousels">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="news-wrapper">
						<!-- News Carousel -->
						<p class="pink-small">Latest</p>
						<h2><?php the_title(); ?> News</h2>
						<div class="news-mini-carousel">
							<?php get_template_part( 'inc/carousels/news-mini'); ?>
						</div>
						<!-- News Carousel -->
						<div class="carousel-controls-news">
							<div class="previous">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/previous.png" class="img-responsive previous-news-mini" alt="Previous"/>
							</div>
							<div class="next">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/next.png" class="img-responsive next-news-mini" alt="Next"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="offers-wrapper">
						<!-- Offers Carousel -->
						<p class="pink-small">Latest</p>
						<h2><?php the_title(); ?>  Offers</h2>
						<div class="offer-wrap">
							<!-- Check If User is Logged in or not before displaying Offers -->
							<?php if ( is_user_logged_in() ) : ?>
							<?php else:  ?>
								<div class="offer-screen">
									<div class="offer-screen-content">
										<div class="icon">
											<img src="<?php echo get_template_directory_uri(); ?>/images/png/user-icon.png" class="img-responsive" alt="User Icon" />
										</div>
										<h2>You must be signed in <br> to view current offers.</h2>
										<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="pink-btn">login</a>
										<a href="" class="pink-small">or click here to register.</a>
									</div>
								</div>
							<?php endif; ?>
							<div class="offers-mini-carousel">
								<?php get_template_part( 'inc/carousels/offers-mini'); ?>
							</div>
						</div>
						<div class="control-wrap-offers">
							<?php if ( is_user_logged_in() ) : ?>
							<?php else:  ?>
							<div class="control-screen"></div>
							<?php endif; ?>
						<div class="carousel-controls-offers">
							<div class="previous">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/previous.png" class="img-responsive previous-offers-mini" alt="Previous"/>
							</div>
							<div class="next">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/next.png" class="img-responsive next-offers-mini" alt="Next"/>
							</div>
						</div>
						</div>
					</div>
					<!-- Offers Carousel -->
				</div>
			</div>
		</div>
	</section>
	<!-- News Offers Carousel -->
	<section class="business-enquiry">
		<svg preserveAspectRatio="none" class="slant-upper" viewBox="0 0 841.889 595.281">
			<polygon fill="#fff" points="841.89,595.281 0,595.281 841.89,0  "/>
		</svg>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="pink-small">Send <?php the_title(); ?> an enquiry</p>
				</div>
				<div class="col-md-12">
					<div class="sign-up">
						<form action="/" method="post" id="">
							Fill in your <span> <input placeholder="name" id="name" name="email-address" type="text" /></span>, your <span> <input placeholder="email address" id="email-address" name="email-address" type="text" /></span> and your <span> <input placeholder="enquiry" id="enquiry" name="enquiry" type="text" /></span>and someone will be in touch!<br>
							<button class="submit-btn" type="submit">send enquiry now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<svg preserveAspectRatio="none" class="slant-lower" viewBox="0 0 87.5 15.583">
			<polygon fill="#fff" points="87.5,15.583 0,0 87.5,0 "/>
		</svg>
	</section>
	<!-- Testing -->

	<!-- Testing -->
	<!-- Map -->
	<section class="map-individual">
		<?php get_template_part( 'inc/map/map-render-individual'); ?>
	</section>
	<!-- Map -->
<?php endwhile; ?>

<?php get_footer(); ?>
