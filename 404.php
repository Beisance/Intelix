<?php

/*
Template Name: ITX 404Page
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
					404
				</div>
				
				<div id="generic-content">
					<?php include("includes/404-itx.php"); ?>
					<?php include("includes/sitemap-itx.php"); ?>
				</div>
			</div><!-- #end main-section-stack-1-content-->
		</div><!-- #end main-section-generic-stack-1-->
		<div id="main-section-generic-stack-2"><!-- #start main-section-generic-stack-2-->
			<div id="main-section-generic-stack-2-content"><!-- #start main-section-stack-2-content-->
				<div id="generic-header-sidebar">
					<div class="sidebar-content-positioning">
						Trending on Intelix
					</div>
				</div>
				<div id="generic-content-sidebar">
					<div class="sidebar-content-positioning">
						<?php include("loop-sidebar-trending.php"); ?>
					</div>				
				</div>
			</div><!-- #end main-section-stack-2-content-->	
		</div><!-- #end main-section-generic-stack-2-->
	</div>
</div><!-- #end main-section-->

<?php include("includes/downnav-itx.php"); ?>

<?php include("includes/footer-itx.php"); ?>