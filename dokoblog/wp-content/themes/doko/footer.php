			</div><!--content-->
			</div><!--footer-->
			
			
			</div>
			<br clear="all" />
		</div>
		<div id="footer">
			<?php /* If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. */
				printf(__('%1$s is proudly powered by %2$s', 'kubrick'), get_bloginfo('name'), '<a href="http://wordpress.org/">WordPress</a>');
			?> |
			<?php printf(__('%1$s and %2$s.', 'kubrick'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)', 'kubrick') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)', 'kubrick') . '</a>'); ?>
			<?php wp_footer(); ?>
		</div>
	</div>
	<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); echo ' IP: ' . $_SERVER['SERVER_ADDR']; ?> -->

</body>
</html>
