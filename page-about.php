<?php
/**
 * Template Name: Template about
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


$box_4_immagine_1 = get_field( 'box_4_immagine_1' );
$box_4_immagine_1URL_mobile = $box_4_immagine_1['sizes']['pro_size_desktop'];
$box_4_immagine_1URL_tablet = $box_4_immagine_1['sizes']['pro_size_desktop'];
$box_4_immagine_1URL_desktop = $box_4_immagine_1['sizes']['pro_size_desktop'];

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
            <div class="flex-hold flex-hold-2 flex-hold-2-tablet-1">
              <div class="flex-hold-child">
                <div class="cta-1 allupper txt-3">
                  <?php the_field( 'box_1_titolo_1' ); ?>
                </div>
                <h3 class="allupper"><?php the_field( 'box_1_titolo_2' ); ?></h3>
              </div>
              <div class="flex-hold-child">
                <p>
                  <?php the_field( 'box_1_testo_1' ); ?>
                </p>
              </div>
            </div>
          </div>
        </div>



        <div class="flex-hold-child bg-8">
					<div class="flex-hold flexbox-atipico">
				    <div class="scheda-testi-top">
				      <div class="inside">
								<div class="cta-1 allupper txt-1">
		              <?php the_field( 'box_2_titolo_1' ); ?>
		            </div>
		            <h3 class="txt-4 allupper"><?php the_field( 'box_2_titolo_2' ); ?></h3>
				      </div>
				    </div>
				    <div class="scheda-testi-bottom">
				      <div class="inside">
								<p class="txt-4"><?php the_field( 'box_2_testo_1' ); ?></p>
		            <h5><a href="<?php echo $no_filter_archive; ?>" class="linked"><?php pll_e('scopri_prodotti_output'); ?></a></h5>
				      </div>
				    </div>
				  </div>
        </div>
      </div>
    </div>
  </div>
</div>












<div class="wrapper">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more bg-5 patternize">
      <div class="modulo-slideshow-immagini">
        <div class="prodcuctslider_dress">
          <ul class="prodcuctslider">
            <?php if( have_rows('box_3_storia') ) : while ( have_rows('box_3_storia') ) : the_row(); ?>
              <li class="prod-1 txt-2">
                <div class="insider">
                  <div class="cta-2"><?php the_sub_field( 'titolo_blocco' ); ?></div>
                  <div class="slide-dot"></div>
                  <h5><?php the_sub_field( 'testo_blocco' ); ?></h5>
                </div>

              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>













<div class="wrapper">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold flex-hold-4">



        <div class="flex-hold-child bg-8">
          <div class="scheda-testi-padder">
            <div class="cta-1 allupper txt-1">
              <?php the_field( 'box_4_titolo_1' ); ?>
            </div>
            <h3 class="txt-4 allupper"><?php the_field( 'box_4_titolo_2' ); ?></h3>
						<picture>
							<source media="(max-width: 767px)" data-srcset="<?php echo $box_4_immagine_1URL_mobile; ?>">
							<source media="(max-width: 1024px)" data-srcset="<?php echo $box_4_immagine_1URL_tablet; ?>">
							<source media="(min-width: 1025px)" data-srcset="<?php echo $box_4_immagine_1URL_desktop; ?>">
							<img data-src="<?php echo $box_4_immagine_1URL_mobile; ?>" title="<?php echo $box_4_immagine_1['title']; ?>" alt="<?php echo $box_4_immagine_1['alt']; ?>"  class="lazy bollo" />
						</picture>
            <p class="txt-4"><?php the_field( 'box_4_testo_1' ); ?></p>
            <div class="content-styled">
              <?php if( have_rows('downloads') ) : ?>
                <?php
                while ( have_rows('downloads') ) : the_row();
                $link_choose = get_sub_field( 'scegli_file_url' );
                if ( $link_choose === 'file' ) {
                  $link_url = get_sub_field( 'scegli_file' );
                }
                else {
                  $link_url = get_sub_field( 'scegli_url' );
                }
                ?>
                <h2 class="allupper"><a href="<?php echo $link_url; ?>" class="linked" target="_blank"><?php the_sub_field('titolo_del_file_link'); ?></a></h2>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>



        <div class="flex-hold-child flex-hold-child-triple tablet-forced-half bg-2">
          <div class="scheda-testi-padder">
            <?php if( have_rows('box_4_contenuti') ) : ?>
            <?php
            while ( have_rows('box_4_contenuti') ) : the_row();
            ?>
            <div class="flex-hold col-contents">
              <div class="col-contents-left">
                <h4 class="allupper"><?php the_sub_field( 'titolo_blocco' ); ?></h4>
              </div>
              <div class="col-contents-right content-styled">
                <?php the_sub_field( 'testo_blocco' ); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
