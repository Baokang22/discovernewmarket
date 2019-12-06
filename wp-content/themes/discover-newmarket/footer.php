<?php if(is_page('Map')): ?>

<?php else : ?>
<img class="clip-path-footer " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="">

<?php endif; ?>
<section class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sign-up">

<!--                     <div class="sign-up-button">
                        <a class="submit-btn" href="http://www.discovernewmarket.co.uk/sign-up-newsletter/">Click here to sign up</a>
                    </div> -->
                     <?php /*
                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

                    </style>



                <div id="mc_embed_signup">
                    <form action="//newmarketbid.us14.list-manage.com/subscribe/post?u=95827681556d52dfc78110b06&amp;id=d1456daf4a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <h3>Be the first to hear about our latest tours, news and events in Newmarket</h3>
                        <div id="mc_embed_signup_scroll">


                            <div class="col-md-6">
                                <input placeholder="First Name" type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                <input placeholder="Email Address" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                <input placeholder="Country" type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
                            </div>

                            <div class="col-md-6">
                                <input placeholder="Last Name" type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                <input placeholder="Postcode" type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
                            </div>

                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_95827681556d52dfc78110b06_d1456daf4a" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="submit-btn" class="button"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            </div>
            */ ?>
        </div>
        
        <div class="row">
            <div class="col-md-2 hidden-xs ">
                <?php wp_nav_menu( 'theme_location=footer_menu_one' ); ?>
            </div>
            <div class="col-md-2 hidden-xs">
                <?php wp_nav_menu( 'theme_location=footer_menu_two' ); ?>
            </div>
            <div class="col-md-2 hidden-xs">
                <?php wp_nav_menu( 'theme_location=footer_menu_three' ); ?>
            </div>
            <!-- <div class="col-md-2 hidden-xs">
                <?php// wp_nav_menu( 'theme_location=footer_menu_four' ); ?>
                <ul><li><a href="/wp-login.php">Sign In</a></li></ul>
            </div> -->
            <div class="col-md-4">
                <div class="logo-footer">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/png/LNKT_Blue_395x120.png" class="img-responsive" alt="Love Newmarket Logo"/></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6 text-right">
                <div class="tag">
                    <p><a href="https://www.cubiq.co.uk/design-agency-cambridge/">Design Agency Cambridge</a>
</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var input = document.querySelectorAll('input');
for(i=0; i<input.length; i++){
input[i].setAttribute('size',input[i].getAttribute('placeholder').length);
}
</script>
<script>
jQuery(document).ready(function($) {
$(".sign-in-member").click(function(){
$(".sign-up-custom").addClass("show");
});
$(".close-it").click(function(){
$(".sign-up-custom").removeClass("show");
});
});
</script>
<?php get_template_part( 'foot' ); ?>
