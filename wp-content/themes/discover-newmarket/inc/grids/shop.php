<?php get_template_part( 'inc/map/map-individual'); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="things-to-do offers ">
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
                <div class="filters" style="margin-top:10rem;">
                    <?php $terms = get_terms( 'category', 'child_of=8' );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                    foreach ( $terms as $term ) {
                    echo '<li><a href="#/" data-filter=".' . $term->slug . '">' . $term->name . '</a></li>';
                    }
                    } ?>
                    <li><a data-filter="*" href="#">[view all]</a></li>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-12">
                <div id="content" class="to-do-grid">
                    <?php
                    $args = array( 'posts_per_page' => 9999,
                    'post_type' => 'places',
                    'category_name' => 'shop',
                    'post_status' => 'publish',
                    'order'    => 'DESC'
                    );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'child_of=8', array("fields" => "shop")); ?>
                    <div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
                        <div class="icon">
                        <?php /* 
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Shop-icon.png" class="img-responsive" alt="Eat" />
                        */ ?>
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
                                
                            <a href="<?php echo get_permalink(); ?>#mapIndividual">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="Pin" />
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();?>
                </div>
                <!-- Mobile -->
                <?php /* 
                <div class="to-do-grid-mobile hidden-md hidden-lg">
                    <?php
                    $args = array( 'posts_per_page' => 2,
                    'post_type' => 'places',
                    'category_name' => 'shop',
                    'post_status' => 'publish',
                    'order'    => 'DESC');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'child_of=8', array("fields" => "all")); ?>
                    <div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Shop-icon.png" class="img-responsive" alt="Eat" />
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
                */ ?>
                <!-- Mobile -->
            </div>
        </div>
    </div>
</section>

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
<?php /* get_template_part( 'inc/ajax-loader/shop-loader/ajax-action'); */ ?>