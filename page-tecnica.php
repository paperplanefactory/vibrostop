<?php
/**
 * Template Name: Template tecnica delle vibrazioni
*/

get_header();
?>
<div class="box-fullscreen-tax bg-5 patternize">
	<div class="box-shadow"></div>
	<div class="wrapper">
		<div class="wrapper-padded txt-2 def-margin-bottom-negative termdesc">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
		</div>
	</div>
</div>



<div class="wrapper def-margin-negative-top">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold flex-hold-tecnica">
				<?php
        $get_apps = array(
         'post_type' => 'post',
         'posts_per_page' => -1
         );
        $my_get_apps = get_posts( $get_apps );
        foreach( $my_get_apps as $post ) : setup_postdata( $post );
				include( locate_template ( 'page-templates/post-list.php' ) );
				endforeach; wp_reset_query();
				?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
