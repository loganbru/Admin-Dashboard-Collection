<?php


class WPBakeryShortCode_Service_Container extends WPBakeryShortCodesContainer{
    protected function content($atts, $content=NULL){
        extract(shortcode_atts(array(
            'extra_class' => ""
        ), $atts));

        $result = '';


        $result = '<div class="swiper-container '.$extra_class.'" data-autoplay="5000" data-loop="0" data-speed="300" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                    <div class="swiper-wrapper">

                            '.do_shortcode($content).'
                        </div>
                        <div class="pagination"> </div>
                   </div>';

        return $result;
    }
}


vc_map( array(
    "name" => esc_html__("Service Carousel", 'nrgnetwork'),
    "description" => esc_html__("Service Container", 'nrgnetwork'),
    "show_settings_on_create" => false,
    'is_container' => true,
    "content_element" => true,
    "as_parent" => array("only" => "service"),
    "base" => "service_container",
    "icon" => "icon-wpb-quickload",
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    "params" => array(
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