<?php

	function wp_infinitepaginate(){ 


		$paged           = $_POST['page_no'];
		$posts_per_page  = 4;
	
		$args = array(
			'paged' => $paged,
			'posts_per_page' => $posts_per_page,
			"post_status" => "publish");
	
	
		if(isset($_POST['cat'])){
			$args['cat'] = $_POST['cat'];
		}
		
		if(isset($_POST['s'])){
			$args['s'] = $_POST['s'];
		}
		
		# Load the posts
		query_posts($args); 
		get_template_part( 'home-loader' );
	 
		exit;
	}
	
	add_theme_support( 'post-thumbnails' );
	add_post_type_support( 'page', 'excerpt');
	
	add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate');           // for logged in user
	add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate');    // if user not logged in
	
	
	require_once "functions-enqueue-scripts.php";