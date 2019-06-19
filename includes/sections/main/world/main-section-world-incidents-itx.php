<?php
/**
 * @package WordPress
  * @subpackage Beisance|Intelix Custom Theme For ITX
 */

?>
<div id="main-section" class="main-section-class"><!-- #start main-section-->

	<div id="main-section-stack-1">
		<div id="main-section-stack-1-content">
			<div id="main-section-header" class="main-section-header-1">
				<div id="main-section-category">
					Incidents
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 62));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 62, 'posts_per_page' => 5, 'paged' => get_query_var('paged') ) );
					// Run the loop to output the non-sticky posts.
					get_template_part( 'loop-news-stack', 'index' );
				?>
			</div>
		</div>	
	</div>
	
	<div id="main-section-stack-5">
		<div id="main-section-stack-5-content">
			<div id="main-section-header" class="main-section-header-5">
				<div id="main-section-category">
					Incidents
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 62));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 62, 'posts_per_page' => 10, 'paged' => get_query_var('paged') ) );
					// Run the loop to output the non-sticky posts.
					get_template_part( 'loop-news-stack', 'index' );
				?>
			</div>
		</div>	
	</div>

</div><!-- #end main-section-->
