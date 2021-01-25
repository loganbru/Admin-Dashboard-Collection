<?php


class WPBakeryShortCode_Testimonial_Container extends WPBakeryShortCodesContainer{
    protected function content($atts, $content=NULL){
        extract(shortcode_atts(array(
            'number' => '2',
            'extra_class' => ""
        ), $atts));

        $result = '<div class="swiper-container '.$extra_class.'" 
                    data-autoplay="5000"
                    data-loop="0"
                    data-speed="300"
                    data-center="0" 
                    data-slides-per-group="1"
                    data-slides-per-view="responsive" 
                    data-xs-slides="1" 
                    data-sm-slides="2" 
                    data-md-slides="2" 
                    data-lg-slides="'.$number.'" 
                    data-add-slides="2">
                        <div class="swiper-wrapper">
                            '.do_shortcode($content).'
                        </div>
                        <div class="pagination"></div>
                   </div>';

        return $result;
    }
}


vc_map( array(
    "name" => esc_html__("Testimonial Carousel", 'nrgnetwork'),
    "description" => esc_html__("Testimonial Container", 'nrgnetwork'),
    "show_settings_on_create" => true,
    'is_container' => true,
    "content_element" => true,
    "as_parent" => array("only" => "testimonial"),
    "base" => "testimonial_container",
    "icon" => "icon-wpb-quickload",
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    "params" => array(
        array(
            'type' => 'dropdown',
            "param_name" => "number",
            "heading" => esc_html__("Slide number", 'nrgnetwork'),
            "value" => array(
                "1" => "1",
                "2" => "2",
                "3" => "3",
                "4" => "4"
            ),
            "std" => "2",
        ),
        array(
            "type" => "textfield",
            "param_name" => "extra_class",
            "heading" => esc_html__("Extra Class", 'nrgnetwork'),
            "value" => "",
            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'nrgnetwork'),
        )
    ),
    "js_view" => 'VcColumnView'
));