<?php
/**
 * @package WordPress
  * @subpackage Beisance|Intelix Custom Theme For ITX
 */

?>

<div id="main-section-generic-stack-2-content"><!-- #start main-section-stack-2-content-->
	<div id="generic-header-sidebar">
		<div class="sidebar-content-positioning">
			Trending on Intelix
		</div>
	</div>
	<div id="generic-content-sidebar">
		<div class="sidebar-content-positioning">
			<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				$args['post__in'] = $sticky;
				$qry = new WP_Query(array('post__in' => $sticky, 'cat' => ''));
				if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-trending-stack-sticky-posts', 'index' );
				endwhile;
				else :;
				echo 'There are no trending posts at this time'; 
				endif;
				}
			?>
		</div>				
	</div>
</div><!-- #end main-section-stack-2-content-->	
