<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="preview">
		<header>
			<span class="post-category"><?php the_category(' '); ?></span>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</header>
		<div class="post-content"><?php echo get_the_excerpt(); ?></div>
		<footer class="post-category text-right">
			<em>By <?php the_author(); ?> | <?php the_time( get_option( 'date_format' ).' H:i' ); ?></em>
		</footer>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <h1>Sorry, no posts found...</h1>
<?php endif; ?>