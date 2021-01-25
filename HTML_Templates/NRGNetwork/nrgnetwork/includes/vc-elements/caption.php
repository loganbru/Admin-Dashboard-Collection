<?php

class WPBakeryShortCode_Tt_Heading extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "title" => "About Us",
            "desc"     => "",
            "text_align" => "text-center",
            "margin_bottom" => "85"
        ), $atts ) );

        $desc = !empty($desc) ? '<div class="block-subtitle">'.$desc.'</div>' : '';

        return '<div class="block '.esc_attr($text_align).'" style="margin-bottom:'.esc_attr(abs($margin_bottom)).'px !important;">
                    <h3 class="block-title">'.$title.'</h3>
                    '.$desc.'
                </div>';
    }
}

vc_map( array(
    "name" => esc_html__("Heading", 'nrgnetwork'),
    "description" => esc_html__("", 'nrgnetwork'),
    "base" => 'tt_heading',
    "class" => "",
    "icon" => "icon-wpb-quickload",
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    "show_settings_on_create" => true,
    "params" => array(
        array(
            'type' => 'textfield',
            "param_name" => "title",
            "heading" => esc_html__("Title", 'nrgnetwork'),
            "value" => 'About Us',
            "holder" => 'div'
        ),
        array(
            'type' => 'textarea',
            "param_name" => "desc",
            "heading" => esc_html__("Description", 'nrgnetwork'),
            "value" => 'Morbi efficitur feugiat erat a efficitur. Donec interdum, nunc ac elementum auctor, dui nisl placerat odio'
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Text Align", 'nrgnetwork'),
            "param_name" => "text_align",
            "value" => array(
                    esc_html__("Left", 'nrgnetwork') => "text-left",
                    esc_html__("Center", 'nrgnetwork') => "text-center",
                    esc_html__("Right", 'nrgnetwork') => "text-right"
                )
        ),
        array(
            'type' => 'textfield',
            "param_name" => "margin_bottom",
            "heading" => esc_html__("Margin Bottom", 'nrgnetwork'),
            "value" => '85'
        )
    )
) );