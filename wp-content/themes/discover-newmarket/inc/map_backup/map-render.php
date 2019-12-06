<div class="acf-map">
	<?php
	$args = array(
		'post_type' => 'places',
		'posts_per_page' => -1
		);
	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<?php $location = get_field('map'); ?>
	<?php $category_todo = wp_get_post_terms($post->ID, 'category', array("fields" => "all")); ?>
	<?php if( !empty($location) ): ?>
		<div class="marker <?php foreach($category_todo as $category) { echo $category->slug . '-marker'; }; ?>" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">

			<?php the_title(); ?>
			<p class="offer-text">2 offers / 3 news</p>
			<a href="<?php the_permalink(); ?>" class="find-out-more">find out more</a>

		</div>
	<?php endif; ?>
<?php endforeach; wp_reset_postdata();?>
</div>
<script>
	jQuery(document).ready(function($) {
		$(".manual-business").click(function(){
			$(".marker").toggleClass("hide");
		});
	});
</script>