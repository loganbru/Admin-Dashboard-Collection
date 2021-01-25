<?php

if (!function_exists('tt_customizer_options')):

    function tt_customizer_options() {

        $template_uri = get_template_directory_uri();

        $pages = array();
        $all_pages = get_pages();
        foreach ($all_pages as $page) {
            $pages[$page->ID] = $page->post_title;
        }

        $option = array(
            
            // Colors
            array(
                'type' => 'section',
                'id' => 'colors',
                'label' => 'Colors',
                'desc' => '',
                'controls' => array(
                    array(
                        'type' => 'color',
                        'id' => 'brand-color',
                        'label' => 'Brand Color',
                        'default' => getLessValue('brand-color')
                    ),
                    array(
                        'type' => 'color',
                        'id' => 'bg-header',
                        'label' => 'Header Background Color',
                        'default' => getLessValue('bg-header')
                    ),
                    array(
                        'type' => 'color',
                        'id' => 'menu-color',
                        'label' => 'Menu Color',
                        'default' => getLessValue('menu-color')
                    ),
                    array(
                        'type' => 'color',
                        'id' => 'bg-footer',
                        'label' => 'Footer Background Color',
                        'default' => getLessValue('bg-footer')
                    ),
                    array(
                        'type' => 'color',
                        'id' => 'be-loader',
                        'label' => 'Loader Background Color',
                        'default' => getLessValue('be-loader')
                    )

                )
            ),// end Colors

            // Font & Typography options
            array(
                'type' => 'section',
                'id' => 'font',
                'label' => 'Font & Typography',
                'desc' => '',
                'controls' => array(
                    array(
                        'type' => 'font',
                        'id' => 'font-text',
                        'label' => 'Text Font',
                        'default' => getLessValue('font-text'),
                        'desc' => 'Default value delegates "Hevletica Neue".',
                    ),
                    array(
                        'type' => 'font',
                        'id' => 'font-title',
                        'label' => 'Title & Heading',
                        'default' => getLessValue('font-title'),
                        'desc' => 'Default value delegates "Conv_helveticaneuecyr-bold".',
                    ),
                    array(
                        'type' => 'font',
                        'id' => 'font-menu',
                        'label' => 'Menu Font',
                        'default' => getLessValue('font-menu'),
                        'desc' => 'Default value delegates "Hevletica Neue".',
                    ),
                )
            ),// end Fonts
            // Branding & Logo
            array(
                'type' => 'section',
                'id' => 'section_header_style',
                'label' => 'Brand Logo',
                'desc' => '',
                'controls' => array(
                    array(
                        'type' => 'image',
                        'id' => 'logo',
                        'label' => 'Logo Image',
                        'default' => ''
                    ),
                    array(
                        'id' => 'logo-with',
                        'label' => 'Logo Width',
                        'default' => getLessValue('logo-with'),
                        'type' => 'pixel'
                    ),

                    array(
                        'type' => 'image',
                        'id' => 'logo_admin',
                        'label' => 'Login Page Logo',
                        'desc' => 'Up to 274x95px',
                        'default' => ''
                    ),

                    array(
                        'id' => 'loader_off',
                        'label' => 'Disable loader image?',
                        'default' => 0,
                        'type' => 'switch'
                    ),
                    array(
                        'type' => 'image',
                        'id' => 'loader_logo',
                        'label' => 'Loader Logo',
                        'default' => get_template_directory_uri() . '/img/logo-loader.png'
                    ),
                    array(
                        'id' => 'loader_logo_with',
                        'label' => 'Loader Logo Width',
                        'default' => '107',
                        'type' => 'pixel'
                    )
                )
            ),// end Branding
            
            
            // Page Title
            array(
                'type' => 'section',
                'id' => 'page_title',
                'label' => 'Page Title',
                'controls' => array(
                    array(
                        'id' => 'page_title_image',
                        'label' => 'Background Image',
                        'default' => get_template_directory_uri() . '/img/bg.jpg|cover|center top|scroll',
                        'type' => 'bg_image'
                    )
                ),
            ), //end Page Title



            // Page Title
            array(
                'type' => 'section',
                'id' => 'page_custom_slug',
                'label' => 'Rewrite URL Customize',
                'controls' => array(
                    array(
                        'id' => 'netauth_username',
                        'label' => 'Use username on user profile url',
                        'default' => 0,
                        'type' => 'switch'
                    ),
                    array(
                        'id' => 'netauth',
                        'label' => 'Author Profile:',
                        'default' => 'netauth',
                        'type' => 'input',
                        'desc' => 'netauth/&lt;username_or_id&gt;'
                    ),
                    array(
                        'id' => 'netauth-edit',
                        'label' => 'Profile Edit:',
                        'default' => 'netauth-edit',
                        'type' => 'input',
                        'desc' => 'netauth-edit/&lt;username_or_id&gt;'
                    ),
                    array(
                        'id' => 'netcollect',
                        'label' => 'Author Collection:',
                        'default' => 'netcollect',
                        'type' => 'input',
                        'desc' => 'netcollect/&lt;collection_id&gt;'
                    ),
                    array(
                        'id' => 'netfolio-edit',
                        'label' => 'Portfolio Edit:',
                        'default' => 'netfolio-edit',
                        'type' => 'input',
                        'desc' => 'netfolio-edit/&lt;portfolio_id&gt;'
                    ),
                    array(
                        'id' => 'netauth-stats',
                        'label' => 'Author Statistics:',
                        'default' => 'netauth-stats',
                        'type' => 'input',
                        'desc' => 'netauth-stats/'
                    ),
                    array(
                        'id' => 'netauth-msgs',
                        'label' => 'Private Message:',
                        'default' => 'netauth-msgs',
                        'type' => 'input',
                        'desc' => 'netauth-msgs/'
                    )
                ),
            ), //end Page Title


            
            // Footer
            array(
                'type' => 'section',
                'id' => 'section_footer',
                'label' => 'Footer',
                'controls' => array(
                    array(
                        'id' => 'footer',
                        'label' => 'Enable Footer',
                        'default' => '1',
                        'type' => 'switch'
                    ),
                    array(
                        'id' => 'footer_widget_num',
                        'label' => 'Footer Style',
                        'default' => '4',
                        'type' => 'select',
                        'choices' => array('1' => 'Full', '2' => '2 Columns', '3' => '3 Columns', '4' => '4 Columns', '5' => '1/2 + 1/4 + 1/4', '6' => '1/4 + 1/4 + 1/2')
                    ),
                    array(
                        'id' => 'footer-text',
                        'label' => 'Footer Text Color',
                        'default' => getLessValue('footer-text'),
                        'type' => 'color'
                    ),
                    array(
                        'id' => 'sub-footer',
                        'label' => 'Enable Sub Footer',
                        'default' => '1',
                        'type' => 'switch'
                    ),
                    array(
                        'id' => 'copyright_content',
                        'label' => 'CopyRight Content',
                        'default' => '<span class="copy">&copy; 2015. All rights reserved. <span class="white"><a href="#!"> THEMETON</a></span></span><span class="created">Created with LOVE by <span class="white"><a href="#!"> THEMETON</a></span></span>',
                        'desc' => '',
                        'type' => 'textarea'
                    ),
                ),
            ), // end Footer


            // Post Types
            array(
                'id' => 'panel_options',
                'label' => 'Post Types',
                'desc' => 'You can customize here mostly post type options including singular pages options.',
                'sections' => array(
                    // Community
                    array(
                        'id' => 'section_community',
                        'label' => 'Community',
                        'controls' => array(
                            array(
                                'id' => 'network_post_type',
                                'label' => 'Community Post Type',
                                'default' => 'portfolio',
                                'type' => 'select',
                                'choices' => array(
                                    'post' => 'Post', 
                                    'portfolio' => 'Portfolio',
                                    'product' => 'Product of Woocommerce'
                                )
                            ),
                            array(
                                'id' => 'network_post_status',
                                'label' => 'Frontend Publish Status',
                                'default' => 'publish',
                                'type' => 'select',
                                'choices' => array(
                                            'publish' => 'Publish',
                                            'pending' => 'Pending',
                                            'draft' => 'Draft'
                                        )
                            ),




                            array(
                                'id' => 'sub_title_addnew_button',
                                'type' => 'sub_title',
                                'label' => 'Add Work Button',
                                'default' => ''
                            ),
                            array(
                                'id' => 'addnew_text',
                                'label' => 'Button Text:',
                                'default' => 'Add Work',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'addnew_status',
                                'label' => 'Hide when not logged in',
                                'default' => '0',
                                'type' => 'switch'
                            ),




                            array(
                                'id' => 'sub_title_metafields',
                                'type' => 'sub_title',
                                'label' => 'Meta Fields Title',
                                'default' => ''
                            ),

                            array(
                                'id' => 'meta_field1',
                                'label' => 'Meta field-1 label:',
                                'default' => 'Brand/Company',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'meta_field2',
                                'label' => 'Meta field-2 label:',
                                'default' => 'Tools Used',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'meta_field3',
                                'label' => 'Meta field-3 label:',
                                'default' => 'Color',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'meta_field4',
                                'label' => 'Meta field-4 label:',
                                'default' => 'Copyright',
                                'type' => 'input'
                            ),



                            array(
                                'id' => 'sub_title_fields_icon',
                                'type' => 'sub_title',
                                'label' => 'Meta Fields Icons',
                                'default' => '',
                                'desc' => 'Our theme is compatible with FontAwesome font icon library. You should choose proper icon for your custom field ifon <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">from here</a>.'
                            ),

                            array(
                                'id' => 'meta_field1_icon',
                                'label' => 'Meta field-1 icon:',
                                'default' => 'fa fa-graduation-cap',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'meta_field2_icon',
                                'label' => 'Meta field-2 icon:',
                                'default' => 'fa fa-wrench',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'meta_field3_icon',
                                'label' => 'Meta field-3 icon:',
                                'default' => 'fa fa-paint-brush',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'meta_field4_icon',
                                'label' => 'Meta field-4 icon:',
                                'default' => 'fa fa-camera-retro',
                                'type' => 'input'
                            )


                        ),
                    ),// end Community
                    // Post
                    array(
                        'id' => 'section_post',
                        'label' => 'Post',
                        'controls' => array(
                            array(
                                'id' => 'post_comment',
                                'label' => 'Post Comment',
                                'default' => 1,
                                'type' => 'switch'
                            ),
                            array(
                                'id' => 'post_related',
                                'label' => 'Related posts',
                                'default' => 1,
                                'type' => 'switch'
                            ),
                            array(
                                'id' => 'post_sidebar',
                                'label' => 'Post sidebar',
                                'default' => 1,
                                'type' => 'switch',
                                'desc' => 'Your post will show without sidebar when you turn this option Off.'
                            ),
                        ),
                    ),// end Post
                    // Page
                    array(
                        'id' => 'section_page',
                        'label' => 'Page',
                        'controls' => array(
                            array(
                                'id' => 'page_comment',
                                'label' => 'Page Comment',
                                'default' => 1,
                                'type' => 'switch'
                            ),
                            array(
                                'id' => 'page_nextprev',
                                'label' => 'Next/Prev links',
                                'default' => 1,
                                'type' => 'switch'
                            ),
                        ),
                    ),// end Page

                    // Portfolio
                    array(
                        'id' => 'section_portfolio',
                        'label' => 'Portfolio',
                        'controls' => array(
                            array(
                                'id' => 'portfolio_label',
                                'label' => 'Portfolio Label',
                                'default' => 'Portfolio',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'portfolio_slug',
                                'label' => 'Portfolio Slug',
                                'default' => 'portfolio-item',
                                'type' => 'input'
                            ),
                            array(
                                'id' => 'portfolio_sbar',
                                'label' => 'Layout',
                                'default' => 'full',
                                'type' => 'select',
                                'choices' => array('full' => 'No sidebar', 'left' => 'Left sidebar', 'right' => 'Right sidebar')
                            ),

                            array(
                                'id' => 'portfolio_exceprt',
                                'label' => 'Excerpt show',
                                'default' => 0,
                                'type' => 'switch'
                            ),
                            array(
                                'id' => 'portfolio_exceprt_length',
                                'label' => 'Excerpt custom length',
                                'default' => '0',
                                'type' => 'input',
                                'desc' => 'Type number value that for exceprt words. 0 delegates default excerpt of posts.'
                            ),
                            
                            array(
                                'id' => 'sub_portfolio_single',
                                'type' => 'sub_title',
                                'label' => 'Single Post Options',
                                'default' => ''
                            ),
                            array(
                                'id' => 'portfolio_related',
                                'label' => 'Related Posts',
                                'default' => 1,
                                'type' => 'switch'
                            ),
                            array(
                                'id' => 'portfolio_comment',
                                'label' => 'Comment',
                                'default' => 0,
                                'type' => 'switch'
                            ),
                            array(
                                'id' => 'portfolio_nextprev',
                                'label' => 'Next/Prev links',
                                'default' => 1,
                                'type' => 'switch'
                            ),
                            array(
                                'id' => 'portfolio_page',
                                'label' => 'Portfolio Main Page',
                                'default' => 'pages',
                                'type' => 'select',
                                'choices' => array('0' => "Choose your page:") + $pages
                            ),
                        ),
                    )// end Portfolio
                )
            ),// end Post Types
            // Extras
            array(
                'id' => 'panel_extra',
                'label' => 'Extras',
                'desc' => 'Export Import and Custom CSS.',
                'sections' => array(
                    // Backup
                    array(
                        'type' => 'section',
                        'id' => 'section_backup',
                        'label' => 'Export/Import',
                        'desc' => '',
                        'controls' => array(
                            array(
                                'id' => 'backup_settings',
                                'label' => 'Export Data',
                                'desc' => 'Copy to Customizer Data',
                                'default' => '',
                                'type' => 'backup'
                            ),
                            array(
                                'id' => 'import_settings',
                                'label' => 'Import Data',
                                'desc' => 'Import Customizer Exported Data',
                                'default' => '',
                                'type' => 'import'
                            )
                        )
                    ), // end backup
                    // Custom
                    array(
                        'type' => 'section',
                        'id' => 'section_custom_css',
                        'label' => 'Custom CSS',
                        'desc' => '',
                        'controls' => array(
                            array(
                                'id' => 'custom_css',
                                'label' => 'Custom CSS (general)',
                                'default' => '',
                                'type' => 'textarea'
                            ),
                            array(
                                'id' => 'custom_css_tablet',
                                'label' => 'Tablet CSS',
                                'default' => '',
                                'type' => 'textarea',
                                'desc' => 'Screen width between 768px and 991px.'
                            ),
                            array(
                                'id' => 'custom_css_widephone',
                                'label' => 'Wide Phone CSS',
                                'default' => '',
                                'type' => 'textarea',
                                'desc' => 'Screen width between 481px and 767px. Ex: iPhone landscape.'
                            ),
                            array(
                                'id' => 'custom_css_phone',
                                'label' => 'Phone CSS',
                                'default' => '',
                                'type' => 'textarea',
                                'desc' => 'Screen width up to 480px. Ex: iPhone portrait.'
                            ),
                        )
                    ), // end Custom
                    // Terms of use
                    array(
                        'type' => 'section',
                        'id' => 'section_terms_of_use',
                        'label' => 'Sign Up page details',
                        'desc' => 'Terms of use and Privicy options text. You should add your custom links to the anchor tags.',
                        'controls' => array(
                            array(
                                'id' => 'terms_of_use',
                                'label' => 'Terms of use meta text',
                                'default' => 'I have read and agree to the <a class="be-popup-terms" href="#!">Terms of Use</a> and <a class="be-popup-terms" href="#!">Privacy Policy</a>.',
                                'type' => 'textarea'
                            ),
                        )
                    ) // end Terms of use
                )
            ) // end Extras
        );

        return $option;
    }

endif;

function tt_theme_customize_setup(){
    // create instance of TT Theme Customizer
    new TT_Theme_Customizer();
}
add_action( 'after_setup_theme', 'tt_theme_customize_setup' );