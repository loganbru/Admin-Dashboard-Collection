<?php

class ThemetonMetaPage extends TTRenderMeta{

    function __construct(){
        $this->items = $this->items();
        add_action('admin_enqueue_scripts', array($this, 'print_admin_scripts'));
        add_action('add_meta_boxes', array($this, 'add_custom_meta'), 1);
        add_action('edit_post', array($this, 'save_post'), 99);

        if( TT::admin_post_type()=="page" ){
            add_action('admin_enqueue_scripts', array($this, 'print_scripts_post'));
        }
    }

    // print admin scripts
    public function print_scripts_post($hook) {
        if( TT::admin_post_type()!='page' ){
            return;
        }
        wp_enqueue_script('jquery-ui-sortable');
        wp_enqueue_style( 'admin-page-script', get_template_directory_uri() . '/framework/admin-assets/meta.page.css' );
        wp_enqueue_script('admin-page-script', get_template_directory_uri() . '/framework/admin-assets/meta.page.js', false, false, true );
    }

    // meta fields
    public function items(){
        global $tt_sliders, $post;

        // init One Page menus
        $onepages_for_navs = array();
        $onepage_with_templates = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => 'one-page.php'
                ));
        foreach ($onepage_with_templates as $page) {
            $onepage_menu = array();
            $onepage_menu['onepage_nav' . $page->ID] = $page->post_title;
            $onepages_for_navs = array_merge($onepages_for_navs, $onepage_menu);
        }

        // Google Font Options
        include_once TT::file_require(get_template_directory() . '/framework/functions/google-fonts.php');
        $tt_google_fonts = get_google_webfonts();

        $google_webfonts = array();
        $google_webfonts["default"] = "Default (Helvetica, Arial, sans-serif)";
        foreach ($tt_google_fonts as $font) {
            $google_webfonts[$font['family']] = $font['family'];
        }


        // Less Options
        $less_options = array();

        global $post;

        define('ADMIN_IMAGES', get_template_directory_uri().'/framework/admin-assets/images/');

        $tmp_arr = array(
            'page' => array(
                'label' => 'Page Options',
                'post_type' => 'page',
                'items' => array(
                    array(
                        'name' => 'page_layout',
                        'type' => 'thumbs',
                        'label' => 'Page Layout',
                        'default' => 'full',
                        'option' => array(
                            'full' => ADMIN_IMAGES . '1col.png',
                            'right' => ADMIN_IMAGES . '2cr.png',
                            'left' => ADMIN_IMAGES . '2cl.png'
                        ),
                        'desc' => 'Select Page Layout (Fullwidth | Right Sidebar | Left Sidebar)'
                    ),
                    array(
                        'type' => 'checkbox',
                        'name' => 'remove_padding',
                        'label' => 'Remove Content Area Padding?',
                        'default' => '0',
                        'desc' => 'Turn this on (green) if you want to make your content joint the header area like demo section on the demo home.'
                    ),
                    array(
                        'type' => 'checkbox',
                        'name' => 'title_show',
                        'label' => 'Title On Single',
                        'default' => '1',
                        'desc' => 'If your title image is so beautiful and you don\'t wanna put someting on that, you should turn this OFF and hide post title.'
                    ),
                    /* Start title options group
                    ===================================*/
                    array(
                        'type' => 'start_group',
                        'name' => 'title_options',
                        'visible' => true
                    ),
                    array(
                        'name' => 'title_padding_top',
                        'type' => 'text',
                        'label' => 'Title Spacing from Top',
                        'default' => '',
                        'desc' => 'Page Title Sections padding-top size (px)'
                    ),
                    array(
                        'name' => 'title_padding_bottom',
                        'type' => 'text',
                        'label' => 'Title Spacing from Bottom',
                        'default' => '',
                        'desc' => 'Page Title Sections padding-bottom size (px)'
                    ),
                    array(
                        'type' => 'colorpicker',
                        'name' => 'title_bg_color',
                        'label' => 'Title background color',
                        'default' => '',
                        'desc' => 'Page Title Section Background Color'
                    ),
                    array(
                        'name' => 'title_bg_alpha',
                        'type' => 'text',
                        'label' => 'Overlay Opacity',
                        'default' => '0.8',
                        'desc' => '0, 0.2, ... 1'
                    ),
                    array(
                        'type' => 'background',
                        'name' => 'title_bg',
                        'label' => 'Title Background Image',
                        'default' => '',
                        'desc' => 'If you want to show your title area beautiful, this option exactly you need.'
                    ),
                    array(
                        'name' => 'title_options',
                        'type' => 'end_group'
                    )
                    /* End title options group
                    ===================================*/
                )
            ),
        );

        return $tmp_arr;
    }


}

new ThemetonMetaPage();