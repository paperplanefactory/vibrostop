<?php
/**
 * The main template file.
 */

get_header();
$args_homepage = array(
  'post_type' => 'homepage',
  'posts_per_page' => 1
);
$my_homepage = get_posts( $args_homepage );
foreach ( $my_homepage as $post ) : setup_postdata ( $post );
$home_box = get_field( 'home_box' );
if ( $home_box === 'si' ) {
  $first_space_class = "first-space-class";
}
else {
  $space_class = "def-margin-top";
}

?>
<div class="box-fullscreen bg-5 patternize">
  <div class="box-shadow"></div>
  <div class="fullscreen-cta-bottom <?php echo $first_space_class; ?>">
    <div class="wrapper">
      <div class="wrapper-padded txt-2">
        <h1 class="extra"><?php the_field( 'titolo_fullscreen' ); ?></h1>
        <h6><?php the_field( 'sottotitolo_fullscreen' ); ?></h6>
      </div>
    </div>
  </div>
</div>

<?php

if ( !empty ( $home_box === 'si' ) ) : ?>
  <div class="wrapper def-margin-negative-top">
    <div class="wrapper-padded">
      <div class="wrapper-padded-more">
        <div class="flex-hold flex-hold-4">
          <div class="flex-hold-child"></div>
          <div class="flex-hold-child"></div>
          <div class="flex-hold-child"></div>
          <?php include( locate_template ( 'page-templates/scheda-news-home.php' ) ); ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>


<div class="wrapper <?php echo $space_class; ?>">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold flex-hold-4">
        <?php
        if( have_rows( 'prodotti' ) ) : while ( have_rows( 'prodotti' ) ) : the_row();
        include( locate_template ( 'page-templates/scheda-prodotto-home.php' ) );
        endwhile; endif; ?>
        <?php include( locate_template ( 'page-templates/scheda-testi-1.php' ) ); ?>
        <?php
        $applicazioni_counter = 0;
        if( have_rows( 'applicazioni' ) ) : while ( have_rows( 'applicazioni' ) ) : the_row();
        $applicazioni_counter ++;
        if ( $applicazioni_counter == 1 ) {
          include( locate_template ( 'page-templates/scheda-applicazione-doppia-home.php' ) );
        }
        if ( $applicazioni_counter == 2 ) {
          include( locate_template ( 'page-templates/scheda-applicazione-home.php' ) );
        }
        endwhile;
        $applicazioni_counter = 0;
        echo '<div class="flex-hold-child bg-2">';
        while ( have_rows( 'applicazioni' ) ) : the_row();
        $applicazioni_counter ++;
        if ( $applicazioni_counter > 2 ) {
          include( locate_template ( 'page-templates/scheda-meta-applicazione-home.php' ) );
        }
        endwhile;
        echo '</div>';
        endif;
        include( locate_template ( 'page-templates/scheda-testi-doppia.php' ) );
        include( locate_template ( 'page-templates/scheda-testi-2.php' ) );
        include( locate_template ( 'page-templates/scheda-testi-3.php' ) ); ?>
      </div>
    </div>
  </div>
</div>

<?php endforeach; wp_reset_postdata(); ?>
<?php get_footer(); ?>
