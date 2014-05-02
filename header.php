<?php 
	if(file_exists('../php-components/configuration.php')){
		include_once '../php-components/configuration.php';
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php if(function_exists('language_attributes')){language_attributes();} ?>> <!--<![endif]-->
    <head>
        <!-- meta charset="utf-8" -->
	<?php if(function_exists('bloginfo')){ ?>
	<meta charset="<?php  bloginfo('charset'); ?>">
	<?php } ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php if(function_exists('bloginfo')){ bloginfo('name');} else{ echo 'Wasav';} ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
	
        <link rel="stylesheet" href="<?php echo WP_THEME_ADDR; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo WP_THEME_ADDR; ?>/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="<?php echo WP_THEME_ADDR; ?>/css/style.css" type="text/css" />
		
        <!--[if lt IE 9]>
            <script src="<?php echo WP_THEME_ADDR; ?>/js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->

        
	<?php if(function_exists('wp_head')){ wp_head(); } ?>
	
    </head>
    <body>
	<?php include_once SITE_ROOT_PATH.'/php-components/header.php'; ?>
