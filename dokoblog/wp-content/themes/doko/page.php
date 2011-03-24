<?php
	get_header();

	if (have_posts()) {
		while (have_posts()) {
			the_post();
			echo '<h2 class="h2head">';
				the_title();
			echo '</h2>';
			echo '<div class="pageContent">';
				the_content('<p>' . __('Read the rest of this page &raquo;', 'kubrick') . '</p>');
			echo '</div>';
			wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'kubrick').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
		}
	}
	edit_post_link(__('Edit this entry.', 'kubrick'), '<p>', '</p>');

	
	get_sidebar();
	
	get_footer();
?>