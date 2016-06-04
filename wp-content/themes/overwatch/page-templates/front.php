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
			<?php
			$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
		    $loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class="small-12 medium-6 large-3 columns product">
					<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
						<h4><?php the_title(); ?></h4>
						<h4 class="price"><?php echo $product->get_price_html(); ?></h4>
					 </a>
				 </div>
			 <?php endwhile; ?>
			 <?php wp_reset_query(); ?>
		</div>
	</div>
</section>
<section class="lastposts">
	<div class="row fullWidth">
		<?php
			$catquery = new WP_Query( 'cat=10&posts_per_page=2' );
			while($catquery->have_posts()) : $catquery->the_post();
		?>
		<div class="columns small-12 medium-6">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<section>
						<aside>
							<h3><?php the_title(); ?></h3>
							<hr />
							<div>Lire l'article</div>
						</aside>
						<?php the_post_thumbnail(); ?>
				   	</section>
				<? } ?>
			</a>
		</div>
		<?php endwhile; ?>
		<div class="seeblog text-center small-12 columns">
			<a href="#">Visiter le blog</a>
		</div>
	</div>
</section>
<section class="bestsellers">
	<div class="row">
		<div class="columns small-12">
			<h3>Les best-sellers</h3>
		</div>
	</div>
	<div class="row">
		<div class="columns small-12">
			<?php
			$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'meta_key' => 'total_sales' );
		    $loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class="small-12 medium-6 large-3 columns product">
					<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
						<h4><?php the_title(); ?></h4>
						<h4 class="price"><?php echo $product->get_price_html(); ?></h4>
					 </a>
				 </div>
			 <?php endwhile; ?>
			 <?php wp_reset_query(); ?>
		</div>
	</div>
</section>
<section class="marques">
	<h3>Nos marques</h3>
	<div class="owl-carousel owl-carousel-marques owl-theme">
		<div>1</div>
	    <div>2</div>
	    <div>3</div>
		<div>4</div>
		<div>5</div>
		<div>6</div>
	</div>
</section>

<?php get_footer();
