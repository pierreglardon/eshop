<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<footer id="footer">
			<div class="row">
				<div class="columns small-12 logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php bloginfo('template_directory') ?>/assets/images/focus.svg" alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
				</div>
			</div>
			<div class="row menu-footer">
				<?= wp_nav_menu("footer"); ?>
				<div class="small-12 medium-3 columns">
					<ul>
						<li class="newsletter">
							<span>Newsletter</span>
							<div>
								<input type="text" name="newsletter" placeholder="Entrez votre email" class="text" />
								<input type="button" name="submit" value="Ok" class="submit" />
							</div>

						</li>
						<li class="secure">
							<span>Paiement sécurisé</span>
							<div>
								<img src="<?php bloginfo('template_directory') ?>/assets/images/security_cards/visa.png" alt="">
				                <img src="<?php bloginfo('template_directory') ?>/assets/images/security_cards/visaelectron.png" alt="">
				                <img src="<?php bloginfo('template_directory') ?>/assets/images/security_cards/mastercard.png" alt="">
				                <img src="<?php bloginfo('template_directory') ?>/assets/images/security_cards/maestro.png" alt="">
				                <img src="<?php bloginfo('template_directory') ?>/assets/images/security_cards/paypal.png" alt="">
				                <img src="<?php bloginfo('template_directory') ?>/assets/images/security_cards/eblue.png" alt="">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</footer>

		<div id="footer-container" style="display:none;">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<div class='blackbg'></div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/javascript/custom/carousel.js" type="text/javascript"></script>

</body>
</html>
