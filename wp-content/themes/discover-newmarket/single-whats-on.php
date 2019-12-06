<?php get_header(); ?>
<?php //get_template_part( 'inc/map/map-individual'); ?>
<?php while (have_posts()) : the_post(); ?>
<!-- Main Carousel -->
<?php get_template_part( 'inc/carousels/main-carousel'); ?>
<!-- Main Carousel -->
<!-- Place Information -->
<?php $category_todo = wp_get_post_terms($post->ID, 'category', 'parent=0', array("fields" => "all")); ?>


<?php get_template_part( 'inc/misc/whatson-intro-content'); ?>
<!-- Place Information -->
<!-- News Offers Carousel -->
<?php
$special_offers = get_posts(array(
'post_type' => 'special_offers',
'meta_query' => array(
array(
'key' => 'testtest', // name of custom field
'value' => '"' . get_the_ID() . '"',
'compare' => 'LIKE'
)
)
)); ?>
<?php
$related_news = get_posts(array(
'post_type' => 'latest_news',
'meta_query' => array(
array(
'key' => 'testtest', // name of custom field
'value' => '"' . get_the_ID() . '"',
'compare' => 'LIKE'
)
)
)); ?>
<?php if(!$realted_news && !$special_offers) : ?>
<?php //Do Nothing ?>
<?php else : ?>
<section class="news-offers-carousels">
	<div class=" iner">
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
					<?php if(!$related_news) : ?>
					<?php //Do Nothing ?>
					<?php else : ?>
					<div class="carousel-controls-news">
						<div class="previous">
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/previous.png" class="img-responsive previous-news-mini" alt="Previous"/>
						</div>
						<div class="next">
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/next.png" class="img-responsive next-news-mini" alt="Next"/>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="offers-wrapper">
					<!-- Offers Carousel -->
					<p class="pink-small">Latest</p>
					<h2><?php the_title(); ?>  Offers</h2>
					<div class="offer-wrap">
						<!-- Check If User is Logged in or not before displaying Offers -->
						<div class="offers-mini-carousel">
							<?php
							$special_offers = get_posts(array(
								'post_type' => 'special_offers',
								'meta_query' => array(
									array(
							'key' => 'testtest', // name of custom field
							'value' => '"' . get_the_ID() . '"',
							'compare' => 'LIKE'
							)
									)
							)); ?>
							<?php if( $special_offers ):
							foreach( $special_offers as $post ): ?>
							<?php $category_todo = wp_get_post_terms($post->ID, 'category', 'parent=0', array("fields" => "all")); ?>
							<div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
								<div class="icon">
									<?php if($category->slug == 'eat') :  ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/png/to-eat.png" class="img-responsive" alt="Eat" />
									
									<?php elseif($category->slug == 'business') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/png/Business-icon.png" class="img-responsive" alt="Business" />
									<?php elseif($category->slug == 'shop') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/png/Shop-icon.png" class="img-responsive" alt="Shop" />
									
									<?php elseif($category->slug == 'stay') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/png/Stay-icon.png" class="img-responsive" alt="Shop" />
									<?php elseif($category->slug == 'things_to_do') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/png/Whats-On-icon.png" class="img-responsive" alt="Shop" />
									<?php endif ; ?>
								</div>
								<div class="image">
									<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
									<?php endif; ?>
								</div>
								<div class="content-box" data-match-height="true">
									<h4>Latest News</h4>
									<a href="#" data-toggle="modal" data-target="#location-box-<?php echo $post->ID; ?>" class="title">
										<?php the_title(); ?>
									</a>
									<p class="excerpt">
										<?php the_excerpt(); ?>
									</p>
								</div>
							</div>
							<?php
							wp_reset_postdata();
							endforeach; ?>
							<?php else : ?>
							<div class="carousel-cell" data-match-height="true">
								<div class="content-box" data-match-height="true">
									<img src="<?php echo get_template_directory_uri(); ?>/images/png/news-placeholder.png" class="img-responsive" alt="Placeholder">
								</div>
							</div>
							<?php endif;  ?>
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
<?php endif ; ?>
<!-- Map -->
<section id="mapIndividual" class="map-individual">
	<?php get_template_part( 'inc/map/map'); ?>
	<?php get_template_part( 'inc/map/map-render-individual'); ?>
</section>
<!-- Map -->
<?php endwhile; ?>
<?php foreach( $special_offers as $post ): ?>
<div id="location-box-<?php echo $post->ID; ?>" class="modal fade offer-box" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<?php if ( is_user_logged_in() ) : ?>
				<div class="offer-box-content-wrap">
					<div class="row">
						<div class="col-md-6">
							<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<h3 class="modal-title"><?php the_title(); ?></h3>
						</div>
					</div>
					<p><?php if(get_field('offer_content')) : ?>
						<?php the_field('offer_content'); ?>
					<?php endif; ?></p>
					<h4><?php the_field('offer_code'); ?></h4>
				</div>
				<?php else:  ?>
				<div class="offer-screen">
					<div class="offer-screen-content">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/user-icon.png" class="img-responsive" alt="User Icon" />
						</div>
						<h2>You must be signed in <br> to view current offers.</h2>
						<a href="<?php echo esc_url( wp_login_url( home_url() ) ); ?>" class="pink-btn">login</a>
						<a href="" class="pink-small">or click here to register.</a>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
wp_reset_postdata();
endforeach; ?>
<!-- Offers Mini -->
<script src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=607&amp;locationId=7070885&amp;lang=en_UK&amp;display_version=2"></script>
<script>
	jQuery(document).ready(function($) {
		$('.offers-mini-carousel').flickity({
	// options
	cellAlign: 'left',
	contain: true,
	wrapAround: true,
	pageDots: false,
	prevNextButtons: false
	});
	jQuery(document).ready(function( $ ) {
		$('.previous-offers-mini').on( 'click', function() {
			$('.offers-mini-carousel').flickity( 'previous');
		});
		$('.next-offers-mini').on( 'click', function() {
			$('.offers-mini-carousel').flickity( 'next');
		});
	});
});
</script>
<script>
	var input = document.querySelectorAll('span input');
	for(i=0; i<input.length; i++){
	input[i].setAttribute('size',input[i].getAttribute('placeholder').length);
	}
</script>
<?php get_footer(); ?>