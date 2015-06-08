<?php

/*
Theme Name: Rhean Souders' WordPress theme for Web 170
Author: Rhean Souders
Author URI: http://rheansouders.com
Description: Theme for WordPress class, spring 2015
Version: 1.0
*/

// Get My Title Tag_description

function get_my_title_tag()  {
	global $post;
	
	if ( is_front_page())  {  //use on site's front page
		bloginfo('description'); //display the site's tagline
	}
	
	elseif ( is_page() || is_single())  {  //use on site's pages or blog postings
		the_title();  //display the title for the page or posting shown
	}
	
	else  {  //otherwise...
		bloginfo('description');  //display the tagline
	}
	
	if ( $post->post_parent)  {  //if the page is a parent page
		echo ' | '; //display a separator with spaces
		echo get_the_title($post->post_parent); // display the title of the parent page
	}
	
	// after assessing conditions, add on all of the following for all site pages & posts:
	
	echo ' | '; //separator with spaces
	bloginfo('name'); //display the site name
	echo ' | '; //separator with spaces
	echo 'Waterford, VA'; // location of org
}
//

// Enable excerpts for pages
add_post_type_support('page', 'excerpt');
//

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