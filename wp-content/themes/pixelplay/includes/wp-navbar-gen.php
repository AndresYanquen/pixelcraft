<?php



function wp_nav_menu_test( $args = array(), $wrapper, $class ) {
  
	static $menu_id_slugs = array();

  $images = array(
    'home' => get_template_directory_uri() .'/assets/images/home.svg',
    'shop' => get_template_directory_uri() .'/assets/images/shop.svg',
    'cart' => get_template_directory_uri() .'/assets/images/cart.svg',
    'checkout' => get_template_directory_uri() .'/assets/images/checkout.svg',
    'contact' => get_template_directory_uri() .'/assets/images/contact.svg',
    'about' => get_template_directory_uri() .'/assets/images/about.svg',
    'account' => get_template_directory_uri() .'/assets/images/account.svg',
    );

	$defaults = array(
		'menu'                 => '',
		'container'            => 'div',
		'container_class'      => '',
		'container_id'         => '',
		'container_aria_label' => '',
		'menu_class'           => 'menu',
		'menu_id'              => '',
		'echo'                 => true,
		'fallback_cb'          => 'wp_page_menu',
		'before'               => '',
		'after'                => '',
		'link_before'          => '',
		'link_after'           => '',
		'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'item_spacing'         => 'preserve',
		'depth'                => 0,
		'walker'               => '',
		'theme_location'       => '',
	);

	$args = wp_parse_args( $args, $defaults );

	if ( ! in_array( $args['item_spacing'], array( 'preserve', 'discard' ), true ) ) {
		// Invalid value, fall back to default.
		$args['item_spacing'] = $defaults['item_spacing'];
	}

	/**
	 * Filters the arguments used to display a navigation menu.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_nav_menu()
	 *
	 * @param array $args Array of wp_nav_menu() arguments.
	 */
	$args = apply_filters( 'wp_nav_menu_args', $args );
	$args = (object) $args;

	/**
	 * Filters whether to short-circuit the wp_nav_menu() output.
	 *
	 * Returning a non-null value from the filter will short-circuit wp_nav_menu(),
	 * echoing that value if $args->echo is true, returning that value otherwise.
	 *
	 * @since 3.9.0
	 *
	 * @see wp_nav_menu()
	 *
	 * @param string|null $output Nav menu output to short-circuit with. Default null.
	 * @param stdClass    $args   An object containing wp_nav_menu() arguments.
	 */
	$nav_menu = apply_filters( 'pre_wp_nav_menu', null, $args );

	if ( null !== $nav_menu ) {
		if ( $args->echo ) {
			echo $nav_menu;
			return;
		}

		return $nav_menu;
	}

	// Get the nav menu based on the requested menu.
	$menu = wp_get_nav_menu_object( $args->menu );

  

	// Get the nav menu based on the theme_location.
	$locations = get_nav_menu_locations();
	if ( ! $menu && $args->theme_location && $locations && isset( $locations[ $args->theme_location ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $args->theme_location ] );
	}

  

	// Get the first menu that has items if we still can't find a menu.
	if ( ! $menu && ! $args->theme_location ) {
		$menus = wp_get_nav_menus();
		foreach ( $menus as $menu_maybe ) {
			$menu_items = wp_get_nav_menu_items( $menu_maybe->term_id, array( 'update_post_term_cache' => false ) );
			if ( $menu_items ) {
				$menu = $menu_maybe;
				break;
			}
		}
	}

  

	if ( empty( $args->menu ) ) {
		$args->menu = $menu;
	}

	// If the menu exists, get its items.
	if ( $menu && ! is_wp_error( $menu ) && ! isset( $menu_items ) ) {
		$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'update_post_term_cache' => false ) );
	}

  // echo json_encode( $menu_items, JSON_PRETTY_PRINT );
  // wp_die();

foreach ( $menu_items as $menu_item ) {
        $item_title_lower = strtolower( $menu_item->title ); // Convert title to lowercase
        
        // Loop through the images array and check if the title matches any part of the key
        foreach ( $images as $key => $image_path ) {
            if ( strpos( $item_title_lower, $key ) !== false ) { // Check if key is part of the title
                // Here we have a match, output the menu item and link it with the image
                echo "<$wrapper class='$class'>
                        <a href='{$menu_item->url}'>
                            <img src='{$image_path}' alt='{$menu_item->title}' />
                            <span> {$menu_item->title} </span>
                        </a>
                      </$wrapper>";
                break; // Exit the loop once a match is found
            }
        }
    }
  
  


}

