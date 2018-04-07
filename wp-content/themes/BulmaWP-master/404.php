<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BulmaWP
 */

get_header(); ?>

<header class="entry-header">
	<div class="container">
		<div class="columns is-centered">
			<div class="column is-6 has-text-centered">
				<h1 class="entry-title title is-1"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bulmawp' ); ?></h1>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bulmawp' ); ?></p>
			</div><!-- column -->
		</div><!-- columns -->
	</div><!-- container -->
</header><!-- entry-header -->

<section class="entry-content">
	<div class="container">
		<div class="columns is-centered">
			<div class="column is-6 has-text-centered">

				<!-- Search Form -->
				<?php get_search_form(); ?>

			</div><!-- column -->
		</div><!-- columns -->
		<div class="columns is-centered">
			<div class="column is-4">
				<div class="widget widget_categories">
					<h4 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'bulmawp' ); ?></h4>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div><!-- .widget -->
			</div><!-- column -->
			<div class="column is-4">
				<?php

					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'bulmawp' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h4>$archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
				?>
			</div><!-- column -->
			<div class="column is-4">
				<!-- Recent Posts Widget -->
				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
			</div><!-- column -->
		</div><!-- columns -->
	</div><!-- container -->
</section><!-- entry-content -->

<footer class="entry-footer">
	<div class="container">
		<div class="columns is-centered">
			<div class="column is-6">


			</div><!-- column -->
		</div><!-- columns -->
	</div><!-- container -->
</div><!-- entry-footer -->


<?php
get_footer();
