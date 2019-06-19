<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For ITX
 */

?>
<div id="downnav"><!-- start #downnav-->
	<div id="downnav-content"><!-- start #downnav-content-->
		<?php wp_nav_menu( array(
			'menu' => 'downnav',
			'class' => 'menu',
			'container' => 'downnav-content'
			)
		);
		?>
	</div><!-- end #downnav-content-->
</div><!-- end #downnav-->

