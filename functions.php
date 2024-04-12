<?php
/**
 * Default functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Default
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
function default_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Default, use a find and replace
		* to change 'default' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'default', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'default' ),
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
			'default_custom_background_args',
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
add_action( 'after_setup_theme', 'default_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function default_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'default_content_width', 640 );
}
add_action( 'after_setup_theme', 'default_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function default_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'default' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'default' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'default_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function default_scripts() {
	wp_enqueue_style( 'reboot', get_template_directory_uri() . "/assets/css/bootstrap-reboot.min.css");
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
	wp_enqueue_style( 'slick', get_template_directory_uri() . "/assets/css/slick.css");
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . "/assets/css/slick-theme.css");
	wp_enqueue_style( 'style', get_template_directory_uri() . "/assets/css/style.css");

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'default_scripts' );

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

/**
 * Redux panel
 */
require get_template_directory() . '/inc/redux-panel.php';

// Add class to A element of .primary-menu
function tps_primary_menu_anchor_class($item_output, $item, $depth, $args) {
    $item_output = preg_replace('/<a /', '<a class="nav-link" ', $item_output, 1);
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'tps_primary_menu_anchor_class', 10, 4);

// Add class to LI element of .primary-menu
function tps_primary_menu_li_class($objects, $args) {
    foreach($objects as $key => $item) {
      $objects[$key]->classes[] = 'nav-item';
    }
    return $objects;
}

// Изменение пункта "Записи"
add_filter('wp_nav_menu_objects', 'tps_primary_menu_li_class', 10, 2);

function edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'Услуги и наши работы';
    $submenu['edit.php'][5][0] = 'Все записи';

}

add_action( 'admin_menu', 'edit_admin_menus' );