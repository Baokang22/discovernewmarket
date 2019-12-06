<?php /* 

$args = array( 'posts_per_page' => -1,
'post_type' => 'latest_news',
'orderby'   => 'menu_order',
'order'    => 'DESC');
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<div class="carousel-cell" data-match-height="true">
	<div class="icon">
		<img src="<?php echo get_template_directory_uri(); ?>/images/png/news-icon.png" class="img-responsive" alt="Eat" />
	</div>
	<div class="image">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
		</a>
		<?php endif; ?>
	</div>
	<div class="content-box" data-match-height="true">
		<h4>Latest News</h4>
		<a href="#" class="title">
			<?php the_title(); ?>
		</a>
		<p class="excerpt">
			<?php the_excerpt(); ?>
		</p>
	</div>
</div>
<?php endforeach;
wp_reset_postdata(); */ ?>

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

<?php if( $related_news ): ?>
  <?php  foreach( $related_news as $post ): ?>


    <div class="carousel-cell" data-match-height="true">
	<div class="icon">
		<img src="<?php echo get_template_directory_uri(); ?>/images/png/news-icon.png" class="img-responsive" alt="Eat" />
	</div>
	<div class="image">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
		</a>
		<?php endif; ?>
	</div>
	<div class="content-box" data-match-height="true">
		<h4>Latest News</h4>
		<a href="#" class="title">
			<?php the_title(); ?>
		</a>
		<p class="excerpt">
			<?php the_excerpt(); ?>
		</p>
	</div>
</div>


<?php
wp_reset_postdata();
endforeach;
?>
<?php else : ?>
	<div class="carousel-cell" data-match-height="true">
    
   
       <img src="<?php echo get_template_directory_uri(); ?>/images/png/news-placeholder.png" class="img-responsive" alt="Placeholder">
    
</div>
<?php endif;  ?>





<!-- News Mini -->
<script>
jQuery(document).ready(function($) {
$('.news-mini-carousel').flickity({
// options
cellAlign: 'left',
contain: true,
autoPlay: true,
wrapAround: true,
pageDots: false,
prevNextButtons: false
});
jQuery(document).ready(function( $ ) {
$('.previous-news-mini').on( 'click', function() {
$('.news-mini-carousel').flickity( 'previous');
});
$('.next-news-mini').on( 'click', function() {
$('.news-mini-carousel').flickity( 'next');
});
});
});
</script>