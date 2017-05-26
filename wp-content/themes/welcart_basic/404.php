<?php
/**
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="content" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h2><?php _e( 'Oops! That page can&rsquo;t be found.', '' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content red">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', '' ); ?></p>

					<?php if(0){ get_search_form();} ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
