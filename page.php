<?php
/**
 * Template Name: Template generico
*/

get_header();
?>
<?php while ( have_posts() ) : the_post();
?>
<div class="box-fullscreen-tax bg-5 patternize">
	<div class="box-shadow"></div>
	<div class="wrapper">
		<div class="wrapper-padded txt-2 def-margin-bottom-negative">
      <h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>


<div class="wrapper def-margin-negative-top">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">
      <div class="wrapper-padded-more-texts content-styled">
        <div class="col-pad bg-2">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
