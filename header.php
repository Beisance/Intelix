<?php
/**
 * @package WordPress
 * @subpackage Intelix|iSance Custom Theme For BSX
 */
?>
<!DOCTYPE html>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/header/favicon-itx.png"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />

<link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/header/facebook/img-facebook-shared-image-itx.png" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Intelix">
<meta name="author" content="Beisance Intelix">
<meta name="keywords" content="technology, web development, finance, funds, investments, news, mobile, pc, tech, health" />
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?><?php wp_title("|"); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-latest.min.js" integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" crossorigin="anonymous"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/image-hover.js" integrity="sha384-XdPauhRV0czGESkUFIcI6uCoZMji6LCPs49ILccFlhhtIA7oFfVGBSBAqkHsmGur" crossorigin="anonymous"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/mobile-menu.js" integrity="sha384-INXBvaNYBqMNsVncOi5jrfXEz7LhKtzTTpqL417n5z76ISwUacTRPHi6LEeKgLgx" crossorigin="anonymous"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/mobile-search.js" integrity="sha384-xD75wdIT3eZn7fXonse7wAq6YtiF3mxaYtqD5Bax/0c9jlxKi2HUj47qhhLyuF45" crossorigin="anonymous"></script>

<div id="pre-header"><!-- start #pre-header-->
</div><!-- end #pre-header-->
<div id="header"><!-- start #header-->
	<div id="header-content"><!-- start #header-content-->
        <div id=logo-and-minor>
            <div id="logo" class="tnl tnl-m tnl-d"><!-- start #logo-->
                <div id="logo-content">
                    <a href ="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src='<?php echo get_template_directory_uri(); ?>/images/header/img-itx-logo-itx.png' alt='Intelix Logo' />
                    </a>
                </div>
            </div><!-- end #logo-->
            <div id="topnav-minor"><!-- start #topnav-minor-->
                <?php wp_nav_menu( array(
                    'menu' => 'topnav-minor',
                    'class' => 'menu',
                    'container' => 'topnav-minor'
                    )
                );
                ?>
            </div><!-- end #topnav-minor-->
        </div>
        <div id="search" class="tns tns-m tns-d"><!-- start #search-->
            <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        </div><!-- end #search-->
        <div id="topnav"><!-- start #topnav-->
			<?php wp_nav_menu( array(
				'menu' => 'topnav',
				'class' => 'menu',
				'container' => 'topnav'
				)
			);
			?>
        </div><!-- end #topnav-->
	</div><!-- end #header-content-->
</div><!-- end #header-->
