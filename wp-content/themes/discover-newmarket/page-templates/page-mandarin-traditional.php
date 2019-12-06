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
<?php /*Template Name: Mandarin Traditional */ get_header(); ?>
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


<div class="col-sm-12 intro-wrapper">
    <div class="intro-boxes main-intro show-content mandarin-content">
        <h1>Discover Newmarket與您探索賽馬之鄉的魅力 </h1> 
        <p>Discover Newmarket 是 Newmarket 旅遊資訊的中心點，也是該市的官方旅遊指南。Discover Newmarket 為遊客提供一個走到賽馬總部幕後的難得機會，您將有機會見到真正的賽馬明星，瞭解該市引人入勝的歷史、傳統與文化。我們的專業導遊可根據您的意願提供長或短的團體或個人觀光團服務。從熱門景點的有趣家庭日，到親身接觸冠軍訓練師、飼養師和比賽馬匹，Discover Newmarket 將為您打造畢生難忘的體驗。</p>
        <p>Discover Newmarket 可帶您遊覽 Newmarket 的著名景點，例如國家育馬場（The National Stud），這是英國唯一的純種馬商業育馬場，也是 Warren Hill 的訓練場。您在這裡可以看到世界級比賽馬匹備戰下一場重大賽事的訓練，甚至可能邂逅 Ryan Moore、John Gosden、Frankie Dettori 等幾位著名人物！</p>
        <p>探訪舉世聞名的比賽馬匹，例如 Dalham Hall 育馬場世界最佳種馬之一 Dubawi，或在 Juddmonte’s Banstead Manor 邂逅超級明星 Frankel！</p>

        <p>在皇宮宅邸（Palace House）的國家賽馬和體育藝術文化中心探索 Newmarket 的皇家淵源與傳統。皇宮宅邸往日為國王查理二世的宮殿，現在則作為美術館、新的國家賽馬博物館和慈善機構Retraining of Racehorses的旗艦場地。皇宮宅邸除了讓遊客瞭解賽馬歷史與傳統外，還讓遊客透過馬術模擬器一嘗當騎師滋味，並由真正退役馬匹的日常示範來展現比賽馬匹退役後能做些甚麼。</p>

        <p>在世界上歷史最悠久的拍賣行 Tattersalls 體驗純種馬拍賣會的激烈場景。香港賽馬會在 Tattersalls 的現身率逐年上升，在拍賣會上購買優質純種馬，期待找到東方的下一個巨星。 </p>

        <p>獲得賽馬會貴賓室的私人會員獨享使用權，即可循著皇室、首相和知名騎師的腳步前行。 </p>

        <p>Newmarket 和香港均為賽馬熱門地，有著深厚的關係。在 Newmarket 時您一定會留意到港人擁有者韓世灝博士（ Johnny Hon）和崔氏家族的色彩。他們現在的明星 Sea of Class 正由 Newmarket 頂級訓練師 William Haggas 照顧。前香港著名騎師 Gerald Mosse（巫斯義）現以Newmarket 為家，他曾在中國騎過500 多匹獲勝馬匹。</p>

        <p>Newmarket 的旅遊節目琳琅滿目，您定會擁有值得一生追憶的旅程。 </p>

        <p>Newmarket 距離倫敦僅一個半小時車程，距離劍橋僅半小時車程，堪稱一日遊、長週末及較長假期的理想之地！ 從 Discover Newmarket 開始旅程，在 Newmarket 市盡情暢遊。</p>

        <p>期待在這裡歡迎您。</p>
        <p class="link-paragraph">要了解有關Discover Newmarket的更多信息，請發送電子郵件至<a href="admin@discovernewmarket.co.uk">admin@discovernewmarket.co.uk</a>。</p>

        <a class="contact-us-btn" target="_blank" href="https://discovernewmarket.co.uk/contact-us/">聯繫我們</a>
    </div>
</div>
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
