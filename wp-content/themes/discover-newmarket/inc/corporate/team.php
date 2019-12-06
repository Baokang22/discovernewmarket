<section class="the-team clip-path-main-car">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>The Team</h1>
				<div class="team-carousel">
					<?php
					$args = array( 'posts_per_page' => -1,
					'post_type' => 'the_team',
					'orderby'   => 'menu_order',
					'order'    => 'ASC');
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="team-member">
						<div class="member-picture">
								<div class="team-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-icon.png" class="img-responsive" alt="Next"/>
							</div>
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="member-content">
							<p class="white"><?php the_title(); ?></p>
							<p class="job-title"><?php the_field('job_title'); ?></p>
							<a href="mailto: <?php the_field('team_email'); ?>" class="mail"><?php the_field('team_email'); ?></a>
						</div>
					</div>
					<?php endforeach;
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="carousel-controls-custom pull-right">
					<div class="previous-small-team">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/small-previous.png" class="img-responsive large--previous" alt="Previous"/>
					</div>
					<div class="next-small-team">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/small-next.png" class="img-responsive large--next" alt="Next"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
jQuery(document).ready(function($) {
$('.team-carousel').flickity({
// options
cellAlign: 'left',
contain: false,
pageDots: false,
prevNextButtons: false
});
jQuery(document).ready(function( $ ) {
$('.previous-small-team').on( 'click', function() {
$('.team-carousel').flickity( 'previous');
});
$('.next-small-team').on( 'click', function() {
$('.team-carousel').flickity( 'next');
});
});
});
</script>