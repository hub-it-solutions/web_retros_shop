<?php
/**************************************************/
/* Template Name: Sidebar Right
/* @package BulmaWP
/* Version: 0.1
/* Updated: 14th Aug 2017
/**************************************************/
get_header(); ?>



	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="container">

			<div class="columns">

				<div class="column is-8">

					<?php while ( have_posts() ) : the_post(); ?>

						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title title is-1">', '</h1>' ); ?>
							<?php if ( has_excerpt( $post->ID ) ) { ?>
								<?php the_excerpt(); ?>
							<?php } ?>
						</header><!-- entry-header -->

						<section class="entry-content">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="image featured-image">
									<?php the_post_thumbnail( 'bulmawp_fullscreen-image' ); ?>
								</div>
							<?php endif; ?>
							<?php
								the_content();

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulmawp' ),
									'after'  => '</div>',
								) );
							?>
						</section><!-- entry-content -->

						<footer class="entry-footer">
							<?php echo get_theme_mod( 'bulmawp_author_bio' ) ?>
							<?php bulmawp_author_bio(); ?>
						</footer><!-- entry-footer -->

						<?php if ( comments_open() || get_comments_number() ) : ?>
							<section class="entry-comments">
								<?php comments_template(); ?>
							</section><!-- entry-comments -->
						<?php endif; ?>

					<?php endwhile; ?>

				</div><!-- column -->

				<div class="column is-3 is-offset-1">
					<?php get_sidebar(); ?>
				</div><!-- column -->

			</div><!-- columns -->

		</div><!-- container -->

	</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();
