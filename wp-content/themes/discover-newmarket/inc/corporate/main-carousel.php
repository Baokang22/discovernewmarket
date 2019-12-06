<?php// if( have_rows('carousel_images') ): ?>
<div class="relative ">
<section class="test-carousel clip-path-main-car corporate">
    <div class="container-fluid flush">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-wrap">
                    <div class="main-carousel">
                        <?php while( have_rows('carousel_images_corporate') ): the_row();
                        $image = get_sub_field('carousel_image');
                        $text = get_sub_field('carousel_text');
                        ?>
                        <div class="carousel-cell">
                            <img src="<?php echo $image?>" />
                            <div class="text">
                                <h1><?php echo $text; ?></h1>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="carousel-controls-custom">
                        <div class="previous">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/large-previous.png" class="img-responsive large--previous" alt="Previous"/>
                        </div>
                        <div class="next">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/next-large.png" class="img-responsive large--next" alt="Next"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</div>
<?php// endif; ?>
<script>
jQuery(document).ready(function($) {
$('.main-carousel').flickity({
// options
cellAlign: 'center',
contain: false,
wrapAround: true,
pageDots: false,
prevNextButtons: false
});
jQuery(document).ready(function( $ ) {
$('.large--previous').on( 'click', function() {
$('.main-carousel').flickity( 'previous');
});
$('.large--next').on( 'click', function() {
$('.main-carousel').flickity( 'next');
});
});
});
</script>