<?php
class Extend_VC_Row{

    function __construct(){
        add_action('init', array($this, 'row_init'));

        if(defined('WPB_VC_VERSION') && version_compare( WPB_VC_VERSION, '4.4', '>=' )) {
            add_filter('vc_shortcode_output', array($this, 'vc_shortcode_output'),10,3);
        }

        add_filter( 'vc_shortcodes_css_class', array($this, 'custom_css_classes_for_vc'), 10, 2 );
    }

    
    // Filter to replace default css class names
    function custom_css_classes_for_vc( $class_string, $tag ) {
        if( $tag == 'vc_row' || $tag == 'vc_row_inner' ){  }
        if( $tag == 'vc_column' || $tag == 'vc_column_inner' ){  }
        return $class_string;
    }


    public function vc_shortcode_output($output, $obj, $attr){
        if($obj->settings('base')=='vc_row') {
            if( isset($attr['vc_row_overlay'], $attr['vc_row_overlay_color'], $attr['vc_row_overlay_alpha']) && $attr['vc_row_overlay']=='yes' && !empty($attr['vc_row_overlay_color']) ){
                $data_attr = ' data-overlay="'.$attr['vc_row_overlay_color'].'"';
                $data_attr .= ' data-overlay-alpha="'.$attr['vc_row_overlay_alpha'].'"';
                $output = preg_replace('/ class="vc_row /', $data_attr . ' class="vc_row ', $output, 1);
            }

            if( isset($attr['one_page_section'], $attr['one_page_label']) && $attr['one_page_section']=='yes' && !empty($attr['one_page_label']) ){
                $slug = isset($attr['one_page_slug']) ? $attr['one_page_slug'] : '';
                if( empty($slug) ){
                    $slug = TT::create_slug($attr['one_page_label']);
                }
                $data_attr = ' data-onepage-title="'.$attr['one_page_label'].'"';
                $data_attr .= ' data-onepage-slug="'.$slug.'"';
                $output = preg_replace('/ class="vc_row /', $data_attr . ' class="vc_row ', $output, 1);
            }

            return $output;
        }
        else if($obj->settings('base')=='vc_column'){
            if( array_key_exists("vertical_align", $attr) && !empty($attr["vertical_align"]) && $attr["vertical_align"]!='none' ){
                $align = isset($attr["horizontal_align"]) && $attr["horizontal_align"]!='none' ? $attr["horizontal_align"] : 'left';
                return "<div class='vc-col-option' data-valign='".$attr["vertical_align"]."' data-align='".$align."'></div>" . $output;
            }
        }

        return $output;
    }



    public function row_init(){
        if( function_exists('vc_add_param') ){

            
            // Row overlay
            vc_add_param('vc_row', array(
                "type" => "dropdown",
                "heading" => esc_html__("Overlay", 'nrgnetwork'),
                "param_name" => "vc_row_overlay",
                "value" => array(
                        esc_html__("No", 'nrgnetwork') => "no",
                        esc_html__("Yes", 'nrgnetwork') => "yes",
                    )
            ));

            vc_add_param('vc_row', array(
                "type" => "colorpicker",
                "heading" => esc_html__("Overlay Color", 'nrgnetwork'),
                "param_name" => "vc_row_overlay_color",
                "value" => "",
                "dependency" => Array("element" => "vc_row_overlay", "value" => array("yes"))
            ));

            vc_add_param('vc_row', array(
                "type"      => "textfield",
                "heading"   => esc_html__("Overlay Opacity", 'nrgnetwork'),
                "param_name" => "vc_row_overlay_alpha",
                "value"     => "",
                "dependency" => Array("element" => "vc_row_overlay", "value" => array("yes"))
            ));
            

            /*
            // Row One page option
            vc_add_param('vc_row', array(
                "type" => "dropdown",
                "heading" => esc_html__("One Page Section", 'nrgnetwork'),
                "param_name" => "one_page_section",
                "value" => array(
                        esc_html__("No", 'nrgnetwork') => "no",
                        esc_html__("Yes", 'nrgnetwork') => "yes",
                    )
            ));

            vc_add_param('vc_row', array(
                "type" => "textfield",
                "heading" => esc_html__("Section Label", 'nrgnetwork'),
                "param_name" => "one_page_label",
                "value" => "",
                "dependency" => Array("element" => "one_page_section", "value" => array("yes"))
            ));

            vc_add_param('vc_row', array(
                "type" => "textfield",
                "heading" => esc_html__("Section slug", 'nrgnetwork'),
                "description" => esc_html__("Don't need hash tag (#). You can apply a custom link to redirect.", 'nrgnetwork'),
                "param_name" => "one_page_slug",
                "value" => "",
                "dependency" => Array("element" => "one_page_section", "value" => array("yes"))
            ));
            */
            
            

        
            // Column
            vc_add_param('vc_column', array(
                "type" => "dropdown",
                "heading" => esc_html__("Horizontal Alignment", 'nrgnetwork'),
                "param_name" => "horizontal_align",
                "value" => array(
                        esc_html__("None", 'nrgnetwork') => "none",
                        esc_html__("Left", 'nrgnetwork') => "left",
                        esc_html__("Center", 'nrgnetwork') => "center",
                        esc_html__("Right", 'nrgnetwork') => "right"
                    )
            ));
            vc_add_param('vc_column', array(
                "type" => "dropdown",
                "heading" => esc_html__("Vertical Alignment", 'nrgnetwork'),
                "param_name" => "vertical_align",
                "value" => array(
                        esc_html__("None", 'nrgnetwork') => "none",
                        esc_html__("Top", 'nrgnetwork') => "top",
                        esc_html__("Middle", 'nrgnetwork') => "middle",
                        esc_html__("Bottom", 'nrgnetwork') => "bottom"
                    )
            ));

            
        }
    }
}

if( function_exists('vc_map') ){
    new Extend_VC_Row();
}
