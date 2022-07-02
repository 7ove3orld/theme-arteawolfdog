<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" class="wolfdog-archives">

	<i id="site-header"></i>

	<?php

	query_posts('category_name=archive');
	if ( have_posts() ) {
		$i = 0;
		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}

			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			//get_template_part( 'template-parts/archive-content-cover' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
