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
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/pc-os">PC OS</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/pc-os">More PC OS</a>
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 11));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 11, 'posts_per_page' => 5, 'paged' => get_query_var('paged') ) );
					// Run the loop to output the non-sticky posts.
					get_template_part( 'loop-news-stack', 'index' );
				?>
			</div>
		</div>	
	</div>

	<div id="main-section-stack-2">
		<div id="main-section-stack-2-content">
			<div id="main-section-header" class="main-section-header-2">
				<div id="main-section-category">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/pc-devices">PC Devices</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/pc-devices">More PC Devices</a>
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 11));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 11, 'posts_per_page' => 5, 'paged' => get_query_var('paged') ) );
					// Run the loop to output the non-sticky posts.
					get_template_part( 'loop-news-stack', 'index' );
				?>
			</div>
		</div>	
	</div>
	
	<div id="main-section-stack-3">
		<div id="main-section-stack-3-content">
			<div id="main-section-header" class="main-section-header-3">
				<div id="main-section-category">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/pc-apps">PC Apps</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/pc-apps">More PC Apps</a>
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 13));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 13, 'posts_per_page' => 5, 'paged' => get_query_var('paged') ) );
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
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/">PC</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/tech/pc/">More PC</a>
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 9));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 9, 'posts_per_page' => 10, 'paged' => get_query_var('paged') ) );
					// Run the loop to output the non-sticky posts.
					get_template_part( 'loop-news-stack', 'index' );
				?>
			</div>
		</div>	
	</div>

</div><!-- #end main-section-->
