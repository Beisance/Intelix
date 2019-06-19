<?php
/*
Loop that controls single 
 */
?>

<div id="each-post" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div id="each-post-id" class="post" id="post-<?php the_ID(); ?>"><!-- start #ach-post-id-->
	</div><!-- end #ach-post-id-->
	<div id="each-post-author-date-time">
		<div id="each-post-author">
			<?php the_author_link(); ?>
		</div>
		<div id="each-post-date-time">
			<?php the_time('F jS, Y') ?> <?php the_time() ?>
		</div>
	</div>
	<div id="active-sponsored-single">
		<?php if(is_sticky()) {
			echo '<span class="active-single">ACTIVE</span>';
			}
			else{
				/*nothing*/
			}
		?>
		<?php
		/* sponsored */
			if (in_category('60')) {
				echo '<span class="sponsored-single"><a href="https://intelix.beisance.com/sponsored-posts/" target=_blank>SPONSORED</a></span>';
			}
			else{
				/*nothing*/
			}
		?>
	</div>
	<div id="the-content">
		<?php the_content(); ?>
	</div>
	<div id="post-navigation"><!-- #post-navigation-->
			<div id="post-navigation-previous">
				<div id="post-navigation-previous-content-indicator">
					<?php previous_post_link('%link', 'Previous Post:','%title', TRUE) ?>
				</div><!-- #post-navigation-->
				<div id="post-navigation-previous-content-title">
					<?php previous_post_link('%link','%title',TRUE); ?>
				</div>
			</div>
			<div></div><!-- #empty div to solve spacing/left margin issue at render time-->
			<div id="post-navigation-next">
				<div id="post-navigation-next-content-indicator">
					<?php next_post_link('%link', 'Next Post:', '%title', TRUE) ?>
				</div><!-- #post-navigation-->
				<div id="post-navigation-next-content-title">
					<?php next_post_link('%link','%title',TRUE) ?>
				</div>
			</div>
		</div><!-- #end-post-navigation-->
	<?php endwhile; ?>
	<?php else : ?>
	<?php include("includes/loop-no-post-message-selector-generic-posts-itx.php"); ?><!--we're outputing a custom error message if nothing's found, using a selector file for multiple options-->
	<?php endif; ?>
</div><!-- end #each-post-->
