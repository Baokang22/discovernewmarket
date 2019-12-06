
<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">
<section class="things-to-do offers">
	<div class="container">
	<div class="row">
            <div class="col-md-12">
                <?php if(get_field('intro_paragraph')) : ?>
                <?php the_field('intro_paragraph'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-md-12">-->
            <!--    <div class="button-group button-filter filter-button-group-two attractions" >-->
            <!--        <button data-filter=".under-50" class="active">Under £50zs</button>-->
            <!--        <button data-filter=".over-50">Over £50</button>-->
                    <!-- <button data-filter=".same">Over &amp; Under £50</button> -->

                    <!-- <button data-filter="*" class="active">View All</button> -->
            <!--    </div>-->
            <!--</div>-->
        </div>
		<div class="row">
			<div class="col-md-12">
				<div id="content" class="offer-grid">
					<?php
					$args = array( 'posts_per_page' => 9999,
						'post_type' => 'special_offers',
						'orderby'   => 'menu_order',
						'post_status' => 'publish' ,
						'order'    => 'DESC');
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<?php $category_todo = wp_get_post_terms($post->ID, 'category', 'parent=1' , array("fields" => "all")); ?>
					<?php $price = get_field('price');
                    ?>
					<div class="offer-item <?php if($price == 'under'){ echo 'under-50';} elseif ($price == 'over'){ echo 'over-50'; } else{
						echo 'same'; }
						 ?> data-equal="true">
						<div class="icon">
						<?php /*
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/Whats-On-icon.png" class="img-responsive" alt="Eat" />
						*/ ?>
						</div>
						<div class="image">
							<?php if ( has_post_thumbnail() ) : ?>

								<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>

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

				<?php endforeach;
				wp_reset_postdata();?>
			</div>
		</div>
	</div>
</div>
</section>
<?php get_template_part( 'inc/ajax-loader/offers-loader/ajax-action'); ?>
<script>
	jQuery(document).ready(function($) {
		$grid = $('.offer-grid').isotope({
			itemSelector: '.offer-item',
			layoutMode: 'packery',
			packery: {
				gutter: 20
			}
		});
		$('.filter-button-group-two').on('click', 'button', function(event) {
event.preventDefault();
var filterValue = $(this).attr('data-filter');
$grid.isotope({
filter: filterValue
});
});
	});
</script>
