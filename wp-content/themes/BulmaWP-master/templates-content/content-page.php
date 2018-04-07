<?php
 /**************************************************/
 /* Page Content Template
 /* @package BulmaWP
 /* Version: 0.1.1
 /* Updated: 14th Aug 2017
 /**************************************************/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-6 has-text-centered">
					<?php the_title( '<h1 class="entry-title title is-1">', '</h1>' ); ?>
					<?php if ( has_excerpt( $post->ID ) ) { ?>
						<?php the_excerpt(); ?>
					<?php } ?>
				</div><!-- column -->
			</div><!-- columns -->
		</div><!-- container -->
	</header><!-- entry-header -->

	<section class="entry-content">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-6">
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
				</div><!-- column -->
			</div><!-- columns -->
		</div><!-- container -->
	</section><!-- entry-content -->

	<footer class="entry-footer">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-6">

					<?php echo get_theme_mod( 'bulmawp_author_bio' ) ?>

					<?php bulmawp_author_bio(); ?>

				</div><!-- column -->
			</div><!-- columns -->
		</div><!-- container -->
	</footer><!-- entry-footer -->

	<?php if ( comments_open() || get_comments_number() ) : ?>
		<section class="entry-comments">
			<div class="container">
				<div class="columns is-centered">
					<div class="column is-6">
						<?php comments_template(); ?>
					</div><!-- column -->
				</div><!-- columns -->
			</div><!-- container -->
		</section><!-- entry-comments -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
