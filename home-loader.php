<?php 
include_once "post-utils.php";

$postsList = array();
if (have_posts()) :
	while (have_posts()) : the_post();
		
		$authorID = get_the_author_meta( 'ID' );
		
		$postsList[] = array(
			'postID' => get_the_ID(),
			'authorID' => $authorID,
			'authorName' => get_the_author_meta('display_name'),
			'authorUrl' => get_author_posts_url( $authorID ),
			'permaLink' => get_permalink(), 
			'title' => get_the_title(), 
			'excerpt' => get_the_excerpt(),
			'avatar' => get_avatar( $authorID, 32 ), 
			'categories' => get_the_category_list(' '), 
			'avgReadingTime' => getContentAverageReadingTime(get_the_content())
		);
	endwhile;
endif; 
 
echo "{ \"list\":".json_encode($postsList)."}";