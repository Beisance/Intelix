<?php
/**
 * @package WordPress
 * @subpackage Beisance|iSance Custom Theme For ITX
 */

?>
<div id="footer"><!-- start #footer-->
	<div id="footer-content"><!-- start #footer-content-->
		<div id="footer-content-stack-1"><!-- start #footer-content-stack-1-->
			Copyright &#169; <?php echo date("Y") ?> <a href="<?php bloginfo('wpurl'); ?>/">Intelix</a>. All rights reserved. ITX and Intelix are Beisance trademarks. Washington D.C | London | Lagos
		</div><!-- end #footer-content-stack-1-->
		<div id="footer-content-stack-2"><!-- start #footer-content-stack-2-->
			<?php
				wp_nav_menu( array(
					'menu' => 'footer',
					'class' => 'menu',
					'container' => 'footer-content'
				));
			?>
		</div><!-- end #footer-content-stack-2-->
	</div><!-- end #footer-content-->
</div><!-- end #footer-->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>

</html>

