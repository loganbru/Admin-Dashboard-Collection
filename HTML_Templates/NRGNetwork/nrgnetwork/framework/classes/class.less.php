<?php

class TTLess{

    private $directory = "themeton";

    function __construct(){
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'), 999);
    }

    public function enqueue_scripts(){
        global $post;
        $css_file = $this->create_css();
        wp_enqueue_style( 'themeton-stylesheet', $css_file );
    }


    // static methods
    public static function create_css_active_theme(){
        $instanse = new TTLess();
        $instanse->create_css();
    }

    public static function get_compiled_css(){
        $instanse = new TTLess();
        return $instanse->generate_css(true);
    }

    public static function get_less_variables(){
        $instanse = new TTLess();
        return $instanse->get_variables();
    }

    public static function build_css(){
        $instanse = new TTLess();
        return $instanse->regenerate_css();
    }

    public static function reset_css(){
        $instanse = new TTLess();
        return $instanse->rebuild_css();
    }


    public function get_css_uri(){
        $upload_dir = wp_upload_dir();
        $path = trailingslashit( $upload_dir['baseurl'] ) . $this->directory;
        return trailingslashit($path).wp_get_theme()->template.'.css';
    }

    // create css from less
    public function create_css(){
        $dir_path = $this->create_directory();
        if( $dir_path!==false ){
            $css_file = trailingslashit($dir_path) . wp_get_theme()->template . '.css';
            if( is_user_logged_in() && !file_exists($css_file) ){
                $css_content = $this->generate_css();
                TT::fs_put_contents($css_file, $css_content);
            }
            return $this->get_css_uri();
        }
        return false;
    }

    // build less
    public function regenerate_css(){
        $dir_path = $this->create_directory();
        if( $dir_path!==false ){
            $css_file = trailingslashit($dir_path) . wp_get_theme()->template . '.css';
            $css_content = $this->generate_css(true);
            TT::fs_put_contents($css_file, $css_content);
            return $css_file;
        }
        return false;
    }

    // reset css less
    public function rebuild_css(){
        $dir_path = $this->create_directory();
        if( $dir_path!==false ){
            $css_file = trailingslashit($dir_path) . wp_get_theme()->template . '.css';
            $css_content = $this->generate_css();
            TT::fs_put_contents($css_file, $css_content);
            return $css_file;
        }
        return false;
    }



    // create directory in uploads
    public function create_directory(){
        $upload_dir = wp_upload_dir();
        if( wp_is_writable($upload_dir['basedir']) ){
            $path = trailingslashit($upload_dir['basedir']) . $this->directory . "/";
            if(! @is_dir($path)){
                if( wp_mkdir_p($path) ){
                    return $path;
                }
            }
            else{
                return $path;
            }
        }
        return false;
    }


    public function get_variables(){
        $less_variables = array();
        $variables = TT::fs_get_contents_array(get_template_directory() . "/less/variables.less");
        foreach ($variables as $str) {
            $line = trim($str . '');
            if( substr($line, 0, 2)!="//" && strlen($line)>3 && substr($line, 0, 1)=="@" ){
                $splits = explode(':', $line);
                $variable = trim( str_replace('@', '', $splits[0]) );
                $value = trim($splits[1]);
                if( strpos($value, '//')!==false ){
                    $pos = explode('//', $value);
                    $value = trim($pos[0]);
                }
                $value = str_replace(';', '', $value);
                $value = str_replace('"', '', $value);
                $value = str_replace("'", "", $value);

                $less_variables[$variable] = $value;
            }
        }

        return $less_variables;
    }



    public function generate_css( $modify_vars=false ){
        require_once( get_template_directory() . "/framework/classes/lib.lessc.inc.php");
        $css = '';
        try{
            $theme_dir = trailingslashit( get_template_directory() );
            $parser = new Less_Parser();
            $parser->parseFile( TT::file_require($theme_dir . 'less/style.less'), trailingslashit(get_template_directory_uri()) );

            if($modify_vars){
                $modified_vars = array();
                $variables = $this->get_variables();
                foreach ($variables as $key => $value) {
                    $mod_value = TT::get_mod($key);
                    if( strpos($mod_value, "darken(")!==false && strpos($mod_value, "%")===false )
                        $mod_value .= "%)";
                    if( !empty($mod_value) && $mod_value!=$value && $mod_value!='default' ){
                        $mod_value = trim($mod_value);
                        $modified_vars = array_merge( $modified_vars, array( $key=>$mod_value ) );
                    }
                }

                // change fonts
                $controls = get_customizer_controls();
                $font_controls = array();
                foreach ($controls as $control) {
                    if( isset($control['type']) && $control['type']=='font_set' ){
                        $v = TT::get_mod( $control['id'], $control['default'] );
                        $vals = TT::get_option_array($v);
                        foreach ($vals as $key => $value) {
                            $font_controls[$key] = $value;
                        }
                    }
                }
                foreach ($font_controls as $key => $value) {
                    if( isset($variables[$key]) && !empty($value) && $variables[$key]!=$value )
                        $modified_vars = array_merge( $modified_vars, array( $key=>$value ) );
                }
                
                if( !empty($modified_vars) )
                    $parser->ModifyVars($modified_vars);
            }

            $css = $parser->getCss();

            $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
            $css = str_replace(': ', ':', $css);
            $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);

        }
        catch(Exception $e){
            // wp_die( $e->getMessage() );
        }

        return $css;
    }

}

new TTLess();