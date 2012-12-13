<?php
function first_temp_widget_init() {
	
register_sidebar( array(
	'name' => __( 'Side Widget', 'first_temp' ),
	'id' => 'side-widget',
	'before_widget' => '<li class="widget-container">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
}

add_action('init', 'first_temp_widget_init');

register_nav_menus(array('nav' => 'ナビゲーション'));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(110,110,true);
