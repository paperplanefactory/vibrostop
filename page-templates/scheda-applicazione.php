<?php
$thumb_id = get_post_thumbnail_id();
$attachment_title = get_the_title($thumb_id);
$attachment_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
$thumb_url_desktop = wp_get_attachment_image_src($thumb_id, 'app_size_desktop', true);
$thumb_url_tablet = wp_get_attachment_image_src($thumb_id, 'app_size_desktop', true);
$thumb_url_mobile = wp_get_attachment_image_src($thumb_id, 'app_half_size_desktop', true);
$thumb_url_mini = wp_get_attachment_image_src($thumb_id, 'thumbnail', true);

 ?>
<div class="flex-hold-child bg-2">
  <div class="scheda-prodotto-img">
    <a href="<?php the_permalink(); ?>" class="absl" title="<?php the_title(); ?>"></a>
    <picture>
      <source media="(max-width: 767px)" data-srcset="<?php echo $thumb_url_mobile[0]; ?>">
      <source media="(max-width: 1024px)" data-srcset="<?php echo $thumb_url_tablet[0]; ?>">
      <source media="(min-width: 1025px)" data-srcset="<?php echo $thumb_url_desktop[0]; ?>">
      <img data-src="<?php echo $thumb_url_mobile[0]; ?>" title="<?php echo $attachment_title; ?> - <?php echo get_bloginfo( 'name' ); ?>" alt="<?php echo $attachment_alt; ?> - <?php echo get_bloginfo( 'name' ); ?>"  class="lazy">
    </picture>
  </div>
  <div class="scheda-app-txts txt-2 makewhitelink">
    <div class="inside">
      <div class="cta-1 allupper">
        <span class="category-list">
          <?php
              if (function_exists('call_all_cat_applicazione')) {
                call_all_cat_applicazione();
              }
              ?>
        </span>
      </div>
      <h2 class="allupper"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    </div>
  </div>
</div>
