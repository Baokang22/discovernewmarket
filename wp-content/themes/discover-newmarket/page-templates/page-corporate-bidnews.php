<?php /*Template Name: C: BID News */  get_header('corporate'); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="bid-news">
	<div class="blueBack clip-path-co-bid-news">
		<div class="container">
			<div class="row">
				<div class="col-md-12 flex-news">
					<div class="co-page-titles">
						<h3>BID News</h3>
					</div>
					<div class="rightflex">
					
					<div class="filters">
					<span class="sortB">Sort by</span>
						<select>
							<option data-filter="*">View All</option>
							<?php $terms = get_terms( 'corporate_categories', 'parent=0' );
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
					<div class="bid-news-grid">
						
						<?php
						$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
						$loop = new WP_Query( array( 'post_type' => 'bid_news', 'posts_per_page' => 7, 'paged' => $paged ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $category_todo = wp_get_post_terms($post->ID, 'corporate_categories', 'parent=0'); ?>
						<div class="bid-news-box <?php foreach($category_todo as $category) { echo $category->slug; } ?>"  data-match-height="true">
							<div class="date_wrap"><?php echo get_the_date('j F Y');  ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/news.png" class="icon" />
							</div>
							<div class="content_wrap">
								<h2><?php the_title(); ?></h2>
								<?php $the_content = get_the_content();
								if (strlen($the_content) > 100) {
									$the_content = substr($the_content, 0, 97) . '...';
								}
								echo '<p>' . strip_tags($the_content) . '</p>';
								?>
							</div>
							<a href="<?php the_permalink(); ?> "><div class="pinkbutton">read more</div></a>
						</div>
						<?php endwhile; ?>
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
		$grid = $('.bid-news-grid').isotope({
			itemSelector: '.bid-news-box',
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