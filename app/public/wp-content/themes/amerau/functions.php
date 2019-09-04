<?php
/**
 * Amera functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Amera
 */

if ( ! function_exists( 'amera_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function amera_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Amera, use a find and replace
		 * to change 'amera' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'amera', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'amera' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'amera_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'amera_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amera_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'amera_content_width', 640 );
}
add_action( 'after_setup_theme', 'amera_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amera_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'amera' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'amera' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'amera_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amera_scripts() {
	wp_enqueue_style( 'amera-style', get_stylesheet_uri() );

	wp_enqueue_script( 'amera-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'amera-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amera_scripts' );

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

 // Allow subscribers to see Private posts and pages

 $subRole = get_role( 'subscriber' ); 
 $subRole->add_cap( 'read_private_posts' );
 $subRole->add_cap( 'read_private_pages' );

/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */

// Redirect to home page on login
function loginRedirect( $redirect_to, $request_redirect_to, $user ) {
    if ( is_a( $user, 'WP_User' ) && $user->has_cap( 'edit_posts' ) === false ) {
        return get_bloginfo( 'siteurl' );
    }
    return $redirect_to; }

add_filter( 'login_redirect', 'loginRedirect', 10, 3 );

// show admin bar only for admins

if (!current_user_can('manage_options')) {
	add_filter('show_admin_bar', '__return_false');
}

// AJAX Login Modal 

function ajax_login_init(){

  wp_register_script('ajax-login-script', get_template_directory_uri() . '/ajax-login-script.js', array('jquery') ); 
  wp_enqueue_script('ajax-login-script');

  wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'redirecturl' => home_url(),
      'loadingmessage' => __('Sending user info, please wait...')
  ));

  // Enable the user with no privileges to run ajax_login() in AJAX
  add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
  add_action('init', 'ajax_login_init');
}

// AJAX Continued ---

function ajax_login(){

  // First check the nonce, if it fails the function will break
  check_ajax_referer( 'ajax-login-nonce', 'security' );

  // Nonce is checked, get the POST data and sign user on
  $info = array();
  $info['user_login'] = $_POST['username'];
  $info['user_password'] = $_POST['password'];
  $info['remember'] = true;

  $user_signon = wp_signon( $info, false );
  if ( is_wp_error($user_signon) ){
      echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
  } else {
      echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
  }

  die();
}