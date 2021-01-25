<?php

global $nrgnetwork_social_icons;
$nrgnetwork_social_icons = array(
    "facebook" => "facebook",
    "twitter" => "twitter",
    "pinterest" => "pinterest",
    "instagram" => "instagram",
    "googleplus" => "google-plus",
    "dribbble" => "dribbble",
    "skype" => "skype",
    "wordpress" => "wordpress",
    "vimeo" => "vimeo-square",
    "flickr" => "flickr",
    "linkedin" => "linkedin",
    "youtube" => "youtube",
    "tumblr" => "tumblr",
    "link" => "link",
    "stumbleupon" => "stumbleupon",
    "delicious" => "delicious",
);


add_action('admin_enqueue_scripts', 'tt_admin_common_render_scripts');
function tt_admin_common_render_scripts() {
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_style('themeton-admin-common-style', TT::file_require(get_template_directory_uri().'/framework/admin-assets/common.css', true) );

    wp_enqueue_script('wp-color-picker');
    
    wp_enqueue_script('themeton-admin-common-js', TT::file_require(get_template_directory_uri().'/framework/admin-assets/common.js', true), array('jquery'), false, true);
}



function tt_add_video_radio($embed) {
    if (strstr($embed, 'http://www.youtube.com/embed/')) {
        return str_replace('?fs=1', '?fs=1&rel=0', $embed);
    } else {
        return $embed;
    }
}

add_filter('oembed_result', 'tt_add_video_radio', 1, true);

if (!function_exists('custom_upload_mimes')) {
    add_filter('upload_mimes', 'custom_upload_mimes');

    function custom_upload_mimes($existing_mimes = array()) {
        $existing_mimes['ico'] = "image/x-icon";
        return $existing_mimes;
    }

}


if (!function_exists('format_class')) {

    // Returns post format class by string
    function format_class($post_id) {
        $format = get_post_format($post_id);
        if ($format === false)
            $format = 'standard';
        return 'format_' . $format;
    }
}





/**
 * This code filters the Categories archive widget to include the post count inside the link
 */
add_filter('wp_list_categories', 'tt_cat_count_span');

function tt_cat_count_span($links) {
    $links = str_replace('</a> (', ' <span>', $links);
    $links = str_replace('<span class="count">(', '<span>', $links);
    $links = str_replace(')', '</span></a>', $links);
    if(strpos($links, '<span>') !== false ) { 
        $links = str_replace('<a ', '<a class="has-count" ', $links);
    }
    return $links;
}

/**
 * This code filters the Archive widget to include the post count inside the link
 */
add_filter('get_archives_link', 'tt_archive_count_span');

function tt_archive_count_span($links) {
    $links = str_replace('</a>&nbsp;(', ' <span>', $links);
    $links = str_replace(')</li>', '</span></a></li>', $links);
    if(strpos($links, '<span>') !== false ) { 
        $links = str_replace('<a ', '<a class="has-count" ', $links);
    }
    return $links;
}





// ADDING ADMIN BAR MENU
if (!function_exists('tt_admin_bar_menu')) {
    add_action('admin_bar_menu', 'tt_admin_bar_menu', 90);

    function tt_admin_bar_menu() {

        if (!current_user_can('manage_options'))
            return;

        global $wp_admin_bar;

        $admin_url = admin_url('admin.php');

        $customizer = array(
            'id' => 'demo-data-importer',
            'title' => esc_html__('Import Demo', 'nrgnetwork'),
            'href' => admin_url() . "themes.php?page=themeton-demo-importer",
        );
        $wp_admin_bar->add_menu($customizer);
    }

}





/*
 * Random order
 * Preventing duplication of post on paged
 */

function tt_register_tt_session(){
    if( !session_id() ){
        session_start();
    }
}

if(!is_admin() && true) {

    function edit_posts_orderby($orderby_statement) {

        add_action('init', 'tt_register_tt_session');
        //add_filter('posts_orderby', 'edit_posts_orderby');

        if (isset($_SESSION['expiretime'])) {
            if ($_SESSION['expiretime'] < time()) {
                session_unset();
            }
        } else {
            $_SESSION['expiretime'] = time() + 300;
        }

        $seed = rand();
        if (isset($_SESSION['seed'])) {
            $seed = $_SESSION['seed'];
        } else {
            $_SESSION['seed'] = $seed;
        }
        $orderby_statement = 'RAND(' . $seed . ')';
        return $orderby_statement;
    }
}







/*
    Post Like Event
    =================================
*/
add_action('wp_ajax_blox_post_like', 'blox_post_like_hook');
add_action('wp_ajax_nopriv_blox_post_like', 'blox_post_like_hook');
function blox_post_like_hook() {
    try {
        $post_id = (int)$_POST['post_id'];
        $count = (int)TT::getmeta('post_like', $post_id);
        if( $post_id>0 ){
            TT::setmeta($post_id, 'post_like', $count+1);
        }
        echo "1";
    } catch (Exception $e) {
        echo "-1";
    }
    exit;
}

function blox_post_liked($post_id){
    $cookie_id = '';
    if( isset($_COOKIE['liked']) ){
        $cookie_id = $_COOKIE['liked'];
        $ids = explode(',', $cookie_id);
        foreach ($ids as $value) {
            if( $value+'' == $post_id+'' ){
                return 'liked';
            }
        }
    }
    return '';
}


function tt_get_post_like($post_id){
    return '<a href="javascript:;" data-pid="'. $post_id .'" class="'. blox_post_liked($post_id) .'"><i class="fa fa-heart"></i> <span>'. (int)TT::getmeta('post_like', $post_id) .'</span></a>';
}