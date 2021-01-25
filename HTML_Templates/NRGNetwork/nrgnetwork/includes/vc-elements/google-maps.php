<?php

class WPBakeryShortCode_Google_Map extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "lat" => '40.7797115',
            "lng" => '-74.1755574',
            "color" => '',
            "saturation" => "-100",
            "zoom" => '13',
            "map_height" => '400',
            "marker" => ''
        ), $atts ) );

        wp_enqueue_script( 'tt-google-map', '//maps.googleapis.com/maps/api/js?sensor=false&amp;language=en');
        wp_enqueue_script( 'tt-google-map-config', get_template_directory_uri() . '/includes/vc-elements/google-maps.js', false, false, true );

        $image_src = !empty($marker) ? wp_get_attachment_image_src($marker, 'thumbnail') : '';
        $marker = !empty($image_src) ? $image_src[0] : '';

        $map_height = abs($map_height) . "px";

        $result = "<div id='gmap_".uniqid()."' style='height:$map_height; width: 100%;' class='tt-google-map' data-lat='$lat' data-lng='$lng' data-color='$color' data-saturation='$saturation' data-zoom='$zoom' data-marker='$marker'></div>";

        return $result;
    }
}

vc_map( array(
    "name" => __("Google Map", 'nrgnetwork'),
    "description" => esc_html__("Google Maps Latitude, Longitude", 'nrgnetwork'),
    "base" => "google_map",
    "class" => "",
    "icon" => "icon-wpb-themeton",
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    "show_settings_on_create" => true,
    "params" => array(
        array(
            'type' => 'textfield',
            "param_name" => "lat",
            "heading" => esc_html__("Latitude", 'nrgnetwork'),
            "value" => '-37.831208'
        ),
        array(
            'type' => 'textfield',
            "param_name" => "lng",
            "heading" => esc_html__("Longitude", 'nrgnetwork'),
            "value" => '144.998499'
        ),
        array(
            'type' => 'colorpicker',
            "param_name" => "color",
            "heading" => esc_html__("Hue Color", 'nrgnetwork'),
            "value" => '',
        ),
        array(
            'type' => 'textfield',
            "param_name" => "saturation",
            "heading" => esc_html__("Saturation", 'nrgnetwork'),
            "value" => '-100',
            "description" => '(a floating point value between -100 and 100)'
        ),
        array(
            'type' => 'textfield',
            "param_name" => "zoom",
            "heading" => esc_html__("Zoom", 'nrgnetwork'),
            "value" => '15',
            "description"  => 'Zoom levels 0 to 18'
        ),
        array(
            'type' => 'textfield',
            "param_name" => "map_height",
            "heading" => esc_html__("Height", 'nrgnetwork'),
            "value" => '400'
        ),
        array(
            'type' => 'attach_image',
            "param_name" => "marker",
            "heading" => esc_html__("Marker Image", 'nrgnetwork'),
            "value" => ''
        )

    )
) );