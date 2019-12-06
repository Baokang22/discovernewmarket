<?php
add_action('wp_ajax_nopriv_latest_news_loader_ajax', 'latest_news_loader_ajax');
add_action('wp_ajax_latest_news_loader_ajax', 'latest_news_loader_ajax');

function latest_news_loader_ajax(){
    $offset = $_POST["offset"];
    $ppp = $_POST["ppp"];
    header("Content-Type: text/html");

    $args2 = array( 
        'posts_per_page' => $ppp,
        'offset' => $offset,
        'post_type' => 'latest_news',
        'orderby'   => 'menu_order',
            'post_status' => 'publish', 
        'order'    => 'DESC',
        'post_status' => 'publish'
        );
    $custom2 = new WP_Query($args2);
    while ($custom2->have_posts()) : $custom2->the_post();
    ?>
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
<?php endwhile;
wp_reset_postdata();
exit;
}
