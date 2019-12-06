jQuery(document).ready(function($){
    /* Write your Public custom_public jQuery here! */

    $(".menu-item-has-children").on("mouseover", function(){
    	$(".sub-menu").hide();
        $(this).children(".sub-menu").show();
    });
    
    $(".sub-menu").on("mouseleave", function(){
    	$(this).hide();
    });
    
}); // document ready