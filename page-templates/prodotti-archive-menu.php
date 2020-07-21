<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_prodotti', 'option' );
// id della tassonomia dall'archivio
$current_arch_id = get_queried_object()->term_id;
{ ?>
  <script>
  $(document).ready(function() {
    $('.this-tax-<?php echo $current_arch_id; ?>').addClass('current_tax');
    });
  </script>
<?php }

if ( is_single() ) {
  // recupero la sua tassonomia
  $terms_activity = get_the_terms( $post->ID , 'cat_prodotto' );
  // Loop over each item since it's an array
  if ( $terms_activity != null ){
  foreach( $terms_activity as $term_activity ) {
  // Print the name method from $term which is an OBJECT
  $current_arch_id = $term_activity->term_id;
  { ?>
    <script>
    $(document).ready(function() {
      $('.this-tax-<?php echo $current_arch_id; ?>').addClass('current_tax');
      });
    </script>
  <?php }
  unset($term_activity);
  } }
}

//backup per pagina corrente se non ci sono filtri
if ( $current_arch_id == '' ) {
  $current_arch_id = 'alltax';
}
?>
<div class="box-fullscreen-tax bg-5 patternize">
	<div class="box-shadow"></div>
	<div class="wrapper">
		<div class="wrapper-padded txt-2 termdesc">
      <?php if ( $current_arch_id === 'alltax' ) : ?>
        <h1><?php the_title(); ?></h1>
      <?php elseif ( is_single() ) : ?>
        <h1><?php the_title(); ?> - <?php the_field( 'pre_title' ); ?></h1>
      <?php else : ?>
        <h1><?php echo single_term_title(); ?></h1>
        <?php echo term_description(); ?>
      <?php endif; ?>
			<?php
			$list_cat_applicazione = get_terms( 'cat_prodotto', array(
					'orderby'    => 'count',
					'hide_empty' => 0,
			) );
			if ( ! empty( $list_cat_applicazione ) && ! is_wp_error( $list_cat_applicazione ) ){
        echo '<select name="dist" id="dist" class="archive-drop">';
        echo '<option class="level-0" value="' . $no_filter_archive . '">' . pll__('tutti_output') . '</option>';
        foreach ( $list_cat_applicazione as $term ) {
          echo '<option class="level-' . $term->term_id . '" value="' . esc_url( get_term_link( $term ) ) . '">' . $term->name . '</option>';
				}
        echo '</select>';

				echo '<ul class="archive-menu">';
        echo '<li class="' .$current_arch_id . '"><a href="' . $no_filter_archive . '" alt="">' . pll__('tutti_output') . '</a></li>';
				foreach ( $list_cat_applicazione as $term ) {
					echo '<li class="this-tax-' . $term->term_id . '"><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
				}
				echo '</ul>';
			}
			?>
      <script type="text/javascript">
    		<!--
    		var dropdown_dist = document.getElementById("dist");
    		function onCatChange() {
    				location.href = dropdown_dist.options[dropdown_dist.selectedIndex].value;
    		}
    		dropdown_dist.onchange = onCatChange;
    		-->
    	</script>
		</div>
	</div>
</div>
