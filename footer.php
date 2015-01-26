<?php 
  include SITE_ROOT_PATH.'/php-components/footer.php';
?>
  
    <?php if(function_exists('wp_footer')){ 
		wp_footer(); 
	}
	?>
	
	<?php
		// Labs specific scripts
		if( isset($GLOBALS['selectedLab'])){
			foreach($GLOBALS['labs'][$GLOBALS['selectedLab']]["js"] as $n=>$jsName){
	?>
		<script type="text/javascript" src="<?php echo LABS_ADDR."/".$GLOBALS['selectedLab']."/js/".$jsName; ?>"></script>
	<?php
			}
		}
	?>
  </body>
</html>