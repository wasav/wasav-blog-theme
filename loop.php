<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
	<?php 
		$authorID = get_the_author_meta( 'ID' );
		$authorName = get_the_author_meta('display_name');
		$authorUrl = get_author_posts_url( $authorID );
	?>
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
					<a href="<?php echo $authorUrl; ?>"><?php echo get_avatar( $authorID, 32 ); ?></a>
				</div>
				<div>
					<span><a href="<?php echo $authorUrl; ?>"><?php echo $authorName; ?></a></span> in <?php the_category(' '); ?>
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