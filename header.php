<?php 
	if(file_exists( '../php-components/configuration.php')){
		include_once( '../php-components/configuration.php' );
	}

	$pageTitle = '';
	if(function_exists('is_home') && is_home()){ 
		$pageTitle = SITE_NAME." Blog";	// Index page
	} else if(function_exists('is_single') && is_single()){
		$pageTitle = wp_title(SITE_NAME." &raquo;", false);	// Single post
	} else if(isset($_GET['page'])){
		if($_GET['page'] === 'labs'){
			require_once SITE_ROOT_PATH."/pages/labs-utils.php";
			
			$labs = getLabInstances();
			
			if(isset($_GET['l'])){
				$labName = $_GET['l'];
				if(isset($labs[$labName])){
					$pageTitle = $labs[$labName]['title'];
				}else{
					$pageTitle = SITE_NAME." Labs";
				}
			} else{
				$pageTitle = SITE_NAME." Labs";
			}
		} else {
			$pageTitle = SITE_NAME." ".$_GET['page'];
		}
	} else{
		$pageTitle = SITE_NAME;
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
	<title><?php echo $pageTitle; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
	
        <link rel="stylesheet" href="<?php echo WP_THEME_ADDR; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo WP_THEME_ADDR; ?>/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="<?php echo WP_THEME_ADDR; ?>/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo SITE_WEB_ADDR; ?>/css/labs.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo SITE_WEB_ADDR; ?>/css/contacts.css" type="text/css" />
		
		<?php 
		if( isset($GLOBALS['selectedLab'])){
		
			foreach($GLOBALS['labs'][$GLOBALS['selectedLab']]["css"] as $n=>$cssName){
			
		?>
			<link rel="stylesheet" href="<?php echo LABS_ADDR."/".$GLOBALS['selectedLab']."/css/".$cssName; ?>" />
		<?php
				}
			}
		?>
		
        <!--[if lt IE 9]>
            <script src="<?php echo WP_THEME_ADDR; ?>/js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->

        
	<?php if(function_exists('wp_head')){ wp_head(); } ?>
	
    </head>
    <body>
 	<?php include_once SITE_ROOT_PATH.'/php-components/header.php'; ?>
