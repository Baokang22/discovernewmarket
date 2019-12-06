<?php get_template_part( 'inc/map/map-individual'); ?>
<img class="clip-path-news" src="<?php echo get_template_directory_uri(); ?>/images/slants/top-dark-blue.png" class="img-responsive" alt="">
<section class="things-to-do test-news latest-news ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="content" class="to-do-grid ">
                    <?php $args = array(
                    'posts_per_page' => 8,
                    'post_type' => 'latest_news',
                    'orderby'   => 'date',
                    'order'    => 'DESC',
                    'post_status' => 'publish'
                    );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="carousel-cell to-do-box" data-match-height="true">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/news-icon.png" class="img-responsive" alt="Eat" />
                        </div>
                        <div class="image">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="content-box">
                            <h4>Latest News</h4>
                            <a href="#" class="title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </a>
                            <p class="excerpt">
                                <?php the_excerpt(); ?>
                            </p>
                            <p class="date"><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
                <!-- Mobile -->
                <div class="to-do-grid-mobile hidden-md hidden-lg hidden-xs hidden-sm">
                    <?php
                    $args = array( 'posts_per_page' => 2,
                    'post_type' => 'places',
                    'category_name' => 'eat',
                    'orderby'   => 'menu_order',
                    'order'    => 'DESC');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'child_of=9', array("fields" => "all")); ?>
                    <div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/to-eat.png" class="img-responsive" alt="Eat" />
                        </div>
                        <div class="image">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="Pi" />
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();?>
                </div>
                <!-- Mobile -->
            </div>
        </div>
    </div>
    <?php get_template_part( 'inc/ajax-loader/latest-news-loader/ajax-action'); ?>
</section>
<img class="clip-path-news-bottom" src="<?php echo get_template_directory_uri(); ?>/images/slants/blue-bottom.png" class="img-responsive" alt="">
<script>
jQuery(document).ready(function($) {
$grid = $('.to-do-grid').isotope({
itemSelector: '.to-do-box',
layoutMode: 'packery',
packery: {
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
