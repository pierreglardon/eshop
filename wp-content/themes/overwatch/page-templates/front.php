<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="mainSlider">
	<div class="cycle-slideshow"
		data-cycle-swipe=true
	    data-cycle-swipe-fx=scrollHorz
	    data-cycle-fx=scrollHorz
	    data-cycle-timeout=3000
	    data-cycle-pager=".pager"
		data-cycle-pager-template="<span></span>"
	    >
	    <!-- empty element for pager links -->
	    <div class="cycle-pager"></div>
	    <img src="<?php bloginfo('template_directory') ?>/assets/images/slider.jpg" />
	    <img src="<?php bloginfo('template_directory') ?>/assets/images/slider.jpg" />
	    <img src="<?php bloginfo('template_directory') ?>/assets/images/slider.jpg" />
	</div>
	<div class="pager"></div>
</section>
<section class="punchline">
	<h2>
		<div>“S’offrir une montre ne doit</div>
		<div>plus vous coûter le bras qui la porte.”</div>
		<aside>— Robert, fondateur de <span>focus</span>.com </aside>
	</h2>
</section>
<section class="newproducts">
	<div class="row">
		<div class="columns small-12">
			<h3>Découvrez nos nouveaux produits</h3>
		</div>
	</div>
	<div class="row">
		<div class="columns small-12">
			<?php the_field('produits_recents'); ?>
		</div>
	</div>
</section>

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
<aside class="">

		test

</aside>
	<?php endwhile;?>


<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_footer();
