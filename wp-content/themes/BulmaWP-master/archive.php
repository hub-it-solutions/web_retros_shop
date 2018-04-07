<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BulmaWP
 */

get_header(); ?>

<header class="entry-header">
	<div class="container">
		<div class="columns is-centered">
			<div class="column is-6 has-text-centered">
				<?php the_archive_title( '<h1 class="entry-title title is-1">', '</h1>' ); ?>
			</div><!-- column -->
		</div><!-- columns -->
	</div><!-- container -->
</header><!-- entry-header -->

	<section class="posts-feed">
		<div class="container">

			<?php if ( have_posts() ) : ?>
				<div class="columns is-multiline is-mobile">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="column <?php echo esc_html( get_theme_mod( 'bulmawp_blog_columns' ) ); ?> is-half-mobile">
							<?php get_template_part( 'templates-content/content', 'home' ); ?>
						</div><!-- column -->
					<?php endwhile; ?>
				</div><!-- columns -->

					<?php bulmawp_pagination(); ?>
			<?php else : ?>

				<?php get_template_part( 'templates-content/content', 'none' ); ?>

			<?php endif; ?>
		</div><!-- container -->
	</section><!-- posts-feed -->

<?php
get_footer();
