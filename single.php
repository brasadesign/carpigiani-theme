<?php
/**
 * The Template for displaying all single posts.
 *
 * @package carpigiani-theme
 */

get_header(); ?>

	<div class="wrap-blog">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="content-single">
					<?php get_template_part( 'content', 'single' ); ?>
				</section><!-- .content-single -->

				<?php carpigiani_theme_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>

	</div><!-- .wrap-blog -->

<?php get_footer(); ?>