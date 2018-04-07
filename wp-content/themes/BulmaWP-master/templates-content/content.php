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
		<a href="<?php esc_url( get_permalink() ); ?>" rel="bookmark">
			<h2 class="entry-title is-size-5-mobile is-size-4-tablet is-size-3-desktop"><?php the_title(); ?></h2>
		</a>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
