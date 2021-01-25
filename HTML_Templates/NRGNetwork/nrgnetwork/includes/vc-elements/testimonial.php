<?php

class WPBakeryShortCode_Testimonial extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "name" => "Samara Kechton",
            "position"     => "Make-up designer",
            "image" => '',
            "extra_class" => ""
        ), $atts ) );

        $content = wpb_js_remove_wpautop( $content, true );

        $icon_markup = wp_get_attachment_image($image, 'full', false, array('class' => 'testimonals-img'));

        return '<div class="swiper-slide">
                    <div class="testimonals-block">
                        <div class="testimonals-entry">
                            '.$icon_markup.'
                            <div class="testimonals-name">'.$name.'</div>
                            <div class="testimonals-text profes">'.$position.'</div>
                            <div class="testimonals-text">'.$content.'</div>
                        </div>
                    </div>
                </div>';
    }
}

vc_map( array(
    "name" => esc_html__("Testimonial", 'nrgnetwork'),
    "description" => esc_html__("", 'nrgnetwork'),
    "base" => 'testimonial',
    "class" => "",
    "icon" => "icon-wpb-quickload",
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    "show_settings_on_create" => true,
    "params" => array(
        array(
            'type' => 'attach_image',
            "param_name" => "image",
            "heading" => esc_html__("Image Image", 'nrgnetwork'),
            "value" => '',
            "description" => 'Please prepare your image size because bigger images inappropriate.'
        ),
        array(
            'type' => 'textfield',
            "param_name" => "name",
            "heading" => esc_html__("Name", 'nrgnetwork'),
            "value" => 'Samara Kechton',
            "holder" => 'div'
        ),
        array(
            'type' => 'textfield',
            "param_name" => "position",
            "heading" => esc_html__("Position", 'nrgnetwork'),
            "value" => 'Make-up designer'
        ),
        array(
            "type" => 'textarea_html',
            "param_name" => "content",
            "heading" => esc_html__("Content", 'nrgnetwork'),
            "value" => ''
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