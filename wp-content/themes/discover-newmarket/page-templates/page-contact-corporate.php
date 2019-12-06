<?php /*Template Name: Contact Corporate */ get_header('corporate'); ?>
<section class="contact-corporate clip-path-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="co-page-titles">
						<h3><?php the_title(); ?></h3>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="get-in-contact-wrap">
					<div class="contact-message">
						<p>Enter your details below</p>
						<p>*Required</p>
					</div>
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="685" title="Corporate Contact"]');?>
					</div>
					
				</div>

			</div>
			<div class="col-md-6">
				<div class="voluntary-member-wrap">
					<div class="member-message">
						<h5><?php the_field('voluntary_member_text'); ?></h5>
						<p>*Required</p>
					</div>
					<div class="member-form">
						<?php echo do_shortcode('[contact-form-7 id="695" title="Corporate voluntary member"]');?>
					</div>
					
				</div>
			</div>
		</div>

		<!-- This staff section is currently hardcoded -->
		<div class="row">
			<?php if( have_rows('staff_member_repeater') ): ?>
			<?php while ( have_rows('staff_member_repeater') ) : the_row(); ?>
			<div class="col-md-6">
				<div class="staff-image">
					<?php if( get_sub_field('staff_image') ): ?>

						<img src="<?php the_sub_field('staff_image'); ?>" />

					<?php endif; ?>

				</div>

				
					
				
					
				<div class="staff-info-wrap">
					<p><?php the_sub_field('strapline'); ?></p>
					<h3><?php the_sub_field('fullname'); ?></h3>
					<p><?php the_sub_field('role'); ?></p>
				</div>
				<div class="staff-contact">
					<div class="email">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/pink-email.png" class="img-responsive" alt="">
						<h4><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></h4>
					</div>
					<div class="mobile">
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/pink-phone.png" class="img-responsive" alt="">
						<h3><?php the_sub_field('number'); ?></h3>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		
	</div>
</section>
<?php get_footer(); ?>