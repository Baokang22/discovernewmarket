<!-- Load More -->
<div id="more_posts"><?php get_template_part( 'inc/misc/load-more'); ?></div>
<!-- Load More -->
<script>
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php', null); ?>";
var page = 1; // What page we are on.
var ppp = 4; // Post per page
jQuery("#more_posts").on("click",function(){ // When btn is pressed.
jQuery("#more_posts").attr("disabled",true); // Disable the button, temp.
jQuery.post(ajaxUrl, {
    action:"eat_loader_ajax",
    offset: (page * ppp),
    ppp: ppp
}).success(function(posts){
    page++;
//  jQuery("#content").append(posts);
newItems = jQuery(posts).appendTo('#content');
$grid.isotope('appended', newItems );
$grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
});
if (!posts) {
    jQuery('#more_posts').css('display', 'none');
}
});
});
</script>