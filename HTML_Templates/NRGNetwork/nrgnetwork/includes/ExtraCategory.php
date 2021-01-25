<?php

class CurrentThemeExtraCategory {

    public $colors = array("default", "red", "pink", "purple", "deep-purple", "indigo", "blue", "light-blue", "cyan", "teal", "green", "light-green", "lime", "yellow", "amber", "orange", "deep-orange", "brown", "grey", "blue-grey", "black", "white");
    public $colors_dark_light = array("default", "lighten-1", "lighten-2", "lighten-3", "lighten-4", "lighten-5", "darken-1", "darken-2", "darken-3", "darken-4");
    
    function __construct() {
        // Category extra fields
        add_action( 'category_add_form_fields', array($this, 'category_form_field'), 10 );
        add_action ( 'edit_category_form_fields', array($this, 'extra_category_fields'));
        
        /** Save Custom Field Of Category Form */
        add_action('created_category', array($this, 'category_form_save'));
        add_action('edited_category', array($this, 'category_form_save'));

        // Portfolio Category extra fields
        add_action( 'portfolio_entries_add_form_fields', array($this, 'category_form_field'), 10 );
        add_action ( 'portfolio_entries_edit_form_fields', array($this, 'extra_category_fields'));
        // Save Portfolio cats meta data
        add_action('create_portfolio_entries', array($this, 'category_form_save'));
        add_action('edited_portfolio_entries', array($this, 'category_form_save'));

        if( class_exists('WC_Product') ){
            // Product Category extra fields
            add_action( 'product_cat_add_form_fields', array($this, 'category_form_field'), 10 );
            add_action ( 'product_cat_edit_form_fields', array($this, 'extra_category_fields'));
            // Save Portfolio cats meta data
            add_action('create_product_cat', array($this, 'category_form_save'));
            add_action('edited_product_cat', array($this, 'category_form_save'));
        }

    }

    public function category_form_field(){
        echo '<div class="form-field">
                <label for="cat_meta[color]">Background Color</label>
                <select name="cat_meta[color]" id="cat_meta[color]">
                '. $this->get_select_options($this->colors, '') .'
                </select>
                <p class="description">Color for Category. This color will be use background color</p>
            </div>';

        echo '<div class="form-field">
                <label for="cat_meta[color_palette]">Color combination dark/light</label>
                <select name="cat_meta[color_palette]" id="cat_meta[color_palette]">
                '. $this->get_select_options($this->colors_dark_light, '') .'
                </select>
            </div>';

        /*
        echo '<div class="form-field">
                <label for="cat_meta[text_color]">Text color</label>
                <select name="cat_meta[text_color]" id="cat_meta[text_color]">
                '. $this->get_select_options(array('default', 'black', 'white'), '') .'
                </select>
            </div>';
        */
    }

    public function extra_category_fields($tag){
        $t_id = $tag->term_id;
        $cat_meta = get_option( "category_$t_id");

        echo '<tr class="form-field">
                <th scope="row" valign="top"><label for="cat_meta[color]">Background Color:</label></th>
                <td>
                    <select name="cat_meta[color]" id="cat_meta[color]">
                    '. $this->get_select_options($this->colors, $cat_meta['color'] ? $cat_meta['color'] : '') .'
                    </select>
                    <span class="description">Color for Category. This color will be use background color</span>
                </td>
            </tr>';

        echo '<tr class="form-field">
                <th scope="row" valign="top"><label for="cat_meta[color_palette]">Color combination dark/light:</label></th>
                <td>
                    <select name="cat_meta[color_palette]" id="cat_meta[color_palette]">
                    '. $this->get_select_options($this->colors_dark_light, $cat_meta['color_palette'] ? $cat_meta['color_palette'] : '') .'
                    </select>
                </td>
            </tr>';

        /*
        echo '<tr class="form-field">
                <th scope="row" valign="top"><label for="cat_meta[text_color]">Text Color:</label></th>
                <td>
                    <select name="cat_meta[text_color]" id="cat_meta[text_color]">
                    '. $this->get_select_options(array('default', 'black', 'white'), $cat_meta['text_color'] ? $cat_meta['text_color'] : '') .'
                    </select>
                </td>
            </tr>';
        */

    }

    public function get_select_options($options, $value){
        $result = '';
        foreach( $options as $op ){
            $sel = $op == $value ? "selected='selected'" : "";
            $result .= "<option value='$op' $sel>$op</option>";
        }
        return $result;
    }

    public function category_form_save( $term_id ){
        if ( isset( $_POST['cat_meta'] ) ) {
            $t_id = $term_id;
            $cat_meta = get_option( "category_$t_id");
            $cat_keys = array_keys($_POST['cat_meta']);
            foreach ($cat_keys as $key){
                if (isset($_POST['cat_meta'][$key])){
                    $cat_meta[$key] = $_POST['cat_meta'][$key];
                }
            }
            //save the option array
            update_option( "category_$t_id", $cat_meta );
        }
    }

}

new CurrentThemeExtraCategory();



?>