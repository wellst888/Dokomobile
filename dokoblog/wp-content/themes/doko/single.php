<?php
/*
	comment IN if you wish to use no menu in this view! 
	but remember: in this case you have also to comment OUT the command "get_sidebar();" at the end of this page!!!

	$_POST['contentMiddle'] = true;
*/
	get_header();

	if(have_posts()) {
		while(have_posts()) {
			the_post();

			echo '<div class="nav">';
				echo '<div class="left">';
					next_posts_link('Older Entries &laquo;');
				echo '</div>';
				echo '<div class="right">';
					previous_posts_link('&raquo; Newer Entries');
				echo '</div>';
				echo '<div class="clear"></div>';
			echo '</div>';
			?>
			<div class="news" id="post-<?php the_ID(); ?>">
				<div class="top"><h2>
					<?php the_title(); ?>
					<span>&nbsp;&nbsp;<?php the_time(__('F jS, Y', 'kubrick')); /* --- uncomment for editor info --- echo ' by '; the_author(); */ ?></span>
				</h2></div>
				<div class="midTop"></div>
				<div class="mid">
					<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
				</div>
				<div class="midBot"></div>
				<div class="bot">
					<?php 
						the_tags(__('Tags:', 'kubrick') . ' ', ', ', '<br />');
					?>
					<?php
						/* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
						/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); $time_since = sprintf(__('%s ago', 'kubrick'), time_since($entry_datetime)); */
						/* TimeWaster: The german (and most likely the other languages too) translation 
							for the kubrik theme (which i am using here) makes it impossible to use the 
							time since data, first off theres no translation for the time ouputs (like 
							"days" or "minutes"), second this translation also doesnt seems to be 
							implemented: __('%s ago', 'kubrick'), third the text "This entry was posted " 
							is translated with the "ago" inside, so the output would be like 
							"posted ago time ago". i give up here, i have no idea what to do with this 
							translation mess, i dont want to translate this template in 20 languages for 
							myself (which i couldnt) to resolve this problem. */
						printf(__('This entry was posted %1$s on %2$s at %3$s and is filed under %4$s.', 'kubrick'), $time_since, get_the_time(__('l, F jS, Y', 'kubrick')), get_the_time(), get_the_category_list(', '));
						echo ' ';
						printf(__("You can follow any responses to this entry through the <a href='%s'>RSS 2.0</a> feed.", "kubrick"), get_post_comments_feed_link());
						if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { // Both Comments and Pings are open
							printf(__('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.', 'kubrick'), trackback_url(false));
						} else if(!('open' == $post-> comment_status) && ('open' == $post->ping_status)) { // Only Pings are Open
							printf(__('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.', 'kubrick'), trackback_url(false));
						} else if(('open' == $post-> comment_status) && !('open' == $post->ping_status)) { // Comments are open, Pings are not
							_e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'kubrick');
						} else if(!('open' == $post-> comment_status) && !('open' == $post->ping_status)) { // Neither Comments, nor Pings are open
							_e('Both comments and pings are currently closed.', 'kubrick');
						}
						echo ' ';
						edit_post_link(__('Edit this entry', 'kubrick'),'','.');
					?>
				</div>
			</div>
			<?php
			wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
			comments_template();
		}
	} else {
		echo '<h2 class="error1">'.__('Not Found', 'kubrick').'</h2>';
		echo '<p class="error2">'.__('Sorry, no posts matched your criteria.', 'kubrick').'</p>';
		include (TEMPLATEPATH . "/searchform.php"); 
	}

	get_sidebar();
	get_footer();
?>
