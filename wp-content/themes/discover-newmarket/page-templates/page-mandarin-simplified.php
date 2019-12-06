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
<?php /*Template Name: Mandarin Simplified */ get_header(); ?>
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
        <h1>通过 Discover Newmarket，领略赛马之乡的魅力  </h1> 
        <p>Discover Newmarket 是 Newmarket 旅游信息的汇总中心，也是该市的官方旅游指南。Discover Newmarket 提供了让游客一窥赛马总部奥秘的绝佳体验，您将有机会见到正在工作的赛马明星，了解该市引人入胜的历史、传统与文化。我们的专业导游为团体和个人提供旅游服务，能够根据您的意愿和逗留时间长短，组织自由行。从热门景点趣味横生的家庭日，到亲密接触冠军训练师、饲养师和赛马，Discover Newmarket 将为您打造毕生难忘的体验。</p> 

        <p>Discover Newmarket 可带您游览 Newmarket 的著名景点，比如国家种马场 (The National Stud)，这里是英国唯一的商业优良种马场，也是 Warren Hill 的训练场，您在这里可以看到世界级赛马备战下一重大赛事的训练。您甚至可能与 Ryan Moore、John Gosden、Frankie Dettori 等一两位著名人物不期而遇！</p>


        <p>观看举世闻名的赛马，比如 Dalham Hall 种马场世界最佳种马之一 Dubawi，或是在 Juddmonte’s Banstead Manor 邂逅超级明星 Frankel！</p>

        <p>在国家赛马遗产中心和皇宫古堡运动艺术中心探索 Newmarket 的皇家渊源与传统。皇宫古堡曾为国王查理二世的宫殿，现在则作为美术馆、新国家赛马博物馆和赛马深造慈善机构的旗舰场地。皇宫古堡除了让游客了解赛马历史与传统外，还能利用其赛马模拟装置，让游客亲身体验骑师的生活，通过真正退役赛马的日常活动，展示赛马退役后能从事哪些新职业。 </p>

        <p>在 Tattersalls 体验纯种马拍卖会的激烈场景，这是世界上历史最悠久的拍卖行。香港赛马会在 Tattersalls 的现身率逐年走高，在拍卖会上购买优质纯种马，以期找到东方的下一个巨星。 </p>

        <p>获得私人会员马会赛马会贵宾室的独享使用权，即可循着皇室、首相和知名骑师的脚步前行。 </p>

        <p>Newmarket 和香港均为赛马热门地，有着深厚的亲缘关系。在 Newmarket 时您会情不自禁地留意到港人所有者 Johnny Hon 博士和 Tsui 氏家族的颜色。他们现在的明星 Sea of Class 正由 Newmarket 顶级训练师 William Haggas 照顾。前香港著名骑师 Gerald Mosse（巫斯義）现将 Newmarket 称作自己的家，他曾在中国驾驭着 500 多匹赛马获胜。</p>

        <p>Newmarket 的旅游项目琳琅满目，您定会拥有值得一生追忆的旅程。 </p>

        <p>Newmarket 距伦敦仅一个半小时的车程，距剑桥仅半小时车程，堪称一日游或度过长周末及更长假期的理想之地！从 Discover Newmarket 开启旅程，在 Newmarket 市尽情畅游。</p>

        <p>期待您的到来。 </p>

        <p class="link-paragraph">要了解有关Discover Newmarket的更多信息，请发送电子邮件至<a href="admin@discovernewmarket.co.uk">admin@discovernewmarket.co.uk</a>。</p>

        <a class="contact-us-btn" target="_blank" href="https://discovernewmarket.co.uk/contact-us/">联系我们</a>

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
