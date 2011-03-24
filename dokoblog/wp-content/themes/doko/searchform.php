<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<h2><label for="s"><?php _e('Search for:', 'kubrick'); ?></label></h2>
	<div class="a">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="<?php _e('Search', 'kubrick'); ?>" />
	</div>
</form>
