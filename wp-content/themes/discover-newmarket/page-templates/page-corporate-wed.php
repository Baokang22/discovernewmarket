<?php /*Template Name: C: What We Do */  get_header('corporate'); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="what-we-do">
	<div class="blueBack clip-path-co-what-do icon-spacing">
		<div class="container">
			<div class="row">
				<h3>Marketing Promotion &amp; Events</h3>
				<div class="clear spacing"></div>
				<div class="content_style">
					<div class="col-md-5"><?php the_field('mpe_section_one'); ?></div>
					<div class="col-md-5 col-md-offset-2 imgPositioning">
 					<img src="<?php echo get_template_directory_uri(); ?>/images/png/500k.png" class="icon" />
					<?php the_field('mpe_section_two'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearBack">
		<div class="container">
			<div class="row">
				<h3>Welcome &amp; Connected</h3>
				<div class="clear spacing"></div>
				<div class="content_style">
					<div class="col-md-12 imgPositioning">
<img src="<?php echo get_template_directory_uri(); ?>/images/png/250k.png" class="icon" />
					<?php the_field('wc_section_one'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="blueBack clip-path-co-what-do icon-spacing">
		<div class="container">
			
			<div class="row">
				<h3>Accessibility</h3>
				<div class="clear spacing"></div>
				<div class="content_style">
					<div class="col-md-5"><?php the_field('a_section_one'); ?></div>
					<div class="col-md-5 col-md-offset-2 imgPositioning hidden-xs hidden-sm">
<img src="<?php echo get_template_directory_uri(); ?>/images/png/100k.png" class="icon" />
					<?php the_field('a_section_two'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearBack">
		<div class="container">

			<div class="row">
				<h3>Business &amp; Support</h3>
				<div class="clear spacing"></div>
				<div class="content_style">
					<div class="col-md-5"><?php the_field('bs_section_one'); ?></div>
					<div class="col-md-5 col-md-offset-2 imgPositioning hidden-xs hidden-sm">
<img src="<?php echo get_template_directory_uri(); ?>/images/png/75k.png" class="icon" />
					<?php the_field('bs_section_two'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="blueBack clip-path-co-what-do-opps">
		<div class="container">
			
			<div class="row">
				<h3>Collective Voice</h3>
				<div class="clear spacing"></div>
				<div class="content_style">
					<div class="col-md-12"><?php the_field('cv_section_one'); ?></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>