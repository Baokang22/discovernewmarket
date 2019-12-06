<div class="acf-map">
	<?php
	$args = array(
		'post_type' => 'places',
		'posts_per_page' => 9999
		);
	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<?php $location = get_field('map'); ?>
	<?php
	if( !empty($location) ):
	$testarray = wp_get_post_terms($post->ID, 'category'); ?>
	<div class="marker" data-type="<?php echo $testarray[0]->slug . $testarray[1]->slug  .'_marker';  ?>" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
		<?php //print_r($post); ?>
		<div id="iw-container">
			<img src="<?php echo get_template_directory_uri().'/images/png/for_map_use/'.$testarray[0]->slug.'.png'; ?>" class="mapIcon" />
			<h3>
			<?php
			$posttitle = $post->post_title;
			
			echo $posttitle;
			?>
			</h3>
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
						));
			?>
			<?php
					$news = get_posts(array(
						'post_type' => 'latest_news',
						'meta_query' => array(
							array(
						'key' => 'testtest', // name of custom field
						'value' => '"' . get_the_ID() . '"',
						'compare' => 'LIKE'
						)
							)
						));
			?>

			<?php if( $special_offers ): ?>
			<?php $count_offers = count($special_offers); ?>
			<?php endif;
			?>
			<?php if($news) : ?>
			<?php $count_news = count($news); ?>
			<?php endif;
			?>
			<p class="offer-text"><?php echo $count_offers; ?> Offers / <?php echo  $count_news ?> News</p>
			
			<img src="<?php the_post_thumbnail_url( 'mapimg' ); ?>" class="mapimg"/>
			<a href="<?php the_permalink(); ?>" class="find-out-more">Find out more</a>
		</div>
	</div>
	<?php endif; ?>
	<?php endforeach; wp_reset_postdata();?>
</div>
<style type="text/css">
	.mapIcon {
		position: absolute;
		top: 1.5rem;
		right:-1rem;
	}
	#iw-container {
		color: #fff;
		font-family: 'aleoregular', sans-serif;
		position: relative;
		height: 17.5rem;
	}
	#iw-container h3{
		font-size: 1.5rem;
		width: 75%;
	}
	.offer-text {
		color: #60bcee;
	}
	.find-out-more {
		color: #dc3b94;
		font-size:1.4rem;
		position: absolute;
		bottom: 0.3rem;
	}
	.mapimg {
		display: block;
		margin-top: 1rem;
	}
</style>