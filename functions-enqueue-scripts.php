<?php
	
	function wpse_89494_enqueue_scripts() {
		
		// 		STYLES
		wp_enqueue_style( 'bootstrap', WP_THEME_ADDR."/css/bootstrap.min.css" );
		wp_enqueue_style( 'bootstrap-theme', WP_THEME_ADDR."/css/bootstrap-theme.min.css" );
		wp_enqueue_style( 'style', WP_THEME_ADDR."/style.css" );
		wp_enqueue_style( 'labs', SITE_WEB_ADDR.'/css/labs.css' );
		wp_enqueue_style( 'contacts', SITE_WEB_ADDR.'/css/contacts.css' );

		
		// 		SCRIPTS
		wp_enqueue_script( 'jquery10', WP_THEME_ADDR."/js/vendor/jquery-1.10.1.min.js" );
		wp_enqueue_script( 'bootstrapJs', WP_THEME_ADDR."/js/vendor/bootstrap.min.js" );
		
	}

	add_action( 'wp_enqueue_scripts', 'wpse_89494_enqueue_scripts' );