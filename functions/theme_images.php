<?php
function add_image_insert_override($sizes){
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );

//custom image size for featured images
add_theme_support( 'post-thumbnails' );
add_image_size( 'full_desk', 1920, 9999);
add_image_size( 'content_picture', 768, 9999);
add_image_size( 'page_double_size_desktop', 1000, 430, true);
add_image_size( 'app_size_desktop', 320, 520, true);
add_image_size( 'column_image', 320, 550, true);
add_image_size( 'app_double_size_desktop', 640, 520, true);
add_image_size( 'app_half_size_desktop', 320, 260, true);
add_image_size( 'pro_size_desktop', 320, 320, true);
add_image_size( 'testo_doppia', 665, 320, true);
add_image_size( 'pro_size_card', 540, 540, true);
add_image_size( 'pro_size_related', 100, 100, true);

function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
unset( $sizes['medium']);
unset( $sizes['large']);
unset( $sizes['full']);
$addsizes = array(
"content_picture" => __( "Content picture")
);
$newsizes = array_merge($sizes, $addsizes);
return $newsizes;
}
