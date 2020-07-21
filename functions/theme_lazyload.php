<?php
// lazy load

function footer_lazyload() {
  $image_path = get_bloginfo('stylesheet_directory');
    echo '
    <script>
		(function() {
			new LazyLoad({
				elements_selector: ".lazy",
        class_loading: "lazy-loading",
        class_loaded: "lazy-loaded"
			});
		}());
	</script>
';
}
add_action('wp_footer', 'footer_lazyload');

function filter_lazyload($content) {
    return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', 'preg_lazyload', $content);
}
add_filter('the_content', 'filter_lazyload');


function preg_lazyload($img_match) {

    $img_replace = $img_match[1] . 'src="' . get_stylesheet_directory_uri() . '/images/lazy-load/preload.gif" data-original' . substr($img_match[2], 3) . $img_match[3];

    $img_replace = preg_replace('/class\s*=\s*"/i', 'class="lazy ', $img_replace);

    $img_replace .= '<noscript>' . $img_match[0] . '</noscript>';
    return $img_replace;
}


function filter_lazyloadcf($content) {
    return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', 'preg_lazyloadcf', $content);
}
add_filter('acf_the_content', 'filter_lazyloadcf');


function preg_lazyloadcf($img_match) {

    $img_replace = $img_match[1] . 'src="' . get_stylesheet_directory_uri() . '/images/lazy-load/preload.gif" data-original' . substr($img_match[2], 3) . $img_match[3];

    $img_replace = preg_replace('/class\s*=\s*"/i', 'class="lazy ', $img_replace);

    $img_replace .= '<noscript>' . $img_match[0] . '</noscript>';
    return $img_replace;
}
