<?php

class CurrentThemePageMetas extends TTRenderMeta{

    function __construct(){
        $this->items = $this->items();
        add_action('admin_enqueue_scripts', array($this, 'print_admin_scripts'));
        add_action('add_meta_boxes', array($this, 'add_custom_meta'), 1);
        add_action('edit_post', array($this, 'save_post'), 99);
    }

    public function items(){
        global $post;

        define('ADMIN_IMAGES', get_template_directory_uri().'/framework/admin-assets/images/');

        $tmp_arr = array(
            'page' => array(
                'label' => 'Page Options',
                'post_type' => 'page',
                'items' => array(
                    array(
                        'type' => 'checkbox',
                        'name' => 'title_show',
                        'label' => 'Title Section Show',
                        'default' => '1'
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'title_desc',
                        'label' => 'Title Description',
                        'default' => '',
                        'dependency' => array("element"=>"title_show", "value"=>"1")
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'title_desc_loggedin',
                        'label' => '(Optional) Title Description after loggedin',
                        'default' => '',
                        'dependency' => array("element"=>"title_show", "value"=>"1")
                    ),

                    array(
                        'type' => 'background',
                        'name' => 'title_bg',
                        'label' => 'Title Background Image',
                        'default' => '',
                        'desc' => 'If you want to show your background area beautiful, this option exactly you need.',
                        'dependency' => array("element"=>"title_show", "value"=>"1")
                    ),
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
                    )

                )
            ),

            'portfolio' => array(
                'label' => 'Portfolio Options',
                'post_type' => 'portfolio',
                'items' => array(

                    array(
                        'type' => 'textarea',
                        'name' => 'folio_about',
                        'label' => 'About Project',
                        'default' => ''
                    )

                )
            )
            
        );

        
        $network_post_type = TT::get_mod('network_post_type');
        $network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

        $tmp_arr['item_featured'] = array(
                'label' => 'Featured Options',
                'post_type' => $network_post_type,
                'items' => array(
                    array(
                        'type' => 'checkbox',
                        'name' => 'featured_item',
                        'label' => 'Featured Item',
                        'default' => '0'
                    )
                )
            );

        return $tmp_arr;
    }
    
}

new CurrentThemePageMetas();

?>