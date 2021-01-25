<?php

class WPBakeryShortCode_Stat extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "icon_type" => 'icon_font',
            "number" => '535',
            "icon" => "fa fa-smile-o",
            "title" => 'PROJECT APPRECIATIONS',
            "image" => '',
            "extra_class" => ""
        ), $atts ) );

        $icon_markup = '';

        if($icon_type == 'icon_image') {
            $icon_markup_src = wp_get_attachment_image_src($image);
            $icon_markup = $icon_markup_src[0];
        }

        $image_src = $icon_type == 'icon_font' ? "<i class='$icon'></i>" : "<img src='".$icon_markup."'>";

        $result = '<div class="stat-entry">
                        '.$image_src.'
                        <div class="stat-number">'.$number.'</div>
                        <div class="stat-text">'.$title.'</div>
                    </div>';

        return $result;
    }
}

vc_map( array(
            "name" => esc_html__("Status", 'nrgnetwork'),
            "description" => esc_html__("Statistic Nubmers", 'nrgnetwork'),
            "base" => "stat",
            "icon" => "icon-wpb-quickload",
            "category" => esc_html__('Themeton', 'nrgnetwork'),
            "content_element" => true,
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
                    "param_name" => "number",
                    "heading" => esc_html__("Number", 'nrgnetwork'),
                    "value" => '535',
                    "holder" => 'div'
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "title",
                    "heading" => esc_html__("Title", 'nrgnetwork'),
                    "value" => 'PROJECT APPRECIATIONS',
                    "holder" => 'div'
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
