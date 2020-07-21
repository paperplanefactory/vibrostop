<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_prodotti', 'option' );
 ?>
<div class="flex-hold-child bg-8">
  <div class="flex-hold flexbox-atipico">
    <div class="scheda-testi-top">
      <div class="inside">
        <div class="cta-1 allupper">
          <a href="<?php echo $no_filter_archive; ?>"><?php pll_e('prodotti_output'); ?></a>
        </div>
        <h3 class="txt-4 allupper"><?php the_field( 'titolo_prodotti' ); ?></h3>
      </div>
    </div>
    <div class="scheda-testi-bottom">
      <div class="inside">
        <p class="txt-4"><?php the_field( 'testo_prodotti' ); ?></p>
        <h5><a href="<?php echo $no_filter_archive; ?>" class="linked"><?php pll_e('scopri_prodotti_output'); ?></a></h5>
      </div>
    </div>
  </div>
</div>
