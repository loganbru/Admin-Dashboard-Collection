<?php

// get less value by name
global $less_variables;
$less_variables = array();
if( !function_exists('getLessValue') ){
    function getLessValue($name){
        global $less_variables;
        if( empty($less_variables) ){
            $less_variables = is_user_logged_in() ? TTLess::get_less_variables() : array();
        }

        if( isset($less_variables[$name]) ){
            $val = $less_variables[$name];
            $val = str_replace("'", "", $val);
            $val = str_replace('"', '', $val);
            return $val;
        }

        return '';
    }
}

// get customizer options
global $customizer_options;
function get_customizer_options(){
    global $customizer_options;
    if( !empty($customizer_options) )
        return $customizer_options;
    
    $customizer_options = tt_customizer_options();
    return $customizer_options;
}

function get_customizer_controls(){
    global $customizer_options;
    if( empty($customizer_options) )
        get_customizer_options();

    $controls = array();
    foreach ($customizer_options as $panel) {
        if( isset($panel['type']) && $panel['type']=="section" ){
            foreach ($panel['controls'] as $control){
                $controls [] = $control;
            }
        }
        else{
            foreach ($panel['sections'] as $section){
                foreach ($section['controls'] as $control){
                    $controls [] = $control;
                }
            }
        }
    }
    return $controls;
}

function sanitize_js_clean( $value ) {
    $value = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $value);
    return $value;
}

class TT_Theme_Customizer{
    private $items;
    private $index_panel = 101;
    private $index_section = 101;
    private $index_setting = 101;

    // init
    function __construct(){
        $this->items = get_customizer_options();

        add_action('customize_register', array($this, 'register_controls'));
        add_action('wp_head', array($this, 'generate_less'), 999);
        
        add_action('wp_head', array($this, 'enqueue_scripts'), 0);

        // Save Options
        add_action('customize_save_after', array($this, 'customize_save_after'));

        // Customizer Import Options
        add_action('wp_ajax_wp_customizer_import', array($this, 'wp_customizer_import'));
        add_action('wp_ajax_nopriv_wp_customizer_import', array($this, 'wp_customizer_import'));

        // Customizer Reset options
        add_action('wp_ajax_wp_customizer_reset', array($this, 'wp_customizer_reset'));
        add_action('wp_ajax_nopriv_wp_customizer_reset', array($this, 'wp_customizer_reset'));

        // Customizer scripts
        add_action( 'customize_controls_enqueue_scripts', array($this, 'customizer_enqueue') );

        add_action('customize_controls_print_footer_scripts', array($this, 'customize_controls_config_scripts'));
    }


    public function customizer_enqueue(){
        wp_enqueue_media();
        
        wp_enqueue_script('jquery-numeric', get_template_directory_uri() . '/framework/admin-assets/jquery.numeric.min.js', false, false, true);

        wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/framework/admin-assets/wp.customizer.css' );
        wp_enqueue_script('customize-script', get_template_directory_uri() . '/framework/admin-assets/wp.customizer.js', array('jquery'), false, true);
        if( isset($_REQUEST['url'],$_REQUEST['edit']) && !empty($_REQUEST['url']) && $_REQUEST['edit']=='page' ){
            wp_enqueue_script('customize-page-script', get_template_directory_uri() . '/framework/admin-assets/wp.customizer.page.js', false, false, true);
            
            $parts = parse_url($_REQUEST['url']);
            parse_str($parts['query'], $query);
            wp_localize_script('customize-page-script', 'page_customizer', array(
                "admin_ajax" => admin_url("admin-ajax.php"),
                "page_id" => $query['page_id']
            ));
        }
    }
    

    public function get_controls(){
        $controls = array();
        foreach ($this->items as $panel) {
            if( isset($panel['type']) && $panel['type']=="section" ){
                foreach ($panel['controls'] as $control){
                    $controls [] = $control;
                }
            }
            else{
                foreach ($panel['sections'] as $section){
                    foreach ($section['controls'] as $control){
                        $controls [] = $control;
                    }
                }
            }
        }
        return $controls;
    }


    public function enqueue_scripts(){
        global $post;
        $items = $this->get_controls();

        $protocol = is_ssl() ? 'https' : 'http';
        $fonts = TT::google_fonts();
        
        $webfonts = array();
        $websubsets = array();
        
        $font_obj = array();
        foreach($fonts as $key=>$current) {
            $family = trim($current['family']);
            $font_obj[$family] = $current;
        }

        
        foreach ($items as $control) {
            if( isset($control['type']) && ($control['type']=='font_set' || $control['type']=='font') ){

                $values = array();
                $option_val = TT::get_mod( $control['id'], $control['default'] );

                if( $control['type']=='font_set' )
                    $values = TT::get_option_array($option_val);
                else
                    $values = array( $control['id'] => $option_val );
                

                foreach ($values as $key_id => $value) {
                    if( !empty($value) && $value!='default' && strpos($value, "@")===false ){

                        $var = str_replace("'", '', trim($value));
                        $var = str_replace('"', '', $var);
                        $var = str_replace(' ', '-', $var);

                        $val = str_replace("'", '', trim($value));
                        $val = str_replace('"', '', $val);
                        $val = str_replace(' ', '+', $val);

                        $variants = '';

                        $font_exists = false;

                        if( isset($font_obj[trim($value)]) ){
                            $current = $font_obj[trim($value)];
                            $font_exists = true;
                            if( !empty($current) ){
                                $variants = implode(',',$current['variants']);

                                foreach ($current['subsets'] as $ss) {
                                    $websubsets = array_merge($websubsets, array($ss));
                                }
                            }
                        }

                        $fonty = $val . ":".$variants;
                        if( !empty($fonty) && $font_exists ){
                            $webfonts = array_merge( $webfonts, array($var=>$fonty) );
                        }
                    }
                    break;
                }
            }
        }

        if( !empty($webfonts) ){
            $fs = array();
            foreach ($webfonts as $key => $value) {
                $fs []= $value;
            }
            $fonts_url = esc_url (add_query_arg( array(
                'family' => implode( '|', $fs ),
                'subset' => urlencode( implode(',', array_unique($websubsets)) ),
            ), '//fonts.googleapis.com/css' ));

            wp_enqueue_style("google-web-fonts", esc_url($fonts_url));
        }
    }


    // generate panel
    public function generate_panel($wp_customize, $panel){

        if( is_callable(array($wp_customize, 'add_panel')) ){
            $wp_customize->add_panel( $panel['id'], array(
                'priority'       => $this->index_panel,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => $panel['label'],
                'description'    => isset($panel['desc']) && !empty($panel['desc']) ? $panel['desc'] : false
            ) );
        }

        foreach ($panel['sections'] as $section){
            $this->generate_section($wp_customize, $section, $panel['id']);
        }

        $this->index_panel++;
        return $panel['id'];
    }


    // generate section
    public function generate_section($wp_customize, $section, $panel_id=false, $indexOfPanel=false){
        $current_section = $wp_customize->get_section($section['id']);
        if( !empty($current_section) && is_a($current_section, 'WP_Customize_Section') ){
            
        }
        else{
            $wp_customize->add_section( $section['id'], array(
                'priority'       => $indexOfPanel ? $this->index_panel : $this->index_section,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => $section['label'],
                'description'    => isset($section['desc']) && !empty($section['desc']) ? $section['desc'] : false,
                'panel'          => $panel_id
            ) );
        }

        foreach ($section['controls'] as $control){
            $this->generate_setting($wp_customize, $control, $section['id']);
        }

        if( $indexOfPanel )
            $this->index_panel++;
        else
            $this->index_section++;

        return $section['id'];
    }


    // generate setting
    public function generate_setting($wp_customize, $control, $section_id=false){
        $wp_customize->add_setting($control['id'], array(
            'default' => isset($control['default']) ? $control['default'] : '',
            'type' => 'theme_mod',
            'transport' => 'refresh', //refresh | postMessage
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_js_clean'
        ));

        $desc = isset($control['desc']) && !empty($control['desc']) ? $control['desc'] : false;

        $setting_index = $this->index_setting;
        $this->index_setting++;

        if( isset($control['type']) ){
            switch( $control['type'] ){

                case "image":
                    $wp_customize->add_control(
                        new TT_Customizer_Image_Control( $wp_customize, $control['id'],
                           array(
                               'label'      => $control['label'],
                               'section'    => $section_id,
                               'settings'   => $control['id'],
                               'priority' => $setting_index,
                               'description' => $desc
                           )
                        )
                    );
                    break;

                case "bg_image":
                    $wp_customize->add_control(
                        new TT_Customizer_Bg_Image_Control( $wp_customize, $control['id'],
                           array(
                               'label'      => $control['label'],
                               'section'    => $section_id,
                               'settings'   => $control['id'],
                               'priority' => $setting_index,
                               'description' => $desc
                           )
                        )
                    );
                    break;

                case "switch":
                    $wp_customize->add_control(
                        new TT_Customizer_Switch_Control( $wp_customize, $control['id'],
                           array(
                               'label'      => $control['label'],
                               'section'    => $section_id,
                               'settings'   => $control['id'],
                               'priority'   => $setting_index,
                               'description' => $desc
                           )
                        )
                    );
                    break;

                case "pixel":
                    $wp_customize->add_control(
                        new TT_Customizer_Number_Pixel_Control( $wp_customize, $control['id'],
                           array(
                               'label'      => $control['label'],
                               'section'    => $section_id,
                               'settings'   => $control['id'],
                               'priority'   => $setting_index,
                               'description' => $desc
                           )
                        )
                    );
                    break;

                case "sub_title":
                    $wp_customize->add_control(
                        new TT_Customizer_Sub_Title_Control( $wp_customize, $control['id'],
                           array(
                               'label'      => $control['label'],
                               'section'    => $section_id,
                               'settings'   => $control['id'],
                               'priority'   => $setting_index,
                               'description' => $desc
                           )
                        )
                    );
                    break;

                case "font_set":
                    $wp_customize->add_control(
                        new TT_Customizer_Font_Set_Control( $wp_customize, $control['id'],
                           array(
                               'label'      => $control['label'],
                               'section'    => $section_id,
                               'settings'   => $control['id'],
                               'priority'   => $setting_index,
                               'description' => $desc
                           )
                        )
                    );
                    break;

                case "font":
                    $wp_customize->add_control(
                        new TT_Customizer_Font_Control( $wp_customize, $control['id'],
                           array(
                               'label'      => $control['label'],
                               'section'    => $section_id,
                               'settings'   => $control['id'],
                               'priority'   => $setting_index,
                               'description' => $desc
                           )
                        )
                    );
                    break;

                case "color":
                    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $control['id'], array(
                         'label' => $control['label'],
                         'section' => $section_id,
                         'settings' => $control['id'],
                         'priority' => $setting_index,
                         'description' => $desc
                     )));
                    break;

                case "backup":
                    $wp_customize->add_control(new TT_Customizer_Backup_Control($wp_customize, $control['id'], array(
                         'label' => $control['label'],
                         'section' => $section_id,
                         'settings' => $control['id'],
                         'priority' => $setting_index,
                         'description' => $desc
                     )));
                    break;

                case "import":
                    $wp_customize->add_control(new TT_Customizer_Import_Control($wp_customize, $control['id'], array(
                         'label' => $control['label'],
                         'section' => $section_id,
                         'settings' => $control['id'],
                         'priority' => $setting_index,
                         'description' => $desc
                     )));
                    break;

                default:
                    $choices = isset($control['choices']) ? $control['choices'] : array();
                    $wp_customize->add_control( $control['id'], array(
                        'label'    => $control['label'],
                        'section'  => $section_id,
                        'settings' => $control['id'],
                        'type'     => $control['type'],
                        'choices'    => $choices,
                        'priority' => $setting_index,
                        'description' => $desc
                    ));
                    break;
            }
        }
    }



    // register controls
    public function register_controls($wp_customize){
        
        // each panels
        foreach ($this->items as $panel) {
            if( isset($panel['type']) && $panel['type']=="section" ){
                $section_id = $this->generate_section($wp_customize, $panel, false, true);
            }
            else{
                $panel_id = $this->generate_panel($wp_customize, $panel);
            }
        }
    }
    

    public function wp_customizer_import(){
        if( isset($_POST['import_options']) ){
            $result = $this->wp_customizer_import_handler($_POST['import_options']);
            if($result){
                echo "1";
                exit;
            }
        }
        echo '0';
        exit;
    }

    public function wp_customizer_import_handler($data){
        if( !empty($data) ){
            $encoded = preg_match('~%[0-9A-F]{2}~i', $data);
            if( !empty($encoded) ){
                $options = unserialize( urldecode($data) );
                if( !empty($options) ){
                    foreach ($options as $key => $value) {
                        set_theme_mod( $key, $value );
                    }
                    TTLess::build_css();
                    return true;
                }
            }
        }
        return false;
    }


    
    public function wp_customizer_reset(){
        if( isset($_POST['reset_option']) && !empty($_POST['reset_option']) && $_POST['reset_option']=="1" ){
            foreach( $this->get_controls() as $control ){
                set_theme_mod( $control['id'], isset($control['default']) ? $control['default'] : '' );
            }

            TTLess::reset_css();

            echo "1";
            exit;
        }
        echo '0';
        exit;
    }


    public function generate_less(){
        if( isset($_POST['wp_customize']) && $_POST['wp_customize']=="on" ){
            $compiled_css = TTLess::get_compiled_css();
            echo '<style type="text/css" id="customize_preview_css">'. $compiled_css .'</style>';
        }
    }


    // Save Customizer Save After Generate CSS
    public function customize_save_after(){
        TTLess::build_css();
    }


    public function customize_controls_config_scripts(){
    ?>
    <script>
        (function($){
            
            $.wp.wpColorPicker.prototype.options = {
                palettes: ['#f44336', 
                            '#e91e63', 
                            '#9c27b0', 
                            '#673ab7', 
                            '#2196f3',
                            '#4caf50',
                            '#ffeb3b',
                            '#795548',
                            '#000000',
                            '#ffffff']
            };

        })(jQuery);
    </script>
    <?php
    }

}