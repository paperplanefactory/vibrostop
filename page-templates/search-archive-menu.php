<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_applicazioni', 'option' );
// id della tassonomia dall'archivio
$current_arch_id = get_queried_object()->term_id;
// recupero la sua tassonomia
$terms_activity = get_the_terms( $post->ID , 'cat_applicazione' );
// Loop over each item since it's an array
if ( $terms_activity != null ){
foreach( $terms_activity as $term_activity ) {
// Print the name method from $term which is an OBJECT
$current_arch_id = $term_activity->term_id;
unset($term_activity);
} }
//backup per pagina corrente se non ci sono filtri
if ( $current_arch_id == '' ) {
  $current_arch_id = 'alltax';
}
?>
<div class="box-fullscreen-tax bg-5 patternize">
	<div class="box-shadow"></div>
	<div class="wrapper">
		<div class="wrapper-padded txt-2 def-margin-bottom-negative">
        <h1><?php pll_e('haicercato_output'); ?> <?php echo get_search_query(); ?></h1>
		</div>
	</div>
</div>
