<?php

class WPBakeryShortCode_Service extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "icon_type" => "icon_font",
            "image"     => "",
            "icon" => "fa fa-smile-o",
            "title"     => "Ideas for everyone",
            "button_text"     => "Read More",
            "button_link"     => "#!",
            "desc"     => "Morbi efficitur feugiat erat a efficitur. Donec interdum, nunc ac elementum auctor, dui nisl placerat odio"
        ), $atts ) );

        $icon_markup = '';
        if($icon_type == 'icon_image') {
            $icon_markup = wp_get_attachment_image($image, 'full', false, array('class'=>'service-icon'));
        }
        $image_src = $icon_type == 'icon_font' ? "<i class='$icon'></i>" : $icon_markup;

        $button = '';
        if($button_text != '') {
            $button = '<a class="btn color-1 size-2 hover-1" href="'.$button_link.'">'.$button_text.'</a>';
        }

        return '<div class="swiper-slide" data-val="0">
                    <div class="service-entry">
                        '.$image_src.'
                        <h4 class="service-title">'.$title.'</h4>
                        <div class="service-text">'.$desc.'</div>
                        '.$button.'
                    </div>
                </div>';
    }
}

vc_map( array(
    "name" => esc_html__("Service", 'nrgnetwork'),
    "description" => esc_html__("", 'nrgnetwork'),
    "base" => 'service',
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
            'std' => 'fa fa-adjust', // default value to backend editor admin_label
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
            'type' => 'textarea',
            "param_name" => "desc",
            "heading" => esc_html__("Description", 'nrgnetwork'),
            "value" => 'Morbi efficitur feugiat erat a efficitur. Donec interdum, nunc ac elementum auctor, dui nisl placerat odio'
        ),
        array(
            "type" => 'textfield',
            "param_name" => "button_text",
            "heading" => esc_html__("Button Text", 'nrgnetwork'),
            "value" => 'Read More'
        ),
        array(
            "type" => 'textfield',
            "param_name" => "button_link",
            "heading" => esc_html__("Button Link", 'nrgnetwork'),
            "value" => '#!'
        )

    )
) );