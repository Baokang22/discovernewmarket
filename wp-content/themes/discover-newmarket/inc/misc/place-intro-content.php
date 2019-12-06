<?php
?>
<pre><?php print_r($count); ?></pre>
<section class="place-intro-content">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a class="pink-small pull-right" href="#" onclick="window.history.go(-1); return false;">Back to listings</a>
		</div>
	</div>
	<div class="row padding-top-5x">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="place-image" data-match-height="true">
				<?php $category_todo = wp_get_post_terms($post->ID, 'category', 'parent=0', array("fields" => "all")); ?>
				<div class="<?php foreach($category_todo as $category) { echo $category->slug . '  '; }; ?>"  >
					<div class="icon">
						<?php if($category->slug == 'eat') :  ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/to-eat.png" class="img-responsive" alt="Eat" />

						<?php elseif($category->slug == 'business') : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/Business-icon.png" class="img-responsive" alt="Business" />
						<?php elseif($category->slug == 'shop') : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/Shop-icon.png" class="img-responsive" alt="Shop" />

						<?php elseif($category->slug == 'stay') : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/Stay-icon.png" class="img-responsive" alt="Shop" />
						<?php elseif($category->slug == 'things_to_do') : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/Whats-On-icon.png" class="img-responsive" alt="Shop" />
						<?php endif ; ?>
					</div>
				</div>


				<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive feature' ) ); ?>

				<?php foreach ($category_todo as $tripcat ) : ?>
				<?php if($tripcat->slug == 'tour' && $pagename == 'gift-vouchers' ) :  ?>
					<a class="book-now" target="_blank" href="<?php the_field('book_now_url'); ?>">Buy Now</a>
				<?php elseif($tripcat->slug == 'tour' && $pagename == 'race-day-tour') : ?>
					<a class="book-now" target="_blank" href="<?php the_field('book_now_url'); ?>" onclick="goog_report_conversion ('<?php the_field('book_now_url'); ?>')">Book Now</a>
				<?php elseif($tripcat->slug == 'tour') : ?>
					<a class="book-now" target="_blank" href="<?php the_field('book_now_url'); ?>">Book Now</a>
				<?php endif;
				    
					endforeach;
				?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="place-content" >
				<?php /* <p class="place-cat"><?php $categories = get_the_category(); echo $categories[1]->name; ?></p> */ ?>
				<h2><?php the_title(); ?></h2>

				<?php $category_todo = wp_get_post_terms($post->ID, 'category', 'parent=0', array("fields" => "all")); ?>
				<?php foreach ($category_todo as $tripcat ) : ?>
				<?php if($tripcat->slug == 'tour') :  ?>
				<div class="tripadvisor">
					<div id="TA_cdsratingsonlynarrow21" class="TA_cdsratingsonlynarrow">
						<ul id="qOZC7hLy" class="TA_links URzg7AswDx">
							<li id="0OBjdr" class="1sdtZL">
								<a target="_blank" href="https://www.tripadvisor.co.uk/"><img src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a>
							</li>
						</ul>
					</div>
				</div>
				<script src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=21&amp;locationId=7070885&amp;lang=en_UK&amp;border=true&amp;display_version=2"></script>
				<?php endif;
				endforeach; ?>
				<div class="tripadvisor">
					<?php the_field('tripadvisor_code'); ?>
				</div>
				<?php $main_content = get_the_content();
					if($main_content) : ?>
						<p> <?php echo $main_content; ?></p>


					<?php endif; ?>
				<?php get_template_part( 'inc/misc/post-tabs'); ?>
			</div>
		</div>
	</div>
	<div class="row padding-top-5x">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<?php /*
				<div class="offer-news-count">
				<?php //This loops through all relationship posts linked to a place within special offers ?>
				<?php
				$special_offers = get_posts(array(
					'post_type' => 'special_offers',
					'meta_query' => array(
						array(
					'key' => 'testtest', // name of custom field
					'value' => '"' . get_the_ID() . '"',
					'compare' => 'LIKE'
					)
						)
					));
				?>
				<?php if( $special_offers ): ?>
				<div class="offers">
					<?php $count_offers = count($special_offers); ?>
					<p><?php echo $count_offers; ?> Offers</p>
					<div class="triangle">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/triangle-alt.png" class="img-responsive" alt="Triangle"/>
					</div>
				</div>
				<?php
				wp_reset_postdata();
				endif;
				?>
				<?php //This loops through all relationship posts linked to a place within latest news ?>
				<?php
				$related_news = get_posts(array(
					'post_type' => 'latest_news',
					'meta_query' => array(
						array(
				'key' => 'testtest', // name of custom field
				'value' => '"' . get_the_ID() . '"',
				'compare' => 'LIKE'
				)
						)
					));
				?>
				<?php if( $related_news ): ?>
				<div class="news">
					<?php $count_news = count($related_news); ?>
					<p><?php echo $count_news; ?> News</p>
					<div class="triangle">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/triangle-lightblue-alt.png" class="img-responsive" alt="Triangle"/>
					</div>
				</div>
				<?php
				wp_reset_postdata();
				endif;
				?>
				<?php if( get_field('document') ): ?>
				<div class="pdf">
					<a target="_blank" href="<?php the_field('document'); ?>" >View Menu</a>
					<div class="triangle">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/triangle-darkblue-alt.png" class="img-responsive" alt="Triangle"/>
					</div>
				</div>
				<?php endif; ?>
			</div> */ ?>
		</div>
		<div class="col-md-6">
			<div class="contact-information">
				<?php $map =get_field('map'); ?>
				<div class="address">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/map-pin-large.png" class="img-responsive" alt="Map Pin"/>
					</div>
					<div class="content">
						<p class="pink-small">
							Address
						</p>
						<p>
							<?php echo $map['address']; ?>
						</p>
					</div>
				</div>
				<div class="phone">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/large-phone.png" class="img-responsive" alt="Phone"/>
					</div>
					<div class="content">
						<p class="pink-small">
							Contact
						</p>
						<p>
							<?php the_field('phone_number'); ?><br>
							<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
							<a target="_blank" href="http://<?php the_field('website'); ?>"><?php the_field('website'); ?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<img class="clip-white-bottom-alt " src="<?php echo get_template_directory_uri(); ?>/images/slants/white-bottom.png" class="img-responsive" alt="">
