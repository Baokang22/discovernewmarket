<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-titles">
					<p>Love Newmarket</p>
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
		</div>
		<?php /*<div class="row">
			<div class="col-md-12">
				<div class="gallery-filter-wrap">
					<div class="prev">
						<img class="gallery-previous" src="<?php echo get_template_directory_uri(); ?>/images/png/previous-smal.png"  alt="Previous"/>
					</div>
					<div class="filter-wrap">
						<div class="gallery-filters">
							<div class="filter-option"><a data-filter="*" href="#">All</a></div>
							<!-- Flickity Filters -->
							<?php $terms = get_terms( 'attachment-categories' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
							foreach ( $terms as $term ) { ?>
							<div class="filter-option">
								<?php  echo '<a href="#/" data-filter=".' . $term->slug . '">' . $term->name . '</a>';?>
							</div>
							<?php	} ?>
							<?php 	} ?>
							
						</div>
					</div>
					<div class="next">
						<img class="gallery-next" src="<?php echo get_template_directory_uri(); ?>/images/png/next-small.png"  alt="Next"/>
					</div>
				</div>
				
			</div> 
			
		</div>*/ ?>
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part( 'inc/ajax-loader/gallery-loader/ajax-action'); ?>
			</div>
		</div>
	</div>
</section>
<img class="clip-grey-bottom " src="<?php echo get_template_directory_uri(); ?>/images/slants/grey-bottom.png" class="img-responsive" alt="">
<script>
	jQuery(document).ready(function($) {
		$grid = $('.gallery-grid').isotope({
			itemSelector: '.gallery-item',
			layoutMode: 'packery',
			packery: {
				gutter: 15
			}
		});
		$('.filter-wrap').on('click', 'a', function() {
			event.preventDefault();
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({
				filter: filterValue
			});
		});
	});
</script>
<!-- Flickity -->
<script>
	jQuery(document).ready(function($) {
		$('.gallery-filters').flickity({

// options
cellSelector: ".filter-option",
cellAlign: 'left',
contain: true,
wrapAround: false,
pageDots: false,
prevNextButtons: false



});
		jQuery(document).ready(function( $ ) {
			$('.gallery-previous').on( 'click', function() {
				$('.gallery-filters').flickity( 'previous');
			});
			$('.gallery-next').on( 'click', function() {
				$('.gallery-filters').flickity( 'next');
			});
		});
	});
</script>