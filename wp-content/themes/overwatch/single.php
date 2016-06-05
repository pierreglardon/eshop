<?php
/**
* The template for displaying all single posts and attachments
*
* @package FoundationPress
* @since FoundationPress 1.0.0
*/

get_header(); ?>



<div id="single-post" role="main">
	<nav class="row filariane">
		<div class="small-12 columns">
			<?php
			if (is_page() && !is_front_page() || is_single() || is_category()) {
				?>
				<a title="<?php bloginfo('name') ?>" href="<?php bloginfo('url') ?>">
					Accueil
				</a> /
				<?php
				if (is_page())
				{
					$myAncestors = get_post_ancestors($post);
					if ($myAncestors)
					{
						$myAncestors = array_reverse($myAncestors);
						foreach ($myAncestors as $crumb)
						{
							echo '<a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a> /; ';
						}
					}
				}
				if (is_category())
				{
					$myCategory = get_the_category();
					$myParentId = get_category($myCategory[0])->parent;
					$myParent = get_category( $myParentId );
					if (single_term_title('', false) != $myParent->name)
					{
						echo '<a href="' . esc_url( get_category_link( $myParentId ) ) . '">'.$myParent->name.'</a> / ';
					}
					echo '<span class="active">'.single_term_title('', false).'</span>';
				}
				if (is_single())
				{
					$myCategory = get_the_category();
					echo get_category_parents($myCategory[0], true, ' / ');
				}
				if (is_page() || is_single())
				{
					echo '<span class="active">'.the_title('', '', false).'</span>';
				}
				?>
				<?php
			}
			?>
		</div>
	</nav>
	<section class="row article" data-equalizer>
		<aside class="columns medium-4 large-3 hide-for-small-only" data-equalizer-watch>
		<header>
			Articles récents :
		</header>
			<?php
				$catquery = new WP_Query( 'cat=10&posts_per_page=10' );
				while($catquery->have_posts()) : $catquery->the_post();
			?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<h5><i class="fa fa-caret-right" aria-hidden="true"></i> <?php the_title(); ?></h5>
					<h6>publié le <?php the_date(); ?></h6>
				</a>
			</article>
			<?php endwhile; ?>
		</aside>
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="article columns small-12 medium-8 large-9" id="post-<?php the_ID(); ?>" data-equalizer-watch>
				<header>
					<h3 class="entry-title"><?php the_title(); ?></h3>

				</header>
				<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
				<div class="content">
					<header class="image">
						<?php
						if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif;
						?>
					</header>

					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<?php foundationpress_entry_meta(); ?>
				</footer>
				<?php do_action( 'foundationpress_post_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_post_after_comments' ); ?>
			</article>
		<?php endwhile;?>
	</section>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
