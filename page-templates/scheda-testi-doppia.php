<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_consulenza', 'option' );

$box_immagine = get_field( 'immagine_consulenza' );
$box_immagine_URL_desktop = $box_immagine['sizes']['testo_doppia'];
$box_immagine_URL_tablet = $box_immagine['sizes']['testo_doppia'];
$box_immagine_URL_mobile = $box_immagine['sizes']['testo_doppia'];

 ?>
<div class="flex-hold-child flex-hold-child-double bg-2">
  <div class="scheda-prodotto-img">
    <a href="<?php echo $no_filter_archive; ?>" title="<?php pll_e('consulenza_output'); ?>">
      <picture>
        <source media="(max-width: 767px)" data-srcset="<?php echo $box_immagine_URL_mobile; ?>">
        <source media="(max-width: 1024px)" data-srcset="<?php echo $box_immagine_URL_tablet; ?>">
        <source media="(min-width: 1025px)" data-srcset="<?php echo $box_immagine_URL_desktop; ?>">
        <img data-src="<?php echo $box_immagine_URL_mobile; ?>" title="<?php echo $box_immagine['title']; ?>" alt="<?php echo $box_immagine['alt']; ?>"  class="lazy" />
      </picture>
    </a>
  </div>
  <div class="scheda-testi-doppia txt-4">
    <div class="flex-hold flex-hold-2">
      <div class="flex-hold-child">
        <div class="cta-1 allupper">
          <a href="<?php echo $no_filter_archive; ?>"><?php pll_e('consulenza_output'); ?></a>
        </div>
        <h3 class="allupper"><?php the_field( 'titolo_consulenza' ); ?></h3>
      </div>
      <div class="flex-hold-child">
        <p>
          <?php the_field( 'testo_consulenza' ); ?>
        </p>
      </div>
    </div>
  </div>
</div>
