<?php
/*
 The loop that displays posts.
 */
?>

<div id="each-post" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div id="each-post-id" class="post" id="post-<?php the_ID(); ?>"><!-- start #ach-post-id-->
	</div><!-- end #ach-post-id-->
	<div id="the-content">
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<?php include("includes/loop-no-post-message-selector-generic-posts-itx.php"); ?><!--we're outputing a custom error message if nothing's found, using a selector file for multiple options-->
	<?php endif; ?>
</div><!-- end #each-post-->
