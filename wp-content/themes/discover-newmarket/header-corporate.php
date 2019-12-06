<?php get_template_part( 'head' ); ?>
<div class="mobile-nav-wrap-corporate hidden-md hidden-lg">
	<div class="header-content sign-in">
		<!-- <a href="#" class="sign-in-member">Sign Up</a> -->
		<a href="<?php echo wp_login_url(); ?>">Sign In</a>
		<a href="#">Advertise</a>
		<a href="#">Back to public site</a>
		<a href="#">Contact</a>
	</div>
	<i class="fa fa-bars mobile-nav-toggle " aria-hidden="true"></i>
	<div class="mobile-nav-content">
		<div class="mob-nav">
			<?php
			wp_nav_menu( array(
				'menu'              => 'corporate_main_menu'
				));
			?>
		</div>
	</div>
</div>
<section class="header-corporate">
	<div class="container">
		<div class="header-info-wrap"></div>
		<div class="row hidden-xs hidden-sm  ">
			<div class="col-md-12">
				<div class="header-content sign-in">
					<a href="<?php echo wp_logout_url(); ?>">Back to public site</a>
					<a href="/contact">Contact</a>
				</div>
			</div>
		</div>
		<div class="row space-above-5x">
			<div class="col-md-12">
				<div class="header-content logo-search">
					<div class="logo">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/png/LNKT_White_395x120.png" class="img-responsive" alt="Love Newmarket Logo"/></a>
					</div>
					<div class="search hidden-xs hidden-sm">
						<form role="search" method="get" id="searchformcorporate" class="searchform" action="http://love-newmarket.lo/" _lpchecked="1">
							<input type="text" name="s" placeholder="search this site">
						</form>
						<img src="<?php echo get_template_directory_uri(); ?>/images/png/corporate-search.png"  alt="Search Icon"/>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="header-content navigation">
					<div class="menu"><?php
							wp_nav_menu( array(
								'menu'              => 'corporate_main_menu'
								));
					?></div>
				</div>
			</div>
		</div>
		<div class="weather-wrapper">
			<?php /*
			<div class="socials">
						<div class="facebook">
					<a href="https://www.facebook.com/lovenewmarket"><img src="<?php echo get_template_directory_uri(); ?>/images/png/facebook.png"  alt="Facebook"/></a>
				</div>
				<div class="twitter">
					<a href="https://twitter.com/LoveNewmarket"><img src="<?php echo get_template_directory_uri(); ?>/images/png/twitter.png"  alt="Twitter"/></a>
				</div>
			</div>
			*/ ?>
			<div class="weather corporate" style="background-color: white; ">
				<!-- Weather Feed -->
				<div class="weather-temperature"></div>
				<img class="weather-icon" />
				<!-- Weather Feed -->
				
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
</div>
</section>
<script>
	jQuery(document).ready(function($) {
		$('.weather-temperature').openWeather({
			lat: 52.247767,
			lng: 0.408241,
customIcons: '<?php echo get_template_directory_uri(); ?>/js/unpacked/openweather/img/icons/corporate-weather/'
});
});
</script>
<script>
	jQuery(document).ready(function($) {
		$( ".mobile-nav-toggle").click(function() {
			$(".mobile-nav-content").slideToggle("slow");
		});
	});
</script>
<script>
	var input = document.querySelectorAll('input');
	for(i=0; i<input.length; i++){
		input[i].setAttribute('size',input[i].getAttribute('placeholder').length);
	}
</script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var ajaxpagination = {"ajaxurl":"http:\/\/wordpress.local\/wp-admin\/admin-ajax.php"};
	/* ]]> */
</script>