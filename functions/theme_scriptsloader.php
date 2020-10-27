<?php

// Async load
function theme_async_scripts( $url ) {
  if ( strpos( $url, '#asyncload' ) === false )
  return $url;
  else if ( is_admin() )
  return str_replace( '#asyncload', '', $url );
  else
  return str_replace( '#asyncload', '', $url )."' async='async";
}
add_filter( 'clean_url', 'theme_async_scripts', 11, 1 );

// Defer load
function theme_defer_scripts( $url ) {
  if ( strpos( $url, '#deferload' ) === false )
  return $url;
  else if ( is_admin() )
  return str_replace( '#deferload', '', $url );
  else
  return str_replace( '#deferload', '', $url )."' defer='defer";
}
add_filter( 'clean_url', 'theme_defer_scripts', 11, 1 );

// stabilisco il device
global $isMobile;
global $isTablet;
global $isDesktop;

// add google analytics to footer
add_action( 'wp_head', 'synth_google_analytics');
function synth_google_analytics() { ?>
  <!-- Google Tag Manager -->
  <script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({
    'gtm.start': new Date().getTime(),
    event:'gtm.js'
  });
  var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
  j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PJ49DJM');
  </script>
  <!-- End Google Tag Manager -->
  <script>
  gtag('config', 'AW-960500016/d1xFCPzsktcBELCigMoD', {
    'phone_conversion_number': '+39 02 48950008'
  });
  gtag('config', 'AW-960500016');
</script>
<?php }

// all scripts
add_action( 'wp_enqueue_scripts', 'all_scripts' );
function all_scripts(){
  // versione del tema
	global $theme_version;
	// add DetectMobile
	global $isMobile;
	global $isTablet;
	global $isDesktop;
  // smart jquery inclusion
  if (!is_admin()) {
  	wp_deregister_script('jquery');
  	wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/libs/jquery-3.4.1.min.js', '', '3.4.1', false);
  	wp_enqueue_script('jquery');
  }
	// Comportamenti ricorrenti
	wp_register_script( 'theme-general', get_stylesheet_directory_uri() . '/js/theme_general.min.js', '', $theme_version, true);
	wp_enqueue_script( 'theme-general' );
  // Lazy load
  wp_register_script( 'custom-lazyload', get_stylesheet_directory_uri() . '/js/libs/lazyload.min.js', '', '12.0.0', false);
  wp_enqueue_script( 'custom-lazyload' );

  // bxslider
	wp_register_script( 'bxslider', get_stylesheet_directory_uri() . '/js/libs/jquery.bxslider.min.js', '', '4.2.1d', true);
	wp_enqueue_script( 'bxslider' );
  // Settings bxslider
  wp_register_script( 'bxslider-settings', get_stylesheet_directory_uri() . '/js/theme_slides.min.js', '', $theme_version, true);
  wp_enqueue_script( 'bxslider-settings' );
	}
