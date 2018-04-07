<?php
/**************************************************/
/* BulmaWP Main Template File
/* @package BulmaWP
/* Version: 0.1
/* Updated: 5th Aug 2017
/**************************************************/

get_header(); ?>

	<?php if ( is_home() && $paged == 0 && get_theme_mod( 'bulmawp_home_title' ) ) : ?>
		<header class="page-header">
			<div class="container">
				<div class="columns is-centered">
					<div class="column is-5 has-text-centered">
						<h1><?php echo esc_html( get_theme_mod( 'bulmawp_home_title' ) ); ?></h1>
					</div><!-- column -->
				</div><!-- columns -->
			</div><!-- container -->
		</header><!-- page-header -->
	<?php endif; ?>

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
