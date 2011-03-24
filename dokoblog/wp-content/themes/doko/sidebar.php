			</div>
			<div id="sidebar">
				<ul><?php

				 	/* Widgetized sidebar, if you have the plugin installed. */
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()) {

						if(is_404()) { // If this is a 404 page
						} else if(is_category()) { // If this is a category archive 
							echo '<li class="text"><p>';
								printf(__('You are currently browsing the archives for the %s category.', 'kubrick'), single_cat_title('', false));
							echo '</p></li>';
						} else if(is_day()) { // If this is a yearly archive
							echo '<li class="text"><p>';
								printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the day %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('l, F jS, Y', 'kubrick')));
							echo '</p></li>';
						} else if(is_month()) { // If this is a monthly archive
							echo '<li class="text"><p>';
								printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('F, Y', 'kubrick')));
							echo '</p></li>';
						} else if(is_year()) { // If this is a yearly archive
							echo '<li class="text"><p>';
								printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the year %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time('Y'));
							echo '</p></li>';
						} else if(is_search()) { // If this is a monthly archive
							echo '<li class="text"><p>';
								printf(__('You have searched the <a href="%1$s/">%2$s</a> blog archives for <strong>&#8216;%3$s&#8217;</strong>. If you are unable to find anything in these search results, you can try one of these links.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_search_query());
							echo '</p></li>';
						} else if(isset($_GET['paged']) && !empty($_GET['paged'])) { // If this is a monthly archive
							echo '<li class="text"><p>';
								printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'));
							echo '</p></li>';
						}

						echo '<li class="search">';
							include(TEMPLATEPATH . '/searchform.php');
						echo '</li>';

						// Author information is disabled per default. Uncomment and fill in your details if you want to use it.
						//echo '<li>';
						//	echo '<h2>'.__('Author', 'kubrick').'</h2>';
						//	echo '<ul><li>A little something about you, the author. Nothing lengthy, just an overview.</li></ul>';
						//echo '</li>';

						wp_list_pages('title_li=<h2>' . __('Pages', 'kubrick') . '</h2>' );

						echo '<li>';
							echo '<h2>'.__('Archives', 'kubrick').'</h2>';
							echo '<ul>';
								wp_get_archives('type=monthly');
							echo '</ul>';
						echo '</li>';

						wp_list_categories('show_count=1&title_li=<h2>' . __('Categories', 'kubrick') . '</h2>');

						if ( is_home() || is_page() ) { // If this is the frontpage
							wp_list_bookmarks();
							echo '<li>';
								echo '<h2>'.__('Meta', 'kubrick').'</h2>';
								echo '<ul>';
									wp_register();
									echo '<li>';
										wp_loginout();
									echo '</li>';
									?>
									<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional', 'kubrick'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>', 'kubrick'); ?></a></li>
									<li><a href="http://gmpg.org/xfn/"><abbr title="<?php _e('XHTML Friends Network', 'kubrick'); ?>"><?php _e('XFN', 'kubrick'); ?></abbr></a></li>
									<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'kubrick'); ?>">WordPress</a></li>
									<?php
									// would be nice if you don't delete this, i put 10 days of work in this theme, and i would like to see this url linked.
									echo '<li><a href="http://www.timewaster.de/wordpress-yast-theme/" title="This is the Yast Theme for Wordpress by TimeWaster">Yast Theme</a></li>';
									wp_meta();
								echo '</ul>';
							echo '</li>';
						}

					}

				?></ul>
