<?php

class tt_SocialLinksWidget extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_social', 'description' => 'Displays your social profile.');

        parent::__construct(false, ': Social Links', $widget_ops);
    }

    function widget($args, $instance) {
        extract($args);
        global $nrgnetwork_social_icons;
        $title = apply_filters('widget_title', $instance['title']);
        print($before_widget);
        if ($title)
            echo "$before_title $title $after_title";
        
        echo '<ul class="soc_buttons">';
        foreach ($nrgnetwork_social_icons as $social => $icon) {
            if (isset($instance['social_' . $social]) && $instance['social_' . $social] != "") {
                $url = $instance['social_' . $social];
                if($url != '#!' && $url != '#') {
                    if($social != 'email' && $social != 'skype') {
                        if(strpos($url, 'http:') === false) $url = "http://" . $url;
                    } elseif($social == 'email') {
                        $url = 'mailto:' . $url . '?subject=' . get_bloginfo('name') . '&body=Your message here!';
                    } elseif($social != 'skype') {
                        $url = $url;
                    }
                }                
                if(function_exists("vc_icon_element_fonts_enqueue")) {
                    // Enqueue needed icon font.
                    vc_icon_element_fonts_enqueue( 'fontawesome' );
                }
                echo '<li><a href="'.esc_url($url).'"><i  class="social-'.$social.' fa fa-'.$icon.'"></i></a></li>';
            }
        }
        echo '</ul>';

        print($after_widget);
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        global $nrgnetwork_social_icons;
        /* Strip tags (if needed) and update the widget settings. */
        $instance['title'] = sanitize_text_field($new_instance['title']);
        foreach ($nrgnetwork_social_icons as $social => $icon) {
            $instance['social_' . $social] = sanitize_text_field($new_instance['social_' . $social]);
        }
        return $instance;
    }

    function form($instance) {
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">Widget Title:</label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr(isset($instance['title']) ? $instance['title'] : ''); ?>"  />
        </p>
        <?php
        global $nrgnetwork_social_icons;
        foreach ($nrgnetwork_social_icons as $social => $icon) { ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('social_' . $social)); ?>"><?php echo ucwords($social); ?></label>
                <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('social_' . $social)); ?>" name="<?php echo esc_attr($this->get_field_name('social_' . $social)); ?>" value="<?php echo esc_attr(isset($instance['social_' . $social]) ? $instance['social_' . $social] : ''); ?>"  />
            </p>
            <?php
        }
    }

}

add_action('widgets_init', create_function('', 'return register_widget("tt_SocialLinksWidget");'));
?>
