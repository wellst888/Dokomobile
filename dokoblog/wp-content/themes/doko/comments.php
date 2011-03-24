<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			echo '<h2 class="error1">Error</h2>';
			echo '<p class="error2">' . __('This post is password protected. Enter the password to view comments.', 'kubrick') . '</p>';
			return;
		}
	}

	
	echo '<div class="news">';
		echo '<div class="top"><h2 id="comments">';
			if($comments) {
				comments_number(__('No Responses', 'kubrick'), __('One Response', 'kubrick'), __('% Responses', 'kubrick'));
			} else {
				echo __('No Responses', 'kubrick');
			}
		echo '</h2></div>';
			
		$x = 0;
		if($comments) {
			foreach($comments as $comment) {
				$x++;
				echo '<div class="midTop' . (($x > 1)?' MT10':'') . '"></div>';
				echo '<div class="mid2" id="comment-';
					comment_ID();
				echo '">';
					if($comment->comment_approved == '0') echo '<p>' . __('Your comment is awaiting moderation.', 'kubrick') . '</p>';
					echo '<div class="commentPic">' . get_avatar( $comment, 32 ) . '</div>';
					printf(__('%1$s at %2$s', 'kubrick'), get_comment_date(__('F jS, Y', 'kubrick')), get_comment_time());
					edit_comment_link(__('edit', 'kubrick'),'&nbsp;&nbsp;','');
					echo '<br /><b>';
					printf(__('<cite>%s</cite> Says:', 'kubrick'), get_comment_author_link());
					echo '</b><br class="clear" />';
					comment_text();
				echo '</div>';
				echo '<div class="midBot"></div>';
			}
		} else if(!'open' == $post->comment_status) { // comments are closed
			echo '<div class="midTop"></div><div class="mid"><p>'.__('Comments are closed.', 'kubrick').'</p></div><div class="midBot"></div>';
		}

		if ('open' == $post->comment_status) {
			echo '<div class="midTop' . (($x > 0)?' MT10':'') . '"></div>';
			echo '<div class="mid2">';
				echo '<h2 id="respond" class="comment">' . __('Leave a Reply', 'kubrick') . '</h2>';

				if ( get_option('comment_registration') && !$user_ID ) {
					echo '<p>';
					printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'kubrick'), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink()));
					echo '</p>';
				} else {
					echo '<form action="' . get_option('siteurl') . '/wp-comments-post.php" method="post" id="commentform">';
					if ( $user_ID ) {
						echo '<p>';
						printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity);
						echo ' <a href="' . get_option('siteurl') . '/wp-login.php?action=logout" title="'.__('Log out of this account', 'kubrick').'">'.__('Log out &raquo;', 'kubrick').'</a></p>';
					} else {
						echo '<p><input type="text" name="author" id="author" value="' . $comment_author . '" size="22" tabindex="1"' . (($req)?' aria-required="true"':'') . ' />';
						echo ' <label for="author"><small>'.__('Name', 'kubrick').' ' . (($req)?__("(required)", "kubrick"):'') . '</small></label></p>';
						echo '<p><input type="text" name="email" id="email" value="' . $comment_author_email . '" size="22" tabindex="2"' . (($req)?' aria-required="true"':'') . ' />';
						echo ' <label for="email"><small>'.__('Mail (will not be published)', 'kubrick').' ' . (($req)?__("(required)", "kubrick"):'') . '</small></label></p>';
						echo '<p><input type="text" name="url" id="url" value="' . $comment_author_url . '" size="22" tabindex="3" />';
						echo ' <label for="url"><small>'.__('Website', 'kubrick').'</small></label></p>';
					}
					echo '<p><textarea name="comment" id="comment" cols="67" rows="7" tabindex="4"></textarea></p>';
					echo '<p>';
						echo '<input name="submit" type="submit" id="submit" tabindex="5" value="'.__('Submit Comment', 'kubrick').'" />';
						echo '<input type="hidden" name="comment_post_ID" value="' . $id . '" />';
					echo '</p>';
					do_action('comment_form', $post->ID);
					echo '</form>';
				}
	
			echo '</div>';
			echo '<div class="midBot2"></div>';
		} else {
			echo '<div class="bot"></div>';
		}
	echo '</div>';

?>
