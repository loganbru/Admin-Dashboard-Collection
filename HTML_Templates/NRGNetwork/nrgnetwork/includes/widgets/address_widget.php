<?php

class tt_AddressWidget extends WP_Widget {

    function __construct(){
        $widget_ops = array( 'classname' => 'widget_address', 'description' => 'Address Widget' );
        parent::__construct( false, ': Address Widget', $widget_ops );
    }
    

    function widget($args, $instance) {
        global $post;
        extract($args);
        extract(array_merge(array(
                    'title' => 'Contact Info',
                    'address' => 'NRRnetwork Worldwide Foundation 325/18 North 38th Str, Melbourne, VIC.',
                    'phone' => '(305) 533-110-99',
                    'email' => 'info@nrgnetwork.com',
                    'site' => 'http://themeton.com',
                        ), $instance));

        if (isset($before_widget))
            print($before_widget);

        if ($title != '')
            echo "" . $before_title . $title . $after_title;

        echo '<address>';
        echo ($address != '') ? '<p class="address" title="address">'.$address.'</p>' : '';
        echo ($phone != '') ? '<p title="phone">'.$phone.'</p>' : '';
        echo ($email != '') ? '<p title="email"><a href="mailto:'.esc_attr($email).'">'.$email.'</a></p>' : '';
        echo ($site != '') ? '<p title="web"><a href="'.esc_attr($site).'">'.$site.'</a></p>' : '';
        echo '</address>';
        
        if (isset($after_widget))
            print($after_widget);

    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['address'] = sanitize_text_field($new_instance['address']);
        $instance['phone'] = sanitize_text_field($new_instance['phone']);
        $instance['email'] = sanitize_text_field($new_instance['email']);
        $instance['site'] = strip_tags($new_instance['site']);

        return $instance;
    }

    function form($instance) {

        //Output admin widget options form
        extract(shortcode_atts(array(
                    'title' => 'Contact Info',
                    'address' => 'NRRnetwork Worldwide Foundation 325/18 North 38th Str, Melbourne, VIC.',
                    'phone' => '(305) 533-110-99',
                    'email' => 'info@nrgnetwork.com',
                    'site' => 'http://themeton.com',
                        ), $instance));
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e("Title:", 'nrgnetwork'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e("address:", 'nrgnetwork'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" value="<?php echo esc_attr($address); ?>"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e("phone:", 'nrgnetwork'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" value="<?php echo esc_attr($phone); ?>"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e("email:", 'nrgnetwork'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" value="<?php echo esc_attr($email); ?>"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('site')); ?>"><?php esc_html_e("website:", 'nrgnetwork'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('site')); ?>" name="<?php echo esc_attr($this->get_field_name('site')); ?>" value="<?php echo esc_attr($site); ?>"  />
        </p>

        <?php
    }

}

add_action('widgets_init', create_function('', 'return register_widget("tt_AddressWidget");'));
