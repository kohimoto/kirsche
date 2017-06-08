<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="format-detection" content="telephone=no"/>

	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/welcart_basic/custom.css" media="all">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/welcart_basic/animate.css" media="all">
</head>
<?
//2017.05.30 kohinata
$access_url = $_SERVER["REQUEST_URI"];
?>
<body <?php body_class(); ?>>

<?php if(! welcart_basic_is_cart_page()): ?>
	<header id="masthead" class="site-header" role="banner">

		<div class="inner cf">

			<?php $heading_tag = ( is_home() || is_front_page() || preg_match("/about/", $access_url)) ? 'h1' : 'div'; ?>

		<nav id="nav" role="navigation">
		<a href="#" class="nav-toggle nav-toggle active"><i></i></a>
		<div class="js-fullheight table">
		<div class="js-fullheight table-cell">
		<ul>
		<li><a href="/">TOP</a></li>
		<li><a href="/about">ABOUT US</a></li>
		<li><a href="/contact">CONTACT</a></li>
		<li><a href="/notes">NOTES</a></li>
		</ul>
		</div>
		</div>
		</nav>
		<div class="head_nav">
			<a href="#" class="nav-toggle o-nav-toggle"><i></i></a>
	</div>
			<?php if(! welcart_basic_is_cart_page()): ?>

			<div class="snav cf">

				<div class="incart-btn">
					<a href="<?php echo USCES_CART_URL; ?>"><i class="fa fa-shopping-cart"></i><?php if(! defined( 'WCEX_WIDGET_CART' ) ): ?><span class="total-quant"><?php usces_totalquantity_in_cart(); ?></span><?php endif; ?></a>
				</div>
			</div><!-- .snav -->

			<?php endif; ?>

		</div><!-- .inner -->
		<div class="message_left message"><a href="/category/papyrus">papyrus</a></div>
		<div class="message_right message"><a href="/category/goods">Goods day!</a></div>


	</header><!-- #masthead -->
<?php endif; ?>

	<?php if( ( is_front_page() || is_home() ) || preg_match("/about/", $access_url) && get_header_image() ): ?>
	<div class="main-image">
	<h1 class="logo"><a href="/"><img src="/wp-content/themes/welcart_basic/images/logo.png"></a></h1>
			<img src="/wp-content/themes/welcart_basic/images/about/a_h_01.jpg" width="1140px" alt="header_images">
			<img src="/wp-content/themes/welcart_basic/images/about/a_h_t_01.png" alt="header_text" class="text01 fadeInRight animated">
	</div><!-- main-image -->
	<?php endif; ?>

	<?php

		if( is_front_page() || is_home() || welcart_basic_is_cart_page() || welcart_basic_is_member_page() || preg_match("/about/", $access_url)) {
			$class = 'one-column';
		}else {
			$class = 'two-column right-set';
		};
	?>

	<div id="main" class="wrapper <?php echo $class;?>">
