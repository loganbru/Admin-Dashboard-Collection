<?php

global $tt_google_fonts;

class ThemetonStd{


    public static function clear_xss($value){
        return preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $value);
    }

    // Get meta field value from post
    public static function getmeta($meta, $post_id = NULL) {
        global $post;
        $result = '';
        if ($post_id != NULL && (int) $post_id > 0) {
            $result = get_post_meta($post_id, '_' . $meta, true);
        } else if (isset($post->ID)) {
            $result = get_post_meta($post->ID, '_' . $meta, true);
        }
        if( is_array($result) )
            return '';
        if( is_bool($result) )
            return '';
        return $result;
    }

    
    // Set meta value for post
    public static function setmeta($post_id, $meta, $value){
        if(count(get_post_meta($post_id , '_'.$meta)) == 0){
            add_post_meta($post_id , '_'.$meta, trim($value), true);
        }
        else{
            update_post_meta($post_id , '_'.$meta, trim($value));
        }
    }

    // Get Theme mod value
    public static function get_mod($name, $default = false){
        global $post;
        $mod_value = get_theme_mod( $name, $default );
        if( !$mod_value )
            return '';
        return !empty($mod_value) ? ThemetonStd::clear_xss($mod_value) : '';
    }
    

    public static function get_option_array($value){
        $result = array();
        if( !empty($value) ){
            $s_bos = explode("|", $value);
            $s_dot = explode(":", $s_bos[0]);
            if( count($s_dot)>1 ){
                foreach ($s_bos as $item) {
                    $s = explode(":", $item);
                    if( isset($s[0],$s[1]) )
                        $result[$s[0]] = $s[1];
                }
            }
            else{
                return $s_bos;
            }
        }
        return $result;
    }

    public static function get_option_bg($value){
        $result = array();
        if( empty($value) )
            return $result;
        $ex = explode("|", $value);
        if( count($ex)>3 ){
            $result['url'] = $ex[0];
            $result['repeat'] = $ex[1];
            $result['position'] = $ex[2];
            $result['attach'] = $ex[3];
        }
        return $result;
    }



    public static function get_option_bg_value($value){
        $bg = ThemetonStd::get_option_bg(ThemetonStd::get_mod($value));
        $result = ThemetonStd::extract_bg_values($bg);
        return $result;
    }



    public static function get_meta_bg_value($value){
        $val = ThemetonStd::getmeta($value);
        $val = str_replace("$", "|", $val);
        $bg = ThemetonStd::get_option_bg($val);
        $result = ThemetonStd::extract_bg_values($bg);
        return $result;
    }


    
    public static function extract_bg_values($bg){
        $result = '';
        if( !empty($bg) && !empty($bg['url']) ){
            $result .= "background-image:url(".$bg['url'].");";
            if( $bg['repeat']=="cover" )
                $result .= "background-size:cover; background-repeat:no-repeat;";
            else if( $bg['repeat']=="contain" )
                $result .= "background-size:contain; background-repeat:no-repeat;";
            else
                $result .= "background-repeat:".$bg['repeat'].";";
            $result .= "background-position:".$bg['position'].";";
            $result .= "background-attachment:".$bg['attach'].";";
        }
        return $result;
    }


    // Get admin post type for current page
    public static function admin_post_type(){
        global $post, $typenow, $current_screen;

        // Check to see if a post object exists
        if ($post && $post->post_type)
            return $post->post_type;

        // Check if the current type is set
        elseif ($typenow)
            return $typenow;

        // Check to see if the current screen is set
        elseif ($current_screen && $current_screen->post_type)
            return $current_screen->post_type;

        // Finally make a last ditch effort to check the URL query for type
        elseif (isset($_REQUEST['post_type']))
            return sanitize_key($_REQUEST['post_type']);
     
        return '-1';
    }


    public static function google_fonts(){
        global $tt_google_fonts;
        if( !empty($tt_google_fonts) )
            return $tt_google_fonts;
        
        include_once get_template_directory()."/framework/functions/google-fonts.php";
        $tt_google_fonts = get_google_webfonts();

        return $tt_google_fonts;
    }



    // Validate URL
    public static function validateURL($url){
        return filter_var($url, FILTER_VALIDATE_URL);

        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)){
            return false;
        }
        return true;
    }


    public static function create_slug($string){
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }


    // Get sliders for external sliders LayerSlider | Rev slider | Master slider
    public static function get_sliders($type){
        global $wpdb;
        $sliders = array();

        if( $type == 'layerslider' ){
            if( class_exists('LS_Sliders') ){
                $layer_sliders = LS_Sliders::find(array('data'=>false));
                foreach ($layer_sliders as $item) {
                    $sliders = array_merge($sliders, array("layerslider_" . $item['id'] => "LayerSlider - " . $item['name']));
                }
            }
        }
        else if( $type == 'revslider' ){
            if( class_exists('RevSlider') ){
                $revo = new RevSlider();
                $revo_sliders = $revo->getArrSlidersShort();
                foreach ($revo_sliders as $rev_id => $rev_title) {
                    $s = new RevSlider();
                    $s->initByID($rev_id);
                    $alias = $s->getAlias();
                    $sliders = array_merge($sliders, array("revslider_" . $alias => "Revolution Slider - " . $rev_title));
                }
            }
        }
        else if( $type == 'masterslider' ){
            if( function_exists('get_mastersliders') ){
                $master_sliders = get_mastersliders();
                foreach ($master_sliders as $slider) {
                    $sliders = array_merge($sliders, array("masterslider_" . $slider['ID'] => "Master Slider - " . $slider['title']));
                }
            }
        }
        return $sliders;
    }


    public static function file_require($file, $uri = false) {
        $file = str_replace("\\", "/", $file); // Replaces If the customer runs on Win machine. Otherway it doesn't perform
        if (is_child_theme()) {
            if (!$uri) {
                $dir = str_replace("\\", "/", get_template_directory());
                $replace = str_replace("\\", "/", get_stylesheet_directory());
                $file_exist = str_replace($dir, $replace, $file);
                $file = str_replace($replace, $dir, $file);
            } else {
                $dir = get_template_directory_uri();
                $replace = get_stylesheet_directory_uri();
                $file_exist = str_replace($dir, $replace, $file);

                $file_child_url = str_replace($dir, get_stylesheet_directory(), $file);
                if( file_exists($file_child_url) ){
                    return $file_exist;
                }
            }

            if( file_exists($file_exist) ){
                $file_child = str_replace($dir, $replace, $file);
                return $file_child;
            }
            return $file;

        } else {
            return $file;
        }
    }


    // File Get Content
    public static function fs_get_contents($path){
        
        $host = parse_url($path, PHP_URL_HOST);
        if( !empty( $host ) ){
            $remote_data = wp_remote_get( $path );
            $rdate = array_key_exists('body', $remote_data) ? $remote_data['body'] : '';
            return $rdate;
        }
        else{
            global $wp_filesystem;
            if( empty($wp_filesystem) ){
                require_once(ABSPATH . 'wp-admin/includes/file.php');
                WP_Filesystem();
            }
            
            $file_content = $wp_filesystem->get_contents( TT::file_require($path) );
            return $file_content;
        }

    }

    public static function fs_get_contents_array($path){
        $file_content = ThemetonStd::fs_get_contents($path);
        return explode("\n", $file_content );
    }


    // File Put Content
    public static function fs_put_contents($path, $content, $dir = false){
        global $wp_filesystem;
        if( empty($wp_filesystem) ){
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            WP_Filesystem();
        }

        if( $dir!==false && !empty($dir) ){
            $dir = trailingslashit($dir);
            $wp_filesystem->mkdir($dir);
            $path = $dir . $path;
        }

        return $wp_filesystem->put_contents( $path, $content, 0644);
    }


    public static function mkdir($dir){
        global $wp_filesystem;
        if( empty($wp_filesystem) ){
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            WP_Filesystem();
        }

        $dir = trailingslashit($dir);
        return $wp_filesystem->mkdir($dir);
    }



    
    // HEX to RGBA - blox_hex2rgba($color, 0.7);
    public static function hex2rgba($color, $opacity = false){

        $default = 'rgb(0,0,0)';

        //Return default if no color provided
        if (empty($color))
            return $default;

        //Sanitize $color if "#" is provided 
        if ($color[0] == '#') {
            $color = substr($color, 1);
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
            $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
        } elseif (strlen($color) == 3) {
            $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
        } else {
            return $default;
        }

        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if($opacity){
            if(abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(",",$rgb).')';
        }

        //Return rgb(a) color string
        return $output;
    }

}


class TT extends ThemetonStd { }