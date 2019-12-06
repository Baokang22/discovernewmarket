<?php get_template_part( 'inc/map/map-individual'); ?>
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png"
    class="img-responsive" alt="">
<section class="things-to-do ">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 30px;">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="content" class="to-do-grid">
                    <?php
$loop = new WP_Query( array(
    'post_type' => 'post_type_trainers',
    'posts_per_page' => -1
  )
);
?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="to-do-box">
                        <div class="image">
                            <?php $image = get_field('trainer_image'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        </div>

                        <div class="content-box" style="min-height: 20rem;">
                            <h3><a href="<?php the_field('link_to_trainer');?>"><?php the_title();?></a></h3>
                            <p class=" excerpt">
                            </p>
                            <h4 style="margin-top: 0; color: #b6e455;"> <?php the_field('yard_name');?></h4>
                            <p> <?php the_field('trainer_bio');?></p>
                            <p></p>
                            <div class="location">
                                <a class="book-now" target="_blank" href="<?php the_field('link_to_trainer');?>">Find
                                    Out More</a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_query(); ?>
                </div>

            </div>
        </div>
    </div>
</section>
<img class="clip-grey-bottom " src="<?php echo get_template_directory_uri(); ?>/images/slants/grey-bottom.png"
    class="img-responsive" alt="">
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
    $grid.imagesLoaded().progress(function() {
        $grid.isotope('layout');
    });
    $('.filter-button-group').on('click', 'button', function(event) {
        event.preventDefault();
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
});
</script>
<?php get_template_part( 'inc/ajax-loader/eat-loader/ajax-action'); ?>