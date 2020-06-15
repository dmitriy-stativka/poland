<?php
/**
 * poland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package poland
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'poland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function poland_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on poland, use a find and replace
		 * to change 'poland' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'poland', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'poland' ),
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
				'poland_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'poland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function poland_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'poland_content_width', 640 );
}
add_action( 'after_setup_theme', 'poland_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function poland_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'poland' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'poland' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'poland_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function poland_scripts() {
	wp_enqueue_style( 'poland-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'poland-style', 'rtl', 'replace' );

	wp_enqueue_script( 'poland-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'poland-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'poland_scripts' );



register_post_type('utp', array(
    'labels'             => array(
      'name'               => 'УТП',
      'singular_name'      => 'УТП',
      'add_new'            => 'ДобавитьУТП',
      'add_new_item'       => 'Добавить новую УТП',
      'edit_item'          => 'Редактировать УТП',
      'new_item'           => 'Новая настройку',
      'view_item'          => 'Посмотреть настройку',
      'search_items'       => 'Найти настройку',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'УТП'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));


  register_post_type('energeticheskaya', array(
    'labels'             => array(
      'name'               => 'Энергетическая независимость',
      'singular_name'      => 'Энергетическая независимость',
      'add_new'            => 'Добавить енергетическую независимость',
      'add_new_item'       => 'Добавить новую енергетическую независимость',
      'edit_item'          => 'Редактировать енергетическую независимость',
      'new_item'           => 'Новая настройку',
      'view_item'          => 'Посмотреть настройку',
      'search_items'       => 'Найти настройку',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Энергетическая независимость'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));






  
  register_post_type('lgota', array(
    'labels'             => array(
      'name'               => 'Льготы',
      'singular_name'      => 'Льготы',
      'add_new'            => 'Добавить Льготу',
      'add_new_item'       => 'Добавить новую льготу',
      'edit_item'          => 'Редактировать льготу',
      'new_item'           => 'Новая настройку',
      'view_item'          => 'Посмотреть настройку',
      'search_items'       => 'Найти настройку',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Льготы'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));






  register_post_type('faq', array(
    'labels'             => array(
      'name'               => 'FAQ',
      'singular_name'      => 'FAQ',
      'add_new'            => 'Добавить FAQ',
      'add_new_item'       => 'Добавить новый FAQ',
      'edit_item'          => 'Редактировать FAQ',
      'new_item'           => 'Новая настройку',
      'view_item'          => 'Посмотреть настройку',
      'search_items'       => 'Найти настройку',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'FAQ'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));






// какой используется файл шаблона
add_action('wp_head', 'show_template'); // перед шапкой
// add_action('wp_footer', 'show_template'); // в подвале
function show_template(){
  global $template;
  echo $template;
}