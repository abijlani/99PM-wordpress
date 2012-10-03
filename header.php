<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package notfromconcentrate
 * @since notfromconcentrate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layouts/normalize.css">
<link href="<?php bloginfo('template_directory'); ?>/layouts/webfonts/ss-social.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/layouts/webfonts/ss-standard.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layouts/pagenavi-css.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layouts/main.css">
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/snv6rsz.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'notfromconcentrate' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        
        <div class="header-container">
            <header class="wrapper clearfix">
                <a href="<?php bloginfo('home') ?>"><img id="main-img" src="<?php bloginfo('template_directory') ?>/img/99_mobile.png"></a>