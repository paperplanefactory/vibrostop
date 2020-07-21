<?php
/**
 * Template Name: Template prodotti
*/

get_header();
include( locate_template ( 'page-templates/prodotti-archive-menu.php' ) );
?>
<div class="wrapper">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold flex-hold-4 def-margin-top">
				<?php
        $get_apps = array(
         'post_type' => 'prodotto',
         'posts_per_page' => -1
         );
        $my_get_apps = get_posts( $get_apps );
        foreach( $my_get_apps as $post ) : setup_postdata( $post );
				include( locate_template ( 'page-templates/scheda-prodotto.php' ) );
				endforeach; wp_reset_query();
				?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
