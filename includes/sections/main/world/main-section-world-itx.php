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
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/politics">Politics</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/politics">More Politics</a>
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 61));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 61, 'posts_per_page' => 5, 'paged' => get_query_var('paged') ) );
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
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/incidents">Incidents</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/incidents">More Incidents</a>
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
	
	<div id="main-section-stack-3">
		<div id="main-section-stack-3-content">
			<div id="main-section-header" class="main-section-header-3">
				<div id="main-section-category">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/offbeat">Offbeat</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/offbeat">More Offbeat</a>
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 63));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 63, 'posts_per_page' => 5, 'paged' => get_query_var('paged') ) );
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
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/">World</a>
				</div>
				<div id="main-section-more">
					<a href="<?php bloginfo('wpurl'); ?>/category/all-news/world/">More World</a>
				</div>
			</div>
			<div id="main-section-content">
				<?php
				// Filtering for specific category before starting custom loop for sticky posts
				$sticky = get_option('sticky_posts');
				if (!empty($sticky)) {
				  $args['post__in'] = $sticky;
				  $qry = new WP_Query(array('post__in' => $sticky, 'cat' => 58));
				  if ($qry->have_posts()) :
				while ($qry->have_posts()) : $qry->the_post();
				get_template_part( 'loop-news-stack-sticky-posts', 'index' );
				endwhile;
				endif;
				}
				?>

				<?php
					// Filtering for non-sticky posts.
					query_posts( array( 'post__not_in' => get_option('sticky_posts'), 'cat' => 58, 'posts_per_page' => 10, 'paged' => get_query_var('paged') ) );
					// Run the loop to output the non-sticky posts.
					get_template_part( 'loop-news-stack', 'index' );
				?>
			</div>
		</div>	
	</div>

</div><!-- #end main-section-->