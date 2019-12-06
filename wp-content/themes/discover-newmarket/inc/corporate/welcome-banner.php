<?php $user = wp_get_current_user();?>
<?php $user_val = $user->data->user_nicename; ?>

<section class="welcome corporate">
    <div class="container">
        <?php if ($user_val == 'corporate'): ?>
        <div class="carousel-wrap ">
    <?php else : ?>
        <div class="carousel-wrap hidden-xs hidden-sm">
    <?php endif; ?>
            <div class="row">
                <div class="col-md-offset-2 col-md-7">
                    <div class="welcome-carousel">
                        <?php while( have_rows('welcome_carousels_corporate') ): the_row();
                        $carouselitemtitle = get_sub_field('carousel_item_title');
                        $carouselcontent = get_sub_field('carousel_content');
                        ?>
                        <div class="gallery-cell corporate">
                            <h3><?php echo $carouselitemtitle; ?></h3>
                            <p><?php echo $carouselcontent; ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="carousel-controls-custom">
                    <div class="previous-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/png/small-previous.png" class="img-responsive large--previous" alt="Previous"/>
                    </div>
                    <div class="next-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/png/small-next.png" class="img-responsive large--next" alt="Next"/>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="download-brochure">
                    <p>Download the</p>
                    <h3>Members Newsletter</h3>
                     <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/png/brochure-download.png" class="img-responsive large--previous" alt="Previous"/></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Events -->
    <?php if ($user_val == 'corporate'): ?>
        <?php //do nothing ?>
    <?php else : ?>
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
    <?php endif; ?>
<!-- Mobile Events -->
</div>
</section>
<script>
    jQuery(document).ready(function($) {
        $('.welcome-carousel').flickity({
// options
cellAlign: 'center',
contain: false,
wrapAround: true,
pageDots: false,
prevNextButtons: false
});
jQuery(document).ready(function( $ ) {
$('.previous-small').on( 'click', function() {
$('.welcome-carousel').flickity( 'previous');
});
$('.next-small').on( 'click', function() {
$('.welcome-carousel').flickity( 'next');
});
});
});
</script>