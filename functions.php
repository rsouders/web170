<?php

/*
Theme Name: Rhean Souders' WordPress theme for Web 170
Author: Rhean Souders
Author URI: http://rheansouders.com
Description: Theme for WordPress class, spring 2015
Version: 1.0
*/

// Register Menus
register_nav_menus(array( 'main-menu' => __( 'Main' ),
));
//

// Register Sidebars
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'	
));
//

// Create Post Thumbnails
add_theme_support('post-thumbnails');
//


?>