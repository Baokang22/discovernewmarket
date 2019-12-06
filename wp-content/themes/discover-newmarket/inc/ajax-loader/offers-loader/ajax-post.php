<?php
add_action('wp_ajax_nopriv_offers_loader_ajax', 'offers_loader_ajax');
add_action('wp_ajax_offers_loader_ajax', 'offers_loader_ajax');

function offers_loader_ajax(){
    $offset = $_POST["offset"];
    $ppp = $_POST["ppp"];
    header("Content-Type: text/html");

    $args2 = array( 
        'posts_per_page' => $ppp,
        'offset' => $offset,
        'post_type' => 'special_offers',
        'post_status' => 'publish', 
        'orderby'   => 'menu_order',
        'order'    => 'DESC'
        );
    $custom2 = new WP_Query($args2);
    while ($custom2->have_posts()) : $custom2->the_post();
    ?>
   <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'parent=0' , array("fields" => "all")); ?>
                    <div class="offer-item <?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>" data-equal="true">
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
                        <div class="content-box" data-equal="true">
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
<?php endwhile;
wp_reset_postdata();
exit;
}
