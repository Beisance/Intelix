<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For ITX
 */

?>

<?php
// switching loops
	/* search */
	if (is_search()) {get_template_part('loop-search-page', 'index');
	}
	/* singles */
	elseif (is_single()) {
		get_template_part('loop-single', 'index');
	}
	/* otherwise, generic page */
	else {get_template_part( 'loop-generic-page', 'index' );
	}
?>
