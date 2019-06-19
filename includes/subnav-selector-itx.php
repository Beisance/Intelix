<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For ITX.
 */
?>

<?php

// Business, General Business, Deals, Personalities
if(in_category(array('business', 'general-business', 'finance-investments', 'business-personalities'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-business',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// World News
elseif(in_category(array('world', 'politics', 'incidents', 'offbeat'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-world',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Tech
elseif(in_category(array('tech'))) {
	/* subnav */
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-tech',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Tech Mobile
elseif(in_category(array('mobile','mobile-apps','mobile-hardware','mobile-carrier'))) {
	/* subnav */
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-tech-mobile',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Tech PC
elseif(in_category(array('pc','pc-os','pc-hardware','pc-apps'))) {
	/* subnav */
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-tech-pc',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Tech Gaming
elseif(in_category(array('gaming','mobile-gaming','xbox-gaming','gaming-videos'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-tech-gaming',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Style
elseif(in_category(array('style'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-style',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// General Style */
elseif(in_category(array('general-lifestyle','entertainment', 'life', 'travel'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-style-general',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Sports
elseif(in_category(array('sports','football','basketball','athletics'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-style-sports',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Health
elseif(in_category(array('health','mens-health','womens-health', 'childrens-health'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-style-health',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
		echo '</div><!-- end #subnav-content-->';
	echo '</div><!-- end #subnav-->';
}
// Opinion
elseif(in_category(array('opinion'))) {
	echo '<div id="subnav"><!-- start #subnav-->';
		echo '<div id="subnav-content"><!-- start #subnav-content-->';
			wp_nav_menu( array(
				'menu' => 'submenu-business',
				'class' => 'menu',
				'container' => 'subnav-content'
			));
			echo '</div><!-- end #subnav-content-->';
		echo '</div><!-- end #subnav-->';
}
else {
	// nothing
}

?>
