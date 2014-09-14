<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article>
		<header>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</header>
		<div class="post-content">
			<?php the_excerpt(); ?>
		</div>
		<footer class="post-category">
			<div class="post-meta">
				<div>
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
				</div>
				<div>
					<span><?php echo get_the_author_meta('display_name'); ?></span> in <?php the_category(' '); ?>
					<span class="glyphicon glyphicon-time"></span>
					<span><?php echo getContentAverageReadingTime(get_the_content()); ?></span>
				</div>
			</div>
		</footer>
		
    </article>
	<hr/>
  <?php endwhile; ?>
  
<?php else : ?>
  <h1>Sorry, no posts found...</h1>
<?php endif; ?>