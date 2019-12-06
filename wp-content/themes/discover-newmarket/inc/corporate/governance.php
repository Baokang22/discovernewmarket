<section class="governance clip-path-latest-news">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<div class="governance-carousel">
					<?php while( have_rows('governance_carousels') ): the_row();
					$carouselitemtitle = get_sub_field('carousel_item_title');
					$carouselcontent = get_sub_field('carousel_item_content');
					$carouselimage = get_sub_field('carousel_item_image');
					?>
					
					<div class="carousel-item">
						<div class="carousel-content">
							<h3><?php echo $carouselitemtitle; ?></h3>
							<p>
								<?php echo $carouselcontent ?>
							</p>
						</div>
						<div class="carousel-image">
							<img src="<?php echo $carouselimage; ?>" class="img-responsive" alt="Carousel Image"/>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>

	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="carousel-controls-custom">
				<div class="previous-small-governance">
					<img src="<?php echo get_template_directory_uri(); ?>/images/png/small-previous.png" class="img-responsive large--previous" alt="Previous"/>
				</div>
				<div class="next-small-governance">
					<img src="<?php echo get_template_directory_uri(); ?>/images/png/small-next.png" class="img-responsive large--next" alt="Next"/>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script>
	jQuery(document).ready(function($) {
		$('.governance-carousel').flickity({
// options
cellAlign: 'left',
contain: false,
pageDots: false,
prevNextButtons: false
});
		jQuery(document).ready(function( $ ) {
			$('.previous-small-governance').on( 'click', function() {
				$('.governance-carousel').flickity( 'previous');
			});
			$('.next-small-governance').on( 'click', function() {
				$('.governance-carousel').flickity( 'next');
			});
		});
	});
</script>