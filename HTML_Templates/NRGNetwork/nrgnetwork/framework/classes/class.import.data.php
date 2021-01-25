<?php

class TT_ImportData{

    function __construct(){
        add_action( 'admin_menu', array($this, 'admin_menu') );
        add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));

        add_action('wp_ajax_themeton_template_init', array($this, 'theme_after_switch_hook'));
        add_action('wp_ajax_nopriv_themeton_template_init', array($this, 'theme_after_switch_hook'));

        add_action("after_switch_theme", array($this, 'after_switch_theme'), 10 ,  2);

        add_action('admin_head', array($this, 'script_run_less_compiler'));
        
        add_action('admin_notices', array($this,'theme_activation_admin_notice'));
        add_action('wp_ajax_template_hide_admin_notice', array($this, 'template_hide_admin_notice_hook'));
        add_action('wp_ajax_nopriv_template_hide_admin_notice', array($this, 'template_hide_admin_notice_hook'));
    }


    public function admin_menu(){
        $demo_page = add_submenu_page( 'themes.php', 
                                        'Import Demo Data', 
                                        'Import Demo Data', 
                                        'manage_options', 
                                        'themeton-demo-importer', 
                                        array($this, 'demo_import_page') 
                                    );
    }
    public function admin_scripts(){
        if( isset($_GET['page']) && $_GET['page']=='themeton-demo-importer' ){
            wp_enqueue_style('demo-importer', get_template_directory_uri().'/framework/admin-assets/demo.import.css');
            wp_enqueue_script('demo-importer', get_template_directory_uri().'/framework/admin-assets/demo.import.js', array( 'jquery' ));
        }
    }


    public function theme_after_switch_hook(){
        $controls = get_customizer_controls();
        foreach ($controls as $control) {
            if( !get_theme_mod($control['id']) )
                set_theme_mod( $control['id'], isset($control['default']) ? $control['default'] : '' );
        }

        TTLess::create_css_active_theme();
        exit;
    }


    public function after_switch_theme($old_theme_name, $old_theme = false){
        update_option('themeton_admin_notice', '1');
    }


    public function script_run_less_compiler(){
        if( isset($_GET['activated']) && $_GET['activated']=='true' ){
            echo '<script type="text/javascript">
                    document.addEventListener("DOMContentLoaded", function() {
                        var iframe_hook = document.createElement("iframe");
                        iframe_hook.setAttribute("src", "'.admin_url().'/admin-ajax.php?action=themeton_template_init"); 
                        iframe_hook.style.width = "0px"; 
                        iframe_hook.style.height = "0px";
                        iframe_hook.style.visibility = "hidden"; 
                        document.body.appendChild(iframe_hook);
                    });
                    </script>';
        }
    }



    public function theme_activation_admin_notice(){
        if( get_option('themeton_admin_notice')!==false && get_option('themeton_admin_notice')=="0" )
            return;

        echo '<div class="updated" id="theme-admin-notice">
                <h3 style="text-transform: uppercase;">Welcome to '.wp_get_theme()->template.' theme.</h3>
                <p>
                    <a href="'.admin_url().'themes.php?page=themeton-demo-importer" class="button-primary" style="text-decoration:none;"><i class="fa fa-folder-open"></i> One Click Demo Data</a>
                    <a href="'.admin_url().'customize.php" class="button-primary" style="text-decoration:none;"><i class="fa fa-laptop"></i> Live Customizer</a>
                    <a href="javascript: tt_template_hide_admin_notice();" class="button" style="text-decoration:none;"><i class="fa fa-times"></i> Hide Notice</a>
                </p>
            </div>';
    }


    
    public function template_hide_admin_notice_hook(){
        update_option('themeton_admin_notice', '0');
        exit;
    }




    public function demo_import_page(){

        if( isset($_POST) ){
            $this->import_data($_POST);
        }

        $msg = '';
        if( isset($_GET['msg']) && $_GET['msg']=='success' ){
            $msg = '<div id="message" class="updated below-h2"><p>Demo Data Imported.</p></div>';
        }


        $templates = '';
        $file_dir = TT::file_require( get_stylesheet_directory().'/includes/demo-data/data/' );
        foreach( glob( $file_dir . '*.xml' ) as $filename ) {
            $filename = basename($filename);
            $filename = str_replace('.xml', '', $filename);
            $fname = $filename;
            $fname = substr($fname, 0, strpos($fname, '(') );
            $fname = str_replace('_', ' ', $fname);
            $img = substr($fname, 0, 2);
            $img = TT::file_require( trailingslashit(get_template_directory_uri()).'includes/demo-data/thumbs/'.$img.'.png', true );
            $templates .= '<label>
                                <input type="radio" name="template" value="'.$filename.'" />
                                <span class="thumb"><img src="'.$img.'" /></span>
                                <h5 class="label">'.$fname.'</h5>
                           </label>';
        }

        echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
            echo "<h2>Demo Data Importer</h2>
                  $msg";
            echo '<form method="post">
                <table class="form-table">
                <tr>
                    <th scope="row"><label class="important">Note:</label></th>
                    <td>
                        <span style="color:red;">Please install required plugins such as BuddyPress, Portfolio and Contact Form 7 before add demo data. <a href="themes.php?page=install-required-plugins">Install now!</a></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label>Choose Demo Data:</label></th>
                    <td>
                        <fieldset class="templates-layouts">'.$templates.'</fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label>Import Attachments:</label></th>
                    <td>
                        <label>
                        <input type="checkbox" name="download_attachment" value="1" /> Download and demo data attachments.
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label>Import customizer options:</label></th>
                    <td>
                        <label>
                        <input type="checkbox" name="import_theme_options" value="1" /> Please backup your current setup of your Theme Options.
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label>Import Sliders Data:</label></th>
                    <td>
                        <label>
                        <input type="checkbox" name="import_data_slider" value="1" /> Import Premium Sliders which is used on Demo Sites
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><button type="submit" class="button-primary">Import Demo Data</button></th>
                    <td></td>
                </tr>
                </table>
            </form>';
        echo '</div>';
    }


    public function get_page_by_name($page_name){
        global $wpdb;
        $page = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type='page'", $page_name ));
        if ( $page )
            return $page;

        return 0;
    }


    public function import_data($param){

        if( !class_exists('WP_Import') )
            require_once( get_template_directory() . "/framework/classes/lib/wp.importer/wp.importer.php" );

        $download_images = isset($param['download_attachment']) && $param['download_attachment']=='1' ? true : false;

        /* File Paths */
        $options_file = "/includes/demo-data/customizer.txt";

        $nav_file = TT::file_require(get_template_directory_uri().'/includes/demo-data/navigation.xml', true);
        $nav_file_path = TT::file_require(get_template_directory().'/includes/demo-data/navigation.xml');

        $widget_file = TT::file_require(get_template_directory_uri().'/includes/demo-data/widgets.txt', true);
        $widget_file_path = TT::file_require(get_template_directory().'/includes/demo-data/widgets.txt');


        if( isset($param['template']) && !empty($param['template']) ){

            /* Import Selected Content */
            $data_file = TT::file_require(get_template_directory().'/includes/demo-data/data/'.$param['template'].'.xml');
            preg_match('/\((.*?)\)/', $param['template'], $slug_out);
            $home_slug =  is_array($slug_out) && !empty($slug_out) ? $slug_out[0] : '';
            $home_slug = str_replace('$', '/', $home_slug);
            $home_slug = str_replace('(', '', $home_slug);
            $home_slug = str_replace(')', '', $home_slug);

            if( file_exists($data_file) && !empty($home_slug) ){
                $d = explode('/', $home_slug);
                $home_slug = isset($d[1]) ? $d[1] : $home_slug;
                $page_id_by_name = $this->get_page_by_name($home_slug);

                if( $page_id_by_name!='0' ){

                    wp_delete_post( $page_id_by_name, true );

                    $wp_import = new WP_Import();
                    $wp_import->fetch_attachments = $download_images;
                    ob_start();
                    set_time_limit(0);
                    $wp_import->import( $data_file );
                    ob_end_clean();

                    // Set Home Page
                    update_option('show_on_front', 'page');
                    update_option('page_on_front',  $page_id_by_name);
                }
            }
            /*=== End Contents */



            /* Import Widgets */
            if( file_exists($widget_file_path) ){
                $get_widget_file = wp_remote_get($widget_file);
                $widget_body = array_key_exists('body', $get_widget_file) ? $get_widget_file['body'] : '';
                if( !empty($widget_body) ){
                    
                    $data = $widget_body;
                    $encoded = preg_match('~%[0-9A-F]{2}~i', $widget_body);
                    if( !empty($encoded) ){
                        $data = unserialize( urldecode(trim($widget_body)) );
                    }
                    else{
                        $data = unserialize( trim($widget_body) );
                    }

                    $this->import_widget($data);
                }
            }
            /*=== End Widgets */

            

            /* Theme Options */
            if( isset($param['import_theme_options']) && $param['import_theme_options']=='1' ){
                if( file_exists( TT::file_require(get_template_directory().$options_file) ) ){
                    $options_uri = TT::file_require( get_template_directory_uri().$options_file, true );
                    $option_data = wp_remote_get( $options_uri );
                    $op_data = array_key_exists('body', $option_data) ? $option_data['body'] : '';
                    $customizer = new TT_Theme_Customizer();
                    $customizer->wp_customizer_import_handler($op_data);
                }
            }



            /* Revo Sliders */
            if( isset($param['import_data_slider']) && $param['import_data_slider']=='1' ){
                $this->import_revo();
            }
            /*=== End Revo Sliders */


            /* Check Navigation Menu */
            $locations = get_theme_mod( 'nav_menu_locations' ); 
            $menus = wp_get_nav_menus();
            $exist_nav = false;
            if( is_array($menus) ) {
                foreach($menus as $menu) {
                    if( $menu->name == 'Main Menu' ) {
                        $locations['primary'] = $menu->term_id;
                        set_theme_mod( 'nav_menu_locations', $locations );
                        $exist_nav = true;
                    }
                }
            }


            /* Import Main Contents */
            try{
                $main_file = TT::file_require(get_template_directory().'/includes/demo-data/main-content.xml');
                if( file_exists($main_file) && !$exist_nav ){
                    $wp_import = new WP_Import();
                    $wp_import->fetch_attachments = $download_images;
                    ob_start();
                    set_time_limit(0);
                    $wp_import->import( $main_file );
                    ob_end_clean();
                }
            }
            catch(Exception $e){}
            /*=== End Main Contents */




            /* Import Navigation */
            $locations = get_theme_mod( 'nav_menu_locations' ); 
            $menus = wp_get_nav_menus();
            $exist_nav = false;
            if( is_array($menus) ) {
                foreach($menus as $menu) {
                    if( $menu->name == 'Main Menu' ) {
                        $locations['primary'] = $menu->term_id;
                        set_theme_mod( 'nav_menu_locations', $locations );
                        $exist_nav = true;
                    }
                }
            }
            if( !$exist_nav ){
                if( file_exists($nav_file_path) ){
                    $get_nav_file = wp_remote_get($nav_file);
                    $nav_body = array_key_exists('body', $get_nav_file) ? $get_nav_file['body'] : '';
                    if( !empty($nav_body) ){
                        /* Import Navigation Content */
                        $wp_import = new WP_Import();
                        $wp_import->fetch_attachments = $download_images;
                        ob_start();
                        $wp_import->import( $nav_file_path );
                        ob_end_clean();

                        /* Set Main Navigation */
                        $locations = get_theme_mod( 'nav_menu_locations' ); 
                        $menus = wp_get_nav_menus();
                        if( is_array($menus) ) {
                            foreach($menus as $menu) {
                                $menu_names = array("Main Menu", "mainmenu", "Main Navigation", "main menu");
                                if( in_array($menu->name, $menu_names) ) {
                                    $locations['primary'] = $menu->term_id;
                                }
                            }
                        }
                        set_theme_mod( 'nav_menu_locations', $locations );
                        /*=== End Main Navigation */
                    }
                }
            }
            /*=== End Navigation */
        }
    }




    /*
        Widget Importer
    */
    public function import_widget($data){
        global $wp_registered_sidebars;
        global $wp_registered_widget_controls;
        
        $widget_controls = $wp_registered_widget_controls;

        // Get all available widgets site supports
        $available_widgets = array();
        foreach ( $widget_controls as $widget ) {
            if ( ! empty( $widget['id_base'] ) && !isset( $available_widgets[$widget['id_base']] ) ){
                $available_widgets[$widget['id_base']]['id_base'] = $widget['id_base'];
                $available_widgets[$widget['id_base']]['name'] = $widget['name'];
            }
        }
        // Get all existing widget instances
        $widget_instances = array();
        foreach ( $available_widgets as $widget_data ) {
            $widget_instances[$widget_data['id_base']] = get_option( 'widget_' . $widget_data['id_base'] );
        }

        // Loop import data's sidebars
        foreach ( $data as $sidebar_id => $widgets ){
            if ( 'wp_inactive_widgets' == $sidebar_id ){ continue; }
            if ( isset( $wp_registered_sidebars[$sidebar_id] ) ) {
                $sidebar_available = true;
                $use_sidebar_id = $sidebar_id;
            } else {
                $sidebar_available = false;
                $use_sidebar_id = 'wp_inactive_widgets'; // add to inactive if sidebar does not exist in theme
            }

            // Loop widgets
            foreach ( $widgets as $widget_instance_id => $widget ){
                $fail = false;
                // Get id_base (remove -# from end) and instance ID number
                $id_base = preg_replace( '/-[0-9]+$/', '', $widget_instance_id );
                $instance_id_number = str_replace( $id_base . '-', '', $widget_instance_id );
                // Does site support this widget?
                if ( ! $fail && ! isset( $available_widgets[$id_base] ) ) {
                    $fail = true;
                }

                if ( ! $fail && isset( $widget_instances[$id_base] ) ){
                    // Get existing widgets in this sidebar
                    $sidebars_widgets = get_option( 'sidebars_widgets' );
                    $sidebar_widgets = isset( $sidebars_widgets[$use_sidebar_id] ) ? $sidebars_widgets[$use_sidebar_id] : array(); // check Inactive if that's where will go

                    // Loop widgets with ID base
                    $single_widget_instances = ! empty( $widget_instances[$id_base] ) ? $widget_instances[$id_base] : array();
                    foreach ( $single_widget_instances as $check_id => $check_widget ) {
                        // Is widget in same sidebar and has identical settings?
                        if ( in_array( "$id_base-$check_id", $sidebar_widgets ) && (array) $widget == $check_widget ) {
                            $fail = true;
                            break;
                        }
                    }
                }

                if ( ! $fail ) {

                    // Add widget instance
                    $single_widget_instances = get_option( 'widget_' . $id_base ); // all instances for that widget ID base, get fresh every time
                    $single_widget_instances = ! empty( $single_widget_instances ) ? $single_widget_instances : array( '_multiwidget' => 1 ); // start fresh if have to
                    $single_widget_instances[] = (array) $widget; // add it

                        // Get the key it was given
                        end( $single_widget_instances );
                        $new_instance_id_number = key( $single_widget_instances );

                        // If key is 0, make it 1
                        // When 0, an issue can occur where adding a widget causes data from other widget to load, and the widget doesn't stick (reload wipes it)
                        if ( '0' === strval( $new_instance_id_number ) ) {
                            $new_instance_id_number = 1;
                            $single_widget_instances[$new_instance_id_number] = $single_widget_instances[0];
                            unset( $single_widget_instances[0] );
                        }

                        // Move _multiwidget to end of array for uniformity
                        if ( isset( $single_widget_instances['_multiwidget'] ) ) {
                            $multiwidget = $single_widget_instances['_multiwidget'];
                            unset( $single_widget_instances['_multiwidget'] );
                            $single_widget_instances['_multiwidget'] = $multiwidget;
                        }

                        // Update option with new widget
                        update_option( 'widget_' . $id_base, $single_widget_instances );

                    // Assign widget instance to sidebar
                    $sidebars_widgets = get_option( 'sidebars_widgets' ); // which sidebars have which widgets, get fresh every time
                    $new_instance_id = $id_base . '-' . $new_instance_id_number; // use ID number from new widget instance
                    $sidebars_widgets[$use_sidebar_id][] = $new_instance_id; // add new instance to sidebar
                    update_option( 'sidebars_widgets', $sidebars_widgets ); // save the amended data
                }
            }
        }
    }






    /*
        Revolutions Sliders
    */
    public function import_revo(){
        if( class_exists('UniteFunctionsRev') ){
            
            global $wpdb;
            
            $revo_directory = get_template_directory().'/includes/demo-data/revsliders/';
            $revo_files = array();
            $db = new UniteDBRev();

            $revo_obj = new RevSlider();
            $aliases = $revo_obj->getAllSliderAliases();

            foreach( glob( $revo_directory . '*.txt' ) as $filename ) {
                $filename = basename($filename);
                $revo_files[] = get_template_directory_uri().'/includes/demo-data/revsliders/'.$filename;
            }
            foreach( $revo_files as $rev_file ){
                $get_revo_file = wp_remote_get( $rev_file );
                $ncd = array_key_exists('body', $get_revo_file) ? $get_revo_file['body'] : '';
                
                $encoded = preg_match('~%[0-9A-F]{2}~i', $ncd);
                if( !empty($encoded) ){
                    $slider_data = @unserialize(urldecode($ncd));
                }
                else{
                    ob_start();
                    $ncd = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", trim($ncd)); //clear errors in string
                    ob_end_clean();
                    
                    $slider_data = @unserialize($ncd);
                }

                if( empty($slider_data) )
                    continue;
                $slider_params = $slider_data["params"];
                if( in_array($slider_params['alias'], $aliases) )
                    continue;

                $serialized_content = serialize($slider_data);

                /* Detecting Animations and Styles */
                $animations = isset($slider_data["custom_animations"]) ? $slider_data["custom_animations"] : array();
                if(!empty($animations)){
                    foreach($animations as $key => $animation){ //$animation['id'], $animation['handle'], $animation['params']
                        $exist = $db->fetch(GlobalsRevSlider::$table_layer_anims, "handle = '".$animation['handle']."'");
                        if(!empty($exist)){ //update the animation, get the ID
                            $arrUpdate = array();
                            $arrUpdate['params'] = stripslashes(json_encode(str_replace("'", '"', $animation['params'])));
                            $db->update(GlobalsRevSlider::$table_layer_anims, $arrUpdate, array('handle' => $animation['handle']));
                            $id = $exist['0']['id'];
                        }else{ //insert the animation, get the ID
                            $arrInsert = array();
                            $arrInsert["handle"] = $animation['handle'];
                            $arrInsert["params"] = stripslashes(json_encode(str_replace("'", '"', $animation['params'])));
                            $id = $db->insert(GlobalsRevSlider::$table_layer_anims, $arrInsert);
                        }
                        $serialized_content = str_replace(array('customin-'.$animation['id'], 'customout-'.$animation['id']), array('customin-'.$id, 'customout-'.$id), $serialized_content); 
                    }
                }

                // Static Captions
                $static = isset($slider_data["static_captions"]) ? $slider_data["static_captions"] : "";
                if(!empty($static)){
                    RevOperations::updateStaticCss($static);
                }

                //overwrite/create dynamic-captions.css
                //parse css to classes
                if( isset($slider_data["dynamic_captions"]) && !empty($slider_data["dynamic_captions"]) ){
                    $dynamicCss = UniteCssParserRev::parseCssToArray($slider_data["dynamic_captions"]);
                    if(is_array($dynamicCss) && $dynamicCss !== false && count($dynamicCss) > 0){
                        foreach($dynamicCss as $class => $styles){
                            //check if static style or dynamic style
                            $class = trim($class);
                            
                            if((strpos($class, ':hover') === false && strpos($class, ':') !== false) || //before, after
                                strpos($class," ") !== false || // .tp-caption.imageclass img or .tp-caption .imageclass or .tp-caption.imageclass .img
                                strpos($class,".tp-caption") === false || // everything that is not tp-caption
                                (strpos($class,".") === false || strpos($class,"#") !== false) || // no class -> #ID or img
                                strpos($class,">") !== false){ //.tp-caption>.imageclass or .tp-caption.imageclass>img or .tp-caption.imageclass .img
                                continue;
                            }
                            
                            //is a dynamic style
                            if(strpos($class, ':hover') !== false){
                                $class = trim(str_replace(':hover', '', $class));
                                $arrInsert = array();
                                $arrInsert["hover"] = json_encode($styles);
                                $arrInsert["settings"] = json_encode(array('hover' => 'true'));
                            }else{
                                $arrInsert = array();
                                $arrInsert["params"] = json_encode($styles);
                            }
                            //check if class exists
                            $result = $db->fetch(GlobalsRevSlider::$table_css, "handle = '".$class."'");
                            
                            if(!empty($result)){ //update
                                $db->update(GlobalsRevSlider::$table_css, $arrInsert, array('handle' => $class));
                            }else{ //insert
                                $arrInsert["handle"] = $class;
                                $db->insert(GlobalsRevSlider::$table_css, $arrInsert);
                            }
                        }
                    }
                }

                $slider_data = unserialize($serialized_content);
                $slider_params = $slider_data["params"];

                /*
                if(isset($slider_params["background_image"])) {
                    $slider_params["background_image"] = UniteFunctionsWPRev::getImageUrlFromPath($slider_params["background_image"]);
                }
                */

                $json_params = json_encode($slider_params);

                $revoSliderInstance = array();
                $revoSliderInstance["params"] = $json_params;
                $revoSliderInstance["title"] = UniteFunctionsRev::getVal($slider_params, "title", $slider_params['title']);
                $revoSliderInstance["alias"] = UniteFunctionsRev::getVal($slider_params, "alias", $slider_params['alias']);

                $sliderID = $db->insert(GlobalsRevSlider::$table_sliders, $revoSliderInstance);

                //create all slides
                $revoSlides = $slider_data["slides"];
                foreach($revoSlides as $slide){
                    
                    $params = $slide["params"];
                    $layers = $slide["layers"];
                    
                    //convert params images:
                    if(isset($params["image"])) {
                        // $params["image"] = UniteFunctionsWPRev::getImageUrlFromPath($params["image"]);
                        $params["image"] = $this->revo_fix_img_url($slider_params["background_image"], $params["image"]);
                    }
                    
                    //convert layers images:
                    foreach($layers as $key=>$layer){                   
                        if(isset($layer["image_url"])){
                            // $layer["image_url"] = UniteFunctionsWPRev::getImageUrlFromPath($layer["image_url"]);
                            $layer["image_url"] = $this->revo_fix_img_url($slider_params["background_image"], $layer["image_url"]);
                            $layers[$key] = $layer;
                        }
                    }
                    
                    //create new slide
                    $SlideInstance = array();
                    $SlideInstance["slider_id"] = $sliderID;
                    $SlideInstance["slide_order"] = $slide["slide_order"]; 

                    $my_layers = json_encode($layers);
                    if(empty($my_layers))
                        $my_layers = stripslashes(json_encode($layers));
                    $my_params = json_encode($params);
                    if(empty($my_params))
                        $my_params = stripslashes(json_encode($params));

                    $SlideInstance["layers"] = $my_layers;
                    $SlideInstance["params"] = $my_params;

                    $db->insert(GlobalsRevSlider::$table_slides,$SlideInstance);
                }


                //check if static slide exists and import
                if(isset($slider_data['static_slides']) && !empty($slider_data['static_slides'])){
                    $static_slide = $slider_data['static_slides'];
                    foreach($static_slide as $slide){
                        
                        $params = $slide["params"];
                        $layers = $slide["layers"];
                        
                        //convert params images:
                        if(isset($params["image"])){
                            $params["image"] = $this->revo_fix_img_url($slider_params["background_image"], $params["image"]);
                        }
                        
                        //convert layers images:
                        foreach($layers as $key=>$layer){
                            if(isset($layer["image_url"])){
                                $layer["image_url"] = $this->revo_fix_img_url($slider_params["background_image"], $layer["image_url"]);
                                $layers[$key] = $layer;
                            }
                        }
                        
                        //create new slide
                        $arrCreate = array();
                        $arrCreate["slider_id"] = $sliderID;
                        
                        $my_layers = json_encode($layers);
                        if(empty($my_layers))
                            $my_layers = stripslashes(json_encode($layers));
                        $my_params = json_encode($params);
                        if(empty($my_params))
                            $my_params = stripslashes(json_encode($params));
                            
                            
                        $arrCreate["layers"] = $my_layers;
                        $arrCreate["params"] = $my_params;
                        
                        $this->db->insert(GlobalsRevSlider::$table_static_slides, $arrCreate);
                    }
                }
                
            }

        }
    }
    public function revo_fix_bg_url($url){
        $imgExts = array("gif", "jpg", "jpeg", "png", "tiff", "tif", "bmp");
        $exp = explode(".", $url);
        if( in_array($exp[count($exp)-1], $imgExts) ){
            $sites_url = "/wp-content/uploads/sites/";
            $uploads_url = "/wp-content/uploads/";
            if( strpos($url, $sites_url)!==false ){
                $ex = explode($sites_url, $url);
                $site_id_str = explode("/", $ex[1]);
                $uri = $ex[0].$sites_url.$site_id_str[0];
                return trailingslashit($uri);
            }
            else if( strpos($url, $uploads_url)!==false ){
                $ex = explode($uploads_url, $url);
                $uri = $ex[0].$uploads_url;
                return trailingslashit($uri);
            }
            else{
                return false;
            }
        }
        return trailingslashit($url);
    }
    public function revo_fix_img_url($bg_image, $image){
        if( empty($image) ) return "";

        $bg = $this->revo_fix_bg_url($bg_image);
        if($bg){
            if( strpos($image, "://")===false )
                return $bg.$image;
            return $image;
        }
        return $image;
    }


}

new TT_ImportData();