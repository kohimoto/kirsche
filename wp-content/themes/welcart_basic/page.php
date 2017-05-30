<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */
get_header(); ?>
<?
//2017.05.30 kohinata
$access_url = $_SERVER["REQUEST_URI"];
if(preg_match("/about/", $access_url)){
?>
<div class="main-image">
<h1 class="logo"><a href="/"><img src="/wp-content/themes/welcart_basic/images/logo.png"></a></h1>
	<img src="http://kirsche:8080/wp-content/themes/welcart_basic/images/image-top.jpg" width="1000" height="400" alt="kirsche">
</div><!-- main-image -->


<div id="main" class="wrapper one-column">
<h2>About us</h2>


<?
}
?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>

		<?php endwhile; else: ?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php if(0){get_sidebar('other');} ?>
<?php get_footer(); ?>
