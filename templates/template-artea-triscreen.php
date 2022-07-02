<?php
/**
 * Template Name: 3rtea Triscreen Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

get_template_part( 'template-parts/splash' );

?>

<main id="site-content">

	<?php get_template_part( 'template-parts/triscreen' ); ?>

	<div id="site-header" class="§rtea-back-page">

		<!--?php

		/* if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content-cover' );
			}
		} */

		?-->

	</div>

</main><!-- #site-content -->

<!--?php get_template_part( 'template-parts/footer-menus-widgets' ); ?-->

<?php #get_footer(); ?>
