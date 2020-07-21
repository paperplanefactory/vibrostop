<?php
/**
 * The template for displaying the footer.
 */

wp_reset_query();
global $current_lang;
?>
<div id="footer" class="bg-6">
  <div class="footer-gradient"></div>
  <div class="wrapper">
    <div class="wrapper-padded">
      <div class="flex-hold flex-hold-4">
        <div class="flex-hold-child bg-6">
          <div class="colsep">
            <div class="cta-1 txt-1 allupper">
              <a href="<?php the_field( 'archivio_contatti', 'option' ); ?>" class="bluelink"><?php pll_e('contatti_output'); ?></a>
            </div>
            <h3 class="txt-2 allupper"><?php the_field( 'titolo_prima_colonna', 'option' ); ?></h3>
            <p class="txt-3"><?php the_field( 'testo_prima_colonna', 'option' ); ?></p>
            <h5><a href="<?php the_field( 'link_google_maps', 'option' ); ?>" class="linked bluelink" rel="nofollow" target="_blank"><?php pll_e('dovesiamo_output'); ?></a></h5>

          </div>
        </div>

        <div class="flex-hold-child only-desktop">
          <div class="colsep">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-col-1', 'menu_class' => 'foot-menu' ) ); ?>
            <?php
            $list_cat_applicazione = get_terms( 'cat_applicazione', array(
                'orderby'    => 'count',
                'hide_empty' => 0,
            ) );
            if ( ! empty( $list_cat_applicazione ) && ! is_wp_error( $list_cat_applicazione ) ){
                echo '<ul class="footer-tax">';
                foreach ( $list_cat_applicazione as $term ) {
                    echo '<li class="this-tax-' . $term->term_id . '"><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
          </div>
        </div>

        <div class="flex-hold-child only-desktop">
          <div class="colsep">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-col-2', 'menu_class' => 'foot-menu' ) ); ?>
            <?php
            $list_cat_prodotto = get_terms( 'cat_prodotto', array(
                'orderby'    => 'count',
                'hide_empty' => 0,
            ) );
            if ( ! empty( $list_cat_prodotto ) && ! is_wp_error( $list_cat_prodotto ) ){
                echo '<ul class="footer-tax">';
                foreach ( $list_cat_prodotto as $term ) {
                    echo '<li class="this-tax-' . $term->term_id . '"><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-col-2-2', 'menu_class' => 'foot-menu' ) ); ?>
          </div>
        </div>

        <div class="flex-hold-child">
          <div class="colsep">
            <div class="only-non-desktop">
              <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-non-desktop', 'menu_class' => 'foot-menu' ) ); ?>
            </div>
            <span class="foot-menu"><?php the_field( 'footer_form_intro', 'option' ); ?></span>
            <?php the_field( 'footer_form', 'option' ); ?>

            <?php
            if ( $current_lang === 'it' ) {
              //include( locate_template ( 'page-templates/newsletter-form-it.php' ) );
            }
            else {
              //include( locate_template ( 'page-templates/newsletter-form-en.php' ) );
            }
             ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="footer-bottom bg-6">
  <div class="wrapper">
    <div class="wrapper-padded cta-1">
      <div class="flex-hold">
        <div class="footer-bottom-hold-child-left">
        &copy; <?php echo date("Y"); ?> <?php the_field( 'testo_fondo', 'option' ); ?> - <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-privacy', 'menu_class' => 'last-menu', 'container'=> false ) ); ?>
        </div>
        <div class="footer-bottom-hold-child-right">
          <a href="<?php the_field( 'archivio_credits', 'option' ); ?>">credits</a>
        </div>
      </div>

    </div>
  </div>
</div>
<?php wp_footer();
?>
</body>
</html>
