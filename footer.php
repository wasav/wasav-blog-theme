<?php 
  include SITE_ROOT_PATH.'/php-components/footer.php';
?>
  
    <?php if(function_exists('wp_footer')){ wp_footer(); } ?>
	
    <script type="text/javascript" src="<?php echo WP_THEME_ADDR; ?>/js/vendor/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo WP_THEME_ADDR; ?>/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo SITE_WEB_ADDR."/js/main.js"; ?>"></script>
  </body>
</html>