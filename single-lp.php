<?php
//Template name: landing
get_header();
?>

<div class="box-fullscreen-tax bg-5">
  	<div class="box-shadow"></div>
</div>


<!-- blocco per categorie -->
<div class="wrapper lp-categorie">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">

      <h2 class="txt-6 like-h2 aligncenter"><?php the_field('titolo_sezione_categorie'); ?></h2>

      <!-- <?php $cat = get_field('dcv');
      echo $cat;?> -->

      <div class="flex-hold flex-hold-3 def-margin-top">
				<?php
         $terms = get_terms( array(
          'taxonomy' => 'cat_prodotto',
          'hide_empty' => false,
          'orderby' => 'name',
          'order' => 'ASC',
          'include' => $cat,
         ) );
          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            foreach ( $terms as $term ) {
          ?>

          <?php

          $term_group = $term->taxonomy;
          $name = $term->name;
          $term_id = $term->term_id;
          $desc = $term->description;
          $thumb_id = get_field('immagine_categoria', $term_group . '_' . $term_id);
          $attachment_title = get_the_title($thumb_id);
          $attachment_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
          $thumb_url_desktop = $thumb_id['sizes']['pro_size_desktop'];
          $thumb_url_tablet = $thumb_id['sizes']['pro_size_card'];
          $thumb_url_mobile = $thumb_id['sizes']['pro_size_card'];

           ?>
          <div class="flex-hold-child bg-2">
            <div class="scheda-prodotto-txts">
              <div class="cta-1 allupper">
              </div>
              <h2 class="like-h2 allupper"><a href="<?php echo get_term_link( $term ); ?>" title="<?php echo $name; ?>"><?php echo $name; ?></a></h2>
              <div class="scheda-prodotto-img">
                <a href="<?php echo get_term_link( $term ); ?>" title="<?php the_title(); ?>">
                  <picture>
                    <source media="(max-width: 767px)" data-srcset="<?php echo $thumb_url_mobile; ?>">
                    <source media="(max-width: 1024px)" data-srcset="<?php echo $thumb_url_tablet; ?>">
                    <source media="(min-width: 1025px)" data-srcset="<?php echo $thumb_url_desktop; ?>">
                    <img data-src="<?php echo $thumb_url_mobile; ?>" title="<?php echo $attachment_title; ?> - <?php echo get_bloginfo( 'name' ); ?>" alt="<?php echo $attachment_alt; ?> - <?php echo get_bloginfo( 'name' ); ?>"  class="lazy" />
                  </picture>
                </a>
              </div>
              <p>
                <?php echo $desc; ?>
              </p>
            </div>

          </div>

          <?php
            }
          }
          ?>

      </div>
    </div>
  </div>
</div>

<!-- blocco call to action -->

<div class="wrapper bg-4 lp-cta">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">

      <div class="container">
        <h2 class="txt-2 like-h2"><?php the_field('titolo_cta') ?></h2>
        <a href="tel:<?php the_field('numero_telefono'); ?>"><h3 class="lp-button bg-1 txt-2"><?php the_field('numero_telefono'); ?></h3></a>
      </div>

    </div>
  </div>
</div>

<!-- 6 campi acf -->
<div class="wrapper bg-3 lp-scegliere">
  <h2 class="txt-2 like-h2 aligncenter"><?php the_field('titolo_sezione_perche_scegliere_noi'); ?></h2>
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">

      <div class="flex-hold flex-hold-6 def-margin-top def-margin-bottom">

        <?php
        if( have_rows('perche_scegliere_noi') ):
          while( have_rows('perche_scegliere_noi') ) : the_row();
        ?>

        <div class="flex-hold-child bg-2">
          <h4 class="txt-6"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('titolo'); ?></a></h4>
        </div>

        <?php
          endwhile;
        endif;
        ?>
      </div>

    </div>
  </div>
</div>


<div class="wrapper lp-applicazione">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <h2 class="aligncenter like-h2 txt-6"><?php the_field('titolo_sezione_applicazioni'); ?></h2>
      <div class="flex-hold flex-hold-4 def-margin-top">
				<?php
        $get_apps = array(
         'post_type' => 'applicazione',
         'posts_per_page' => -1
         );
        $my_get_apps = get_posts( $get_apps );
        foreach( $my_get_apps as $post ) : setup_postdata( $post );
				include( locate_template ( 'page-templates/scheda-applicazione.php' ) );
				endforeach; wp_reset_query();
				?>
      </div>
    </div>
  </div>
</div>

<!-- blocco call to action -->

<div class="wrapper bg-4 lp-cta">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">

      <div class="container">
        <h2 class="txt-2 like-h2"><?php the_field('titolo_cta') ?></h2>
        <a href="tel:<?php the_field('numero_telefono'); ?>"><h3 class="lp-button bg-1 txt-2"><?php the_field('numero_telefono'); ?></h3></a>
      </div>

    </div>
  </div>
</div>

<!-- testo immagine -->

<!-- <div class="wrapper bg-2 lp-txt-img def-margin-top">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">

      <div class="container flex-hold card-grid">
        <div class="card-grid-left">
          <div class="product-card-image">
            <?php
              $thumb_id_left = get_field('immagine_sezione_quattro');
              $thumb_url_desktop_left = $thumb_id_left['sizes']['pro_size_card'];
              $thumb_url_tablet_left = $thumb_id_left['sizes']['pro_size_card'];
              $thumb_url_mobile_left = $thumb_id_left['sizes']['pro_size_card'];
            ?>
            <picture>
              <source media="(max-width: 767px)" data-srcset="<?php echo $thumb_url_mobile_left; ?>">
              <source media="(max-width: 1024px)" data-srcset="<?php echo $thumb_url_tablet_left; ?>">
              <source media="(min-width: 1025px)" data-srcset="<?php echo $thumb_url_desktop_left; ?>">
              <img data-src="<?php echo $thumb_url_mobile_left; ?>" title="<?php echo $attachment_title; ?> - <?php echo get_bloginfo( 'name' ); ?>" alt="<?php echo $attachment_alt; ?> - <?php echo get_bloginfo( 'name' ); ?>"  class="lazy" />
            </picture>
          </div>
        </div>
        <div class="card-grid-right">
          <div class="container padder">
            <h3 class="txt-6"><?php the_field('titolo_sezione_quattro'); ?></h3>
            <div class="content-styled">
              <?php the_field('testo_sezione_quattro'); ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div> -->

<?php get_footer(); ?>
