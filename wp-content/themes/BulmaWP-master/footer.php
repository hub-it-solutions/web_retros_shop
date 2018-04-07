<?php
/**************************************************/
/* BulmaWP Footer Template File
/* @package BulmaWP
/* Version: 0.1
/* Updated: 5th Aug 2017
/**************************************************/
?>

	</div><!-- #content -->

	<footer id="colophon" class="footer site-footer">
  		<div class="container">
    		<div class="content has-text-centered">

				<p class="copyright">
					&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a>
				</p>

      			<p class="poweredby">
					<?php _e( 'Powered by', 'bulmawp' ); ?> <a href="https://bulmawp.robjames.eu">BulmaWP Theme</a>
					&amp;
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bulmawp' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( '%s', 'bulmawp' ), 'WordPress' );
					?></a>
      			</p>
				<nav class="breadcrumb is-centered has-bullet-separator" aria-label="breadcrumbs">
					<ul>
						<?php if (!empty( get_theme_mod( 'bulmawp_social_facebook' ) )) { ?>
							<li>
								<a href="<?php echo get_theme_mod( 'bulmawp_social_facebook' ); ?>" class="">
									<span class="icon">
										<i class="fa fa-facebook"></i>
									</span>
								</a>
							</li>
						<?php } ?>
						<?php if (!empty( get_theme_mod( 'bulmawp_social_twitter' ) )) { ?>
							<li>
								<a href="<?php echo get_theme_mod( 'bulmawp_social_twitter' ); ?>" class="">
									<span class="icon">
										<i class="fa fa-twitter"></i>
									</span>
								</a>
							</li>
						<?php } ?>
						<?php if (!empty( get_theme_mod( 'bulmawp_social_linkedin' ) )) { ?>
							<li>
								<a href="<?php echo get_theme_mod( 'bulmawp_social_linkedin' ); ?>" class="">
									<span class="icon">
										<i class="fa fa-linkedin"></i>
									</span>
								</a>
							</li>
						<?php } ?>
					</ul>
				</nav><!-- breadcrumb -->
    		</div><!-- content -->
  		</div><!-- container -->
	</footer><!-- site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
