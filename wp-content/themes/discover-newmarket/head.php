<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (function_exists('is_tag') && is_tag()) { single_tag_title("Tag Archive for &quot;"); echo'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?><?php if ($paged>1) { echo ' - page '. $paged; } ?></title>
  <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Lato:400,900italic,900,700italic,700,400italic,300italic,300,100italic,100:latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); </script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58795687-1', 'auto');
  ga('send', 'pageview');

</script>
    <script src="https://use.fontawesome.com/8fd3a77845.js"></script>

    <script src="https://use.typekit.net/fjf6kfw.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php if (is_single( 3314 )) {?>
   <script type="text/javascript">
 /* <![CDATA[ */
 goog_snippet_vars = function() {
   var w = window;
   w.google_conversion_id = 948167163;
   w.google_conversion_label = "weITCK7zi3QQ-8OPxAM";
   w.google_remarketing_only = false;
 }
 // DO NOT CHANGE THE CODE BELOW.
 goog_report_conversion = function(url) {
   goog_snippet_vars();
   window.google_conversion_format = "3";
   var opt = new Object();
   opt.onload_callback = function() {
   if (typeof(url) != 'undefined') {
     window.location = url;
   }
 }
 var conv_handler = window['google_trackConversion'];
 if (typeof(conv_handler) == 'function') {
   conv_handler(opt);
 }
}
/* ]]> */
</script>
<script type="text/javascript"
 src="//www.googleadservices.com/pagead/conversion_async.js">
</script>
<?php }?>
	
<!-- Hotjar Tracking Code for https://discovernewmarket.co.uk/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1034846,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

    <?php wp_head(); ?>
  </head>
  <?php $user = wp_get_current_user();?>
  <?php $user_val = $user->display_name; ?>
  <!-- <?php $user_val = $user->data->user_nicename; ?> -->
  <?php if ($user_val == 'corporate'): ?>
    <body <?php body_class('corporate'); ?>>
    <?php else:  ?>
      <body <?php body_class(); ?>>
      <?php endif; ?>
