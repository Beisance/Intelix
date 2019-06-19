<?php
/*
The loop that displays posts.
 */
?>

<div id="each-post-news-stack" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div id="each-post-title-news-stack"><!-- start #each-post-title-->
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<span class="news-stack-title">
				<?php the_title(); ?>
			</span>
			<span class="news-stack-active-sponsored">
				<?php if(is_sticky()) {
					echo '<span class="active-stack">ACTIVE</span>';
					}
					else{
						// nothing
					}
				?>
				<?php
				/* sponsored */
					if (in_category('60')) {
						echo '<span class="sponsored-stack">SPONSORED</span>';
					}
					else{
						// nothing
					}
				?>
			</span>
		</a>
	</div><!-- end #each-post-title-->
	<div id="each-post-author-date-time">
		<div id="each-post-author">
			<?php the_author_link(); ?>
		</div>
		<div id="each-post-date-time">
			<?php the_time('F jS, Y') ?> <?php the_time() ?>
		</div>
	</div>
	<div id="each-post-summary-news-stack">
		<div id="each-post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<div id="each-post-excerpt">
			<?php echo get_character_limited_excerpt(); ?>
		</div>
	</div>
	<?php
		if (is_category (array('mobile-apps','mobile-devices','mobile-carrier','general-business','deals','business-people','politics','incidents','offbeat','entertainment','life','travel','football','basketball','athletics','mens-health','womens-health','childrens-health'))) {
			// nothing
		}
		else{
			echo '<div id="post-categories-news-stack-front-page" class="post-categories">';
					// tech
					if (in_category('14')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/tech/mobile/mobile-apps">Mobile Apps</a>';
					}
					elseif (in_category('15')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/tech/mobile/mobile-devices">Mobile Devices</a>';
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
						echo '/category/all-news/tech/pc/pc-devices">PC Devices</a>';
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
					// business 
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
						echo '/category/all-news/business/business-people">People</a>';
					}
					// World News
					elseif (in_category('61')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/world/politics">Politics</a>';
					}
					elseif (in_category('62')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/world/incidents">Incidents</a>';
					}
					elseif (in_category('63')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/world/offbeat">Offbeat</a>';
					}
					// style
					// general style
					elseif (in_category('27')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/general-style/entertainment">Entertainment</a>';
					}
					elseif (in_category('28')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/general-style/Life">Life</a>';
					}
					elseif (in_category('29')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/general-style/travel">Travel</a>';
					}
					// sports
					elseif (in_category('30')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/sports/football">Football</a>';
					}
					elseif (in_category('31')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/sports/basketball">Basketball</a>';
					}
					elseif (in_category('32')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/sports/athletics">Athletics</a>';
					}
					// health 
					elseif (in_category('33')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/health/mens-health">Men\'s Health</a>';
					}
					elseif (in_category('34')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/health/womens-health">Women\'s Health</a>';
					}
					elseif (in_category('35')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/all-news/style/health/childrens-health">Children\'s Health</a>';
					}
					/* else nothing */
					else{
						/* nothing */
					}
			echo '</div>';
		}	
	?>
	<div id="each-post-divider">
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<?php include("includes/loop-no-post-message-selector-front-stacks-itx.php"); ?><!--we're outputing a custom error message if nothing's found, using a selector file for multiple options-->
	<?php endif; ?>
</div><!-- end #each-post-->
