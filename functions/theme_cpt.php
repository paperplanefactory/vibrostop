<?php

function fb_change_search_url_rewrite() {
  $toppy = get_field( 'link_pagina_search', 'option' );
	if ( is_search() && ! empty( $_GET['s'] ) ) {
		wp_redirect( home_url( $toppy ) . urlencode( get_query_var( 's' ) ) );
		exit();
	}
}
add_action( 'template_redirect', 'fb_change_search_url_rewrite', 10 );
