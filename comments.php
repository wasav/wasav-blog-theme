<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			Thoughts
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 35,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'wasav-blog-theme' ); ?></p>
		<?php endif; ?>
		<footer>
		<a href="#header-anchor">Top</a>
		</footer>
	<?php endif; // have_comments() ?>

	<?php comment_form(array(
		'comment_notes_after' => ''
	)); ?>

</div><!-- #comments -->