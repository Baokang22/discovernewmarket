<?php get_template_part( 'inc/map/map-individual'); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="things-to-do ">
    <div class="container container-color">
        <div class="row">
            <div class="col-md-12">
                
                <div class="filters" style="opacity: 1;">
                    <li><a href="<?php echo get_permalink (get_page_by_title('Tours')); ?>">Tours</a></li>
                    <li><a href="<?php echo get_permalink (get_page_by_title('Stay')); ?>">Stay</a></li>
                    <li><a href="<?php echo get_permalink (get_page_by_title('Eat')); ?>">Eat</a></li>
                    <li><a href="<?php echo get_permalink (get_page_by_title('Attractions')); ?>">Attractions</a></li>
                    
                    <?php /* <?php $terms = get_terms( 'category', 'parent=0' );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                    foreach ( $terms as $term ) {
                    echo '<li><a href="#/" data-filter=".' . $term->slug . '">' . $term->name . '</a></li>';
                    }
                    } ?>
                    <li><a data-filter="*" href="#">[view all]</a></li>*/ ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div id="content" class="to-do-grid " >
                    <?php
                    $args = array( 'posts_per_page' => 8,
                    'post_type' => 'places',
                    
                    'order'    => 'DESC',
                    'post_status' => 'publish',
                    'meta_query' => array(
                    array(
                    'key' => 'sticky_post',
                    'compare' => '==',
                    'value' => '1'
                    )
                    )
                    );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'parent=0', array("fields" => "all")); 
                        $featured = get_field('featured_post');
                    ?>
                    <div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
                        <div class="icon">
                            <?php if($category->slug == 'eat') :  ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/to-eat.png" class="img-responsive" alt="Eat" />
                            
                            <?php elseif($category->slug == 'business') : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Business-icon.png" class="img-responsive" alt="Business" />
                            <?php elseif($category->slug == 'shop') : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Shop-icon.png" class="img-responsive" alt="Shop" />
                            
                            <?php elseif($category->slug == 'stay') : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Stay-icon.png" class="img-responsive" alt="Shop" />
                            <?php elseif($category->slug == 'things_to_do') : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Whats-On-icon.png" class="img-responsive" alt="Shop" />
                            <?php endif ; ?>
                        </div>
                        <div class="image"  >
                            <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="content-box <?php if($featured){
                                echo 'content-box-featured';
                            } ?>"  >
                            <a href="<?php the_permalink(); ?>" class="title">
                                <?php the_title(); ?>
                            </a>
                            <p class="excerpt">
                                <?php the_excerpt(); ?>
                            </p>
                            <div class="location">
                                <a class="book-now" target="_blank" href="<?php the_field('book_now_url'); ?>">Book Now</a>
                                <a class="book-now" target="_blank" href="<?php the_permalink(); ?>">Find Out More</a>
                                <?php 
                                    /*<a href="<?php echo get_permalink(); ?>#mapIndividual">
                                    <img data-toggle="modal" data-target="#location-box-<?php echo $post->ID; ?>" src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="location" /> */
                                 ?>
                            
                               
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();?>
                </div>
               
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'inc/misc/view-all');  ?>
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
// $('.filters').on('click', 'a', function() {
//     event.preventDefault();
//     var filterValue = $(this).attr('data-filter');
//     $grid.isotope({
//         filter: filterValue
//     });
// });
});
</script>
<?php /* get_template_part( 'inc/ajax-loader/things-to-do-loader/ajax-action'); AJAX load more */ ?>