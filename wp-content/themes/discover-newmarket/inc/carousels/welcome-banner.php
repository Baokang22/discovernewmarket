<section class="welcome" >
    <div class="container">
        <div class="carousel-wrap hidden-xs hidden-sm">
            <div class="row">
                <div class="col-md-offset-2 col-md-7">
                    <div class="welcome-carousel">
                        <?php while( have_rows('welcome_carousels') ): the_row();
                        $carouselitemtitle = get_sub_field('carousel_item_title');
                        $carouselcontent = get_sub_field('carousel_content');
                        ?>
                        <div class="gallery-cell">
                            <h3><?php echo $carouselitemtitle; ?></h3>
                            <p><?php echo $carouselcontent; ?></p>
                            <?php /* CBA TO FIX THIS YET 
                            <div class="image">
                                                                 <img src="<?php echo get_template_directory_uri(); ?>/images/png/small-previous.png" class="img-responsive large--previous" alt="Previous"/>
                            </div>
                            */ ?>

                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="carousel-controls-custom">
                    <div class="previous-small-welcome-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/png/small-previous.png" class="img-responsive large--previous" alt="Previous"/>
                    </div>
                    <div class="next-small-welcome-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/png/small-next.png" class="img-responsive large--next" alt="Next"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Events -->
    <div class="carousel-wrap-mobile hidden-md hidden-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="events-mobile">
                    <?php
                    $args = array( 'posts_per_page' => -1,
                        'post_type' => 'latest_events',
                        'orderby'   => 'menu_order',
                        'order'    => 'DESC');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="gallery-cell">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Events -->
</div>
</section>
<script>
    jQuery(document).ready(function($) {
        $('.welcome-carousel').flickity({
// options
cellAlign: 'center',
contain: false,
autoPlay: true,
wrapAround: true,
pageDots: false,
prevNextButtons: false
});
jQuery(document).ready(function( $ ) {
$('.previous-small-welcome-small').on( 'click', function() {
$('.welcome-carousel').flickity( 'previous');
});
$('.next-small-welcome-small').on( 'click', function() {
$('.welcome-carousel').flickity( 'next');
});
});
});
</script>