<?php
add_action( 'template_redirect', 'redirect_post_type_single' );
function redirect_post_type_single() {
  $page_slug = get_field( 'archivio_tecnica', 'option' );
  if ( ! is_singular( 'post' ) )
  return;
  wp_redirect( $page_slug, 301 );
  exit;
}

function exclude_cpt_archive( $query ) {
    if ( $query->is_tax('cat_applicazione') ) {
        $query->set( 'post_type', 'applicazione' );
    }
    if ( $query->is_tax('cat_prodotto') ) {
        $query->set( 'post_type', 'prodotto' );
    }
}
add_action( 'pre_get_posts', 'exclude_cpt_archive' );



function call_all_cat_prodotto() {
  $terms_activity = get_the_terms( $post->ID , 'cat_prodotto' );
  // Loop over each item since it's an array
  if ( $terms_activity != null ){
  foreach( $terms_activity as $term_activity ) {
  // Print the name method from $term which is an OBJECT
  $term_link = get_term_link( $term_activity );
  $activity_name = $term_activity->name;
  echo '<a href="' . $term_link . '">' . $activity_name . '</a>';
  unset($term_activity);
  } }
}

function call_all_cat_applicazione() {
  $terms_activity = get_the_terms( $post->ID , 'cat_applicazione' );
  // Loop over each item since it's an array
  if ( $terms_activity != null ){
  foreach( $terms_activity as $term_activity ) {
  // Print the name method from $term which is an OBJECT
  $term_link = get_term_link( $term_activity );
  $activity_name = $term_activity->name;
  echo '<a href="' . $term_link . '">' . $activity_name . '</a>';
  unset($term_activity);
  } }
}
