<img class="clip-path-news" src="<?php echo get_template_directory_uri(); ?>/images/slants/top-dark-blue.png" class="img-responsive" alt="">
<section class="test-news ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-titles">
                    <!-- <p>What's On</p> -->
                    <h3>Latest News</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-test">
                    <?php $args = array( 'posts_per_page' => 8,
                        'post_type' => 'latest_news',
                        'orderby'   => 'date',
                        'order'    => 'DESC');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="carousel-cell">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/news-icon.png" class="img-responsive" alt="Eat" />
                        </div>
                        <div class="image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="content-box" data-equal="true">
                            <h4>Latest News</h4>
                            <p><?php the_date(); ?></p>
                            <a href="#" class="title">
                                <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                </a>
                            </a>
                            <p class="excerpt">
                                <?php the_excerpt(); ?>

                            </p>

                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
                <div class="carousel-controls">
                    <div class="previous">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/png/previous.png" class="img-responsive button--previous-news" alt="Previous"/>
                    </div>
                    <div class="next">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/png/next.png" class="img-responsive button--next-news" alt="Next"/>
                    </div>
                    <?php if (is_front_page()) : ?>
                    <?php else:  ?>
                        <div class="button">
                            <a href="#" class="blue-btn">view all</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<img class="clip-path-news-bottom" src="<?php echo get_template_directory_uri(); ?>/images/slants/blue-bottom.png" class="img-responsive" alt="">
<script>
    jQuery(document).ready(function($) {
        $('.carousel-test').flickity({
// options
cellSelector: ".carousel-cell",
cellAlign: 'left',
contain: true,
autoPlay: true,
wrapAround: true,
pageDots: false,
prevNextButtons: false
});
        jQuery(document).ready(function( $ ) {
            $('.button--previous-news').on( 'click', function() {
                $('.carousel-test').flickity( 'previous');
            });
            $('.button--next-news').on( 'click', function() {
                $('.carousel-test').flickity( 'next');
            });
        });
    });
</script>