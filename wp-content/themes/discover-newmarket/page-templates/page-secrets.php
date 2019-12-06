<?php /*Template Name: Local Secrets */ get_header(); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="local-secrets">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-10">
				<div class="row">
					<div class="col-md-2">
						
					</div>
					<div class="col-md-10">
						
					</div>
				</div>
				<div class="secret-wrap">
					<?php
					$args = array( 'posts_per_page' => -1,
						'post_type' => 'secrets',
						'orderby'   => 'menu_order',
						'order'    => 'DESC');
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="secret-inner">
						<div class="image">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'secret-image', array( 'class' => 'img-responsive' ) ); ?></a>
						</div>
						<div class="content">
						<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
						<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
						</div>
					</div>
					<?php endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- Latest News -->
<?php get_template_part( 'inc/carousels/news'); ?>
<!-- Latest News -->
<!-- Talk of the Town -->
<div class="hidden-xs">
<?php get_template_part( 'inc/feeds/social-feed'); ?>
<!-- Talk of the Town -->
</div>
<?php get_footer(); ?>