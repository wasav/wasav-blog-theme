<?php get_header(); ?>
<div class="container-fluid">
	<div class="posts">
    
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="preview">
                <header>
					<span class="post-category"><?php the_category(' '); ?></span>
                    <h1><?php the_title(); ?></h1>
                </header>
                <p><?php the_content(); ?><p/>
                <footer>
                    <em>By <?php the_author(); ?> | <?php the_time( get_option( 'date_format' ).' H:i' ); ?></em>
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
