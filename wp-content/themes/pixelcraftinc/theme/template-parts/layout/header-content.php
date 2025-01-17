<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pixelcraftinc
 */

 class WP_Menu_Custom_Walker extends Walker_Nav_Menu {
	public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
			$classes = empty($item->classes) ? array() : (array) $item->classes;
			$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
			$class_names = esc_attr($class_names);

			$output .= sprintf(
					'<a href="%s" class="%s px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">%s</a>',
					esc_url($item->url),
					$class_names,
					apply_filters('the_title', $item->title, $item->ID)
			);
	}
}

?>

<header id="masthead">

	<div>
	<?php
		$pixelcraftinc_description = get_bloginfo( 'description', 'display' );
		if ( $pixelcraftinc_description || is_customize_preview() ) :
			?>
			<p><?php echo $pixelcraftinc_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'pixelcraftinc' ); ?>">
		<div class="">
			<div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
			<div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
				<div x-data="{ open: true }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
					<div class="flex flex-row items-center justify-between p-4">
					<h1><a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><?php bloginfo( 'name' ); ?></h1>
						<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
							<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
								<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
								<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</div>
						<nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
						<?php
								wp_nav_menu(
										array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												'items_wrap'     => '%3$s', // Only outputs menu items without <ul>
												'container'      => false, // Removes the <div> container
												'walker'         => new WP_Menu_Custom_Walker(), // Use custom walker for <a> tags
										)
								);
								?>


						</nav>
				</div>
			</div>
		</div>
  </div>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
