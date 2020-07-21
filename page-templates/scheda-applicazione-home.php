<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_applicazioni', 'option' );

$box_immagine = get_sub_field( 'immagine' );
$box_immagine_URL_desktop = $box_immagine['sizes']['app_size_desktop'];
$box_immagine_URL_tablet = $box_immagine['sizes']['app_size_desktop'];
$box_immagine_URL_mobile = $box_immagine['sizes']['app_half_size_desktop'];

 ?>

<div class="flex-hold-child bg-2">
  <div class="scheda-prodotto-img">
    <a href="<?php the_sub_field( 'link' ); ?>" title="<?php the_sub_field( 'titolo_box' ); ?>">
    <picture>
      <source media="(max-width: 767px)" data-srcset="<?php echo $box_immagine_URL_mobile; ?>">
      <source media="(max-width: 1024px)" data-srcset="<?php echo $box_immagine_URL_tablet; ?>">
      <source media="(min-width: 1025px)" data-srcset="<?php echo $box_immagine_URL_desktop; ?>">
      <img data-src="<?php echo $box_immagine_URL_mobile; ?>" title="<?php echo $box_immagine['title']; ?>" alt="<?php echo $box_immagine['alt']; ?>"  class="lazy" />
    </picture>
  </div>
  <div class="scheda-app-txts txt-2 makewhitelink">
    <div class="inside">
      <div class="cta-1 allupper">
        <a href="<?php echo $no_filter_archive; ?>"><?php pll_e('applicazioni_output'); ?></a>
      </div>
      <h3 class="allupper"><a href="<?php the_sub_field( 'link' ); ?>" title="<?php the_sub_field( 'titolo_box' ); ?>"><?php the_sub_field( 'titolo_box' ); ?></a></a></h3>
    </div>
  </div>
</div>
