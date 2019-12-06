<?php /*Template Name: C: BID Events */  get_header('corporate'); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="bid-events">
	<div class="blueBack clip-path-co-bid-news">
		<div class="container">
			<div class="row">
				<div class="col-md-12 flex-news">
					<div class="co-page-titles">
						<h3>BID Events</h3>
					</div>
					<div class="rightflex">

						<div class="filters">
							<span class="sortB">Sort by</span>
							<select>
								<option data-filter="*">View All</option>
								<?php $terms = get_terms( 'corporate_events_categories', 'parent=0' );
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
									foreach ( $terms as $term ) {
										echo '<option data-filter=".' . $term->slug . '">' . $term->name . '</option>';
									}
								} ?>
								
							</select>
						</div>
						<nav class="prev-next-posts-top">
						</nav>
					</div>
				</div>
				<div class="col-md-12">
					<div class="bid-events-grid">
						
						<?php
						$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
						$loop = new WP_Query( array( 'post_type' => 'bid_events', 'posts_per_page' => 7, 'paged' => $paged ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $category_todo = wp_get_post_terms($post->ID, 'corporate_events_categories', 'parent=0'); ?>
						<div class="bid-events-box <?php foreach($category_todo as $category) { echo $category->slug; } ?>"  data-match-height="true">
							<div class="row">
								
								<div class="col-md-3">
									<div class="date-bubble">
										<div class="bubble-date">
											<span>Coming Soon</span>
											<?php echo get_the_date('j M'); ?>
										</div>
										<img src="<?php echo get_template_directory_uri().'/images/png/bubble.png'; ?>" />
									</div>
									<?php $imageArray = get_field('images');
									$thumbnail = wp_get_attachment_image($imageArray[0]['image_select'], 'events');
									?>
									<span class="bidevents-img">
									<?php echo $thumbnail; ?>
									</span>
								</div>
								<div class="col-md-8">
									<div class="content_wrap">
										<p><?php the_field('subtitle'); ?></p>
										<h2><?php the_title(); ?></h2>
										<?php $the_content = get_the_content();
										if (strlen($the_content) > 650) {
											$the_content = substr($the_content, 0, 647) . '...';
										}
										echo '<p>' . strip_tags($the_content) . '</p>';
										?>
										<a href="<?php the_permalink(); ?> "><div class="pinkbutton">read more</div></a>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>
						<?php endwhile;  wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-12">
					<nav class="prev-next-posts">
						<?php
						previous_posts_link( '<img src="'.get_template_directory_uri().'/images/png/small-previous.png" class="prev" />' );
						next_posts_link( '<img src="'.get_template_directory_uri().'/images/png/small-next.png" />', $loop->max_num_pages);
						wp_reset_query(); ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($) {
		$(function(){
			var $button = $('.prev-next-posts').clone();
			$('.prev-next-posts-top').html($button);
		});
		$grid = $('.bid-events-grid').isotope({
			itemSelector: '.bid-events-box',
			layoutMode: 'packery',
			packery: {
				gutter: 20
			}
		});
//Allows images to load before isotope grid loads
$grid.imagesLoaded().progress( function() {
$grid.isotope('layout');
});
$('.filters select').on('change', function() {
var attr = $('option:selected', this).attr('data-filter');
var filterValue = attr;
$grid.isotope({
	filter: filterValue
});
});
});
</script>
<?php endwhile; ?>
<?php get_footer(); ?>