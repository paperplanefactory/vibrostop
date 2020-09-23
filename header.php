<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="theme-color" content="#2B3342">
<meta name="msapplication-navbutton-color" content="#2B3342">
<meta name="apple-mobile-web-app-status-bar-style" content="#2B3342">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();
// stabilisco il device
global $isMobile;
global $isTablet;
global $isDesktop;
// lingua
global $current_lang;
$current_lang = pll_current_language('slug');
if ( $current_lang === 'de' ) : ?>
<style>
h1, h2, h3, h4, h5, h6, .archive-menu {
  overflow-wrap: break-word;
  word-wrap: break-word;
  -ms-word-break: break-all;
  /* This is the dangerous one in WebKit, as it breaks things wherever */
  word-break: break-all;
  /* Instead use this non-standard one: */
  word-break: break-word;
  /* Adds a hyphen where the word breaks, if supported (No Blink) */
  -ms-hyphens: auto;
  -moz-hyphens: auto;
  -webkit-hyphens: auto;
  hyphens: auto;
}
</style>
<?php endif; ?>
<?php if( is_page_template('page-thank-you.php') ): ?>
  <!-- Event snippet for Website traffic conversion page -->
<script>
gtag('event', 'conversion', {'send_to': 'AW-960500016/rVUoCNexmdYBELCigMoD'});
</script>
<?php endif; ?>
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/images/favicons/ms-icon-144x144.png">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ49DJM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="header" class="header-shadow">
    <div class="wrapper-padded">
      <div id="header-structure">
        <div class="logo">
          <a href="<?php echo home_url(); ?>" rel="bookmark" title="homepage - Vibrostop">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/vibrostop-logo.svg" onerror="this.onerror=null; this.src='<?php bloginfo('stylesheet_directory'); ?>/images/vibrostop-logo.png'" alt="homepage - Vibrostop" />
          </a>
        </div>
        <div class="menu">
          <ul>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => '' ) ); ?>
          </ul>
        </div>
        <div class="hamburger">
          <ul>
            <li class="search-open">
            </li>
            <li class="current-langm">
              <span class="open_lang"><?php echo pll_current_language('name'); ?></span>
              <div class="lang_listed">
                <ul class="all_languages">
                  <?php pll_the_languages();?>
                </ul>
              </div>
            </li>
            <li class="ham-ham">
              <button class="nav-icon3 ham-activator" title="<?php pll_e('aprichiudi_output'); ?>">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="header-overlay">
    <div class="wrapper-padded">
      <div id="header-overlay-structure">
        <div class="logo">
          <a href="<?php echo home_url(); ?>" rel="bookmark" title="homepage - Vibrostop">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/vibrostop-logo.svg" onerror="this.onerror=null; this.src='<?php bloginfo('stylesheet_directory'); ?>/images/vibrostop-logo.png'" alt="homepage - xxxxxxxxxxxxxxx" />
          </a>
        </div>
        <div class="menu">

        </div>
        <div class="hamburger">
          <ul>
            <li class="search-open-fake">
            </li>
            <li class="current-langm">
              <span class="open_lang"><?php echo pll_current_language('name'); ?></span>
              <div class="lang_listed">
                <ul class="all_languages">
                  <?php pll_the_languages();?>
                </ul>
              </div>
            </li>
            <li class="ham-ham">
              <button class="nav-icon3 ham-activator" title="<?php pll_e('aprichiudi_output'); ?>">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>
            </li>
          </ul>
        </div>
        <div class="scroll-opportunity">
          <ul class="all_languages_mobile">
            <?php pll_the_languages();?>
          </ul>
          <div class="menu-overlay">
            <ul>
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu-overlay' ) ); ?>
            </ul>
          </div>
          <div class="search-overlay">
            <div class="search-hold">
              <form action="<?php echo home_url(); ?>/" method="get">
                <input name="s" type="text" id="searchtype" placeholder="<?php pll_e('cerca_output'); ?>" />
                <input type="submit" value="<?php pll_e('cerca_output'); ?>" />
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
