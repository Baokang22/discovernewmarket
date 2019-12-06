<section class="latest-jobs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-titles">
					<p>What's On</p>
					<h3>Latest Jobs</h3>
				</div>
			</div>
		</div>
		<div class="row padding-top-5x">
			<?php
			$args = array( 'posts_per_page' => 4,
				'post_type' => 'jobs',
				'orderby'   => 'menu_order',
				'order'    => 'DESC');
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="job-box">
					<p class="small">Jobs</p>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?>
					</p>
					<a href="<?php the_permalink(); ?>">view job</a>
				</div>
			</div>
			
		<?php endforeach;
		wp_reset_postdata();?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="view-all">
				
				<a href="<?php echo get_permalink(get_page_by_title('Jobs')); ?>" class="pink-btn">view all</a>
			</div>
		</div>
	</div>
</div>
</section>