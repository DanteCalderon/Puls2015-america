<?php 

// Para permitir que el post tenga thumbnail
add_theme_support('post-thumbnails');

function register_my_menu() {
	register_nav_menu('top-menu', __('Menu superior'));
}

add_action('init', 'register_my_menu');