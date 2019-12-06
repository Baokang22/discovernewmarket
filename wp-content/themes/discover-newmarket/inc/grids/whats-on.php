<?php get_template_part( 'inc/map/map-individual'); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="things-to-do what-on">
    <div class="container">

        <?php
            $datestart = date($_GET['datestart']);
            $enddate = date($_GET['enddate']);
        ?>
       
        <div class="row">
            <div class="col-md-12">
                <div class="search-container">
                    <form>
                        <label for="datestart">
                        Start Date
                            <input type="date" name="datestart" value="<?php echo $datestart; ?>">
                        </label>
                        <label for="enddate">
                        End Date
                            <input type="date" name="enddate" value="<?php echo $enddate; ?>">
                        </label>
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="to-do-grid">
                    <?php
                    $currentdate = date('Y-m-d');

                    if ( $datestart && !$enddate ) {
                        $args = array( 'posts_per_page' => -1,
                            'post_type' => 'whats-on',
                            'orderby'   => array(
                                'event_date'    => 'ASC',
                            ),
                            'meta_query' => array(
                                array(
                                    'key' => 'event_date',
                                    'value' => $datestart,
                                    'compare' => '>=',
                                    'type' => 'DATE'
                                )
                            )
                        );
                    }elseif( ($enddate && !$datestart) || ($datestart && $enddate) ){
                        $args = array( 'posts_per_page' => -1,
                            'post_type' => 'whats-on',
                            'orderby'   => array(
                                'event_date'    => 'ASC',
                            ),
                            'meta_query' => array(
                                'relation'  => 'AND',
                                array(
                                    'key'     => 'event_date',
                                    'compare' => 'EXISTS',
                                    'type'    => 'date'
                                ),
                                array(
                                    'key' => 'event_date_end',
                                    'value' => $enddate,
                                    'compare' => '<=',
                                    'type' => 'DATE'
                                )
                            )
                        );
                    }
                    // elseif( $datestart && $enddate ) {
                    //     $args = array( 'posts_per_page' => -1,
                    //         'post_type' => 'whats-on',
                    //         'orderby'   => array(
                    //             'event_date'    => 'ASC',
                    //         ),
                    //         'meta_query'=> array(
                    //             'relation'  => 'AND',
                    //             array (
                    //                 'key'   => 'event_date',
                    //                 // 'value' => $datestart,
                    //                 'compare' => 'EXISTS',
                    //                 'type'  => 'date'
                    //             ),
                    //             array (
                    //                 'key'   => 'event_date_end',
                    //                 'value' => $enddate,
                    //                 'compare' => '<=',
                    //                 'type'  => 'date'
                    //             )
                    //         ),
                    //     );
                    // }
                    else {
                        $args = array( 'posts_per_page' => -1,
                            'post_type' => 'whats-on',
                            // 'orderby'   => 'menu_order',
                            'orderby'   => array(
                                'event_date'    => 'ASC',
                            ),
                            // 'order'     => 'ASC',
                            'meta_query' => array(
                                'relation'  => 'AND',
                                array(
                                    'key'     => 'event_date',
                                    'compare' => 'EXISTS',
                                    'type'    => 'date'
                                ),
                                array(
                                    'key'     => 'event_date_end',
                                    'value'   => $currentdate,
                                    'compare' => '>=',
                                    'type'    => 'date'
                                )
                            )
                        );
                    }
                    $myposts = get_posts( $args );
                    if( $myposts ):
                    foreach ( $myposts as $post ): setup_postdata( $post ); ?>
                    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'child_of=14', array("fields" => "whats-on")); ?>
                    <div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
                        <div class="icon">
                            <div class="date">
                                <h3><?php the_field('event_date'); ?></h3> -
                                <h3><?php the_field('event_date_end'); ?></h3>
                            </div>
                            
                        </div>
                        <div class="image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'featured-image-size', array( 'class' => 'img-responsive' ) ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="content-box">
                            <a href="<?php the_permalink(); ?>" class="title">
                                <?php the_title(); ?>
                            </a>
                            <p class="excerpt">
                                <?php the_excerpt(); ?>
                            </p>
                            <div class="location">    
                                <a class="book-now" href="<?php the_permalink() ?>">Find Out More</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    else: ?>
                    <h2 style="text-align:center;">Events not found</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $grid = $('.to-do-grid').isotope({
            itemSelector: '.to-do-box',
            layoutMode: 'masonry',
            masonry: {
                gutter: 20
            }
        });
//Allows images to load before isotope grid loads
$grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
});
$('.filters').on('click', 'a', function() {
    event.preventDefault();
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({
        filter: filterValue
    });
});
});
</script>

