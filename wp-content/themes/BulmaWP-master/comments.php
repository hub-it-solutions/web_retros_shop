<?php
/**************************************************/
/* Comments Template
/* @package BulmaWP
/* Version: 0.1
/* Updated: 5th Aug 2017
/**************************************************/

/**************************************************/
/* Is the post password protected
/**************************************************/

	if ( post_password_required() ) {
		return;
	}

/**************************************************/
/* Comment Template
/**************************************************/
?>

	<div id="comments" class="comments-area">

		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) : ?>
			<h2 class="comments-title title is-4">
				<?php
				$comment_count = get_comments_number();
				if ( 1 === $comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'bulmawp' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'bulmawp' ) ),
						number_format_i18n( $comment_count ),
						'<span>' . get_the_title() . '</span>'
					);
				}
				?>
			</h2><!-- .comments-title -->

			<?php the_comments_navigation(); ?>

			<div class="comment-list">
				<?php wp_list_comments( 'callback=bulmawp_comments' ); ?>
			</div><!-- .comment-list -->

			<?php the_comments_navigation();

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) : ?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bulmawp' ); ?></p>
			<?php
			endif;

		endif; // Check for have_comments().

		$comments_args = array(
			'class_form'	=> __( 'card-content', 'bulmawp' ),
			'class_submit'	=> __( 'button is-primary', 'bulmawp' ),
	        // Change the title of the reply section
	        //'title_reply' => __( 'Have your say', 'bulmawp' ),
	        // Remove "Text or HTML to be displayed after the set of comment fields".
	        'comment_notes_after' => '',
	        // Redefine your own textarea (the comment body).
			'comment_field'	 =>
				'<div class="field">' .
				'<label class="label">' . __( 'Message', 'bulmawp' ) . '</label>' .
				'<textarea id="comment" name="comment" class="textarea" aria-required="true"></textarea>' .
				'</div>',

			'fields'	=> apply_filters( 'bulmawp_comment_fields', array(
				'author'	=>
					'<div class="field">' .
					'<label class="label">' . __( 'Name*', 'bulmawp' ) . '</label>' .
					'<div class="control">' .
					'<input id="author" name="author" class="input" type="text" class="" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',
					'</div>' .
					'</div>',

	    		'email' 	 =>
					'<div class="field">' .
					'<label class="label">' . __( 'Email*', 'bulmawp' ) . '</label>' .
					'<div class="control">' .
					'<input id="email" name="email" class="input" type="text" class="" placeholder="Email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',
					'</div>' .
					'</div>',

	    		'url'    	=>
					'<div class="field">' .
					'<label class="label">' . __( 'URL*', 'bulmawp' ) . '</label>' .
					'<div class="control">' .
					'<input id="url" name="url" class="input" type="text" class="" placeholder="Email" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' />',
					'</div>' .
					'</div>',
			)),
		);

		?>
		<div class="card">
			<?php comment_form( $comments_args ); ?>
		</div><!-- card -->
		<?php
		?>

	</div><!-- #comments -->
