<?php

class ThemetonMetaPortfolio extends TTRenderMeta{

    function __construct(){
        $this->items = $this->items();
        add_action('admin_enqueue_scripts', array($this, 'print_admin_scripts'));
        add_action('add_meta_boxes', array($this, 'add_custom_meta'), 1);
        add_action('edit_post', array($this, 'save_post'), 99);


        if( TT::admin_post_type()=="portfolio" ){
            add_action('admin_enqueue_scripts', array($this, 'print_scripts_portfolio'));
        }
    }
    

    // print admin scripts
    public function print_scripts_portfolio($hook) {
        if( TT::admin_post_type()!='portfolio' ){
            return;
        }
        wp_enqueue_style( 'admin-portfolio-script', get_template_directory_uri() . '/framework/admin-assets/meta.portfolio.css' );
        wp_enqueue_script('admin-portfolio-script', get_template_directory_uri() . '/framework/admin-assets/meta.portfolio.js', false, false, true );
    }

    // portfolio meta fields
    public function items(){
        global $tt_sliders;

        $tmp_arr = array(
            'portfolio' => array(
                'label' => 'Page Options',
                'post_type' => 'portfolio',
                'items' => array(
                    array(
                        'type' => 'gallery',
                        'name' => 'portfolio_gallery',
                        'label' => 'Portfolio Gallery'
                    ),
                    array(
                        'type' => 'video',
                        'name' => 'portfolio_video_mp4',
                        'label' => 'Portfolio Video (MP4/Youtube/Vimeo video link)'
                    ),
                    array(
                        'type' => 'video',
                        'name' => 'portfolio_video_webm',
                        'label' => 'Portfolio Video (WEBM)'
                    ),
                    array(
                        'name' => 'details',
                        'type' => 'textarea',
                        'label' => 'Your Custom Details',
                        'default' => '',
                        'desc' => 'Details format: <br><strong>label1 => description<br>label2 => description</strong>'
                    ),
                    array(
                        'type' => 'checkbox',
                        'name' => 'hide_featured_image',
                        'label' => 'Hide Featured Image',
                        'default' => '0'
                    ),
                    array(
                        'type' => 'checkbox',
                        'name' => 'related_post',
                        'label' => 'Related portfolio posts',
                        'default' => '1'
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'slider',
                        'label' => 'Top slider',
                        'option' => $tt_sliders,
                        'default' => 'sidebar-portfolio',
                        'desc' => 'Select a slider that you\'ve created on LayerSlider and Revolution Slider. This slider shows up between header and page title.'
                    ),
                    array(
                        'type' => 'thumbs',
                        'name' => 'page_layout',
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
            'product' => array(
                'label' => 'Product Additional Options',
                'post_type' => 'product',
                'items' => array(
                    array(
                        'type' => 'thumbs',
                        'name' => 'product_layout',
                        'label' => 'Product Layout',
                        'default' => 'full',
                        'option' => array(
                            'full' => ADMIN_IMAGES . '1col.png',
                            'right' => ADMIN_IMAGES . '2cr.png',
                            'left' => ADMIN_IMAGES . '2cl.png'
                        ),
                        'desc' => 'Select Page Layout (Fullwidth | Right Sidebar | Left Sidebar)'
                    )
                )
            )
        );

        return $tmp_arr;
    }
}

// new ThemetonMetaPortfolio();