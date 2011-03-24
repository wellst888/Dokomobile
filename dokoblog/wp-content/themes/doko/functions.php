<?php
	if(function_exists('register_sidebar')) {
	
		register_sidebar(array(
		'name'=> 'sidebar1',
		'before_widget' => '<li id="%1$s" class="widget %2$s"><div>', 		'after_widget' => '</div></li>', 
		'before_title' => '</div><h2 class="widgettitle">', 
		'after_title' => '</h2><div class="a">'));
		
		register_sidebar(array(
		'name'=> 'sidebar2',
		'before_widget' => '<li id="%1$s" class="widget %2$s"><div>', 		'after_widget' => '</div></li>', 
		'before_title' => '</div><h2 class="widgettitle">', 
		'after_title' => '</h2><div class="a">'));
		
		register_sidebar(array(
		'name'=> 'sidebar3',
		'before_widget' => '<li id="%1$s" class="widget %2$s"><div>', 		'after_widget' => '</div></li>', 
		'before_title' => '</div><h2 class="widgettitle">', 
		'after_title' => '</h2><div class="a">'));
	}
	load_theme_textdomain('kubrick');
	
	if (!is_admin() && !current_user_can('add_users')){
    wp_deregister_script( 'admin-bar' );
    wp_deregister_style( 'admin-bar' );
    remove_action('wp_footer','wp_admin_bar_render',1000);
    }
        
    add_filter( 'show_admin_bar', '__return_false' );
	
?>
