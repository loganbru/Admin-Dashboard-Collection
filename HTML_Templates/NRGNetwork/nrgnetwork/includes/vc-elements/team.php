<?php

class WPBakeryShortCode_Team_Item extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract( shortcode_atts( array(
            "name" => 'Marcus Finderman',
            "position" => 'Art Director, Creative Designer',
            "image" => '',
            "link" => '#',
            "social_facebook" => "",
            "social_twitter" => "",
            "social_google" => "",
            "social_linkedin" => "",
            "social_instagram" => "",
            "extra_class" => ""
        ), $atts ) );

        $image = wp_get_attachment_image($image, 'team-member');

        $socials = '';
        $socials .= $social_facebook == '' ? '' : '<a href="'.$social_facebook.'"><i class="fa fa-facebook"></i></a>';
        $socials .= $social_twitter == '' ? '' : '<a href="'.$social_twitter.'"><i class="fa fa-twitter"></i></a>';
        $socials .= $social_google == '' ? '' : '<a href="'.$social_google.'"><i class="fa fa-google-plus"></i></a>';
        $socials .= $social_linkedin == '' ? '' : '<a href="'.$social_linkedin.'"><i class="fa fa-linkedin"></i></a>';
        $socials .= $social_instagram == '' ? '' : '<a href="'.$social_instagram.'"><i class="fa fa-instagram"></i></a>';

        $result = '<div class="team-entry">
                            <a href="'.$link.'">'.$image.'</a>
                            <h4 class="team-name">'.$name.'</h4>
                            <div class="team-position be-post-tag">
                                <a href="'.$link.'" class="be-post-tag">'.$position.'</a>
                            </div>
                            <div class="team-social">
                                '.$socials.'
                            </div>
                        </div>';

        return $result;
    }
}

vc_map( array(
            "name" => esc_html__("Team member", 'nrgnetwork'),
            "description" => esc_html__("", 'nrgnetwork'),
            "base" => "team_item",
            "icon" => "icon-wpb-quickload",
            "category" => esc_html__('Themeton', 'nrgnetwork'),
            "content_element" => true,
            "params" => array(
                array(
                    'type' => 'textfield',
                    "param_name" => "name",
                    "heading" => esc_html__("Name", 'nrgnetwork'),
                    "value" => 'Marcus Finderman',
                    "holder" => 'div'
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "position",
                    "heading" => esc_html__("Position", 'nrgnetwork'),
                    "value" => 'Art Director, Creative Designer'
                ),
                array(
                    'type' => 'attach_image',
                    "param_name" => "image",
                    "heading" => esc_html__("Image Image", 'nrgnetwork'),
                    "value" => ''
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "link",
                    "heading" => esc_html__("Profile Link", 'nrgnetwork'),
                    "value" => ''
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "social_facebook",
                    "heading" => esc_html__("Facebook", 'nrgnetwork'),
                    "value" => ''
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "social_twitter",
                    "heading" => esc_html__("Twitter", 'nrgnetwork'),
                    "value" => ''
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "social_google",
                    "heading" => esc_html__("Google+", 'nrgnetwork'),
                    "value" => ''
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "social_linkedin",
                    "heading" => esc_html__("Linkedin", 'nrgnetwork'),
                    "value" => ''
                ),
                array(
                    'type' => 'textfield',
                    "param_name" => "social_instagram",
                    "heading" => esc_html__("Instagram", 'nrgnetwork'),
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
