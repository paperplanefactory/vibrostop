<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header();
?>
<div class="box-fullscreen-tax bg-5 patternize">
	<div class="box-shadow"></div>
	<div class="wrapper">
		<div class="wrapper-padded txt-2 def-margin-bottom-negative">
      <h1><a href="<?php echo home_url(); ?>" class="whitelink"><?php pll_e('404_output'); ?></a></h1>
		</div>
	</div>
</div>







<?php get_footer(); ?>
