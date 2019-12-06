<?php
add_action('wp_ajax_nopriv_eat_loader_ajax', 'eat_loader_ajax');
add_action('wp_ajax_eat_loader_ajax', 'eat_loader_ajax');

function eat_loader_ajax(){
    $offset = $_POST["offset"];
    $ppp = $_POST["ppp"];
    header("Content-Type: text/html");

    $args2 = array( 
        'posts_per_page' => $ppp,
        'offset' => $offset,
        'post_type' => 'places',
        'category_name' => 'eat',
            'post_status' => 'publish', 
        'orderby'   => 'menu_order',
        'order'    => 'DESC'
        );
    $custom2 = new WP_Query($args2);
    while ($custom2->have_posts()) : $custom2->the_post();
    ?>
    <?php $category_todo = wp_get_post_terms($post->ID, 'category', 'child_of=8', array("fields" => "shop")); ?>
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

                <img data-toggle="modal" data-target="#location-box-<?php echo $post->ID; ?>" src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin.png" class="img-responsive" alt="location" />

                <!-- Location Box -->
                <div id="location-box-<?php echo $post->ID; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><?php the_title(); ?></h4>
                            </div>
                            <div class="modal-body">
                                <div class="map">
                                    <?php get_template_part( 'inc/map/map-render-individual'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Location Box -->
            </div>
        </div>
    </div>
<?php endwhile;
wp_reset_postdata();
exit;
}
