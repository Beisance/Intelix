<?php
/*
Template Name: ITX DefaultTemplate
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
					<?php include("includes/loop-selector-itx.php"); ?>
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


