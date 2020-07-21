<?php

$thumb_id = get_post_thumbnail_id();
$attachment_title = get_the_title($thumb_id);
$attachment_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
$thumb_url_desktop = wp_get_attachment_image_src($thumb_id, 'pro_size_related', true);
$thumb_url_tablet = wp_get_attachment_image_src($thumb_id, 'pro_size_related', true);
$thumb_url_mobile = wp_get_attachment_image_src($thumb_id, 'pro_size_related', true);

 ?>

<div class="flex-hold prodotto-related bg-1 makewhitelink">
  <div class="prodotto-related-left">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <picture>
        <source media="(max-width: 767px)" data-srcset="<?php echo $thumb_url_mobile[0]; ?>">
        <source media="(max-width: 1024px)" data-srcset="<?php echo $thumb_url_tablet[0]; ?>">
        <source media="(min-width: 1025px)" data-srcset="<?php echo $thumb_url_desktop[0]; ?>">
        <img data-src="<?php echo $thumb_url_mobile[0]; ?>" title="<?php echo $attachment_title; ?> - <?php echo get_bloginfo( 'name' ); ?>" alt="<?php echo $attachment_alt; ?> - <?php echo get_bloginfo( 'name' ); ?>"  class="lazy" />
      </picture>
    </a>
  </div>
  <div class="prodotto-related-center">
    <div class="cta-1 allupper makelightgreylink">
        <span class="category-list">
          <?php
              if (function_exists('call_all_cat_prodotto')) {
                call_all_cat_prodotto();
              }
              ?>
        </span>
      </div>
      <h4 class="allupper"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
  </div>
  <div class="prodotto-related-right">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="absl"></a>
  </div>
</div>
