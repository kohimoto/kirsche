<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

//2017.05.24 kohinata tileタグ変更
ob_start();
$header = get_header();
$head_title = "Thank you for shopping";
$head = ob_get_contents();
$head = preg_replace("/<title>.*<\/title>/","<title>".$head_title." | kirsche</title>",$head);
ob_end_clean();
echo $head;
?>
<div id="primary" class="site-content">
	<div id="content" class="cart-page" role="main">

	<?php if( have_posts() ) : usces_remove_filter(); ?>

		<article class="post" id="wc_<?php usces_page_name(); ?>">

			<h2><?php _e('Completion', ''); ?></h2>

			<div id="cart_completion">

				<h3><?php _e('It has been sent succesfully.', ''); ?></h3>

				<div class="header_explanation">
					<p><?php _e('Thank you for shopping.', ''); ?><br /><?php _e("If you have any questions, please contact us by 'Mail'.", ''); ?></p>
					<?php do_action( 'usces_action_cartcompletion_page_header', $usces_entries, $usces_carts ); ?>
				</div><!-- .header_explanation -->

			<?php if( defined('WCEX_DLSELLER') ) : ?>
				<?php dlseller_completion_info( $usces_carts ); ?>
			<?php endif; ?>

				<?php usces_completion_settlement(); ?>

				<?php do_action( 'usces_action_cartcompletion_page_body', $usces_entries, $usces_carts ); ?>

				<div class="footer_explanation">
					<?php do_action( 'usces_action_cartcompletion_page_footer', $usces_entries, $usces_carts ); ?>
				</div><!-- .footer_explanation -->

				<div class="button"><a href="<?php echo home_url(); ?>"><button>Back to the top page</button></a></div>
				<?php echo apply_filters( 'usces_filter_conversion_tracking', NULL, $usces_entries, $usces_carts ); ?>

			</div><!-- #cart_completion -->

		</article><!-- .post -->

	<?php else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
