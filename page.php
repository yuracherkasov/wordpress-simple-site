<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package icu-care
 */

get_header();
?>

<main id="primary" class="site-main">
	<h2>Visitor Information </h2>
	<nav style="padding-right: 20px;" id="LeftMenu">
		<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
	</nav>
	<?php
			get_template_part( 'template-parts/content', 'page' );
		?>
</main>
< <?php
// get_sidebar();
get_footer();