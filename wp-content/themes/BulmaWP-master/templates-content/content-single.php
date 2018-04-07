<?php
 /**************************************************/
 /* Single Post Template
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
					<?php the_title( '<h1 class="title is-size-3-mobile is-size-3-tablet is-size-1-desktop">', '</h1>' ); ?>
					<?php if ( has_excerpt( $post->ID ) ) { ?>
						<?php the_excerpt(); ?>
					<?php } ?>
					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta is-size-6-mobile">

						<?php if ( is_single() ) : ?>
							<?php echo __( 'In', 'bulmawp' ) . ' '; the_category( ', ' ); ?>
							<span>&bull;</span>
							<a href="<?php the_permalink(); ?>" title="<?php the_time( get_option( 'date_format' ) ); ?> <?php the_time( get_option( 'time_format' ) ); ?>"><?php the_date( get_option( 'date_format' ) ); ?></a>

							<?php if ( comments_open() ) : ?>
								<span>&bull;</span>
								<?php comments_popup_link(
									__( 'Add Comment', 'bulmawp' ),
									__( '1 Comment', 'bulmawp' ),
									sprintf( __('%s Comments', 'bulmawp' ), '%' ),
									''
								); ?>
							<?php endif; ?>
						<?php endif; ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
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

					<?php the_content(); ?>
				</div><!-- column -->
			</div><!-- columns -->
		</div><!-- container -->
	</section><!-- entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<div class="container">
				<div class="columns is-centered">
					<div class="column is-6">

						<?php if ( get_the_tags() ) : ?>
							<p class="tags"><?php the_tags( ' #', ' #', ' ' ); ?></p>
						<?php endif; ?>

						<?php bulmawp_author_bio(); ?>

					</div><!-- column -->
				</div><!-- columns -->
			</div><!-- container -->
		</footer><!-- entry-footer -->
	<?php endif; ?>

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

	<?php if ( get_post_type() == 'post' ) { ?>
		<section class="entry-related-posts">
			<div class="container">
				<div class="columns">
					<?php get_template_part( 'related-posts' ); ?>
				</div><!-- columns -->
			</div><!-- container -->
		</section><!-- entry-related-posts -->
	<?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->
