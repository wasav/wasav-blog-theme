<?php
	
	function wpse_89494_enqueue_scripts() {
		
		// 		STYLES		
		wp_enqueue_style( 'packedCSS', WP_THEME_ADDR."/css/style-1.3.3.min.css" );
		
		// 		SCRIPTS
		wp_enqueue_script( 'packedJs', WP_THEME_ADDR."/js/packed-1.3.3.min.js" );
		
	}

	add_action( 'wp_enqueue_scripts', 'wpse_89494_enqueue_scripts' );