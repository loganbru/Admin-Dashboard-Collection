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

        // woocommerce_before_shop_loop_item
        add_action( 'woocommerce_before_shop_loop_item', array($this, 'before_shop_loop_item'), 0, 0 );
        add_action( 'woocommerce_after_shop_loop_item', array($this, 'after_shop_loop_item'), 99, 0 );
        
    }

    public function woo_page_title() {
        return false;
    }

    public function woo_pagination() {
        global $wp_query;
        echo '<div class="row pagination m0">';
            TPL::pagination($wp_query);
        echo '</div>';
    }

    public function wc_loop_shop_columns( $number_columns ){
        return 4;
    }


    public function ttwc_st_before_shop_loop_item_title($param){
        global $product;
        
        $id = get_the_ID();
        
        echo "<section>";

            $first_img = $this->gallery_first_thumbnail( $id , 'nrgnetwork-woo-thumb');
            if( has_post_thumbnail() ){
                $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'nrgnetwork-woo-thumb');
                echo "<img class='img-responsive' src='$fimage[0]'>";
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



    public function before_shop_loop_item(){
        global $product;

        $price_html = '';
        if ( $product->get_price_html() ){
            $price_html = $product->get_price_html();
        }

        ?>
        <div class="custom-column-x">
            <div class="be-post">

                <?php
                if( has_post_thumbnail() ){
                    $img_size = 'full';

                    $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-grid' );

                    echo '<a href="'.esc_url( get_permalink() ).'" class="be-img-block">'.$img.'</a>';
                }
                ?>
                
                <a href="<?php the_permalink(); ?>" class="be-post-title"><?php the_title(); ?></a>

                <span>
                    <?php echo $product->get_categories(', '); ?>
                </span>
                <div class="author-post">
                    <?php echo get_avatar( $product->post_author, 20 ); ?>
                    <span>by <a href="<?php echo TT_C::get_author_uri($product->post_author); ?>"><?php the_author(); ?></a></span>
                </div>
                <div class="info-block">
                    <span><i class="fa fa-thumbs-o-up"></i> <?php echo TT_C::get_likes(); ?></span>
                    <span><i class="fa fa-eye"></i> <?php echo TT_C::get_views(); ?></span>
                    <span><a href="<?php the_permalink(); ?>#be-comment-block"><i class="fa fa-comment-o"></i> <?php comments_number('0', '1', '%'); ?></a></span>
                </div>
            </div>
        </div>
        <?php

        echo '<div class="woo-item-content">';
    }

    public function after_shop_loop_item(){
        echo '</div>';
    }

}


if( class_exists( 'woocommerce' ) )
    new TT_WooCommerce();


function get_woo_cart_link(){
    if( class_exists( 'woocommerce' ) ){
        global $woocommerce;
        return '<a href="'.$woocommerce->cart->get_cart_url().'"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>';
    }
    return '';
}