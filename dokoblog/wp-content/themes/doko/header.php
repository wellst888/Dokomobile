<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />	
	
	<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	
	<?php
if (!current_user_can('add_users')){
 wp_deregister_script( 'admin-bar' );
 wp_deregister_style( 'admin-bar' );
 remove_action('wp_footer','wp_admin_bar_render',1000);
}
?>
	
	<?php wp_head(); ?>
</head>
<body>
	<div id="header1">
		<div id="header">
			<div id="logo"></div>
			
		</div>
		<div id="logout"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sideBar3') ) : ?>
            <?php endif; ?></div>
	</div><!--header1-->
	<div id="wrapper">
	<div id="page">
		
			<div id="content<?php if(isSet($_POST['contentMiddle'])) echo 'Mid'; ?>">

