<?php
if ( get_post_type() === 'post' ) :
  $link_choose = get_field( 'scegli_file_url' );
  if ( $link_choose === 'file' ) {
    $link_url = get_field( 'scegli_file' );
  }
  else {
    $link_url = get_field( 'scegli_url' );
  }
?>
<div class="flex-hold-child bg-2">
  <div class="flex-hold tecnica-inside">
    <div class="tecnica-inside-left">
      <h3 class="allupper"><a href="<?php echo $link_url; ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></h3>
      <div class="no-mobile">
        <h5><a href="<?php echo $link_url; ?>" class="linked" target="_blank"><?php pll_e('scopri_piu_output'); ?></a></h5>
      </div>
    </div>
    <div class="tecnica-inside-right">
      <p>
        <?php the_field( 'abstract' ); ?>
      </p>
      <div class="only-mobile">
        <h5><a href="<?php echo $link_url; ?>" class="linked" target="_blank"><?php pll_e('scopri_piu_output'); ?></a></h5>
      </div>
    </div>
  </div>
</div>
<?php else : ?>
  <div class="flex-hold-child bg-2">
    <div class="flex-hold tecnica-inside">
      <div class="tecnica-inside-left">
        <div class="cta-1 allupper">
          <span class="category-list">
            <?php
                if (function_exists('call_all_cat_prodotto')) {
                  call_all_cat_prodotto();
                }
                ?>
                <?php
                    if (function_exists('call_all_cat_applicazione')) {
                      call_all_cat_applicazione();
                    }
                    ?>
          </span>
        </div>
        <h3 class="allupper"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <div class="no-mobile">
          <h5><a href="<?php the_permalink(); ?>" class="linked"><?php pll_e('scopri_piu_output'); ?></a></h5>
        </div>
      </div>
      <div class="tecnica-inside-right">
        <p>
          <?php the_field( 'abstract' ); ?>
        </p>
        <div class="only-mobile">
          <h5><a href="<?php the_permalink(); ?>" class="linked"><?php pll_e('scopri_piu_output'); ?></a></h5>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
