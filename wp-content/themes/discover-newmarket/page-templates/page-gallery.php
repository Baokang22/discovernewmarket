<?php /*Template Name: Gallery*/ get_header(); ?>
<!-- Gallery -->
<?php get_template_part( 'inc/grids/gallery'); ?>
<!-- Gallery -->
<!-- Events -->

<section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-titles">
                        <p>Events</p>
                        <h3 class="hidden-xs"><?php the_title(); ?></h3>
                    </div>
                </div>
            </div>
            <div class="carousel-wrap hidden-xs hidden-sm">
                <div class="row">
                    
                    <div class="col-md-offset-2 col-md-10">
                        <div class="welcome-carousel">
                            <?php
                            $args = array( 'posts_per_page' => -1,
                            'post_type' => 'latest_events',
                            'orderby'   => 'menu_order',
                            'order'    => 'DESC');
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                            <div class="gallery-cell">
                                <div class="event-image">
                                    <div class="coming-when-box">
                                        
                                        
                                        <a data-fancybox="gallery" href="big_1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/png/triangle.png" class="img-responsive triangle" alt="Triangle"/></a>
                                        
                                        <p>Coming Soon</p>
                                        <span class="date">
                                            21 Aug
                                        </span>
                                        
                                    </div>
                                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                                </div>
                                <div class="event-content">
                                    <h1>
                                    <?php the_title(); ?>
                                    </h1>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;
                            wp_reset_postdata();?>
                            <div class="carousel-controls">
                                <div class="previous">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/png/previous.png" class="img-responsive button--previous-welcome" alt="Previous"/>
                                </div>
                                <div class="next">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/png/next.png" class="img-responsive button--next-welcome" alt="Next"/>
                                </div>
                             
                                
                            
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
        var $carousel = $('.welcome-carousel').flickity({
        // options
        cellSelector: ".gallery-cell",
        prevNextButtons: false,
        cellAlign: 'left',
        pageDots: true,
        wrapAround: true
        });
        jQuery(document).ready(function( $ ) {
        $('.button--previous-welcome').on( 'click', function() {
        $('.welcome-carousel').flickity( 'previous');
        });
        $('.button--next-welcome').on( 'click', function() {
        $('.welcome-carousel').flickity( 'next');
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
        cellAlign: 'left',
        pageDots: true,
        wrapAround: true
        });
    

        });

        </script>
<!-- Events -->
<?php get_footer(); ?>