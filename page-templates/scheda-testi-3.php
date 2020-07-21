<?php
// url per tornare alla pagina senza filtri (custom field option)
$no_filter_archive = get_field( 'archivio_about', 'option' );

$link = get_sub_field( 'link' );
$tipo_di_prodotto = get_term_by('id', $link, 'cat_prodotto');
$activity_name = $tipo_di_prodotto->name;
$term_link = get_term_link( $link );

$box_immagine = get_field( 'immagine_chi_siamo' );
$box_immagine_URL_desktop = $box_immagine['sizes']['pro_size_desktop'];
$box_immagine_URL_tablet = $box_immagine['sizes']['pro_size_desktop'];
$box_immagine_URL_mobile = $box_immagine['sizes']['pro_size_desktop'];
 ?>
<div class="flex-hold-child bg-2">
  <div class="scheda-prodotto-img">
    <a href="<?php echo $no_filter_archive; ?>" title="<?php pll_e('chi_siamo_output'); ?>">
      <picture>
        <source media="(max-width: 767px)" data-srcset="<?php echo $box_immagine_URL_mobile; ?>">
        <source media="(max-width: 1024px)" data-srcset="<?php echo $box_immagine_URL_tablet; ?>">
        <source media="(min-width: 1025px)" data-srcset="<?php echo $box_immagine_URL_desktop; ?>">
        <img data-src="<?php echo $box_immagine_URL_mobile; ?>" title="<?php echo $box_immagine['title']; ?>" alt="<?php echo $box_immagine['alt']; ?>"  class="lazy" />
      </picture>
    </a>
  </div>
  <div class="scheda-prodotto-txts">
    <div class="cta-1 allupper">
      <a href="<?php echo $no_filter_archive; ?>"><?php pll_e('chi_siamo_output'); ?></a>
    </div>
    <h3 class="allupper"><a href="<?php echo $no_filter_archive; ?>" title="<?php echo $activity_name; ?>"><?php the_field( 'titolo_chi_siamo' ); ?></a></h3>
  </div>

</div>
