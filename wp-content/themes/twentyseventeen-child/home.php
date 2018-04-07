<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<div class="container m_slider">
	<?php echo do_shortcode('[metaslider id="59"]'); ?>
	</div>
<div class="wrap home_page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<!--Category nav -->
				<div class="container extranav">

			      <div class="columns">
			        <div class="column is-4">
			        	<div class="cat_link">
				          <a href="http://retros.shop/product-category/men/">
				            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/men.jpg" alt="Avatar" class="image">
				          </a>
				          <div class="middle">
				          	<div class="text"><a href="http://retros.shop/product-category/men/">MEN</a></div>
				          </div>
			          	</div>
			        </div>

			        <div class="column is-4">
			        	<div class="cat_link">
				          <a href="http://retros.shop/product-category/women/">
				            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shocker.jpg" alt="Avatar" class="image">
				          </a>
				          <div class="middle">
				          	<div class="text"><a href="http://retros.shop/product-category/women/">WOMEN</a></div>
				          </div>
			          	</div>
			        </div>

			        <div class="column is-4">
			        	<div class="cat_link">
				          <a href="http://retros.shop/product-category/gifts/">
				            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gift.jpg" alt="Avatar" class="image">
				          </a>
				          <div class="middle">
				          	<div class="text"><a href="http://retros.shop/product-category/gifts/">GIFTS</a></div>
				          </div>
			          	</div>
			        </div>

			        

			        
			      </div>
			    </div>
			 
		        <!-- Feature products details-->
		        <div class="container Features">
			        
			          <h2 class="title is-3 mt-20">Top Feature Products</h2> 
			        
			        <div class="columns">
			                
						<?php 
							$args = array( 'post_type' => 'product', 'product_cat' => 'peature-products','posts_per_page' => 6);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>

			                <div class="column">
			                  <a href="<?php the_permalink(); ?>">
			                    <?php echo the_post_thumbnail(); ?>
			                    <div class="pic_title">
			                    <?php the_title(); ?>
			                    </div>
			                    <div class="price">
			                    <?php echo do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
			                	</div>
			                  </a>
			                </div>
					    <?php
					    	endwhile;
					    ?>


			        </div>
		          </div>

		         <!-- Feature products details-->
		        <div class="container Newproducts">
			        
			          <h2 class="title is-3 mt-20">New Products</h2> 
			       
			        <div class="columns">
			                
						<?php 
							$args = array( 'post_type' => 'product','product_cat' => 'peature-products', 'posts_per_page' => 6 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>

			               <div class="column">
			                  <a href="<?php the_permalink(); ?>">
			                    <?php echo the_post_thumbnail(); ?>
			                    <div class="pic_title">
			                    <?php the_title(); ?>
			                    </div>
			                    <div class="price">
			                    <?php echo do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
			                	</div>
			                  </a>
			                </div>
					    <?php
					    	endwhile;
					    ?>


		            </div>
		        </div>

		         <!-- Gifts-->
		        <div class="container Gifts mb-40">
			       
			        <h2 class="title is-3 mt-20">Top Gifts Products</h2> 
			        
			        <div class="columns">
		                
					<?php 
						$args = array( 'post_type' => 'product','product_cat' => 'peature-products', 'posts_per_page' => 6 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>

		                <div class="column">
			                  <a href="<?php the_permalink(); ?>">
			                    <?php echo the_post_thumbnail(); ?>
			                    <div class="pic_title">
			                    <?php the_title(); ?>
			                    </div>
			                    <div class="price">
			                    <?php echo do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
			                	</div>
			                  </a>
			                </div>
				    <?php
				    	endwhile;
				    ?>


		            </div>
		        </div>

		    




			  
			  

			  


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
