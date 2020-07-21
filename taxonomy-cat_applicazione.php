<?php
get_header();
include( locate_template ( 'page-templates/applicazioni-archive-menu.php' ) );
?>







<div class="wrapper">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="flex-hold flex-hold-4 def-margin-top">
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				include( locate_template ( 'page-templates/scheda-applicazione.php' ) );
				endwhile;
				endif;
				?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
