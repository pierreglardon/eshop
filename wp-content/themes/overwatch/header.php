<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="header">
		<section class="row">
			<div class="columns menuTop header-align">
				<div class="toggleMenu">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="columns logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/focus.svg" alt="<?php bloginfo( 'name' ); ?>"/>
				</a>
			</div>
		<div class="columns smartMenu header-align">
			<div class="showSmartMenu show-for-small-only">
				<div></div>
			</div>
			<aside>
				<a href="#!" class="showSearch"><i class="fa fa-search" aria-hidden="true"></i></a>
				<?php if(is_user_logged_in()): ?>
					<a href="<?= get_permalink(_PAGE_COMPTE); ?>"><i class="fa fa-user" aria-hidden="true"></i></a>
				<?php else: ?>
					<a href="<?= wp_registration_url(); ?>"><i class="fa fa-user" aria-hidden="true"></i></a>
				<?php endif; ?>
				<a href="<?= get_permalink(_PAGE_CART); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<?php global $woocommerce; if ( $woocommerce->cart->cart_contents_count > 0)
					echo '<div>'.sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count).'</div>'; ?>
				</a>
			</aside>

		</div>
		</section>



		<nav id="navigation">
			<div class="toggleMenu hide">
				<div></div>
				<div></div>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
		</nav>
		<section class="search">
			<div class="row">
				<?php get_search_form ( $echo = true ) ?>
			</div>
		</section>
	</header>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
