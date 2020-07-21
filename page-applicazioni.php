<?php
/**
 * Template Name: Template applicazioni
*/

get_header();
include( locate_template ( 'page-templates/applicazioni-archive-menu.php' ) );
?>
<div class="wrapper">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
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
<?php get_footer(); ?>
