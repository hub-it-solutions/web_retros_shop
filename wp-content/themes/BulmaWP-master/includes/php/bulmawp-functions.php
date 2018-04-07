<?php
/**************************************************/
/* BulmaWP Functions
/* @package BulmaWP
/* Version: 0.1
/* Updated: 5th Aug 2017
/**************************************************/

/**************************************************/
/* Author Profile Links
/* Adds Facebook, Twitter & LinkedIn links to author bio.
/* Since: 0.1
/**************************************************/

    function bulmawp_author_profile_links( $contactmethods ) {

        $contactmethods['twitter_profile'] = 'Twitter Profile URL';
        $contactmethods['facebook_profile'] = 'Facebook Profile URL';
        $contactmethods['linkedin_profile'] = 'LinkedIn Profile URL';

        return $contactmethods;

    }

    add_filter( 'user_contactmethods', 'bulmawp_author_profile_links', 10, 1);

/**************************************************/
/* Post Author Bio
/* Displays the author bio
/* Since: 0.1
/**************************************************/

    function bulmawp_author_bio() {
        ?>

        <!-- Author Card -->
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <?php echo __( 'Posted by', 'bulmawp' ); ?> <?php echo get_the_author(); ?>
                </p><!-- card-header-title -->
            </header><!-- card-header -->

            <!-- Check to see if the Author has some bio information, display nothing if empty -->
            <?php if (!empty( get_the_author_meta('description') )) { ?>
                <div class="card-content">
                    <div class="content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <?php echo get_avatar( get_the_author_meta('email') , 90 ); ?>
                                </figure>
                            </div><!-- media-left -->
                            <?php echo get_the_author_meta('description'); ?>
                        </div><!-- media -->
                    </div><!-- content  -->
                </div><!-- card-content -->
            <?php } ?>

            <footer class="card-footer">

                <!-- Check to see if Twitter url is entered in the user profile, display nothing if empty -->
                <?php if (!empty( get_the_author_meta('twitter_profile') )) { ?>
                    <a class="card-footer-item" href="<?php echo get_the_author_meta('twitter_profile'); ?>" target="_blank">
                        <span class="icon">
                            <i class="fa fa-twitter"></i>
                        </span><!-- icon -->
                        <span class="is-hidden-mobile"><?php echo __( 'Twitter', 'bulmawp' ); ?></span>
                    </a><!-- card-footer-item -->
                <?php } ?>

                <!-- Check to see if Facebook url is entered in the user profile, display nothing if empty -->
                <?php if (!empty( get_the_author_meta('facebook_profile') )) { ?>
                    <a class="card-footer-item" href="<?php echo get_the_author_meta('facebook_profile'); ?>" target="_blank">
                        <span class="icon">
                            <i class="fa fa-facebook"></i>
                        </span><!-- icon -->
                        <span class="is-hidden-mobile"><?php echo __( 'Facebook', 'bulmawp' ); ?></span>
                    </a><!-- card-footer-item -->
                <?php } ?>

                <!-- Check to see if LinkedIn url is entered in the user profile, display nothing if empty -->
                <?php if (!empty( get_the_author_meta('linkedin_profile') )) { ?>
                    <a class="card-footer-item" href="<?php echo get_the_author_meta('linkedin_profile'); ?>" target="_blank">
                        <span class="icon">
                            <i class="fa fa-linkedin"></i>
                        </span><!-- icon -->
                        <span class="is-hidden-mobile"><?php echo __( 'LinkedIn', 'bulmawp' ); ?></span>
                    </a><!-- card-footer-item -->
                <?php } ?>

                <!-- Check to see if Users website url is entered in the user profile, display nothing if empty -->
                <?php if (!empty( get_the_author_meta('user_url') )) { ?>
                    <a class="card-footer-item" href="<?php echo get_the_author_meta('user_url'); ?>" target="_blank">
                        <span class="icon">
                            <i class="fa fa-share"></i>
                        </span><!-- icon -->
                        <span class="is-hidden-mobile"><?php echo __( 'Website', 'bulmawp' ); ?></span>
                    </a><!-- card-footer-item -->
                <?php } ?>

            </footer>
        </div><!-- card -->

        <?php
    }

/**************************************************/
/* Custom Comments Layout
/* Styles comments using the media styling
/* Since: 0.1
/**************************************************/


	function bulmawp_comments( $comment, $args, $depth ) {
    	$GLOBALS['comment'] = $comment; ?>

        <article class="media">
            <figure class="media-left">
                <p class="image is-48x48">
                    <?php echo get_avatar( $comment->comment_author_email, 48 ); ?>
                </p><!-- image -->
            </figure><!-- media-left -->
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong><?php printf(__('%s', 'bulmawp'), get_comment_author_link()) ?></strong>
                        <?php comment_text() ?>
                        <?php if ( $comment->comment_approved == '0' ) : ?>
							<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'bulmawp') ?></em>
						<?php endif; ?>
                        <small><a>Like</a> · <a>Reply</a> · <a class="comment-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s - %2$s', 'bulmawp'), get_comment_date('m/d/Y'),  get_comment_time()) ?></a></small>
                    </p>
                </div><!-- content -->
            </div><!-- media-content -->
            <div class="media-right">
    			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
  			</div>
        </article><!-- media -->


	<?php
	}

/**************************************************/
/* Pagination
/* Displays the pagination using bulma.io styles
/* Since: 0.1
/**************************************************/

    function bulmawp_get_pagination() {
    	ob_start();
    	?>
            <div class="columns">
                <div class="column">
            		<nav class="pagination is-centered">
            			<?php
            				global $wp_query;
            				$current = max( 1, absint( get_query_var( 'paged' ) ) );
            				$pagination = paginate_links( array(
            					'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
            					'format' => '?paged=%#%',
            					'current' => $current,
            					'total' => $wp_query->max_num_pages,
            					'type' => 'array',
            					'prev_text' => '&laquo;',
            					'next_text' => '&raquo;',
            				) ); ?>
            			<?php if ( ! empty( $pagination ) ) : ?>
            				<ul class="pagination-list">
            					<?php foreach ( $pagination as $key => $page_link ) : ?>
            						<li class="pagination-link<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
            					<?php endforeach ?>
            				</ul>
            			<?php endif ?>
            		</nav>
                </div><!-- column -->
            </div><!-- columns -->
    	<?php
    	$links = ob_get_clean();
    	return apply_filters( 'bulmawp_pagination', $links );
    }

    function bulmawp_pagination() {
    	echo bulmawp_get_pagination();
    }

/**************************************************/
/* Related Posts
/* Displays related posts
/* Since: 0.1
/**************************************************/

    function bulmawp_related_posts() {

        $related_post_ids = array();

        // Exclude sticky posts and the current post
        $exclude = get_option( 'sticky_posts' );
        $exclude[] = $post->ID;

        // Arguments used by all the queries below
        $base_args = array(
        	'orderby' 			=> 'rand',
        	'post__not_in' 		=> $exclude,
        	'post_status' 		=> 'publish',
        	'posts_per_page' 	=> 3,
        );

        // Check categories first
        $categories = wp_get_post_categories( $post->ID );

        if ( $categories ) {

        	$categories_args = $base_args;
        	$categories_args['category__in'] = $categories;

        	$categories_posts = get_posts( $categories_args );

        	foreach( $categories_posts as $categories_post ) {
        		$related_post_ids[] = $categories_post->ID;
        	}

        }

        // If we don't get three posts from that, fill up with posts selected at random
        if ( count( $related_post_ids ) < 3 ) {

        	// Only with as many as we need though
        	$random_post_args = $base_args;
        	$random_post_args['posts_per_page'] = 3 - count( $related_post_ids );

        	$random_posts = get_posts( $random_post_args );

        	foreach( $random_posts as $random_post ) {
        		$related_post_ids[] = $random_post->ID;
        	}

        }

        // Get the posts we've scrambled together
        $related_posts_args = $base_args;
        $related_posts_args['include'] = $related_post_ids;

        $related_posts = get_posts( $related_posts_args );

        if ( $related_posts ) : ?>

        	<div class="related-posts-wrapper section-inner">

        		<div class="related-posts group">

        			<?php

        			foreach( $related_posts as $post ) {
        				setup_postdata( $post );
        				the_title();
        			}

        			wp_reset_postdata();

        			?>

        		</div><!-- .posts -->

        	</div><!-- .related-posts -->

        <?php endif;

    }
