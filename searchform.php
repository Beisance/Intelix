<form method="get" id="search-form" class="tnsf tnsf-m" action="<?php bloginfo('home'); ?>/">
	<div>
		<input type="image" src="<?php bloginfo('template_directory'); ?>/images/header/button-search-itx.png" id="search-submit" value="Search" />
		<div id="search-container">
		<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="search-box" class="tnsfsb tnsfsb-m" />
		</div>
	</div>
</form>
