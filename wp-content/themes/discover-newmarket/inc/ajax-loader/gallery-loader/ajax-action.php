<?php
if (have_rows('gallery')) {
	$total = count(get_field('gallery'));
	?>
	<div class="gallery-grid" id="my-repeater-list-id">
		<?php
		$number = 8;
		$count = 0;
		while (have_rows('gallery')) {
			the_row();
		    // Get the ID of the image
			$imageID = get_sub_field('gallery_image');
		    // Go Grab the categories that are assigned to this image
			$imageCats = get_the_terms( $imageID, 'attachment-categories' );
			?>

			<div class="gallery-item <?php foreach ($imageCats as $term){ echo $term->slug; } ?>">
				<div class="image" >
					<?php
					$image = get_sub_field('gallery_image');
					?>
					<a class="fancybox" rel="group" href="<?php echo wp_get_attachment_url($image); ?>">
						<?php
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</a>
		</div>
	</div>
	<?php
	$count++;
	if ($count == $number) {
		break;
	}
}
?>
</div>

<!-- Load More -->
<a id="my-repeater-show-more-link" href="javascript: my_repeater_show_more();"<?php
if ($total < $count) {
	?> style="display: none;"<?php
}
?>><?php get_template_part( 'inc/misc/load-more'); ?></a>
<!-- Load More -->
<script>
	var my_repeater_field_post_id = <?php echo $post->ID; ?>;
	var my_repeater_field_offset = <?php echo $number; ?>;
	var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
	var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
	var my_repeater_more = true;

	function my_repeater_show_more() {
		jQuery.post(
			my_repeater_ajax_url, {
				'action': 'my_repeater_show_more',
				'post_id': my_repeater_field_post_id,
				'offset': my_repeater_field_offset,
				'nonce': my_repeater_field_nonce
			},
			function (json) {
//jQuery('#my-repeater-list-id').append(json['content']);
newItems = jQuery(json['content']).appendTo('.gallery-grid');
$grid.isotope('appended', newItems );
$grid.imagesLoaded().progress( function() {
	$grid.isotope('layout');
});
my_repeater_field_offset = json['offset'];
if (!json['more']) {
	jQuery('#my-repeater-show-more-link').css('display', 'none');
}
},
'json'
);
	}
</script>
<?php
}
?>