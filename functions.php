<?php
/**
 * Deven Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Deven_Blog
 */

if ( ! function_exists( 'deven_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function deven_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Deven Blog, use a find and replace
		 * to change 'deven-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'deven-blog', get_template_directory() . '/languages' );

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
		// set_post_thumbnail_size( 960, 560, array( 'center', 'center')  );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-main' => esc_html__( 'Primary', 'deven-blog' ),
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
		add_theme_support( 'custom-background', apply_filters( 'deven_blog_custom_background_args', array(
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
add_action( 'after_setup_theme', 'deven_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deven_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deven_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'deven_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deven_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deven-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deven-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'deven_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deven_blog_scripts() {
	wp_enqueue_style( 'deven-blog-style', get_stylesheet_uri() );
	wp_enqueue_style( 'deven-blog-style-highlight', get_template_directory_uri() . '/css/highlight/monokai-sublime.css' );
	wp_enqueue_style( 'deven-blog-style-fullPage', get_template_directory_uri() . '/css/jquery.fullPage.css' );

	wp_enqueue_script( 'deven-blog-materialize', get_template_directory_uri() . '/js/materialize.js', array(), '20151215', true );
	wp_enqueue_script( 'deven-blog-fullpage', get_template_directory_uri() . '/js/jquery.fullpage.js', array(), '20151215', true );
	wp_enqueue_script( 'deven-blog-highlight', get_template_directory_uri() . '/js/highlight.pack.js', array(), '20151215', true );
	wp_enqueue_script( 'deven-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'deven-blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'deven-blog-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deven_blog_scripts' );

/**
 * Primer post con otro estilo
*/
add_filter( 'post_class', 'wps_first_post_class' );

function wps_first_post_class( $classes ) {
	global $wp_query;
	if( 0 == $wp_query->current_post ){
		$classes[] = 'col m12';
		return $classes;
	}else{
		$classes[] = 'col m6';
		return $classes;
	}
}

/**
 * Pagination
*/
function deven_blog_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
     	echo "<div class='card-panel white'>";
		echo "<ul class='pagination'>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='waves-effect'><a href='".get_pagenum_link(1)."'><i class='material-icons'>chevron_left</i></a></li>";
		if($paged > 1 && $showitems < $pages) echo "<li class='waves-effect'><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

		for ($i=1; $i <= $pages; $i++)
		{
		 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		 {
		     echo ($paged == $i)? "<li class='active'><a href='#!'>".$i."</a></li>":"<li class='waves-effect'><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
		 }
		}

		if ($paged < $pages && $showitems < $pages) echo "<li class='waves-effect'><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='waves-effect'><a href='".get_pagenum_link($pages)."'><i class='material-icons'>chevron_right</i></a></li>";
		echo "</ul>";
		echo "</div>";
     }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Menu.
 */
require get_template_directory() . '/inc/custom-menu.php';

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
