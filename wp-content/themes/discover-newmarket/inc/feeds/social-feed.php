<section class="talk-of-town hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="local-news-box">
                    <div class="talk-of-town-pink animated fadeInUp">
                        <div class="inner">
                            <p class="small">Our Latest</p>
                            <h2>reviews</h2>
                        </div>
                        <div class="triangle">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/triangle.png"  alt="Triangle"/>
                        </div>
                    </div>
                    <div class="local-news-carousel">
                        <!-- RSS Feed -->
                            <div id="TA_selfserveprop491" class="TA_selfserveprop"><ul id="zTSo11ETIg" class="TA_links glPuXE3lDB"><li id="5xUBV4NT" class="VKtGWiV4"><a target="_blank" href="https://www.tripadvisor.co.uk/"><img src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div><script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=491&amp;locationId=7070885&amp;lang=en_UK&amp;rating=false&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=true&amp;border=false&amp;display_version=2"></script> 
                        <!--RSS Feed -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="social-feed">
                            <!-- Twitter Feed -->
                            <?php get_template_part( 'inc/feeds/twitter-feed'); ?>
                            <!--Twitter Feed -->
                            <div class="socials">
                                <div class="facebook">
                                    <a href="https://www.facebook.com/discovernewmarket/?fref=ts"><img src="<?php echo get_template_directory_uri(); ?>/images/png/facebook.png"  alt="Facebook"/></a>
                                </div>
                                <div class="twitter">
                                    <a href="https://twitter.com/discoverNKT"><img src="<?php echo get_template_directory_uri(); ?>/images/png/twitter.png"  alt="Twitter"/></a>
                                </div>
                                <div class="instagram" >
                                    <a href="https://www.instagram.com/discovernkt/" style="z-index: 999;"> <img src="<?php echo get_template_directory_uri(); ?>/images/png/insta.png"  alt="instagram"/></a>
                                </div>
                                <div class="linkdin" >
                                    <a href="https://www.linkedin.com/company/discover-newmarket" style="z-index: 999;"><img src="<?php echo get_template_directory_uri(); ?>/images/png/lkfdin.png"  alt="linkedin"/></a>
                                </div>
                                <div class="linkdin" >
                                    <a target="_blank" href="https://www.tripadvisor.co.uk/Attraction_Review-g186386-d7070885-Reviews-Discover_Newmarket_Tours-Newmarket_Suffolk_East_Anglia_England.html" style="z-index: 999;"><img src="<?php echo get_template_directory_uri(); ?>/images/png/tripa.png"  alt="Trip Advisor"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="newmarket-map">
            <a href="<?php echo get_permalink(get_page_by_title('Map')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/png/mapdiscover.png" class="img-responsive" alt="Newmarket map discover">
            </a>
            <?php /*
            <div class="map-title">
                <p class="white">Find what you're looking for</p>
                <h1>Newmarket Map</h1>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/png/phone-map-pins.png"  alt="Map Phone"/> */ ?>
        </div>
    </div>
    <!--       <svg preserveAspectRatio="none" class="slant-lower" viewBox="0 0 87.5 15.583">
        <polygon fill="#fff" points="87.5,15.583 0,0 87.5,0 "/>
        </svg> -->
    </section>
    <script>
    jQuery(document).ready(function($) {
    var $carousel = $('.local-news-carousel').flickity({
    // options
    cellSelector: ".local-news-cell",
    prevNextButtons: false,
    pageDots: false,
    wrapAround: false
    });
    $carousel.flickity('select', 2);
    });
    </script>
    <script>
    jQuery(document).ready(function($) {
    $('.button--previous').on('click', function() {
    $('.events-carousel').flickity('previous');
    });
    $('.button--next').on('click', function() {
    $('.events-carousel').flickity('next');
    });
    // $('.button--previous').on('click', function() {
    //     $('.events-carousel').flickity('previous');
    // });
    // $('.button--next').on('click', function() {
    //     $('.events-carousel').flickity('next');
    // });
    });
    </script>