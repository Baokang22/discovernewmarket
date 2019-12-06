<?php get_header('corporate'); ?>
<?php while (have_posts()) : the_post();  ?>
<section class="bid-news-inner">
	<div class="blueBack clip-path-co-bid-news">
		<div class="container">
			<div class="row">
				<div class="col-md-12 flex-news">
					<div class="co-page-titles">
						<h3>Bid News</h3>
					</div>
					<div class="rightflex">
						
						<a href="/bid-news/"><div class="bListing">Back to listings</div></a>
						<div class="nav-wrapper">
							<?php previous_post_link('<img src="'.get_template_directory_uri().'/images/png/small-previous.png" class="prev" />'); ?>
							<?php next_post_link('<img src="'.get_template_directory_uri().'/images/png/small-next.png" />'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="news-bid-container">
						
						<div class="news-top">
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/news.png" class="icon" />
							<div class="blue-angle"><?php echo get_the_date('j F Y'); ?></div>
						</div>
						<div class="clear"></div>
						<div class="news-content-wrap">
							
							<h1><?php the_title(); ?></h1>
							<div class="wrap-coloum">
								
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 bottom-news-wrap">
					<div class="nav-wrapper">
						<?php previous_post_link('<img src="'.get_template_directory_uri().'/images/png/small-previous.png" class="prev" />'); ?>
						<?php next_post_link('<img src="'.get_template_directory_uri().'/images/png/small-next.png" />'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>