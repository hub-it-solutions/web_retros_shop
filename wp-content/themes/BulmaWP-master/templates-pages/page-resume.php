<?php
/**************************************************/
/* Template Name: Resume
/* @package BulmaWP
/* Version: 0.1
/* Updated: 14th Aug 2017
/**************************************************/
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
        <div class="resume-template">
            <?php get_template_part( 'templates-content/content', 'page' ); ?>
        </div><!-- resume-remplate-->
	<?php endwhile; ?>

<?php
get_footer();
