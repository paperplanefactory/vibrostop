<div class="flex-hold-child bg-2">
  <div class="scheda-testi-padder">
    <?php if ( get_field( 'home_box_link' ) ) : ?>
      <h3 class="txt-4 allupper"><a href="<?php the_field( 'home_box_link' ); ?>" title="<?php the_field( 'home_box_titolo' ); ?>"><?php the_field( 'home_box_titolo' ); ?></a></h3>
    <?php endif; ?>
    <?php if ( get_field( 'home_box_abstract' ) ) : ?>
      <p class="txt-4"><?php the_field( 'home_box_abstract' ); ?></p>
    <?php endif; ?>
    <?php if ( get_field( 'home_box_cta' ) ) : ?>
      <h5><a href="<?php the_field( 'home_box_link' ); ?>" title="<?php the_field( 'home_box_cta' ); ?>" class="linked"><?php the_field( 'home_box_cta' ); ?></a></h5>
    <?php endif; ?>
  </div>
</div>
