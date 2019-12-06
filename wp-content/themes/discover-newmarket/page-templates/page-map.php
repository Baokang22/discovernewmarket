<?php /*Template Name: Map */ get_header(); ?>
<?php get_template_part( 'inc/map/map'); ?>
<!-- Map -->
<img class="clip-grey-map " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="map-filters">
	<div class="container container-color">
		<div class="row">
			<div class="col-md-12">
				<div class="filter-wrap">
					<div class="filter-options">
						<p>Refine your map search by ...</p>
						<div class="wrap-fgs">
							<?php $terms = get_terms( 'category', 'parent=0' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
							<div class="filter-cat filters">
								<?php foreach ( $terms as $term ) {
									echo '<a href="#" data-filterby="type" data-filtervalue="' . $term->slug . '_marker">' . $term->name . '</a>';
								}
								} ?>
							</div>
							<a href="#" data-filterby="type" data-filtervalue="*" class="pink-btn">view all</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<img class="clip-grey-map-bottom " src="<?php echo get_template_directory_uri(); ?>/images/slants/grey-bottom.png" class="img-responsive" alt="">
<script>
</script>
<!-- Map Render -->
<?php get_template_part( 'inc/map/map-render'); ?>
<!-- Map Render -->
<?php get_footer(); ?>