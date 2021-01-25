<?php
class TT_WooCommerce{
    public $size = 'woo-item';

    function __construct(){
        add_theme_support( 'woocommerce' );

        add_filter('woocommerce_show_page_title', array($this, 'woo_page_title'));

        /* WOO PAGINATION HOOK
        =============================================*/
        remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
        add_action( 'woocommerce_after_shop_loop', array($this, 'woo_pagination'), 10);

        add_filter( 'loop_shop_columns', array($this, 'wc_loop_shop_columns'), 1, 10 );

        add_action( 'woocommerce_before_shop_loop_item_title', array($this, 'ttwc_st_before_shop_loop_item_title'), 10);
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
        
    }

    public function woo_page_title() {
        return false;
    }

    public function woo_pagination() {
        global $wp_query;
        echo '<div class="nav-pagination">';
            TPL::pagination($wp_query);
        echo '</div>';
    }

    public function wc_loop_shop_columns( $number_columns ){
        return 3;
    }


    public function ttwc_st_before_shop_loop_item_title($param){
        global $product;
        
        $id = get_the_ID();
        
        echo "<section>";

            $first_img = $this->gallery_first_thumbnail( $id , 'nrgnetwork-woo-thumb');
            if( has_post_thumbnail() ){
                $fimage = wp_get_attachment_image(get_post_thumbnail_id($id), 'nrgnetwork-woo-thumb', false, array('class'=>'img-responsive'));
                print($fimage);
            }
            
        echo "</section>";
    }


    public function gallery_first_thumbnail($id, $size){
        $active_hover = true;

        if(!empty($active_hover)){
            $product_gallery = get_post_meta( $id, '_product_image_gallery', true );
            
            if(!empty($product_gallery)){
                $gallery    = explode(',',$product_gallery);
                $image_id   = $gallery[0];
                $image      = wp_get_attachment_image_src( $image_id, $size );
                
                if(!empty($image)) return $image;
            }
        }
        return '';
    }

}


if( class_exists( 'woocommerce' ) )
    new TT_WooCommerce();


function get_woo_cart_link(){
    if( class_exists( 'woocommerce' ) ){
        global $woocommerce;
        return '<a href="'.esc_url($woocommerce->cart->get_cart_url()).'"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>';
    }
    return '';
}