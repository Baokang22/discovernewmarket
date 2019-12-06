<?php $user = wp_get_current_user();?>
<?php $user_val = $user->display_name; ?>
<?php if ($user_val == 'corporate'): ?>
<?php get_header('corporate'); ?>
<!-- Corporate-->
<?php //get_template_part( 'inc/corporate/main-carousel'); ?>
<?php get_template_part( 'inc/corporate/welcome-banner'); ?>
<?php get_template_part( 'inc/corporate/team'); ?>
<?php get_template_part( 'inc/corporate/board'); ?>
<?php get_template_part( 'inc/corporate/bidzone'); ?>
<?php get_template_part( 'inc/corporate/downloads'); ?>
<?php get_template_part( 'inc/corporate/governance'); ?>
<!-- Corporate -->
<?php else:  ?>
<!-- Consumer -->
<?php get_header(); ?>
<?php // get_template_part( 'inc/carousels/main-carousel'); ?>



<figure id="customcontrols">
<video class="hp-vid" preload="metadata" controls poster="<?php echo get_template_directory_uri(); ?>/videos/discover-newmarket.jpg">
  <source src="<?php echo get_template_directory_uri(); ?>/videos/Discover-Newmarket-Promo-vid.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<figcaption>
		<a href="#">▶</a>
		<cite>Here Be Dragons</cite>
	</figcaption>

</figure> 

<script type="text/javascript">
	var moviecontainer = document.getElementById("customcontrols"),
movie = moviecontainer.querySelector("video"),
controls = moviecontainer.querySelector("figcaption"),
playpause = controls.querySelector("a");
movie.removeAttribute("controls");
controls.style.display = "block";


playpause.addEventListener("click", function(e) { 
	e.preventDefault()
	if (movie.paused) {
		movie.play();
		playpause.innerHTML = "◼";
		controls.setAttribute("class", "playing");
	} else { 
		movie.pause();
		playpause.innerHTML = "►";
		controls.classList.remove("playing");
	}
});

var video = document.querySelector('video');       
video.addEventListener('ended', function() {
  video.load();   
  		movie.pause();
		playpause.innerHTML = "►";
		controls.classList.remove("playing");  
});

</script>



<?php get_template_part( 'inc/misc/welcome-introductions'); ?>
<?php get_template_part( 'inc/grids/things-to-do'); ?>
<?php get_template_part( 'inc/carousels/events-carousel'); ?>
<?php get_template_part( 'inc/carousels/news'); ?>
<div class="hidden-xs">
<?php get_template_part( 'inc/feeds/social-feed'); ?>
</div>
<?php endif; ?>


<script>
	jQuery(window).ready(function ($) {

$(".intro-button").click(function(e){
	e.preventDefault();
var value = $(this).attr('id');


$(".intro-boxes").addClass("hide-content");
$('.'+value).removeClass("hide-content");
$('.'+value).addClass("show-content");

});

	});
</script>

<?php /*
<script>
	jQuery(window).ready(function ($) {
		$("#Local").click(function(e){
			e.preventDefault();
			$("main-intro").addClass("hide-content");
			$("local-intro").removeClass("hide-content");
			$("local-intro").addClass("show-content");

			$("day-intro").removeClass("show-content");
			$("work-intro").removeClass("show-content");
			$("break-intro").removeClass("show-content");

		});
		$("#Day").click(function(e){
			e.preventDefault();
			$("main-intro").addClass("hide-content");
			$("day-intro").removeClass("hide-content");
			$("day-intro").addClass("show-content");

			$("local-intro").removeClass("show-content");
			$("work-intro").removeClass("show-content");
			$("break-intro").removeClass("show-content");

		});
		$("#Work").click(function(e){
			e.preventDefault();
			$("main-intro").addClass("hide-content");
			$("work-intro").removeClass("hide-content");
			$("work-intro").addClass("show-content");

			$("local-intro").removeClass("show-content");
			$("day-intro").removeClass("show-content");
			$("break-intro").removeClass("show-content");

		});
		$("#Break").click(function(e){
			e.preventDefault();
			$("main-intro").addClass("hide-content");
			$("break-intro").removeClass("hide-content");
			$("break-intro").addClass("show-content");

			$("local-intro").removeClass("show-content");
			$("day-intro").removeClass("show-content");
			$("work-intro").removeClass("show-content");

		});
	});
	</script>

	*/ ?>
<?php get_footer(); ?>
