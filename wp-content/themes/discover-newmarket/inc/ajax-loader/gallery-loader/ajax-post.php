<?php
//////////////////////////////////////////////////////////////////
/////////// THIS FILE MUST BE INCLUDED IN FUNCTIONS.PHP //////////
//////////////////////////////////////////////////////////////////
add_action('wp_ajax_my_repeater_show_more', 'my_repeater_show_more');
add_action('wp_ajax_nopriv_my_repeater_show_more', 'my_repeater_show_more');
function my_repeater_show_more() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
        exit;
    }
    if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
        return;
    }
    $show = 4;
    $start = $_POST['offset'];
    $end = $start+$show;
    $post_id = $_POST['post_id'];
    ob_start();
    if (have_rows('gallery', $post_id)) {
        $total = count(get_field('gallery', $post_id));
        $count = 0;
        while (have_rows('gallery', $post_id)) {
            the_row();
// Get the ID of the image
            $imageID = get_sub_field('gallery_image');
// Go Grab the categories that are assigned to this image
            $imageCats = get_the_terms( $imageID, 'attachment-categories' );
            if ($count < $start) {
                $count++;
                continue;
            }
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
    if ($count == $end) {
        break;
    }
}
}
$content = ob_get_clean();
$more = false;
if ($total > $count) {
    $more = true;
}
echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
exit;
}
add_action('acf/include_fields', 'load_repeater_more_example_group');
function load_repeater_more_example_group() {
// This must be different for every different ajax loader
    $file = dirname(__FILE__).'/acf-array.json';
    $json = file_get_contents($file);
    $group = json_decode($json, true);
    acf_add_local_field_group($group);
}
?>