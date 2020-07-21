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
		<div class="wrapper-padded txt-2 termdesc">
      <h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>








<div class="content_styled">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
