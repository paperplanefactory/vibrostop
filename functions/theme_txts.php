<?php
// Polylang strings
pll_register_string("Pagine", "pages_output");
pll_register_string("Prodotti", "prodotti_output");
pll_register_string("Applicazioni", "applicazioni_output");
pll_register_string("Chi siamo", "chi_siamo_output");
pll_register_string("Contatti", "contatti_output");
pll_register_string("Consulenza tecnica", "consulenza_output");
pll_register_string("Contattaci", "contattaci_output");
pll_register_string("Scopri tutti i prodotti", "scopri_prodotti_output");
pll_register_string("Scopri di più", "scopri_piu_output");
pll_register_string("Sei interessato alle novità e ai prodotti Vibrostop?", "sei_interessato_output");
pll_register_string("Iscriviti alla newsletter", "iscriviti_output");
pll_register_string("Inserisci la tua email", "inserisci_email_output");
pll_register_string("Richiesta informazioni", "richiesta_info_output");
pll_register_string("Compila il form richiedere informazioni sul prodotto", "compila_form_output");
pll_register_string("Hai cercato:", "haicercato_output");
pll_register_string("Non ci sono risultati per", "norisultati_output");
pll_register_string("Tutte", "tutte_output");
pll_register_string("Tutti", "tutti_output");
pll_register_string("Mappa", "mappa_output");
pll_register_string("404 - Pagina non trovata: tornare alla homepage?", "404_output");
pll_register_string("Cerca", "cerca_output");
pll_register_string("Applicazioni correlate", "applicazioni_correlate_output");
pll_register_string("Apri / chiudi menu", "aprichiudi_output");
pll_register_string("Dove siamo", "dovesiamo_output");

//conto le parole del content - call in template: echo word_count();
function word_count() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    return $word_count;
}

//custom excerpt code - call in template: echo get_the_news_excerpt();
function get_the_news_excerpt(){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
if (strlen($excerpt) > 100) {
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, 100);
return '<p>'.$the_str.'...</p>';
}
else {
$excerpt = strip_tags($excerpt);
$the_str = $excerpt;
return '<p>'.$the_str.'</p>';
}
}

//custom title code - call in template: echo get_the_title_trim();
function get_the_title_trim(){
$title = get_the_title();
$title = strip_shortcodes($title);
if (strlen($title) > 55) {
$title = strip_tags($title);
$strings_actual_encoding = 'utf8';
$s_noentities = html_entity_decode($title, ENT_QUOTES, $strings_actual_encoding);
$the_tit =  mb_substr($title, 0, 41, $strings_actual_encoding);


return $the_tit.'...';
}
else {
$title = strip_tags($title);
$the_tit = $title;
return $the_tit;
}
}

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = array(
		// Each array child is a format with it's own settings
		array(
			'title' => 'Testo grande a lato',
			'block' => 'blockquote',
			'classes' => 'testo_grande_side',
			'wrapper' => true,

		),
		array(
			'title' => 'Testo grande',
			'block' => 'blockquote',
			'classes' => 'testo_grande',
			'wrapper' => true,

		)

	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// page title generator
function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 );

/**
 * Replaces the login header logo URL
 *
 * @param $url
 */
function namespace_login_headerurl( $url ) {
    $url = home_url( '/' );
    return $url;
}

add_filter( 'login_headertitle', 'namespace_login_headertitle' );
/**
 * Replaces the login header logo title
 *
 * @param $title
 */
function namespace_login_headertitle( $title ) {
    $title = get_bloginfo( 'name' );
    return $title;
}
