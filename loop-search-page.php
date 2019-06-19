<?php

/*
The loop that displays posts.
 */
?>

<div id="each-post" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div id="each-post-id" class="post" id="post-<?php the_ID(); ?>"><!-- start #ach-post-id-->
	</div><!-- end #ach-post-id-->
	<div id="each-post-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</div><!-- #each-post-title-->
	<div id="each-post-title-date-time"><!-- start #each-post-title-date-time-->
		<?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
	</div><!-- end #each-post-title-date-time-->
	<div id="the-content">
		<?php the_excerpt(); ?>
	</div>
	<div id="post-categories-search" class="post-categories">
		<?php
		// Tech
		if (in_category('14')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/mobile/mobile-apps">Mobile Apps</a>';
		}
		elseif (in_category('15')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/mobile/mobile-hardware">Mobile Hardware</a>';
		}
		elseif (in_category('16')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/mobile/mobile-carrier">Mobile Carrier</a>';
		}
		elseif (in_category('11')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/pc/pc-os">PC OS</a>';
		}
		elseif (in_category('12')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/pc/pc-hardware">PC Hardware</a>';
		}
		elseif (in_category('13')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/pc/pc-apps">PC Apps</a>';
		}
		elseif (in_category('17')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/gaming/mobile-gaming">Mobile Gaming</a>';
		}
		elseif (in_category('18')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/gaming/xbox-gaming">Xbox Gaming</a>';
		}
		elseif (in_category('19')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/tech/gaming/gaming-videos">Gaming Videos</a>';
		}
		// Business
		elseif (in_category('20')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/business/general-business">Business</a>';
		}
		elseif (in_category('21')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/business/deals">Deals</a>';
		}
		elseif (in_category('22')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/business/business-personalities">Personalities</a>';
		}
		// World
		elseif (in_category('61')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/world/politics">Politics</a>';
		}
		elseif (in_category('62')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/world/Incidents">Incidents</a>';
		}
		elseif (in_category('63')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/world/offbeat">Offbeat</a>';
		}
		// Lifestyle
		// General Lifestyle
		elseif (in_category('27')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/general-lifestyle/entertainment">Entertainment</a>';
		}
		elseif (in_category('28')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/general-lifestyle/Life">Life</a>';
		}
		elseif (in_category('29')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/general-lifestyle/travel">Travel</a>';
		}
		// Sports
		elseif (in_category('30')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/sports/football">Football</a>';
		}
		elseif (in_category('31')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/sports/basketball">Basketball</a>';
		}
		elseif (in_category('32')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/sports/athletics">Athletics</a>';
		}
		// Health
		elseif (in_category('33')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/health/mens-health">Men\'s Health</a>';
		}
		elseif (in_category('34')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/health/womens-health">Women\'s Health</a>';
		}
		elseif (in_category('35')) {
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/all-news/lifestyle/health/childrens-health">Children\'s Health</a>';
		}
		// else nothing
		else{
			// nothing
		}
		?>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<?php include("includes/loop-no-post-message-selector-generic-posts-itx.php"); ?><!--we're outputing a custom error message if nothing's found, using a selector file for multiple options-->
	<?php endif; ?>
</div><!-- end #each-post-->
