<?php
/**************************************************/
/* BulmaWP Single Posts
/* @package BulmaWP
/* Version: 0.1
/* Updated: 5th Aug 2017
/**************************************************/

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'templates-content/content', 'single' ); ?>
	<?php endwhile; ?>

<?php
get_footer();
