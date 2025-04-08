<?php
/**
 * numerus2.0.0 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package numerus2.0.0
 */

if (!defined('_S_VERSION')) {
    // Reemplazar el número de versión del tema en cada versión.
    define('_S_VERSION', '1.0.9');
}

if (!defined('_NAME_THEME')) {
    define('_NAME_THEME', 'Numerus');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function numerus2_0_0_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on numerus2.0.0, use a find and replace
		* to change 'numerus2-0-0' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'numerus2-0-0', get_template_directory() . '/languages' );

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
	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	//Default WordPress
	the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
	the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
	the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
	the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
	the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)
 
	/* Thumbnail slider home */
	add_image_size('slider', 1920, 768, true);
	add_image_size('thumb-category', 400, 400, true);
	add_image_size('thumb-single',600,600, true);
	add_image_size('thumb-full', 1024, 768, true);
	add_image_size('thumb-search', 80, 80, true);
	add_image_size('thumb-clients', 236, 236, true);

	add_image_size('thumb-author',80, 80, true);
	add_image_size('thumb-book', 247, 372, true);
	add_image_size('thumb_sidebar', 80, 80, true); 

	add_image_size('thumb-news-category', 563, 312, true);
	add_image_size('thumb-autor-category', 280, 300, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'numerus2-0-0' ),
		)
	);

	/**
	 * Register Custom Navigation Walker
	 */
	if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
		// File does not exist... return an error.
		return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
		// File exists... require it.
		require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
	}

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
			'numerus2_0_0_custom_background_args',
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
			'height'      => 186.812,
			'width'       => 25,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'numerus2_0_0_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function numerus2_0_0_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'numerus2_0_0_content_width', 640 );
}
add_action( 'after_setup_theme', 'numerus2_0_0_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function numerus2_0_0_widgets_init() {
	 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', _NAME_THEME ),
			'id'            => 'sidebar-category',
			'description'   => esc_html__( 'Add widgets here.',_NAME_THEME ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Widget Footer left', _NAME_THEME),
			'id'            => 'widget-left',
			'description'   => esc_html__( 'Add widgets here.', _NAME_THEME ),
			'before_widget' => '<div id="%1$s" class="footer-left %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title-footer">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Widget Footer left center', _NAME_THEME ),
			'id'            => 'widget-left-center',
			'description'   => esc_html__( 'Add widgets here.', _NAME_THEME ),
			'before_widget' => '<div id="%1$s" class="footer-center %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title-footer">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Widget Footer center right',_NAME_THEME ),
			'id'            => 'widget-center-right',
			'description'   => esc_html__( 'Add widgets here.', _NAME_THEME ),
			'before_widget' => '<div id="%1$s" class="footer-center %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title-footer">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Widget Footer right', _NAME_THEME ),
			'id'            => 'widget-right',
			'description'   => esc_html__( 'Add widgets here.', _NAME_THEME ),
			'before_widget' => '<div id="%1$s" class="footer-center %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title-footer">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Widget menu', _NAME_THEME ),
			'id'            => 'widget-menu',
			'description'   => esc_html__( 'Add widgets here.',_NAME_THEME ),
			'before_widget' => '<div id="%1$s" class="wrapp-widget-menu %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title-widget">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'numerus2_0_0_widgets_init' );


/**
 * Enqueue styles.
 * @since numerus 1.0.0
 * Bootstrap 5.2.3, Font Awesome 4.7, ionicons, Animate 4.1, slick, OwlCarousel
 */
function numerus_styles() {
	wp_enqueue_style( 'numerus2-0-0-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'numerus2-0-0-style', 'rtl', 'replace' );

	 
	// URL del CDN de Bootstrap
	$cdn_url = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css';

	// Verificar si el CDN está disponible
	$cdn_response = wp_remote_get( $cdn_url );

	if ( ! is_wp_error( $cdn_response ) && wp_remote_retrieve_response_code( $cdn_response ) === 200 ) {
			// El CDN está disponible, cargar Bootstrap desde el CDN
			//wp_enqueue_style( 'bootstrap5.3.3', $cdn_url );
			wp_register_style( 'bootstrap5.3.3', $cdn_url, array(), '5.3.3', 'all');
			wp_enqueue_style( 'bootstrap5.3.3' );
	} else {
			// El CDN no está disponible, cargar Bootstrap desde local
			wp_register_style( 'bootstrap5.3.3', get_template_directory_uri() . '/assets/lib/bootstrap/5.3.3/bootstrap.min.css', array(), '5.3.3', 'all');
			wp_enqueue_style( 'bootstrap5.3.3' );
	}
 

	/*
	*@Bootstrap css
	*@path: '/assets/lib/bootstrap/5.2.3/bootstrap.min.css' | @cdn: https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
	*@path: '/assets/lib/bootstrap/5.3.3/bootstrap.min.css' | @cdn: https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
	*
	**/
	/* wp_register_style( 'bootstrap5.3.3', get_template_directory_uri() . '/assets/lib/bootstrap/5.3.3/bootstrap.min.css', array(), '5.3.3', 'all');
	wp_enqueue_style( 'bootstrap5.3.3' ); */

	/*
	*@Numerus icons CSS
	**/
	wp_register_style('numerus-icons', get_template_directory_uri() . '/assets/icons/style.css', NULL, '1.1.0', 'all');
	wp_enqueue_style('numerus-icons');

	/*
	*@Bootstrap icons CSS
	**/	 
	wp_register_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.1', 'all');
	wp_enqueue_style('bootstrap-icons');

	/*
	*@Boxicons icons CSS
	**/	 
	wp_register_style('boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4', 'all');
	wp_enqueue_style('boxicons');

	/*
	*@Lineicons icons CSS
	**/	 
	wp_register_style('lineicons', 'https://cdn.lineicons.com/4.0/lineicons.css', array(), '4.0.0', 'all');
	wp_enqueue_style('lineicons');

	/*
	*@Fontawesome-5.15.4 CSS
	**/	 
 wp_register_style('fontawesome-5.15.4', get_template_directory_uri() . '/assets/lib/fontawesome-5.15.4/css/fontawesome.min.css', array(), '4.0.0', 'all');
	wp_enqueue_style('fontawesome-5.15.4'); 

	if ( is_page( array( 'contabilidad','remuneraciones','nosotros','software-de-remuneraciones-para-colegios','software-de-contabilidad-para-colegios') ) ) {
	/*
	*@Owl carousel css
	**/
	 wp_register_style('OwlCarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/dist/assets/owl.carousel.min.css',  NULL, '2.3.4', 'all');
	wp_enqueue_style( 'OwlCarousel');

	wp_register_style('OwlCarouseldefault', get_template_directory_uri() . '/assets/lib/owlcarousel/dist/assets/owl.theme.default.min.css',  NULL, '2.3.4', 'all');
	wp_enqueue_style( 'OwlCarouseldefault'); 
	} 	
	 
	/*
	*@AOS CSS
	**/	 
	wp_register_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');
	wp_enqueue_style('aos');
	 
	

	if ( is_singular() && is_category()) {
	/* 
	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
	https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css
	https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css
	https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css
	*/
	}

	/*
	*@Numerus theme CSS
	**/
	wp_register_style('main-theme', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('main-theme');

}
add_action('wp_enqueue_scripts', 'numerus_styles');

/**
 * Enqueue script.
 * @since numerus 1.0.0
 * jQuery, Popper JS, Bootstrap 4.6.1, Migrate, custom js
 */
function numerus_scripts() {
	/*
	*@Script Jquey
	**/
	wp_register_script('Jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js', NULL, '3.7.1', TRUE);
	wp_enqueue_script('Jquery');

	/*
	*@Script Migrate JS
	**/
	wp_register_script('migrate_js', 'https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js', NULL, '3.4.1', TRUE);
	wp_enqueue_script('migrate_js');

	/*
	*@Script BundleJS
	**/
	wp_register_script('popperjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', NULL, '2.11.6', TRUE); 
	wp_enqueue_script('popperjs'); 
	/*
	*@Bootstrap js
	*@path: '/assets/lib/bootstrap/5.2.3/bootstrap.bundle.min.js' | @cdn: https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
	*@path: '/assets/lib/bootstrap/5.3.3/bootstrap.bundle.min.js' | @cdn: https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
	*
	**/

	wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/lib/bootstrap/5.3.3/bootstrap.bundle.min.js', NULL, '5.3.3', TRUE); 
	wp_enqueue_script('bootstrapjs');

	/*
	*@Script aos JS
	**/
	wp_register_script('aos_js',  get_template_directory_uri() . '/assets/lib/aos/aos.js', NULL, '2.3.1', TRUE);
	wp_enqueue_script('aos_js');

	if ( is_singular() && is_category()) {}

	if ( is_front_page()) {	
	/*
	*@Script purecounter.js
	ttps://cdn.jsdelivr.net/npm/purecounterjs@1.0.1/dist/purecounter.min.js
	https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js
	**/	
	wp_register_script( 'purecounter', 'https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js', array(), '1.5.0', TRUE );
	wp_enqueue_script( 'purecounter');

	wp_register_script( 'progressbar-counter', get_template_directory_uri() .  '/assets/js/progressbar-counter.js', array(), _S_VERSION, TRUE );
	wp_enqueue_script( 'progressbar-counter');
	}
	wp_register_script('scroll-effect', get_template_directory_uri() . '/assets/js/scroll-effect.js', array(), _S_VERSION, true);
	wp_enqueue_script('scroll-effect');

	/* 
			cdn: https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js?ver=1.4.10
			https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js
			https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.js
			get_template_directory_uri() . '/assets/lib/SmoothScroll/smoothscroll.min.js'
		*/
 		// wp_register_script('smoothScroll', get_template_directory_uri() . '/assets/lib/SmoothScroll/smoothscroll.js', NULL, '1.4.10', TRUE); 
		// wp_enqueue_script('smoothScroll'); 
	/*
	*@Script typed.js
	* cdn: 'https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js'
	**/
	wp_register_script( 'typed', get_template_directory_uri() . '/assets/lib/typed/typed.umd.js', array(), '2.1.0', TRUE );
	wp_enqueue_script( 'typed');

	if (is_category(array('newsroom', 'noticias'))) {

		wp_register_script('imagesloaded','https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js', array(), '5.0.0', true);
		wp_enqueue_script( 'imagesloaded');
		/*
		*@Script Masonrry JS
		**/
		wp_register_script('masonry','https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '4.0.0', true);
		wp_enqueue_script( 'masonry');

		wp_register_script('sweetalert','https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), '2.1.1', true);
		wp_enqueue_script( 'sweetalert');
	}

	if ( is_page( array( 'contabilidad', 'remuneraciones','nosotros','software-de-remuneraciones-para-colegios','software-de-contabilidad-para-colegios') ) ) {
	/*
	*@Owl carousel JS
	**/
		wp_register_script('OwlCarousel_js', get_template_directory_uri() . '/assets/lib/owlcarousel/dist/owl.carousel.min.js', array(), '2.3.4', true);
			wp_enqueue_script( 'OwlCarousel_js');
		
		wp_register_script('carousel_js', get_template_directory_uri() . '/assets/js/carousel.js', array(), _S_VERSION, true);
		wp_enqueue_script('carousel_js');		
	} 	
	 
	
	/*
	*@Script custom.js
	**/
	wp_register_script( 'numerus-custom', get_template_directory_uri() . '/assets/js/main.js', array(), '2024.08.08', true );
	wp_enqueue_script( 'numerus-custom' ); 

	wp_register_script( 'navigation', get_template_directory_uri() . '/assets/js/navbar.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'navigation');
}
add_action( 'wp_enqueue_scripts', 'numerus_scripts' );

/**
 * Customizer login wordpress.
 */
require get_template_directory() . '/inc/custom-login.php';

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
 * Customizer Utilies.
 */
//require get_template_directory() . '/inc/utils.php';
/**
 * Customizer control text excerpt y content.
 */
require get_template_directory() . '/inc/control-text.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-shortcode.php';

 


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action ("wp_head", "wp_generator");

// Add script to disable ScrollSpy and capture scroll restoration
add_action('wp_footer', 'disable_scroll_reset');
function disable_scroll_reset() {
    ?>
    <script>
    // Disable Bootstrap ScrollSpy which can cause scroll reset
    window.addEventListener('load', function() {
        // Force history scrollRestoration to auto
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'auto';
        }
        
        // Override any ScrollSpy initialization
        if (typeof window.jQuery !== 'undefined') {
            if (typeof window.jQuery.fn.scrollspy !== 'undefined') {
                window.jQuery.fn.scrollspy = function() { return this; };
            }
        }
        
        // Force window scroll position to be remembered
        let scrollPos = sessionStorage.getItem('scrollPos');
        if (scrollPos) {
            window.scrollTo(0, parseInt(scrollPos));
        }
        
        window.addEventListener('beforeunload', function() {
            sessionStorage.setItem('scrollPos', window.pageYOffset);
        });
    });
    </script>
    <?php
}
