<?php

function register_wp_customizer_controls($wp_customize){

    /* WP Customizer TT_Customize_Control
    ======================================================*/
    class TT_Customizer_Control extends WP_Customize_Control{
        public $type    = 'media';
        
        /**
        * Enqueue control related scripts/styles.
        *
        * @since 3.4.0
        */
        public function enqueue() {
            wp_enqueue_media();
        }

        /**
        * Refresh the parameters passed to the JavaScript via JSON.
        *
        * @since 3.4.0
        * @uses WP_Customize_Control::to_json()
        */
        public function to_json() {
            parent::to_json();
        }
    }

    
    /* Define Customizer Image Control
    ======================================================*/
    class TT_Customizer_Image_Control extends TT_Customizer_Control{
        public $type    = 'single_image';

        public function render_content() {
            $src = $this->value();
            if ( isset( $this->get_url ) )
                $src = call_user_func( $this->get_url, $src );

            ?>
            <label class="tt-customizer-control customizer-media-label">
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
                <div class="customizer-media-manager">
                    <span class="media-manager-thumb open-media-manager" data-controller="<?php echo esc_attr($this->id); ?>" style="background-image:url(<?php echo esc_attr($src); ?>);"></span>
                    <br>
                    <a href="#" class="remove"><?php esc_html_e('Remove', 'nrgnetwork'); ?></a>
                </div>
            </label>
            <?php
        }
    }



    /* Define Customizer Background Image Control
    ======================================================*/
    class TT_Customizer_Bg_Image_Control extends TT_Customizer_Control{
        public $type    = 'bg_image';

        public function render_content() {
            $value = $this->value();
            $op_value = explode("|", $value);
            $bg = "";
            $bg_repeat = "repeat";
            $bg_pos = "top left";
            $bg_attach = "scroll";
            if( count($op_value)>3 ){
                $bg = $op_value[0];
                $bg_repeat = $op_value[1];
                $bg_pos = $op_value[2];
                $bg_attach = $op_value[3];
            }

            ?>
            <label class="tt-customizer-control customizer-media-label">
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
                <div class="customizer-media-manager customizer-media-bg">
                    <span class="media-manager-thumb open-media-manager" data-controller="<?php echo esc_attr($this->id); ?>" data-value="<?php echo esc_attr($bg); ?>" style="background-image:url(<?php echo esc_attr($bg); ?>);"></span>
                    <br>
                    <a href="#" class="remove"><?php esc_html_e('Remove', 'nrgnetwork'); ?></a>
                    <span class="customizer-bg-options">
                        <select class="customizer-bg-repeat" data-value="<?php echo esc_attr($bg_repeat); ?>">
                            <option value="repeat">Repeat</option>
                            <option value="repeat-x">Repeat-X</option>
                            <option value="repeat-y">Repeat-Y</option>
                            <option value="no-repeat">No Repeat</option>
                            <option value="cover">Cover</option>
                            <option value="contain">Contain</option>
                        </select>
                        <select class="customizer-bg-position" data-value="<?php echo esc_attr($bg_pos); ?>">
                            <option value="top left">Top &amp; Left</option>
                            <option value="top center">Top &amp; Center</option>
                            <option value="top right">Top &amp; Right</option>
                            <option value="center left">Center &amp; Left</option>
                            <option value="center center">Center &amp; Center</option>
                            <option value="center right">Center &amp; Right</option>
                            <option value="bottom left">Bottom &amp; Left</option>
                            <option value="bottom center">Bottom &amp; Center</option>
                            <option value="bottom right">Bottom &amp; Right</option>
                        </select>
                        <select class="customizer-bg-attach" data-value="<?php echo esc_attr($bg_attach); ?>">
                            <option value="scroll">Scroll</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </span>
                </div>
            </label>
            <?php
        }
    }




    /* Define Customizer Switcher Control
    ======================================================*/
    class TT_Customizer_Switch_Control extends TT_Customizer_Control{
        public $type    = 'switch';

        public function render_content() {
            $value = $this->value();

            ?>
            <label class="tt-customizer-control tt-customize-control-switch">
                <div class="tt-customizer-control-content tt-customizer-switcher">
                    <?php if ( ! empty( $this->label ) ) : ?>
                        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <?php endif; ?>
                    <div class="checkbox-switcher-container">
                        <span class="checkbox_switcher <?php echo esc_attr($value=='1' ? 'on' : ''); ?>" data-controller="<?php echo esc_attr($this->id); ?>">
                            <span class="handle"></span>
                        </span>
                    </div>
                </div>
                <?php if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
            </label>
            <?php
        }
    }




    /* Define Customizer Sub Title Control
    ======================================================*/
    class TT_Customizer_Sub_Title_Control extends TT_Customizer_Control{
        public $type    = 'sub_title';

        public function render_content() {
            ?>
            <label class="tt-customizer-control tt-customizer-sub-title">
                <div class="tt-customizer-control-content">
                    <?php if ( ! empty( $this->label ) ) : ?>
                        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <?php endif; ?>
                </div>
                <?php if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
            </label>
            <?php
        }
    }





    /* Define Customizer Font Set Control
    ======================================================*/
    class TT_Customizer_Font_Control extends TT_Customizer_Control{
        public $type    = 'font';

        public function render_content() {
            $value = $this->value();

            $family = "<option value='default'>Default</option>";
            $fonts = TT::google_fonts();
            foreach ($fonts as $font) {
                $family .= "<option value='". $font['family'] ."'>". $font['family'] ."</option>";
            }

            ?>
            <label class="tt-customizer-control customizer-font-label">
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
                <select class="customizer-select-box customizer-font-family" data-controller="<?php echo esc_attr($this->id); ?>" data-value="<?php echo esc_attr($value); ?>">
                    <?php print($family); ?>
                </select>
            </label>
            <?php
        }
    }



    /* Define Customizer Font Set Control
    ======================================================*/
    class TT_Customizer_Font_Set_Control extends TT_Customizer_Control{
        public $type    = 'font_set';

        public function render_content() {
            $value = $this->value();
            $splited = TT::get_option_array($value);
            $values = array_values($splited);
            $key_values = array_keys($splited);

            $font_family = isset($values[0]) ? $values[0] : '';
            $font_size = isset($values[1]) ? $values[1] : '12';
            $font_weight = isset($values[2]) ? $values[2] : '400';

            $key1 = isset($key_values[0]) ? $key_values[0] : '';
            $key2 = isset($key_values[1]) ? $key_values[1] : '';
            $key3 = isset($key_values[2]) ? $key_values[2] : '';

            $family = "<option value='default'>Default</option>";
            $fonts = TT::google_fonts();
            foreach ($fonts as $font) {
                $family .= "<option value='". $font['family'] ."'>". $font['family'] ."</option>";
            }

            $sizes = '';
            for( $i=6; $i<=100; $i++ ){
                $sizes .= "<option value='".$i."px'>".$i."px</option>";
            }

            ?>
            <label class="tt-customizer-control customizer-font-set-label">
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
                <div class="tt-customizer-control-content tt-customizer-font-set" data-controller="<?php echo esc_attr($this->id); ?>">
                    <select class="customizer-select-box customizer-font-family" data-value="<?php echo esc_attr($font_family); ?>" data-key="<?php echo esc_attr($key1); ?>">
                        <?php print($family); ?>
                    </select>
                    <select class="customizer-select-box customizer-font-size" data-value="<?php echo esc_attr($font_size); ?>" data-key="<?php echo esc_attr($key2); ?>">
                        <?php print($sizes); ?>
                    </select>
                    <select class="customizer-select-box customizer-font-weight" data-value="<?php echo esc_attr($font_weight); ?>" data-key="<?php echo esc_attr($key3); ?>">
                        <option value="100">Ultra Light</option>
                        <option value="300">Book</option>
                        <option value="400">Regular</option>
                        <option value="700">Bold</option>
                        <option value="900">Ultra Bold</option>
                    </select>
                </div>
            </label>
            <?php
        }
    }




    /* Define Customizer Import/Export for Backup Control
    ======================================================*/
    class TT_Customizer_Backup_Control extends TT_Customizer_Control{
        public $type    = 'backup';

        public function render_content() {
            // $value = $this->value();

            $settings = array();
            $items = tt_customizer_options();
            foreach ($items as $panel) {
                if( isset($panel['type']) && $panel['type']=="section" ){
                    foreach ($panel['controls'] as $control){
                        $settings[$control['id']] = TT::get_mod($control['id'], $control['default']);
                    }
                }
                else{
                    foreach ($panel['sections'] as $section){
                        foreach ($section['controls'] as $control){
                            $settings[$control['id']] = TT::get_mod($control['id'], $control['default']);
                        }
                    }
                }
            }

            $options = urlencode( serialize($settings) );


            ?>
            <label class="tt-customizer-control customizer-backup-label">
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
                <div class="tt-customizer-control-content tt-customizer-font-set" data-controller="<?php echo esc_attr($this->id); ?>">
                    <textarea id="customizer_backup_control" readonly="readonly"><?php print($options); ?></textarea>
                </div>
            </label>
            <?php
        }
    }



    /* Define Customizer Import/Export for Backup Control
    ======================================================*/
    class TT_Customizer_Import_Control extends TT_Customizer_Control{
        public $type    = 'import';

        public function render_content() {
            // $value = $this->value();

            ?>
            <label class="tt-customizer-control customizer-import-label">
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
                <div class="tt-customizer-control-content tt-customizer-font-set" data-controller="<?php echo esc_attr($this->id); ?>">
                    <textarea id="customizer_import_control"></textarea>
                    <span style="display:block; text-align:right;">
                        <span class="customizer-option-loading dashicons dashicons-update" style="visibility:hidden;"></span>
                        <a href="javascript:;" id="customizer_options_import" class="button button-primary">Import Options</a>
                    </span>
                </div>
            </label>
            <?php
        }
    }



    /* Define Customizer Number Control
    ======================================================*/
    class TT_Customizer_Number_Pixel_Control extends TT_Customizer_Control{
        public $type    = 'pixel';

        public function render_content() {
            $value = $this->value();
            $val = (int)str_replace("px", "", $value);

            ?>
            <label class="tt-customizer-control customizer-number-pixel-label">
                <span class="customizer-control-wrapper">
                    <?php if ( ! empty( $this->label ) ) : ?>
                        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <?php endif; ?>
                    <span class="customizer-number-pixels">
                        <input type="text" class="customizer-control-number" value="<?php echo esc_attr($val); ?>" data-controller="<?php echo esc_attr($this->id); ?>">
                    </span>
                </span>
                
                <?php if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo balanceTags($this->description); ?></span>
                <?php endif; ?>
            </label>
            <?php
        }
    }


}
add_action( 'customize_register', 'register_wp_customizer_controls' );