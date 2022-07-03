<?php

function single_create_post_type() { 

	register_post_type( 'post-example', array(
		'labels'      => array( 'name' => 'Post Exemplo', 'singular_name' => 'Post Exemplo', 'all_items' => 'Todos os posts' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'editor',  'revisions', 'author' ) 
	));
}
add_action( 'init', 'single_create_post_type' );
