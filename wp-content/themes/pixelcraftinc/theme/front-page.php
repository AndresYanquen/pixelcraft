<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pixelcraftinc
 */

get_header();
?>

	<section id="primary">
		<main class="px-4 sm:px-6 md:px-10 lg:px-14" id="main">

			<section>
				
			</section>
			<section>
				<?php
					echo do_shortcode('[products]');
				?>
			</section>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
