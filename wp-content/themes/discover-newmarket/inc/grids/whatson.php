<?php get_template_part( 'inc/map/map-individual'); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="things-to-do ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(get_field('intro_paragraph')) : ?>
                <?php the_field('intro_paragraph'); ?>
                <?php endif; ?>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-12">
                <div id="content" class="to-do-grid">
                    <?php
                    
                    $args = array( 'posts_per_page' => 9999,
                    'post_type' => 'places',
                    'category_name' => 'things_to_do',
                    'post_status' => 'publish',
                    'orderby' => 'menu_order', 
                    //'order'    => 'ASC'
                    );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    
                    <?php $months = get_field('event_months'); 
                          $featured = get_field('featured_post');
                          $post_title = $post->post_name;
                    ?>
                    
                    <div class="to-do-box  data-match-height="true">
                        <div class="icon">
                        <?php /* 
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Whats-On-icon.png" class="img-responsive" alt="Tour" />
                            */ ?>
                        </div>
                        <div class="image">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="content-box <?php if($featured){
                                echo 'content-box-featured';
                            } ?>">
                            <a href="<?php the_permalink(); ?>" class="title">
                                <?php the_title(); ?>
                            </a>
                            <p class="excerpt">
                                <?php the_excerpt(); ?>
                            </p>
                            <div class="location">
                                <?php if ($post_title == 'gift-vouchers') : ?>
                                <a class="book-now" target="_blank" href="<?php the_field('book_now_url'); ?>">Buy Now</a>
                                <a class="book-now" target="_blank" href="<?php the_permalink(); ?>">Find Out More</a>
                                <?php else : ?>
                                <a class="book-now" target="_blank" href="<?php the_field('book_now_url'); ?>">Book Now</a>
                                <a class="book-now" target="_blank" href="<?php the_permalink(); ?>">Find Out More</a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    
                    wp_reset_postdata();?>
                </div>
                <?php /*
                <!-- Mobile -->
                <div class="to-do-grid-mobile hidden-md hidden-lg">
                    <?php
                    $args = array( 'posts_per_page' => 2,
                    'post_type' => 'places',
                    'category_name' => 'eat',
                    'post_status' => 'publish',
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
                </div>*/ ?>
                <!-- Mobile -->
            </div>
        </div>
    </div>
</section>
<img class="clip-grey-bottom " src="<?php echo get_template_directory_uri(); ?>/images/slants/grey-bottom.png" class="img-responsive" alt="">
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

});
</script>
<?php get_template_part( 'inc/ajax-loader/eat-loader/ajax-action'); ?>