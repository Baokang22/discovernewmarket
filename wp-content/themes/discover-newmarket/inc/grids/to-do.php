<?php get_template_part( 'inc/map/map-individual'); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="things-to-do ">
    <div class="container container-color">
        <div class="row">
        <div class="col-md-12">
            <?php if(get_field('intro_paragraph')) : ?>
                <?php the_field('intro_paragraph'); ?>
            <?php endif; ?>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <?php $terms = get_terms( 'category', 'child_of=25' );
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
                <div class="to-do-grid">
                    <?php
                    $args = array( 'posts_per_page' => 9999,
                    'post_type' => 'places',
                    'category_name' => 'things_to_do',
                    'post_status' => 'publish',
                    'orderby' => 'title',
                    'order'    => 'ASC'
                    );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'child_of=25', array("fields" => "eat")); ?>
                    <div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
                        <div class="icon">
                        <?php /* 
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Whats-On-icon.png" class="img-responsive" alt="Eat" />
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
                               <?php echo wp_trim_words(get_the_excerpt(),10, '...') ; ?>
                            </p>
                            <div class="location">
                                <a href="<?php echo get_permalink(); ?>#mapIndividual"></a>
                               <img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="Pin" />
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
                    'category_name' => 'things-to-do',
                    'post_status' => 'publish',
                    'order'    => 'DESC');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'child_of=25', array("fields" => "all")); ?>
                    <div class="to-do-box <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  data-match-height="true">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/Whats-On-icon.png" class="img-responsive" alt="Eat" />
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
                                <?php echo wp_trim_words(get_the_excerpt(),10, '...') ; ?>
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
$('.filters').on('click', 'a', function() {
event.preventDefault();
var filterValue = $(this).attr('data-filter');
$grid.isotope({
filter: filterValue
});
});
});
</script>