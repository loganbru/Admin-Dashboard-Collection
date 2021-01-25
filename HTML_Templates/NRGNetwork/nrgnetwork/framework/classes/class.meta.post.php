<?php

class ThemetonMetaPost extends TTRenderMeta{

    function __construct(){
        $this->items = $this->items();
        add_action('admin_enqueue_scripts', array($this, 'print_admin_scripts'));
        add_action('add_meta_boxes', array($this, 'add_custom_meta'), 1);
        add_action('edit_post', array($this, 'save_post'), 99);

        // support post formats
        add_theme_support('post-formats', array('image', 'gallery', 'link', 'video', 'audio', 'chat', 'status', 'quote', 'aside'));

        // if( TT::admin_post_type()=="post" ){
            add_action('admin_enqueue_scripts', array($this, 'print_scripts_post'));
        // }

        add_action( 'add_meta_boxes', array($this, 'post_meta_boxes') );
    }

    // print admin scripts
    public function print_scripts_post($hook) {
        if( TT::admin_post_type()!='post' ){
            return;
        }
    }


    // post gallery
    public function post_images_box() {
        global $post;
        ?>
        <div id="post_images_container">
            <ul class="post_images">
                <?php
                    if ( metadata_exists( 'post', $post->ID, '_format_gallery_images' ) ) {
                        $product_image_gallery = get_post_meta( $post->ID, '_format_gallery_images', true );
                    } else {
                        // Backwards compat
                        $attachment_ids = get_posts( 'post_parent=' . $post->ID . '&posts_per_page=-1&post_type=attachment&orderby=menu_order&order=ASC&post_mime_type=image&fields=ids&meta_key=_woocommerce_exclude_image&meta_value=0' );
                        $attachment_ids = array_diff( $attachment_ids, array( get_post_thumbnail_id() ) );
                        $product_image_gallery = implode( ',', $attachment_ids );
                    }

                    $attachments = array_filter( explode( ',', $product_image_gallery ) );

                    if ( $attachments )
                        foreach ( $attachments as $attachment_id ) {
                            echo '<li class="image" data-attachment_id="' . $attachment_id . '">
                                ' . wp_get_attachment_image( $attachment_id, 'thumbnail' ) . '
                                <ul class="actions">
                                    <li><a href="#" class="delete" title="' . esc_html__('Delete image', 'nrgnetwork') . '">' . esc_html__('Delete', 'nrgnetwork') . '</a></li>
                                </ul>
                            </li>';
                        }
                ?>
            </ul>

        </div>
        <p class="add_post_images hide-if-no-js">
            <a href="#"><?php esc_html_e('Add post gallery images', 'nrgnetwork'); ?></a>
        </p>
        <?php
    }

    public function post_meta_boxes(){
        global $post;
        add_meta_box( 'post-images', esc_html__('Post Gallery', 'nrgnetwork'), array($this, 'post_images_box'), 'post', 'side' );
    }

    // meta fields
    public function items(){
        
        $tmp_arr = array();
        if (!function_exists('the_post_format_audio')) {
            $tmp_arr_format = array(
                'post_format' => array(
                    'label' => 'Post Format',
                    'post_type' => 'post',
                    'items' => array(
                        array(
                            'name' => 'post_format',
                            'realname' => '1',
                            'type' => 'text',
                            'label' => 'Post Format',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_image',
                            'realname' => '1',
                            'type' => 'textarea',
                            'label' => 'Post Format Image',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_video_embed',
                            'realname' => '1',
                            'type' => 'textarea',
                            'label' => 'Post Format Video',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_audio_embed',
                            'realname' => '1',
                            'type' => 'textarea',
                            'label' => 'Post Format Audio',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_link_url',
                            'realname' => '1',
                            'type' => 'text',
                            'label' => 'Post Format Link',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_quote_text',
                            'realname' => '1',
                            'type' => 'text',
                            'label' => 'Blockquote',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_quote_source_name',
                            'realname' => '1',
                            'type' => 'text',
                            'label' => 'Post Format Quote Source',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_quote_source_url',
                            'realname' => '1',
                            'type' => 'text',
                            'label' => 'Post Format Quote url',
                            'default' => ''
                        ),
                        array(
                            'name' => 'format_gallery_images',
                            'realname' => '1',
                            'type' => 'text',
                            'label' => 'Post Gallery',
                            'default' => ''
                        )
                    )
                )
            );
            $tmp_arr = array_merge($tmp_arr, $tmp_arr_format);
        }

        return $tmp_arr;

    }
}

//new ThemetonMetaPost();