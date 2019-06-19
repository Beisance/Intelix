<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For ITX
 */

?>

<div id="unique-content"><!-- start #unique-content-->
	<div id="sitemap"><!-- start #sitemap--->
		<div id="sitemap-stack-1" class="sitemap-stack"><!-- start #sitemap-stack-1-->
			<div id="sitemap-stack-content"><!-- start #sitemap-stack-content-->
				<div id="sitemap-section"><!-- start #sitemap-section-->
					<div id="sitemap-section-header">
						<a href="<?php bloginfo('wpurl'); ?>/category/tech">Tech</a>
					</div>
					<div id="sitemap-section-content">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-tech',
							'class' => 'menu',
							'container' => 'sitemap-stack-section-content'
							)
						);
						?>
					</div>
				</div><!-- end #sitemap-section-->

				<div id="sitemap-section"><!-- start #sitemap-section-->
					<div id="sitemap-section-header">
						<a href="<?php bloginfo('wpurl'); ?>/category/world">World</a>
					</div>
					<div id="sitemap-section-content">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-world',
							'class' => 'menu',
							'container' => 'sitemap-stack-section-content'
							)
						);
						?>
					</div>
				</div><!-- end #sitemap-section-->
			</div><!-- end #sitemap-stack-content-->	
		</div><!-- end #sitemap-stack-1-->
		
		<div id="sitemap-stack-2" class="sitemap-stack"><!-- start #sitemap-stack-2-->
			<div id="sitemap-stack-content"><!-- start #sitemap-stack-content-->
				<div id="sitemap-section"><!-- start #sitemap-section-->
					<div id="sitemap-section-header">
						<a href="<?php bloginfo('wpurl'); ?>/category/business">Business</a>
					</div>
					<div id="sitemap-section-content">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-business',
							'class' => 'menu',
							'container' => 'sitemap-stack-section-content'
							)
						);
						?>
					</div>
				</div><!-- end #sitemap-section-->

				<div id="sitemap-section"><!-- start #sitemap-section-->
					<div id="sitemap-section-header">
						Contacts & Support
					</div>
					<div id="sitemap-section-content">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-about-contacts-support',
							'class' => 'menu',
							'container' => 'sitemap-stack-section-content'
							)
						);
						?>
					</div>
				</div><!-- end #sitemap-section-->

				<div id="sitemap-section"><!-- start #sitemap-section-->
					<div id="sitemap-section-header">
						Policies
					</div>
					<div id="sitemap-section-content">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-policies',
							'class' => 'menu',
							'container' => 'sitemap-stack-section-content'
							)
						);
						?>
					</div>
				</div><!-- end #sitemap-section-->
			</div><!-- end #sitemap-stack-content-->		
		</div><!-- end #sitemap-stack-2-->	

		<div id="sitemap-stack-3" class="sitemap-stack"><!-- start #sitemap-stack-3-->
			<div id="sitemap-stack-content"><!-- start #sitemap-stack-content-->
				<div id="sitemap-section"><!-- start #sitemap-section-->
					<div id="sitemap-section-header">
						<a href="<?php bloginfo('wpurl'); ?>/category/lifestyle">Lifestyle</a>
					</div>
					<div id="sitemap-section-content">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-lifestyle',
							'class' => 'menu',
							'container' => 'sitemap-stack-section-content'
							)
						);
						?>
					</div>
				</div><!-- end #sitemap-section-->
			</div><!-- end #sitemap-stack-content-->		
		</div><!-- end #sitemap-stack-3-->	

		<div id="sitemap-stack-4" class="sitemap-stack"><!-- start #sitemap-stack-4-->
			<div id="sitemap-stack-content"><!-- start #sitemap-stack-content-->
				<div id="sitemap-section"><!-- start #sitemap-section-->
					<div id="sitemap-section-header">
						Social Media
					</div>
					<div id="sitemap-section-content">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-social-media',
							'class' => 'menu',
							'container' => 'sitemap-stack-section-content'
							)
						);
						?>
					</div>
				</div><!-- end #sitemap-section-->
			</div><!-- end #sitemap-stack-content-->		
		</div><!-- end #sitemap-stack-4-->	
	</div><!-- end #sitemap--->	
</div><!-- end #unique-content-->		