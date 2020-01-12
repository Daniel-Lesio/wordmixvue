<?php


if ( ! function_exists( 'numer23_setup' ) ) :
	
	function numer23_setup() {
		load_theme_textdomain( 'numer23', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'numer23' ),
		) );

		
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'numer23_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'numer23_setup' );
function services_post_thype(){
	register_post_type( 'services',array(
		'rewrite'=>array('slug'=>'services'),
		"labels"=>array(
			'name'=>'Projects',
			'singular_name'=>'Project',
			'add_new_item'=>'Add New Project',
			'edit_item'=>'Edit Project',
			'show_in_nav_menus'=>true,
			'show_in_rest' =>true,
		),
		'menu_icon'=>'dashicons-chart-pie',
		"public"=> true,
		'has_archive'=>true,
		'supports'=>array(
			'title','thumbnail','excerpt','comment'
		)
	) 
);
}
add_action( 'init','services_post_thype' );	
function numer23_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'numer23_content_width', 640 );
}
add_action( 'after_setup_theme', 'numer23_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function numer23_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'numer23' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'numer23' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'numer23_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function numer23_scripts() {
	wp_enqueue_style( 'style',get_stylesheet_uri(),NULL,microtime());
	wp_enqueue_script('vue', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js', [], '2.5.17');

	wp_enqueue_script( 'main', get_theme_file_uri('./dist/js/app.js' ),NULL,microtime(),true );
	wp_enqueue_style( 'bundle',get_theme_file_uri( './dist/css/app.css' ),NULL,microtime() );
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display|Space+Mono|Stint+Ultra+Expanded&display=swap', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'numer23_scripts' );

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

