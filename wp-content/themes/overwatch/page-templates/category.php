<?php
/*
Template Name: Categorie
*/

get_header(); ?>
<nav class="row filariane">
	<div class="small-12 columns">
		<?php
	$args = array(
			'delimiter' => ' <span>/</span> '
	);
	 woocommerce_breadcrumb( $args ); ?>
	</div>
</nav>
<div class="row" data-equalizer>
	<?php get_sidebar(); ?>
	<div class="content small-12 large-8 columns" role="main" data-equalizer-watch>

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

	          <?php the_content(); ?>
	      
	  </article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>
<?php get_footer();
