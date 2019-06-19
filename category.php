<?php
/**
 * The template for displaying categories
 *
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For ITX.
 */
?>

<?php get_header(); ?>

<?php include("includes/post-header-itx.php"); ?>

<?php include("includes/subnav-selector-itx.php"); ?>

<div id="main-section-generic"><!-- #start main-section-->
	<div id="main-section-generic-content">
		<div id="main-section-generic-stack-1"><!-- #start main-section-stack-1-->
			<div id="main-section-generic-stack-1-content"><!-- #start main-section-stack-1-content-->
				<div id="post-title">
					<?php the_title(); ?>
				</div>
				<div id="generic-content">
					<?php
						/* Run the loop to output the posts.
						 * If you want to overload this in a child theme then include a file
						 * called loop-index.php and that will be used instead.
						 */
						 get_template_part( 'loop-post-page', 'index' );
					?>
				</div>
			</div><!-- #end main-section-stack-1-content-->
		</div><!-- #end main-section-generic-stack-1-->	
		<div id="main-section-generic-stack-2"><!-- #start main-section-generic-stack-2-->
			<?php include("includes/sidebar-itx.php"); ?>
		</div><!-- #end main-section-generic-stack-2-->
	</div>
</div><!-- #end main-section-->

<?php include("includes/downnav-itx.php"); ?>

<?php include("includes/footer-itx.php"); ?>


