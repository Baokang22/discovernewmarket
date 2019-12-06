<section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
            <div class="carousel-wrap hidden-xs hidden-sm">
                <div class="row">
                    
                    <div class="col-md-offset-2 col-md-10">
                        <div class="events-carousel-home">
                            <?php
                            $args = array( 'posts_per_page' => 9999,
                            'post_type' => 'latest_events',
                            'orderby' => 'date',
                            'order'    => 'ASC');
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                            <div class="gallery-cell">
                                <div class="event-image">
                                    <?php /*
                                    <div class="coming-when-box">
                                        
                                        
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/png/triangle.png" class="img-responsive triangle" alt="Triangle"/>
                                        
                                        <p>Coming Soon</p>
                                        <span class="date">
                                            <?php the_field('event_date'); ?>
                                        </span>
                                        
                                    </div>
                                    */ ?>
                                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                                </div>
                                <div class="event-content">
                                    <div class="page-titles">
                                        <p>Events</p>

                                    </div>
                                    <h1>
                                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                                    </h1>
                                    <p>
                                        <a href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?></a>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;
                            wp_reset_postdata();?>
                            <?php /* 
                            <div class="carousel-controls">
                                <div class="previous">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/png/previous.png" class="img-responsive button--previous-event" alt="Previous"/>
                                </div>
                                <div class="next">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/png/next.png" class="img-responsive button--next-event" alt="Next"/>
                                </div>
                                <?php if (is_front_page()) : ?>
                                <?php else:  ?>
                                <div class="button">
                                    <a href="<?php echo get_permalink(get_page_by_title('Events')); ?>" class="lightblue-btn">view all</a>
                                </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        */ ?>
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
        var $carousel = $('.events-carousel-home').flickity({
        // options
        cellSelector: ".gallery-cell",
        prevNextButtons: false,
        pageDots: true,
        wrapAround: true
        });
        jQuery(document).ready(function( $ ) {
        $('.button--previous-event').on( 'click', function() {
        $('.events-carousel').flickity( 'previous');
        });
        $('.button--next-event').on( 'click', function() {
        $('.events-carousel').flickity( 'next');
        });
        });
        });
        </script>
        <script>
        jQuery(document).ready(function($) {
        var $carousel = $('.events-mobile').flickity({
        // options
        cellSelector: ".gallery-cell",
        prevNextButtons: false,
        autoPlay: true,
        cellAlign: 'left',
        pageDots: true,
        wrapAround: true
        });
        
        });
        </script>