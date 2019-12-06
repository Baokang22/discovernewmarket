<section class="welcome-introductions">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 intro-wrapper">
				<div class="intro-boxes main-intro show-content">
					<?php if(get_field('main_intro')) : ?>
						<?php the_field('main_intro'); ?>
					<?php endif; ?>
				</div>
				<div class="intro-boxes local hide-content">
					<?php if(get_field('im_a_local_intro')) : ?>
						<?php the_field('im_a_local_intro'); ?>
					<?php endif; ?>
				</div>
				<div class="intro-boxes day hide-content">
					<?php if(get_field('coming_for_the_day_intro')) : ?>
						<?php the_field('coming_for_the_day_intro'); ?>
					<?php endif; ?>
				</div>
				<div class="intro-boxes work hide-content">
					<?php if(get_field('coming_for_work_intro')) : ?>
						<?php the_field('coming_for_work_intro'); ?>
					<?php endif; ?>
				</div>
				<div class="intro-boxes break hide-content">
					<?php if(get_field('coming_for_a_break_intro')) : ?>
						<?php the_field('coming_for_a_break_intro'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>