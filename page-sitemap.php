<?php
/**
 * Template Name: Sitemap
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
					<h2><?php pll_e('pages_output'); ?></h2>
					<ul>
					<?php wp_list_pages( array( 'title_li'    => '' ) ); ?>
					</ul>
					<h2><?php pll_e('prodotti_output'); ?></h2>
					<ul>
					<?php
					$args_prodotti = array(
					  'post_type' => 'prodotto',
					  'posts_per_page' => -1
					);
					$my_prodotti = get_posts( $args_prodotti );
					foreach ( $my_prodotti as $post ) : setup_postdata ( $post );
					?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
					<?php endforeach; wp_reset_postdata(); ?>
					</ul>
					<h2><?php pll_e('applicazioni_output'); ?></h2>
					<ul>
					<?php
					$args_prodotti = array(
					  'post_type' => 'applicazione',
					  'posts_per_page' => -1
					);
					$my_prodotti = get_posts( $args_prodotti );
					foreach ( $my_prodotti as $post ) : setup_postdata ( $post );
					?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
					<?php endforeach; wp_reset_postdata(); ?>
					</ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
