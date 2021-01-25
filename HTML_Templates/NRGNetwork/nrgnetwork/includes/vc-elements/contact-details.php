<?php

class WPBakeryShortCode_ContactDetail extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "icon_type" => "icon_font",
            "image"     => "",
            "icon" => "fa fa-map-marker",
            "title"     => "Contact address",
            'extra_class' => ''
        ), $atts ) );

        $content = wpb_js_remove_wpautop( $content, true );
        
        $icon_markup = '';
        if($icon_type == 'icon_image') {
            $icon_markup = wp_get_attachment_image($image, 'full', false, array('class'=>'service-icon'));
        }
        $image_src = $icon_type == 'icon_font' ? "<i class='$icon'></i> " : $icon_markup." ";

        return "<div class='contact-entry $extra_class'>
                    <h4 class='contact-label'>$image_src$title</h4>
                    <div class='contact-text'>
                        $content
                    </div>
                </div>";
    }
}

vc_map( array(
    "name" => esc_html__("Contact detail", 'nrgnetwork'),
    "description" => esc_html__("your location info", 'nrgnetwork'),
    "base" => 'contactdetail',
    "class" => "",
    "icon" => "icon-wpb-quickload",
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    "show_settings_on_create" => true,
    "params" => array(
        array(
            'type' => 'dropdown',
            "param_name" => "icon_type",
            "heading" => esc_html__("Icon Type", 'nrgnetwork'),
            "value" => array(
                "Icon font" => "icon_font",
                "Icon image" => "icon_image"
            ),
            "std" => "icon_font",
        ),
        array(
            'type' => 'attach_image',
            "param_name" => "image",
            "heading" => esc_html__("Image Image", 'nrgnetwork'),
            "value" => '',
            "dependency" => Array("element" => "icon_type", "value" => array("icon_image")),
            "description" => 'Please prepare your image size because bigger images inappropriate.'
        ),
        array(
            'type' => 'iconpicker',
            "param_name" => "icon",
            "heading" => esc_html__("Icon", 'nrgnetwork'),
            "description" => "",
            "value" => '',
            'std' => 'fa fa-map-marker', // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'iconsPerPage' => 4000, // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
            ),
            "std" => "fa fa-adjust",
            "dependency" => Array("element" => "icon_type", "value" => array("icon_font"))
        ),
        array(
            'type' => 'textfield',
            "param_name" => "title",
            "heading" => esc_html__("Title", 'nrgnetwork'),
            "value" => 'Ideas for everyone',
            "holder" => 'div'
        ),
        array(
            'type' => 'textarea_html',
            "param_name" => "content",
            "heading" => esc_html__("Description", 'nrgnetwork'),
            "value" => '<p>New York, BRONX, Morris Park Ave 13</p>
                            <p>New York, Guerlain Street 87</p>'
        ),
        array(
            "type" => "textfield",
            "param_name" => "extra_class",
            "heading" => esc_html__("Extra Class", 'nrgnetwork'),
            "value" => "",
            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'nrgnetwork'),
        )

    )
) );