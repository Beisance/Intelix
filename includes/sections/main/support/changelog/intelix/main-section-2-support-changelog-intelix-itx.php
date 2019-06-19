<?php
/**
 * @package WordPress
  * @subpackage Beisance|Intelix Custom Theme For ITX
 */

?>

<div id="main-section-2" class=".main-section-2-1-news-stack"><!-- #start main-section-2-->
	<div id="main-section-2-stack-1" class="main-section-2-stack-1-1-news-stack">
		<?php query_posts( array( 'cat' => 40, 'posts_per_page' => 10, 'paged' => get_query_var('paged') ) ); ?>
			<?php
				/* Run the loop to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-index.php and that will be used instead.
				 */
				 get_template_part( 'loop-news-stack', 'index' );
			?>
	</div>
</div><!-- #end main-section-2-->
