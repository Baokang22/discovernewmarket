<?php get_template_part( 'head' ); ?>
<!-- Corporate -->
<?php $user = wp_get_current_user();?>
<?php $user_val = $user->display_name; ?>
<!-- Corporate -->
<div class="socinav">
	<?php

// check if the repeater field has rows of data
if( have_rows('social_media_links',option) ):

 	// loop through the rows of data
    while ( have_rows('social_media_links',option) ) : the_row(); ?>

        <a href="<?php the_sub_field('soci_link',option); ?>" target="_blank" class="soci-links"><?php the_sub_field('soci_icon',option); ?></a>

    <?php endwhile; ?>

<?php else :

    // no rows found

endif;

?>
</div>
<div class="newsletter-nav">
	<a href="https://www.discovernewmarket.co.uk/sign-up-newsletter/" target="_blank" class="soci-newsletter"><i class="fa fa-envelope"></i> <h5>Click here to sign up</h5></a>
</div>
<div class="mobile-nav-wrap hidden-lg">
	<div class="header-content sign-in">
		<!-- <a href="#" class="sign-in-member">Sign Up</a> -->

		<?php /*
		<a href="<?php echo wp_registration_url(); ?>">Sign Up</a>
		<a href="<?php echo wp_login_url(); ?>">Sign In</a>
		*/ ?>

	<!-- 	<a href="#">BID Members</a> -->
	</div>
	<i class="fa fa-bars mobile-nav-toggle " aria-hidden="true"></i>
	<div class="mobile-nav-content">
		<div class="mob-nav">
			<?php wp_nav_menu( 'theme_location=mobile_menu' ); ?>
		</div>
	</div>
</div>
<section class="header">
	<div class="container">
		<div class="header-info-wrap"></div>
		<div class="row hidden-xs hidden-sm hidden-md  ">
			<div class="col-md-12">
				<div class="header-content sign-in">
					<!-- <a href="#" class="sign-in-member">Sign Up</a> -->



					<!-- <a href="#">BID Members</a> -->
				</div>
			</div>
		</div>
		<div class="row space-above-5x">
			<div class="col-md-12">
				<div class="header-content logo-search">
					<div class="logo">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/png/LNKT_Blue_395x120.png" class="img-responsive" alt="Love Newmarket Logo"/></a>
					</div>
					<div class="search hidden-xs hidden-sm hidden-md">
						<form role="search" method="get" id="searchform" class="searchform" action="/" _lpchecked="1">
							<input type="text" name="s" placeholder="search this site">
						</form>

						<img src="<?php echo get_template_directory_uri(); ?>/images/png/search-icon.png"  alt="Search Icon"/>
					</div>
				</div>
			</div>
		</div>
		<div class="row hidden-xs hidden-sm hidden-md ">
			<div class="col-md-12">
				<div class="header-content navigation">
					<div class="menu"><?php wp_nav_menu( 'theme_location=primary_menu' ); ?></div>

				</div>
			</div>
		</div>

		<div class="weather-wrapper">
			<!-- <a href="http://www.newmarketopenweekend.co.uk/wp/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/png/now_logo_nobackground.png" class="notimg"></a> -->
			<a href="/places/national-stud-tour/"><img src="<?php echo get_template_directory_uri(); ?>/images/png/stamp.png" class="img-responsive stampimg" alt="Public tour book"></a>
			<a href="/places/national-heritage-centre-for-horseracing-sporting-art/"><img src="<?php echo get_template_directory_uri(); ?>/images/png/stamp_two.png" class="img-responsive" alt="Palace house book"></a>
			<!-- <a href="http://bit.ly/2Iy49Lj"><img src="<?php echo get_template_directory_uri(); ?>/images/png/stamp-larry.png" class="img-responsive" alt=""></a> -->
			<!-- <div class="weather">

				<div class="weather-temperature"></div>
				<img class="weather-icon" />


			</div>
			<div class="clear"></div> -->
		</div>
	</div>

</div>
</section>





<script>
	jQuery(document).ready(function($) {
		$('.weather-temperature').openWeather({
			lat: 52.247767,
			lng: 0.408241,
customIcons: '<?php echo get_template_directory_uri(); ?>/js/unpacked/openweather/img/icons/weather/'
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
