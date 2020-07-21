<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_about', 'option' );
$box_immagine_certificazione = get_field( 'box_immagine_certificazione' );
$box_immagine_certificazione_URL_mobile = $box_immagine_certificazione['sizes']['pro_size_desktop'];
$box_immagine_certificazione_URL_tablet = $box_immagine_certificazione['sizes']['pro_size_desktop'];
$box_immagine_certificazione_URL_desktop = $box_immagine_certificazione['sizes']['pro_size_desktop'];
 ?>
<div class="flex-hold-child bg-8">
  <div class="flex-hold flexbox-atipico">
    <div class="scheda-testi-top">
      <div class="inside">
        <div class="cta-1 allupper">
          <a href="<?php echo $no_filter_archive; ?>"><?php pll_e('chi_siamo_output'); ?></a>
        </div>
        <h3 class="txt-4 allupper"><?php the_field( 'titolo_qualita' ); ?></h3>
        <picture>
          <source media="(max-width: 767px)" data-srcset="<?php echo $box_immagine_certificazione_URL_mobile; ?>">
          <source media="(max-width: 1024px)" data-srcset="<?php echo $box_immagine_certificazione_URL_tablet; ?>">
          <source media="(min-width: 1025px)" data-srcset="<?php echo $box_immagine_certificazione_URL_desktop; ?>">
          <img data-src="<?php echo $box_immagine_certificazione_URL_mobile; ?>" title="<?php echo $box_immagine_certificazione['title']; ?>" alt="<?php echo $box_immagine_certificazione['alt']; ?>"  class="lazy bollo" />
        </picture>
      </div>
    </div>
    <div class="scheda-testi-bottom">
      <div class="inside">
        <p class="txt-4"><?php the_field( 'testo_qualita' ); ?></p>
        <h5><a href="<?php echo $no_filter_archive; ?>" class="linked"><?php the_field( 'cta_qualita' ); ?></a></h5>
      </div>
    </div>
  </div>
</div>
