<?php get_header(); ?>
<div class="container-fluid">
	<div class="post">
    
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article>
                <header>
					<p class="post-category"><?php the_time( get_option( 'date_format' ) ); ?></p>
                </header>
                <div class="post-content"><?php the_content(); ?></div>
                <footer>
					<?php include SITE_ROOT_PATH.'/php-components/sharing-buttons.php';  ?>
					<a class="anchor-link" href="#header-anchor">Top</a>
                </footer>
                <hr>
                <div class="comments">
                  <?php comments_template(); ?>
                </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>

  </div>
  <?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
