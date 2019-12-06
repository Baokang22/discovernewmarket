<?php /*Template Name: Memebers Area */ get_header('corporate'); ?>
<section class="members-area clip-path-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Members Area</h2>
			</div>
		
				<div class="col-md-offset-1 col-md-5">
					<div class="pink-downloads">
						<h2>DOWNLOADS</h2>
					</div>
			
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-5">
			
					<div class="file-rows-wrap">
						<div class="header-wrap">
							<h3>
							<?php the_field('title_one') ?>
							</h3>
						</div>
						
						<?php if( have_rows('accounts_repeater') ): ?>
						<?php while ( have_rows('accounts_repeater') ) : the_row(); ?>
						
						<div class="files-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/pdf-image.png" class="img-responsive" alt="">
							<?php if( get_sub_field('file_acc') ): ?>
							<a href="<?php the_sub_field('file_acc'); ?>">
								<?php the_sub_field('file_title_acc'); ?>
							</a>
							<?php endif; ?>
						</div>
						
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				
			</div>
			<div class="col-md-6">
				<div class="file-rows-wrap">
					<div class="header-wrap">
						<h3>
						<?php the_field('title_two') ?>
						</h3>
					</div>
					
					
					<?php if( have_rows('kf_repeater') ): ?>
					<?php while ( have_rows('kf_repeater') ) : the_row(); ?>
					
					<div class="files-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/pdf-image.png" class="img-responsive" alt="">
						<?php if( get_sub_field('file_kf') ): ?>
						<a href="<?php the_sub_field('file_kf'); ?>">
							<?php the_sub_field('file_title_kf'); ?>
						</a>
						<?php endif; ?>
					</div>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-5">
				<div class="file-rows-wrap">
					<div class="header-wrap">
						<h3>
						<?php the_field('title_three') ?>
						</h3>
					</div>
					
					
					<?php if( have_rows('meeting_notes_repeater') ): ?>
					<?php while ( have_rows('meeting_notes_repeater') ) : the_row(); ?>
					
					<div class="files-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/pdf-image.png" class="img-responsive" alt="">
						<?php if( get_sub_field('file_mn') ): ?>
						<a href="<?php the_sub_field('file_mn'); ?>">
							<?php the_sub_field('file_title_mn'); ?>
						</a>
						<?php endif; ?>
					</div>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="file-rows-wrap">
					<div class="header-wrap">
						<h3>
						<?php the_field('title_four') ?>
						</h3>
					</div>
					
					
					<?php if( have_rows('the_bid_zone_repeater') ): ?>
					<?php while ( have_rows('the_bid_zone_repeater') ) : the_row(); ?>
					
					<div class="files-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/pdf-image.png" class="img-responsive" alt="">
						<?php if( get_sub_field('file_bz') ): ?>
						<a href="<?php the_sub_field('file_bz'); ?>">
							<?php the_sub_field('file_title_bz'); ?>
						</a>
						<?php endif; ?>
					</div>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>