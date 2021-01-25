<?php

/* set external sliders
=======================================*/
global $tt_sliders;
$tt_sliders = array("none" => 'No slider');
$tt_sliders = array_merge($tt_sliders, TT::get_sliders('layerslider'));
$tt_sliders = array_merge($tt_sliders, TT::get_sliders('revslider'));
$tt_sliders = array_merge($tt_sliders, TT::get_sliders('masterslider'));


require_once get_template_directory() . "/framework/classes/class.render.meta.fields.php";

class TTRenderMeta{
    public $items;

    function __construct(){
        $this->items = $this->items();
        add_action('admin_enqueue_scripts', array($this, 'print_admin_scripts'));
        add_action('add_meta_boxes', array($this, 'add_custom_meta'), 1);
        add_action('edit_post', array($this, 'save_post'), 99);
    }

    // admin enqueue scripts
    public function print_admin_scripts(){
        global $post_type;
        if ($post_type == '' || $post_type == NULL) {
            return;
        }
        wp_enqueue_style('render-meta', get_template_directory_uri() . '/framework/admin-assets/render.meta.css');
        wp_enqueue_script('render-meta', get_template_directory_uri() . '/framework/admin-assets/render.meta.js', false, false, true);
    }

    // meta items
    public function items(){
        return array();
    }

    // register meta items
    public function add_custom_meta(){
        foreach ($this->items as $key => $value) {
            $position = 'advanced';
            $priority = 'core';
            if ($value['post_type'] == 'post') {
                $position = 'normal';
                $priority = 'high';
            }
            add_meta_box(
                'pmeta_' . $key, $value['label'], array($this, 'render_meta_section'), $value['post_type'], $position, $priority, $value['items']
            );
        }
    }

    // rendering meta sections
    public function render_meta_section($post, $metabox){
        global $post;
        foreach ($metabox['args'] as $value) {
            
            if ($value['type'] == 'start_group') {
                $style = '';
                if(isset($value['visible']) && $value['visible'] == false){
                    $style = 'style="display:none;"';
                }
                echo '<div id="'.$value['name'].'" class="'.$value['name'].'" '.$style.'>';
            }
            elseif ($value['type'] == 'end_group') {
                echo '</div><!-- #'.$value['name'].' -->';
            }
            else {
                
                $data_dep = "";
                if( isset($value['dependency']) && is_array($value['dependency']) ){
                    $dep = $value['dependency'];
                    if( isset($dep['element'], $dep['value']) && !empty($dep['element']) && !empty($dep['value']) ){
                        $dep_el = $dep['element'];
                        $dep_val = is_array($dep['value']) ? implode(' ', $dep['value']) : $dep['value'];
                        $data_dep = "data-dependency='$dep_el' data-dep-value='$dep_val'";
                    }
                }

                echo "<div id='option_wrapper_" . $value['name'] . "' class='page_option_fieldset' $data_dep>";

                echo '<div class="meta-option-field">';
                    if( isset($value['label']) && $value['label'] != '' && !in_array($value['type'], array('checkbox1', 'colorpicker1', 'number1')) ){
                        echo "<div><label for='" . $value['name'] . "'>" . $value['label'] . "</label>";
                            if(isset($value['desc']) && !empty($value['desc'])) {
                                echo '<div class="field_description" style="max-width:90%">'.$value['desc'].'</div>';
                            }
                        echo "</div>";
                    }
                    echo "<div>";
                        echo "<div class='page_option_field'>".TTRenderMetaFields::getField($value)."</div>";
                    echo "</div>";
                echo '</div>';
                echo "<div style='clear:both;'></div></div>";
            }
        }
    }


    // save meta fields when saving post
    public function save_post($post_id){

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
            return $post_id;
        }

        if (isset($_GET['post_type']) && 'page' == $_GET['post_type']) {
            if (!current_user_can('edit_page', $post_id)){
                return $post_id;
            }
        }
        else {
            if (!current_user_can('edit_post', $post_id)){
                return $post_id;
            }
        }

        $field_name = array();
        foreach ($this->items as $key => $value) {
            foreach ($value['items'] as $item) {
                $field_name[] = $item['name'];
            }
        }

        foreach ($field_name as $field) {
            if (isset($_POST[$field])) {
                $data_field = '_' . $field;
                $data_value = $_POST[$field];

                if (count(get_post_meta($post_id, $data_field)) == 0) {
                    add_post_meta($post_id, $data_field, trim($data_value), true);
                } elseif ($data_value != get_post_meta($post_id, $data_field, true)) {
                    update_post_meta($post_id, $data_field, trim($data_value));
                } elseif ($data_value == "") {
                    delete_post_meta($post_id, $data_field, trim(get_post_meta($post_id, $data_field, true)));
                }
            }
        }
    }
}