<section class="the-board">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>The Board</h1>
				<div class="board-carousel">
				<?php
					$args = array( 'posts_per_page' => -1,
					'post_type' => 'board',
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
					

					<?php /*
					<div class="team-member">
						<div class="member-picture">
							<div class="team-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-icon.png" class="img-responsive" alt="Next"/>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-one.png" class="img-responsive" alt="Next"/>
						</div>
						<div class="member-content">
							<p class="white">Graham Philpot</p>
							<p class="job-title">BID Manager</p>
							<a href="mailto: " class="mail">graham.philpot@newmarketbid.com</a>
						</div>
					</div>
					<div class="team-member">
						<div class="member-picture">
							<div class="team-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-icon.png" class="img-responsive" alt="Next"/>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-one.png" class="img-responsive" alt="Next"/>
						</div>
						<div class="member-content">
							<p class="white">Graham Philpot</p>
							<p class="job-title">BID Manager</p>
							<a href="mailto: " class="mail">graham.philpot@newmarketbid.com</a>
						</div>
					</div>
					<div class="team-member">
						<div class="member-picture">
							<div class="team-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-icon.png" class="img-responsive" alt="Next"/>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-one.png" class="img-responsive" alt="Next"/>
						</div>
						<div class="member-content">
							<p class="white">Graham Philpot</p>
							<p class="job-title">BID Manager</p>
							<a href="mailto: " class="mail">graham.philpot@newmarketbid.com</a>
						</div>
					</div>
					<div class="team-member">
						<div class="member-picture">
							<div class="team-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-icon.png" class="img-responsive" alt="Next"/>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-one.png" class="img-responsive" alt="Next"/>
						</div>
						<div class="member-content">
							<p class="white">Graham Philpot</p>
							<p class="job-title">BID Manager</p>
							<a href="mailto: " class="mail">graham.philpot@newmarketbid.com</a>
						</div>
					</div>
					<div class="team-member">
						<div class="member-picture">
							<div class="team-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-icon.png" class="img-responsive" alt="Next"/>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/team-one.png" class="img-responsive" alt="Next"/>
						</div>
						<div class="member-content">
							<p class="white">Graham Philpot</p>
							<p class="job-title">BID Manager</p>
							<a href="mailto: " class="mail">graham.philpot@newmarketbid.com</a>
						</div>
					</div>
					 */ ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="carousel-controls-custom pull-right">
					<div class="previous-small-board">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/small-previous.png" class="img-responsive large--previous" alt="Previous"/>
					</div>
					<div class="next-small-board">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/small-next.png" class="img-responsive large--next" alt="Next"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
jQuery(document).ready(function($) {
$('.board-carousel').flickity({
// options
cellAlign: 'left',
contain: false,
pageDots: false,
prevNextButtons: false
});
jQuery(document).ready(function( $ ) {
$('.previous-small-board').on( 'click', function() {
$('.board-carousel').flickity( 'previous');
});
$('.next-small-board').on( 'click', function() {
$('.board-carousel').flickity( 'next');
});
});
});
</script>