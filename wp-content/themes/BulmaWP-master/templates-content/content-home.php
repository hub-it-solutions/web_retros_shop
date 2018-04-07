<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BulmaWP
 */

?>

	<?php if ( has_post_thumbnail() ) { ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('entry-preview'); ?> style="background-image: url( <?php the_post_thumbnail_url( 'bulmawp_preview-image' ); ?> );">
	<?php } else { ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('entry-preview'); ?>>
	<?php } ?>
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title is-size-2-desktop is-size-5-mobile"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->
	</article><!-- #post-<?php the_ID(); ?> -->
