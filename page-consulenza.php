<?php
/**
 * Template Name: Template consulenza
*/

get_header();
?>
<?php while ( have_posts() ) : the_post();
$no_filter_archive = get_field( 'archivio_prodotti', 'option' );

$thumb_id = get_post_thumbnail_id();
$attachment_title = get_the_title($thumb_id);
$attachment_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
$thumb_url_desktop = wp_get_attachment_image_src($thumb_id, 'column_image', true);
$thumb_url_tablet = wp_get_attachment_image_src($thumb_id, 'column_image', true);
$thumb_url_mobile = wp_get_attachment_image_src($thumb_id, 'column_image', true);


$box_3_immagine = get_field( 'box_3_immagine' );
$box_3_immagine_URL_mobile = $box_3_immagine['sizes']['column_image'];
$box_3_immagine_URL_tablet = $box_3_immagine['sizes']['column_image'];
$box_3_immagine_URL_desktop = $box_3_immagine['sizes']['column_image'];
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
          <div class="scheda-testi-padder">
            <?php if( have_rows('box_1_contenuti') ) : ?>
            <?php
            while ( have_rows('box_1_contenuti') ) : the_row();
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


        <div class="flex-hold-child bg-2">
          <div class="box-fit-img">
						<picture>
				      <source media="(max-width: 767px)" data-srcset="<?php echo $thumb_url_mobile[0]; ?>">
				      <source media="(max-width: 1024px)" data-srcset="<?php echo $thumb_url_tablet[0]; ?>">
				      <source media="(min-width: 1025px)" data-srcset="<?php echo $thumb_url_desktop[0]; ?>">
				      <img data-src="<?php echo $thumb_url_mobile[0]; ?>" title="<?php echo $attachment_title; ?>" alt="<?php echo $attachment_alt; ?>"  class="lazy" />
				    </picture>
          </div>
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
              <?php the_field( 'box_2_titolo_1' ); ?>
            </div>
            <h3 class="txt-4 allupper"><?php the_field( 'box_2_titolo_2' ); ?></h3>
            <div class="content-styled">
              <?php the_field( 'box_2_testo_1' ); ?>
            </div>
          </div>
        </div>


        <div class="flex-hold-child flex-hold-child-triple tablet-forced-half bg-2">
          <div class="modulo-slideshow-immagini">
            <div class="consulenzaslider_dress">
              <ul class="consulenzaslider">
                <?php if( have_rows('box_2_slides') ) : while ( have_rows('box_2_slides') ) : the_row();
                $immagine_slide = get_sub_field( 'immagine' );
                $immagine_slide_URL_mobile = $immagine_slide['sizes']['column_image'];
                $immagine_slide_URL_tablet = $immagine_slide['sizes']['column_image'];
                $immagine_slide_URL_desktop = $immagine_slide['sizes']['column_image'];

                 ?>
                  <li class="prod-1 txt-2">
										<div class="playme"></div>
                    <div class="scheda-prodotto-img">
                      <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" class="absl" title="<?php the_sub_field( 'titolo' ); ?>"></a>
											<picture>
									      <source media="(max-width: 767px)" data-srcset="<?php echo $immagine_slide_URL_mobile; ?>">
									      <source media="(max-width: 1024px)" data-srcset="<?php echo $immagine_slide_URL_tablet; ?>">
									      <source media="(min-width: 1025px)" data-srcset="<?php echo $immagine_slide_URL_desktop; ?>">
									      <img data-src="<?php echo $immagine_slide_URL_mobile; ?>" title="<?php echo $immagine_slide['title']; ?>" alt="<?php echo $immagine_slide['alt']; ?>"  class="lazy" />
									    </picture>
                    </div>
                    <div class="scheda-app-txts txt-2 makewhitelink">
                      <div class="inside">
                        <h3 class="allupper"><a href="<?php the_sub_field( 'link' ); ?>" target="_blank" title="<?php the_sub_field( 'titolo' ); ?>"><?php the_sub_field( 'titolo' ); ?></a></h3>
                      </div>
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
  </div>
</div>















<div class="wrapper">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold flex-hold-4">

        <div class="flex-hold-child bg-2">
          <div class="box-fit-img">
						<picture>
							<source media="(max-width: 767px)" data-srcset="<?php echo $box_3_immagine_URL_mobile; ?>">
							<source media="(max-width: 1024px)" data-srcset="<?php echo $box_3_immagine_URL_tablet; ?>">
							<source media="(min-width: 1025px)" data-srcset="<?php echo $box_3_immagine_URL_desktop; ?>">
							<img data-src="<?php echo $box_3_immagine_URL_mobile; ?>" title="<?php echo $box_4_immagine_1['title']; ?>" alt="<?php echo $box_4_immagine_1['alt']; ?>"  class="lazy" />
						</picture>
          </div>
        </div>


        <div class="flex-hold-child flex-hold-child-triple tablet-forced-half bg-2">
          <div class="scheda-testi-padder">
            <?php if( have_rows('box_3_contenuti') ) : ?>
            <?php
            while ( have_rows('box_3_contenuti') ) : the_row();
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
