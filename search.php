<?php
/**
 * The template for displaying search results pages
 */

get_header();
include( locate_template ( 'page-templates/search-archive-menu.php' ) );
?>
<?php if ( have_posts() ) : ?>

<div class="wrapper def-margin-negative-top">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more">

			<div class="flex-hold flex-hold-tecnica">
			<?php while ( have_posts() ) : the_post();
			include( locate_template ( 'page-templates/post-list.php' ) );
			endwhile; ?>
			</div>
    </div>
  </div>
</div>

<?php else : ?>
	<div class="wrapper def-margin-top">
	  <div class="wrapper-padded">
	    <div class="wrapper-padded-more">
				<h3><?php pll_e('norisultati_output'); ?> "<?php echo get_search_query(); ?>"</h3>
	    </div>
	  </div>
	</div>
<?php endif; ?>















<?php get_footer(); ?>
