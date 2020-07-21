<?php
/**
 * The Template for displaying all single posts.
 */

get_header();
?>
<?php while ( have_posts() ) : the_post();
$thumb_id = get_post_thumbnail_id();
$attachment_title = get_the_title($thumb_id);
$attachment_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
if ( $isMobile == 1 ) {
  $thumb_url = wp_get_attachment_image_src($thumb_id,'pro_size_card', true);
}
if ( $isTablet == 1 ) {
  $thumb_url = wp_get_attachment_image_src($thumb_id,'pro_size_card', true);
}
if ( $isDesktop == 1 ) {
  $thumb_url = wp_get_attachment_image_src($thumb_id,'pro_size_card', true);
}
?>
<div class="box-fullscreen-tax bg-5 patternize">
	<div class="box-shadow"></div>
	<div class="wrapper">
		<div class="wrapper-padded txt-2 def-margin-bottom-negative">
      <h1><?php the_title(); ?></h1>
      <ul class="archive-menu">
      <li><a href="<?php the_field( 'archivio_tecnica', 'option' ); ?>" alt=""><?php pll_e('tutte_output'); ?></a></li>
      </ul>
		</div>
	</div>
</div>





<div class="wrapper def-margin-negative-top">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold card-grid">
        <div class="card-grid-left bg-8">
          <div class="product-card-image">
            <img data-original="<?php echo $thumb_url[0]; ?>" class="lazy" title="<?php echo $attachment_title; ?>" alt="<?php echo $attachment_alt; ?>" />
          </div>
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
        <div class="card-grid-right bg-2">
          <div class="padder content-styled">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
