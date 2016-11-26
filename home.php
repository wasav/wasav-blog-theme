<?php
  get_header();
?>
<div class="container-fluid">
	<div class="form">
		 <?php get_search_form(); ?> 
	</div>
</div>
<div class="container-fluid">
	<div class="posts-list">
		<?php //get_template_part('loop'); ?>
	</div>
</div>
<?php get_footer(); ?>