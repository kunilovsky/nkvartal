<?php

/**
 * nk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nk
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nk_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on nk, use a find and replace
		* to change 'nk' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('nk', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'nk'),
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
			'nk_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'nk_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nk_content_width()
{
	$GLOBALS['content_width'] = apply_filters('nk_content_width', 640);
}
add_action('after_setup_theme', 'nk_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nk_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'nk'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'nk'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'nk_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function nk_scripts()
{
	wp_enqueue_style('nk-bootstrap5.2.3', get_template_directory_uri() . '/assets/style/bs.css');
	wp_enqueue_style('nk-compile-css', get_template_directory_uri() . '/assets/style/style.css');
	wp_enqueue_script('nk-navigation', get_template_directory_uri() . '/assets/js/bs.js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'nk_scripts');
remove_action('wp_enqueue_scripts', 'extendify-gutenberg-patterns-and-templates-utilities-inline-css');
remove_action('wp_footer', 'extendify-gutenberg-patterns-and-templates-utilities-inline-css', 1);
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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Redux Framework */
// ???????????????????? redux 
require get_template_directory() . "/inc/option-theme.php";

/* Custom */
function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class($atts, $item, $args)
{
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


wp_deregister_style('nk_opt-dynamic-css');
add_theme_support('post-thumbnails');

// add single types
add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat) { if (file_exists(TEMPLATEPATH. "/single-{$cat->term_id}.php")) return TEMPLATEPATH. "/single-{$cat->term_id}.php"; } return $t;'));

function true_taxonomy_filter()
{
	global $typenow; // ?????? ??????????
	if ($typenow == 'post') { // ?????? ?????????? ?????????? ???????????? ????????????????????
		$taxes = array('platform', 'game'); // ???????????????????? ?????????? ??????????????
		foreach ($taxes as $tax) {
			$current_tax = isset($_GET[$tax]) ? $_GET[$tax] : '';
			$tax_obj = get_taxonomy($tax);
			$tax_name = mb_strtolower($tax_obj->labels->name);
			// ?????????????? mb_strtolower ?????????????????? ?? ???????????? ??????????????
			// ?????? ?????????? ???? ???????????????? ???? ?????????????????? ??????????????????, ???????? ??????, ???????????????? ???? ????????????
			$terms = get_terms($tax);
			if (count($terms) > 0) {
				echo "<select name='$tax' id='$tax' class='postform'>";
				echo "<option value=''>?????? $tax_name</option>";
				foreach ($terms as $term) {
					echo '<option value=' . $term->slug, $current_tax == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
				}
				echo "</select>";
			}
		}
	}
}

add_action('restrict_manage_posts', 'true_taxonomy_filter');

function my_nav_menu_submenu_css_class( $classes ) {
    $classes[] = 'dropdown-menu';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );