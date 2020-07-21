<?php
function register_theme_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'header-menu-overlay' => __( 'Header Menu Overlay' ),
      'footer-menu-col-1' => __( 'Footer Menu Colonna 1' ),
      'footer-menu-col-2' => __( 'Footer Menu Colonna 2' ),
      'footer-menu-col-2-2' => __( 'Footer Menu Colonna 2 - 2' ),
      'footer-menu-non-desktop' => __( 'Footer Menu non desktop' ),
      'footer-menu-privacy' => __( 'Footer Menu Privacy etc' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );

if( function_exists('acf_add_options_page') ) {
  $parent = acf_add_options_page(array(
    'page_title' 	=> 'Impostazioni sito',
		'menu_title'	=> 'Impostazioni sito',
		//'menu_slug' 	=> 'impostazioni-sito',
		//'capability'	=> 'edit_posts',
		//'redirect'		=> false
	));
  // dati archivi
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Gestione archivi',
		'menu_title' 	=> 'Gestione archivi',
		'parent_slug' 	=> $parent['menu_slug'],
	));
  // dati footer
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Gestione footer',
		'menu_title' 	=> 'Gestione footer',
		'parent_slug' 	=> $parent['menu_slug'],
	));
}
