<?php
/*
Template Name: Front
*/
get_header(); ?>

hello test
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="cycle-slideshow"
	    data-cycle-fx="scrollHorz"
	    data-cycle-timeout="0"
	    data-cycle-prev="#prev"
	    data-cycle-next="#next"
	    >
	    <img src="http://malsup.github.io/images/p1.jpg">
	    <img src="http://malsup.github.io/images/p2.jpg">
	    <img src="http://malsup.github.io/images/p3.jpg">
	    <img src="http://malsup.github.io/images/p4.jpg">
	</div>
	<div class="row">

	</div>
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>

		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
