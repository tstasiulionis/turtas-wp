<?php
/**
 * Turtas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Turtas
 */

if ( ! function_exists( 'turtas_web_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function turtas_web_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Turtas, use a find and replace
		 * to change 'turtas-web' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'turtas-web', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'turtas-web' ),
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
		add_theme_support( 'custom-background', apply_filters( 'turtas_web_custom_background_args', array(
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
add_action( 'after_setup_theme', 'turtas_web_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function turtas_web_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'turtas_web_content_width', 640 );
}
add_action( 'after_setup_theme', 'turtas_web_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function turtas_web_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'turtas-web' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'turtas-web' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'turtas_web_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function turtas_web_scripts() {
	wp_enqueue_style( 'turtas-web-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.css',false,'1.1','all');

	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/vendor/animate/animate.css',false,'1.1','all');

	wp_enqueue_style( 'turtas-style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');

	wp_enqueue_style( 'turtas-style-responsive', get_template_directory_uri() . '/css/style-responsive.css',false,'1.1','all');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', 1.1, true);

	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.bundle.min.js', 1.1, true);

	wp_enqueue_script( 'turtas-script', get_template_directory_uri() . '/js/script.js', array(), 1.1, true);

	wp_enqueue_script( 'turtas-web-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'turtas-web-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'turtas_web_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function turtasweb_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.

	$wp_customize->add_section( 'turtas_tab_text' , array(
		'title' => __( 'Home Tab Text' ),
		'priority' => 305, // Before Widgets.
	) );

	$wp_customize->add_section( 'turtas_about' , array(
		'title' => __( 'About Page' ),
		'priority' => 305, // Before Widgets.
	) );

	$wp_customize->add_section( 'turtas_footer' , array(
		'title' => __( 'Footer' ),
		'priority' => 305, // Before Widgets.
	) );
	
	$wp_customize->add_setting( 'tab_head1_setting', array(
		'default' => 'Apie projektą',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'tab_head1_setting',
        array(
            'label'      => __( 'Tab Header 1', 'turtas' ),
            'section'    => 'turtas_tab_text',
            'settings'   => 'tab_head1_setting'
        )
		)
	);

	$wp_customize->add_setting( 'tab_text1_setting', array(
		'default' => 'Apie projektą. Lorem ipsum dolor sit amet, nec stet congue ea, his nullam primis doctus id, ut quot ceteros sed. Eu mel nobis munere accommodare. Labitur facilisi sapientem est te. Nam id alterum mentitum. Ad vix purto altera. Ius no populo mollis tacimates. Ne has nostrud ponderum, eu propriae cotidieque mea. Soleat hendrerit voluptatibus eu vix, usu ignota verear quaerendum id. Eum agam quas salutatus cu, eos mazim tation deserunt an. An pertinax perpetua pro, qui elit probo in. An pri veri definitionem vituperatoribus, et quando option facilisi mei. In eos veniam quodsi appareat, doctus reprehendunt pri ea.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'tab_text1_setting',
        array(
						'type' => 'textarea',
            'label'      => __( 'Tab Text 1', 'turtas' ),
            'section'    => 'turtas_tab_text',
            'settings'   => 'tab_text1_setting',
						'input_attrs' => array(
							'style' => 'height: 150px',
						),
        )
		)
	);

	$wp_customize->add_setting( 'tab_head2_setting', array(
		'default' => 'Kas mes',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'tab_head2_setting',
        array(
            'label'      => __( 'Tab Header 2', 'turtas' ),
            'section'    => 'turtas_tab_text',
            'settings'   => 'tab_head2_setting'
        )
		)
	);
	

	$wp_customize->add_setting( 'tab_text2_setting', array(
		'default' => 'Kas mes. Lorem ipsum dolor sit amet, nec stet congue ea, his nullam primis doctus id, ut quot ceteros sed. Eu mel nobis munere accommodare. Labitur facilisi sapientem est te. Nam id alterum mentitum. Ad vix purto altera. Ius no populo mollis tacimates. Ne has nostrud ponderum, eu propriae cotidieque mea. Soleat hendrerit voluptatibus eu vix, usu ignota verear quaerendum id. Eum agam quas salutatus cu, eos mazim tation deserunt an. An pertinax perpetua pro, qui elit probo in. An pri veri definitionem vituperatoribus, et quando option facilisi mei. In eos veniam quodsi appareat, doctus reprehendunt pri ea.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'tab_text2_setting',
        array(
						'type' => 'textarea',
            'label'      => __( 'Tab Text 2', 'turtas' ),
            'section'    => 'turtas_tab_text',
            'settings'   => 'tab_text2_setting',
						'input_attrs' => array(
							'style' => 'height: 150px',
						),
        )
		)
	);

	$wp_customize->add_setting( 'tab_head3_setting', array(
		'default' => 'Tikslai',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'tab_head3_setting',
        array(
            'label'      => __( 'Tab Header 3', 'turtas' ),
            'section'    => 'turtas_tab_text',
            'settings'   => 'tab_head3_setting'
        )
		)
	);

	$wp_customize->add_setting( 'tab_text3_setting', array(
		'default' => 'Tikslai. Lorem ipsum dolor sit amet, nec stet congue ea, his nullam primis doctus id, ut quot ceteros sed. Eu mel nobis munere accommodare. Labitur facilisi sapientem est te. Nam id alterum mentitum. Ad vix purto altera. Ius no populo mollis tacimates. Ne has nostrud ponderum, eu propriae cotidieque mea. Soleat hendrerit voluptatibus eu vix, usu ignota verear quaerendum id. Eum agam quas salutatus cu, eos mazim tation deserunt an. An pertinax perpetua pro, qui elit probo in. An pri veri definitionem vituperatoribus, et quando option facilisi mei. In eos veniam quodsi appareat, doctus reprehendunt pri ea.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'tab_text3_setting',
        array(
						'type' => 'textarea',
            'label'      => __( 'Tab Text 3', 'turtas' ),
            'section'    => 'turtas_tab_text',
            'settings'   => 'tab_text3_setting',
						'input_attrs' => array(
							'style' => 'height: 150px',
						),
        )
		)
	);

	// About Settings

	$wp_customize->add_setting( 'about_head_setting', array(
		'default' => 'ABOUT TURTAS.INFO PROJECT',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_head_setting',
        array(
						'type' => 'textarea',
            'label'      => __( 'Heading', 'turtas' ),
            'section'    => 'turtas_about',
            'settings'   => 'about_head_setting',
						'input_attrs' => array(
							'style' => 'height: 50px',
						),
        )
		)
	);

	$wp_customize->add_setting( 'about_text_setting', array(
		'default' => 'Sužinokite PERKAMO, PARDUODAMO, NUOMOJAMO turto kainą, gaukite naudingų patarimų ir rekomendacijų. Lorem ipsum dolor sit amet, in laoreet quaerendum cotidieque est, ex legere forensibus eam. Ipsum iriure voluptatum ad cum, vim in unum probatus voluptatibus. Mel an tantas epicuri, vix ne eros adversarium, soleat tibique duo at. Sed te choro affert comprehensam, cu putent audiam eos. Vix ea doming labores volumus, his te quando dolores. Cu movet vocent mea.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'about_text_setting',
        array(
						'type' => 'textarea',
            'label'      => __( 'Text', 'turtas' ),
            'section'    => 'turtas_about',
            'settings'   => 'about_text_setting',
						'input_attrs' => array(
							'style' => 'height: 150px',
						),
        )
		)
	);

	// Footer settings

	$wp_customize->add_setting( 'footer_phone_setting', array(
		'default' => '8 688 88888',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_phone_setting',
        array(
            'label'      => __( 'Phone', 'turtas' ),
            'section'    => 'turtas_footer',
            'settings'   => 'footer_phone_setting'
        )
		)
	);

	$wp_customize->add_setting( 'footer_email_setting', array(
		'default' => 'info@turtas.info',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_email_setting',
        array(
            'label'      => __( 'Email', 'turtas' ),
            'section'    => 'turtas_footer',
            'settings'   => 'footer_email_setting'
        )
		)
	);

	$wp_customize->add_setting( 'footer_address_setting', array(
		'default' => 'Miestas, Gatve, Nr. 007',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_address_setting',
        array(
            'label'      => __( 'Address', 'turtas' ),
            'section'    => 'turtas_footer',
            'settings'   => 'footer_address_setting'
        )
		)
	);

	$wp_customize->add_setting( 'footer_facebook_setting', array(
		'default' => '#',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_facebook_setting',
        array(
            'label'      => __( 'Facebook link', 'turtas' ),
            'section'    => 'turtas_footer',
            'settings'   => 'footer_facebook_setting'
        )
		)
	);

	$wp_customize->add_setting( 'footer_linkedin_setting', array(
		'default' => '#',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_linkedin_setting',
        array(
            'label'      => __( 'Linkedin link', 'turtas' ),
            'section'    => 'turtas_footer',
            'settings'   => 'footer_linkedin_setting'
        )
		)
	);

	$wp_customize->add_setting( 'footer_instagram_setting', array(
		'default' => '#',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_instagram_setting',
        array(
            'label'      => __( 'Instagram link', 'turtas' ),
            'section'    => 'turtas_footer',
            'settings'   => 'footer_instagram_setting'
        )
		)
	);

	$wp_customize->add_setting( 'footer_youtube_setting', array(
		'default' => '#',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_youtube_setting',
        array(
            'label'      => __( 'Youtube link', 'turtas' ),
            'section'    => 'turtas_footer',
            'settings'   => 'footer_youtube_setting'
        )
		)
	);

}
add_action( 'customize_register', 'turtasweb_customize_register' );

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



function register_my_dynamic_menus() {
	$categories = get_categories(array("hide_empty" => 0));
	$cat_arr = [];
	$menu_arr = [];
	foreach($categories as $category) {
		
		if (strpos($category->name, 'nav') !== false) {
			array_push($cat_arr, $category->name);
		}
	}

	foreach($cat_arr as $category) {
		$menu_arr[$category] = $category;
	}
	
  register_nav_menus(
	
    $menu_arr
   );
 }
 add_action( 'init', 'register_my_dynamic_menus' );

// var_dump($menu_arr);
// die;