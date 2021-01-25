<?php

class WPBakeryShortCode_Counter extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "number" => '135',
            "title" => 'SME Resolution',
            "desc" => 'Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum',
            "button_text" => 'Read More',
            "button_link" => '',
            "extra_class" => ""
        ), $atts ) );

        $button = '';
        if($button_text != '') {
            $button = '<a class="btn color-3 size-2 hover-8" href="'.$button_link.'">'.$button_text.'</a>';
        }
        $result = '<div class="counter-entry">
                        <div class="stat-number" data-to="'.$number.'" data-speed="3000">0</div>
                        <div class="counter-label">'.$title.'</div>
                        <div class="counter-text">'.$desc.'</div>
                        '.$button.'
                    </div>';

        return $result;
    }
}

vc_map( array(
            "name" => esc_html__("Counter", 'nrgnetwork'),
            "description" => esc_html__("Animated Nubmers", 'nrgnetwork'),
            "base" => "counter",
            "icon" => "icon-wpb-quickload",
            "category" => esc_html__('Themeton', 'nrgnetwork'),
            "content_element" => true,
            "params" => array(
                array(
                    'type' => 'textfield',
                    "param_name" => "number",
                    "heading" => esc_html__("Number", 'nrgnetwork'),
                    "value" => '135',
                    "holder" => 'div'
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "title",
                    "heading" => esc_html__("Title", 'nrgnetwork'),
                    "value" => 'SME Resolution',
                    "holder" => 'div'
                ),
                array(
                    'type' => 'textarea',
                    "param_name" => "desc",
                    "heading" => esc_html__("Description", 'nrgnetwork'),
                    "value" => 'Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum',
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "button_text",
                    "heading" => esc_html__("Button Text", 'nrgnetwork'),
                    "value" => 'Read More'
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "button_link",
                    "heading" => esc_html__("Button Link", 'nrgnetwork'),
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
