<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<nav class="§rtea-nav" data-transform='7vw' data-transform-hover='3vw'>

			<ul class="reset-list-style §rtea-nav-list">

			<?php
			if ( has_nav_menu( 'primary' ) ) {

				wp_nav_menu(
					array(
						'container'  => '',
						'items_wrap' => '%3$s',
						'theme_location' => 'primary',
					)
				);

			} ?>

			</ul>

		</nav><!-- .primary-menu-wrapper -->

		<nav class="§rtea-nav socials" data-transform='-7vw' data-transform-hover='-3vw'>

			<ul class="reset-list-style §rtea-nav-list">
				<li>
					<a href="https://www.facebook.com/WolfDogProduction/" target="_blank">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/wolfdogproduction/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UCp1kQf48qMNfugcRhtC_CDA/" target="_blank">
						<i class="fab fa-youtube"></i>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/in/wolfdog-production-0a7194228/" target="_blank">
						<i class="fab fa-linkedin"></i>
					</a>
				</li>
			</ul>

		</nav>

		<?php get_template_part( 'template-parts/navbar-script' ); ?>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
