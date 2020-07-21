<?php
/**
 * Template Name: Template contatti
*/

get_header();
?>
<?php while ( have_posts() ) : the_post();
$no_filter_archive = get_field( 'archivio_prodotti', 'option' );

$thumb_id = get_post_thumbnail_id();
$attachment_title = get_the_title($thumb_id);
$attachment_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
$thumb_url_desktop = wp_get_attachment_image_src($thumb_id, 'page_double_size_desktop', true);
$thumb_url_tablet = wp_get_attachment_image_src($thumb_id, 'pro_size_desktop', true);
$thumb_url_mobile = wp_get_attachment_image_src($thumb_id, 'page_double_size_desktop', true);
?>

<div class="box-fullscreen-tax bg-5 patternize">
	<div class="box-shadow"></div>
	<div class="wrapper">
		<div class="wrapper-padded txt-2 def-margin-bottom-negative">
      <h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>




<div class="wrapper def-margin-negative-top">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold flex-hold-4">



        <div class="flex-hold-child flex-hold-child-triple tablet-forced-half bg-2">
          <div class="scheda-prodotto-img">
						<picture>
				      <source media="(max-width: 767px)" data-srcset="<?php echo $thumb_url_mobile[0]; ?>">
				      <source media="(max-width: 1024px)" data-srcset="<?php echo $thumb_url_tablet[0]; ?>">
				      <source media="(min-width: 1025px)" data-srcset="<?php echo $thumb_url_desktop[0]; ?>">
				      <img data-src="<?php echo $thumb_url_mobile[0]; ?>" title="<?php echo $attachment_title; ?>" alt="<?php echo $attachment_alt; ?>"  class="lazy" />
				    </picture>
          </div>
          <div class="scheda-testi-doppia txt-4">
            <div class="flex-hold flex-hold-3 flex-hold-2-tablet-1">
              <div class="flex-hold-child content-styled">
                <div class="padder">
                  <?php the_field( 'box_1_testo_0' ); ?>
                  <h5><a href="<?php the_field( 'box_1_link' ); ?>" target="_blank" class="linked"><?php pll_e('mappa_output'); ?></a></h5>
                </div>
              </div>
              <div class="flex-hold-child content-styled">
                <div class="padder">
                  <?php the_field( 'box_1_testo_1' ); ?>
                </div>
              </div>
              <div class="flex-hold-child content-styled">
                <div class="padder">
                  <?php the_field( 'box_1_testo_2' ); ?>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="flex-hold-child bg-8">
          <div class="scheda-testi-padder">
            <div class="cta-1 allupper txt-1">
              <?php the_field( 'box_2_titolo_1' ); ?>
            </div>
            <h3 class="txt-4 allupper"><?php the_field( 'box_2_titolo_2' ); ?></h3>
            <?php
            if ( $current_lang === 'it' ) {
              echo do_shortcode( '[contact-form-7 id="294" title="Pagina contatti ita"]' );
            }
            if ( $current_lang === 'de' ) {
              echo do_shortcode( '[contact-form-7 id="2094" title="Pagina contatti deu"]' );
            }
            if ( $current_lang === 'es' ) {
              echo do_shortcode( '[contact-form-7 id="2393" title="Pagina contatti esp"]' );
            }
            if ( $current_lang === 'fr' ) {
              echo do_shortcode( '[contact-form-7 id="2093" title="Pagina contatti fra"]' );
            }
            if ( $current_lang === 'ru' ) {
              echo do_shortcode( '[contact-form-7 id="2095" title="Pagina contatti rus"]' );
            }
            if ( $current_lang === 'en' ) {
              echo do_shortcode( '[contact-form-7 id="2092" title="Pagina contatti eng"]' );
            }
             ?>
          </div>
        </div>



      </div>
    </div>
  </div>
</div>


<?php endwhile; ?>
<?php get_footer(); ?>
