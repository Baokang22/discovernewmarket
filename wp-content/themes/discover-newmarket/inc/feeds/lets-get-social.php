<section class="lets-get-social">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-titles pull-right">
					<p>Love Newmarket</p>
					<h3>Lets get social</h3>
				</div>
			</div>
		</div>
		<div class="row padding-top-5x">
			<div class="col-md-12">
				<div class="lets-get-social-grid">
					<!-- Twitter Feed -->
					<?php get_template_part( 'inc/feeds/twitter-feed-boxes'); ?>
					<!--Twitter Feed -->
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($) {
		$grid = $('.lets-get-social-grid').isotope({
			itemSelector: '.social-item',
			layoutMode: 'packery',
			packery: {
				gutter: 25
			}
		});
	});
</script>