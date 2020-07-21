<?php
/**
 * The Template for displaying all single posts.
 */

get_header();
include( locate_template ( 'page-templates/applicazioni-archive-menu.php' ) );
?>
<?php while ( have_posts() ) : the_post();

$thumb_id = get_post_thumbnail_id();
$attachment_title = get_the_title($thumb_id);
$attachment_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
$thumb_url_desktop = wp_get_attachment_image_src($thumb_id, 'pro_size_card', true);
$thumb_url_tablet = wp_get_attachment_image_src($thumb_id, 'pro_size_card', true);
$thumb_url_mobile = wp_get_attachment_image_src($thumb_id, 'pro_size_card', true);

?>
<div class="wrapper def-margin-top">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold card-grid">
        <div class="card-grid-left bg-8">
          <div class="product-card-image">
            <picture>
              <source media="(max-width: 767px)" data-srcset="<?php echo $thumb_url_mobile[0]; ?>">
              <source media="(max-width: 1024px)" data-srcset="<?php echo $thumb_url_tablet[0]; ?>">
              <source media="(min-width: 1025px)" data-srcset="<?php echo $thumb_url_desktop[0]; ?>">
              <img data-src="<?php echo $thumb_url_mobile[0]; ?>" title="<?php echo $attachment_title; ?> - <?php echo get_bloginfo( 'name' ); ?>" alt="<?php echo $attachment_alt; ?> - <?php echo get_bloginfo( 'name' ); ?>"  class="lazy" />
            </picture>
          </div>
          <div class="no-mobile">
            <div class="padder content-styled">
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
                <h2 class="allupper"><a href="<?php echo $link_url; ?>" class="linked bluelink" target="_blank"><?php the_sub_field('titolo_del_file_link'); ?></a></h2>
              <?php endwhile; ?>
              <?php endif; ?>
              <?php
              $terms_activity = get_the_terms( $post->ID , 'cat_applicazione' );
              // Loop over each item since it's an array
              if ( $terms_activity != null ){
              foreach( $terms_activity as $term_activity ) {
              // Print the name method from $term which is an OBJECT
              $pdf_link = get_field('brochure_pdf', $term->taxonomy . '_' . $term_activity->term_id);
              $pdf_name = get_field( 'titolo_brochure', $term->taxonomy . '_' . $term_activity->term_id );
              if ( $pdf_link != '' ) {
                echo '<h2 class="allupper"><a href="' . $pdf_link . '" class="linked" target="_blank">' . $pdf_name . '</a></h2>';
              }
              unset($term_activity);
              } }
              ?>
            </div>
          </div>
        </div>
        <div class="card-grid-right bg-2">
          <div class="padder content-styled">
            <?php the_content(); ?>
            <?php if( have_rows('modulo') ) : ?>
              <?php
              while ( have_rows('modulo') ) : the_row();
              $scegli_modulo = get_sub_field( 'scegli_modulo' );
              if ( $scegli_modulo === 'testo' ) : ?>
                <?php the_sub_field('testo'); ?>
              <?php else : ?>
                <?php
                $pro_correlato = get_sub_field( 'scheda_prodotto' );
                if( $pro_correlato ) :
                ?>
                <?php
                foreach( $pro_correlato as $post) : setup_postdata($post);
                include( locate_template ( 'page-templates/scheda-prodotto-intermezzo.php' ) );
                endforeach;
                wp_reset_postdata();
                ?>
                <?php endif; ?>
              <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>

          </div>

        </div>

        <div class="card-grid-only-mobile bg-8">
          <div class="padder content-styled">
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
              <h2 class="allupper"><a href="<?php echo $link_url; ?>" class="linked bluelink" target="_blank"><?php the_sub_field('titolo_del_file_link'); ?></a></h2>
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
