<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For ITX
 * This is our page loop "no post message" selector code to avoid creating too many custom loops solely for custom "no post message" output
 */

?>
<div id="each-post-title-news-stack"><!-- start #each-post-title-->
		No Posts
</div><!-- end #each-post-title-->
<div id="each-post-author-date-time">
	<div id="each-post-author">
		<?php echo the_author_link(); ?>
	</div>
	<div id="each-post-date-time">
		<?php echo date('F jS, Y') ?>
	</div>
</div>
<div id="each-post-summary-news-stack">
	<div id="each-post-excerpt">
		There are no posts at the moment. Please check back again soon.
	</div>
	<div id="post-categories-news-stack-front-page" class="post-categories">
		<a href ="<?php echo esc_url( home_url( '/' ) ); ?>beta">BETA</a>
	</div>
</div>
