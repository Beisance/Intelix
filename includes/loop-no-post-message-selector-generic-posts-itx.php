<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For ITX
 * This is our page loop "no post message" selector code to avoid creating too many custom loops solely for custom "no post message" output
 */

?>

<?php
	if (is_category('tech')) {
		echo '<div id="each-post-title"><!-- start #each-post-title-->';
			echo 'No Posts';
		echo' </div><!-- end #each-post-title-->';
		echo '<div id="no-post-message-content-generic-posts"><!-- #start no-post-message-content-generic-posts-->';
		echo 'We have no Tech Stories at the moment. Please check back again soon.';
		echo '</div><!-- #end no-post-message-content-generic-posts-->';
	}
	elseif (is_category('business')) {
		echo '<div id="each-post-title"><!-- start #each-post-title-->';
			echo 'No Posts';
		echo' </div><!-- end #each-post-title-->';
			echo '<div id="no-post-message-content-generic-posts"><!-- #start no-post-message-content-generic-posts-->';
		echo 'We have no Business Stories at the moment. Please check back again soon.';
		echo '</div><!-- #end no-post-message-content-generic-posts-->';
	}
	elseif (is_category('lifestyle')) {
		echo '<div id="each-post-title"><!-- start #each-post-title-->';
			echo 'No Posts';
		echo' </div><!-- end #each-post-title-->';
		echo '<div id="no-post-message-content-generic-posts"><!-- #start no-post-message-content-generic-posts-->';
		echo 'We have no Lifestyle Stories at the moment. Please check back again soon.';
		echo '</div><!-- #end no-post-message-content-generic-posts-->';
	}
	elseif (is_category('events')) {
		echo '<div id="each-post-title"><!-- start #each-post-title-->';
			echo 'No Posts';
		echo' </div><!-- end #each-post-title-->';
		echo '<div id="no-post-message-content-generic-posts"><!-- #start no-post-message-content-generic-posts-->';
		echo 'We have no Events at the moment. Please check back again soon.';
		echo '</div><!-- #end no-post-message-content-generic-posts-->';
	}
	elseif (is_category('opinion')) {
		echo '<div id="each-post-title"><!-- start #each-post-title-->';
			echo 'No Posts';
		echo' </div><!-- end #each-post-title-->';
		echo '<div id="no-post-message-content-generic-posts"><!-- #start no-post-message-content-generic-posts-->';
		echo 'We have no opinions published at the moment. Please check back again soon.';
		echo '</div><!-- #end no-post-message-content-generic-posts-->';
	}
	elseif (is_search()) {
		echo '<div id="each-post-title"><!-- start #each-post-title-->';
			echo 'No Result';
		echo' </div><!-- end #each-post-title-->';
		echo '<div id="no-post-message-content-generic-posts"><!-- #start no-post-message-content-generic-posts-->';
		echo 'Sorry, but nothing matched your search criteria. Please try again with a different keyword or keywords, or use any of the links below.';
		echo '</div><!-- #end no-post-message-content-generic-posts-->';
		include (TEMPLATEPATH . '/includes/sitemap-itx.php');
	}
	else {
		echo '<div id="each-post-title"><!-- start #each-post-title-->';
			echo 'No Posts';
		echo' </div><!-- end #each-post-title-->';
		echo '<div id="no-post-message-content-generic-posts"><!-- #start no-post-message-content-generic-posts-->';
		echo 'There are no posts at the moment. Please check back again soon.';
		echo '</div><!-- #end no-post-message-content-generic-posts-->';
	}
?>
