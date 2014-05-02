<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="preview">
		<header>
			<span class="post-category"><?php the_category(' '); ?></span>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</header>
		<p><?php echo get_the_excerpt(); ?></p>
		<footer class="post-category text-right">
			<em>By <?php the_author(); ?> | <?php the_time( get_option( 'date_format' ).' H:i' ); ?></em>
		</footer>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <h1>Currently writing ...</h1>
<?php endif; ?>