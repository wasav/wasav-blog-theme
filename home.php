<?php
  get_header();
  // get_template_part('loop');
  // get_sidebar();
?>

<div class="container-fluid">
	<div class="posts">
		<?php get_template_part('loop'); ?>
	</div>
</div>
<?php get_footer(); ?>