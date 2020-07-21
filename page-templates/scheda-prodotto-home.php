<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_prodotti', 'option' );

$box_immagine = get_sub_field( 'immagine' );
$box_immagine_URL_desktop = $box_immagine['sizes']['pro_size_desktop'];
$box_immagine_URL_tablet = $box_immagine['sizes']['pro_size_desktop'];
$box_immagine_URL_mobile = $box_immagine['sizes']['pro_size_card'];
 ?>
<div class="flex-hold-child bg-2">
  <div class="scheda-prodotto-img">
    <a href="<?php the_sub_field( 'link' ); ?>" title="<?php the_sub_field( 'titolo_box' ); ?>">
      <picture>
        <source media="(max-width: 767px)" data-srcset="<?php echo $box_immagine_URL_mobile; ?>">
        <source media="(max-width: 1024px)" data-srcset="<?php echo $box_immagine_URL_tablet; ?>">
        <source media="(min-width: 1025px)" data-srcset="<?php echo $box_immagine_URL_desktop; ?>">
        <img data-src="<?php echo $box_immagine_URL_mobile; ?>" title="<?php echo $box_immagine['title']; ?> - <?php echo get_bloginfo( 'name' ); ?>" alt="<?php echo $box_immagine['alt']; ?> - <?php echo get_bloginfo( 'name' ); ?>"  class="lazy" />
      </picture>
    </a>
  </div>
  <div class="scheda-prodotto-txts">
    <div class="cta-1 allupper">
      <a href="<?php the_sub_field( 'link' ); ?>"><?php pll_e('prodotti_output'); ?></a>
    </div>
    <h3 class="allupper"><a href="<?php the_sub_field( 'link' ); ?>" title="<?php the_sub_field( 'titolo_box' ); ?>"><?php the_sub_field( 'titolo_box' ); ?></a></h3>
  </div>

</div>
