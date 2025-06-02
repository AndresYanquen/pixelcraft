<?php
/**
 * muiscalabs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package muiscalabs
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function muiscalabs_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on muiscalabs, use a find and replace
		* to change 'muiscalabs' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'muiscalabs', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'muiscalabs' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'muiscalabs_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'muiscalabs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function muiscalabs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'muiscalabs_content_width', 640 );
}
add_action( 'after_setup_theme', 'muiscalabs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function muiscalabs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'muiscalabs' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'muiscalabs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'muiscalabs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function muiscalabs_scripts() {

	wp_enqueue_style( 'muiscalabs-main', get_template_directory_uri() . '/css/main.css', array(), filemtime( get_template_directory() . '/css/main.css' ));

	// wp_enqueue_style( 'muiscalabs-aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array());
	wp_enqueue_style( 'muiscalabs-glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array());

	wp_enqueue_style( 'muiscalabs-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), "5.3.3");

	wp_style_add_data( 'muiscalabs-style', 'rtl', 'replace' );

	wp_enqueue_script( 'muiscalabs-aos-js',  get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), time(), true );
	wp_enqueue_script( 'muiscalabs-glightbox-js',  get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), time(), true );

	wp_enqueue_script( 'muiscalabs-purecounter-vanilla',  get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), time(), true );
	wp_enqueue_script( 'muiscalabs-images-loaded',  get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), time(), true );
	wp_enqueue_script( 'muiscalabs-isotope-layout',  get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), time(), true );

	wp_enqueue_script( 'muiscalabs-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array(), time(), true );

	wp_enqueue_script( 'muiscalabs-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array( 'muiscalabs-popper' ), time(), true );

	wp_enqueue_style( 'muiscalabs-style', get_stylesheet_uri(), array(), time() );
	wp_style_add_data( 'muiscalabs-style', 'rtl', 'replace' );

	
	wp_enqueue_style( 'muiscalabs-swiper','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array());
	wp_enqueue_script( 'muiscalabs-swiper-js',  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), time(), true );
	wp_enqueue_script( 'muiscalabs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'muiscalabs_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

