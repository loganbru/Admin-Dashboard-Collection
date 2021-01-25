<?php

class TPL{

    public static function post_thumbnail(){
        global $post;
        if ( post_password_required() ){
            return;
        }

        $media = TPL::get_post_media();
        if( !empty($media) )
            echo "<div class='card-image'>$media</div>";
    }


    public static function get_post_thumb(){
        global $post;

        $result = '';
        if( has_post_thumbnail() ){
            $img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
            $result = '<div class="post_thumbnail_row">
                            <a href="'.esc_url(get_permalink()).'">
                                <img src="'.esc_attr($img).'" alt="" class="img-responsive">
                            </a>
                        </div>';
        }

        return $result;
    }


    public static function get_post_media($size = 'nrgnetwork-post-thumb'){
        global $post;

        if( has_post_thumbnail() ){
            $img = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), $size, false, array('class'=>'img-full') );
            return '<a class="post-preview post-image" href="'.esc_url(get_permalink()).'">
                        '.$img.'
                      </a>';
        }

        $media = '';

        $format = get_post_format();
        if ( current_theme_supports( 'post-formats', $format ) ) {
            if( $format=='quote' ){
                preg_match("/<blockquote>(.)*<\/blockquote>/msi", get_the_content(), $matches);
                if( isset($matches[0]) && !empty($matches[0]) ){
                    $quote = $matches[0];
                    $quote = str_replace('<cite', '<footer><cite', $quote);
                    $quote = str_replace('</cite>', '</cite></footer>', $quote);
                }
                $media = "<div class='post-preview'>$quote</div>";
            }
            else if( $format=='gallery' && has_shortcode($post->post_content, 'gallery') ){
                $gallery = get_post_gallery( get_the_ID(), false );
                $ids = explode(",", isset($gallery['ids']) ? $gallery['ids'] : "");

                $gallery_id = uniqid();
                $gallery = '';
                $indicators = '';
                $indx = 0;
                foreach ($ids as $gid) {
                    $img = wp_get_attachment_image( $gid, 'nrgnetwork-gallery-image', false, array('class'=>'img-responsive') );
                    $gallery .= "<div class='swiper-slide'>$img</div>";
                    $indx++;
                }

                $media = !empty($gallery) ? "<div class='post-preview'>
                                                <div class='swiper-container simple-slider' data-autoplay='0' data-loop='1' data-speed='500' data-center='0' data-slides-per-view='1'>
                                                    <div class='swiper-wrapper'>
                                                        $gallery
                                                    </div>
                                                    <div class='pagination'></div>
                                                    <div class='swiper-arrow-left'></div>
                                                    <div class='swiper-arrow-right'></div>
                                                </div>
                                            </div>" : $media;

                $media = $media;
            }
            else if( $format=='audio' || $format=='video' || $format=='status'){
                if ( preg_match( '|^\s*(https?://[^\s"]+)\s*$|im', $post->post_content, $matches ) ) {
                    if(isset($matches[1])) {
                        $media = wp_oembed_get( $matches[1] );
                    }
                }
            }
        }

        return $media;
    }

    public static function get_grid_post_media($size = 'nrgnetwork-post-thumb'){
        global $post;

        $format = get_post_format();
        if ( current_theme_supports( 'post-formats', $format ) ) {
            if( $format=='video' || $format == 'audio' ){
                $img = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), $size, false, array('class'=>'img-responsive img-full') );
                return '<a class="post-preview post-image play" href="'.esc_url(get_permalink()).'">
                            '.$img.'
                        </a>';
            }
        }else {
            if( has_post_thumbnail() ){
                $img = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), $size, false, array('class'=>'img-full') );
                return '<a class="post-preview post-image" href="'.esc_url(get_permalink()).'">
                            '.$img.'
                        </a>';
            }
        }
    }


    public static function get_author(){
        return '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author().'</a>';
    }

     
    public static function pagination( $query=null ) {
         
        global $wp_query;
        $query = $query ? $query : $wp_query;
        $big = 999999999;

        $paginate = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type' => 'array',
            'total' => $query->max_num_pages,
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'prev_text' => esc_html__('prev page', 'nrgnetwork'),
            'next_text' => esc_html__('next page', 'nrgnetwork')
        ));

        if ($query->max_num_pages > 1) :
        
        $prev = '';
        $next = '';
        $pages = '';
        foreach ( $paginate as $page ) {
            if( strpos($page, 'class="prev')!==false ){
                $prev = str_replace('class="prev', 'class="btn color-4 hover-9 page-left prev', $page);
            }
            else if( strpos($page, 'class="next')!==false ){
                $next = str_replace('class="next', 'class="btn color-4 hover-9 page-right next', $page);
            }
            else if( strpos($page, '<span ')!==false ){
                $cur = str_replace('<span ', '<a href="javascript:;" ', $page);
                $cur = str_replace('</span>', '</a>', $cur);
                $cur = str_replace('page-numbers', 'page-numbers btn color-5 hover-9', $cur);
                $pages .= $cur;
            }
            else{
                $cur = str_replace('page-numbers', 'page-numbers btn color-5 hover-9', $page);
                $pages .= $cur;
            }
        }
        
        $pages =str_replace(" current", " current active", $pages);

        echo '<div class="pagination clearfix">
                    '.$prev.'
                    '.$next.'
                    <div class="pages">
                        '.$pages.'
                    </div>
                </div>';

        endif;
        
    }



    public static function get_next_post(){
        $next_post = get_next_post();
        if ( is_a( $next_post , 'WP_Post' ) ) {
            $img = wp_get_attachment_url( get_post_thumbnail_id( $next_post->ID ), 'nrgnetwork-post-thumb' );
            return '<div class="col-xs-12 col-sm-6">
                        <div class="be-post style-2 nav-post">
                            <div class="be-post-date">
                                <a href="'.esc_url(get_permalink( $next_post->ID )).'">'.esc_html__('Next post', 'nrgnetwork').'</a>
                            </div>
                            <a href="'.esc_url(get_permalink( $next_post->ID )).'" class="be-post-title">
                                '.get_the_title( $next_post->ID ).'
                            </a>
                            <a href="'.esc_url(get_permalink( $next_post->ID )).'" class="be-img-block">
                                <img src="'.$img.'" alt="omg">
                            </a>
                        </div>
            </div>';
        }
        return '';
    }
    public static function get_prev_post(){
        $prev_post = get_previous_post();
        if ( is_a( $prev_post , 'WP_Post' ) ) {
            $img = wp_get_attachment_url( get_post_thumbnail_id( $prev_post->ID ), 'nrgnetwork-post-thumb' );
            return '<div class="col-xs-12 col-sm-6">
                        <div class="be-post style-2 nav-post">
                            <div class="be-post-date">
                                <a href="'.esc_url(get_permalink( $prev_post->ID )).'">'.esc_html__('Previous post', 'nrgnetwork').'</a>
                            </div>
                            <a href="'.esc_url(get_permalink( $prev_post->ID )).'" class="be-post-title">
                                '.get_the_title( $prev_post->ID ).'
                            </a>
                            <a href="'.esc_url(get_permalink( $prev_post->ID )).'" class="be-img-block">
                                <img src="'.$img.'" alt="omg">
                            </a>
                        </div>
            </div>';
        }
        return '';
    }




    public static function get_related_posts( $options=array() ){
        $options = array_merge(array(
                    'per_page'=>'3'
                    ),
                    $options);

        global $post;

        $args = array(
            'post__not_in' => array($post->ID),
            'posts_per_page' => $options['per_page']
        );
        $post_type_class = 'blog';

        $categories = get_the_category($post->ID);
        if ($categories) {
            $category_ids = array();
            foreach ($categories as $individual_category) {
                $category_ids[] = $individual_category->term_id;
            }
            $args['category__in'] = $category_ids;
        }

        // For portfolio post and another than Post
        if($post->post_type == 'portfolio') {
            $tax_name = 'portfolio_entries'; //should change it to dynamic and for any custom post types
            $args['post_type'] =  get_post_type(get_the_ID());
            $args['tax_query'] = array(
                array(
                    'taxonomy' => $tax_name,
                    'field' => 'id',
                    'terms' => wp_get_post_terms($post->ID, $tax_name, array('fields'=>'ids'))
                )
            );
            $post_type_class = 'portfolio';
        }

        if(isset($args)) {
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {

                $html = '';
                while ($my_query->have_posts()) {
                    $my_query->the_post();

                    $img = TPL::get_post_media('nrgnetwork-related-thumb');

                    $html .= '<div class="col-xs-12 col-sm-4">
                            <div class="be-post style-2">
                                <div class="be-post-date"><i class="fa fa-clock-o"></i> '.get_the_time('F d, Y').'</div>
                                <a href="'.esc_url(get_permalink()).'" class="be-post-title">'.get_the_title().'</a>        
                                    '.$img.'
                                <span>
                                    '.TPL::clear_urls(wp_trim_words( wp_strip_all_tags(do_shortcode(get_the_content())), 10 )).'
                                </span>
                            </div>                          
                        </div>';
                }


                if($post->post_type == 'portfolio'){
                    echo '<div class="row m0 youMightLike '.$post_type_class.'">
                            <div class="row sectionTitle">
                                <h4>' . esc_html__('Related Projects', 'nrgnetwork') . '</h4>
                            </div>
                            <div class="row">
                                '. $html .'
                            </div>
                          </div>';
                }
                else{
                    printf('<div class="be-related-posts"><h3 class="letf-menu-article">'. esc_html__('Related Posts', 'nrgnetwork'). '</h3>
                    <div class="row">%s</div></div>', $html);
                }
                
            }
        }
        wp_reset_postdata();
    }



    public static function get_post_icon(){
        global $post;
        $class = '';
        $format = get_post_format();
        if( $format===false ){
            $class = 'fa fa-file-text';
        }
        else if( $format=='aside' ){
            $class = 'fa fa-file-text';
        }
        else if( $format=='image' ){
            $class = 'fa fa-file-image-o';
        }
        else if( $format=='gallery' ){
            $class = 'fa fa-file-image-o';
        }
        else if( $format=='video' ){
            $class = 'fa fa-file-video-o';
        }
        else if( $format=='audio' ){
            $class = 'fa fa-file-audio-o';
        }
        else if( $format=='quote' ){
            $class = 'fa fa-comment';
        }
        else if( $format=='link' ){
            $class = 'fa fa-link';
        }
        else if( $format=='status' ){
            $class = 'fa fa-link';
        }
        else if( $format=='chat' ){
            $class = 'fa fa-comments';
        }
        return "<i class='$class'></i>";
    }


    public static function getCategories($post_id, $post_type){
        $cats = array();
        $taxonomies = get_object_taxonomies($post_type);
        if( !empty($taxonomies) ){
            $tax = $taxonomies[0];
            if( $post_type=='product' )
                $tax = 'product_cat';
            $terms = wp_get_post_terms($post_id, $tax);
            foreach ($terms as $term){
                $cats[] = array(
                                'term_id' => $term->term_id,
                                'name' => $term->name,
                                'slug' => $term->slug,
                                'link' => get_term_link($term)
                                );
            }
        }

        return $cats;
    }

    public static function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count=='' || $count=='0'){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 View";
        }
        return $count.' Views';
    }
    public static function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }



    public static function get_social_links(){
        global $post;
        $social = array();

        $social[] = '<a href="http://www.facebook.com/sharer.php?u='.esc_url(get_permalink()).'" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>';
        $social[] = '<a href="https://twitter.com/share?url='.esc_url(get_permalink()).'&text='.esc_attr(get_the_title()).'" target="_blank"><i class="fa fa-twitter"></i></a>';
        $social[] = '<a href="https://plus.google.com/share?url='.esc_url(get_permalink()).'" target="_blank"><i class="fa fa-google-plus"></i></a>';
        $social[] = '<a href="https://pinterest.com/pin/create/bookmarklet/?media='.esc_url(isset($thumb[0]) ? $thumb[0] : '').'&url='.esc_url(get_permalink()).'&description='.esc_attr(get_the_title()).'" target="_blank"><i class="fa fa-pinterest"></i></a>';
        $social[] = '<a href="#" onclick="window.print();return false;"><i class="fa fa-print"></i></a>'; 

        return $social;
    }


    public static function get_share_links(){
        $social = array();

        $social['facebook'] = 'http://www.facebook.com/sharer.php?u='.esc_url(get_permalink());
        $social['twitter'] = 'https://twitter.com/share?url='.esc_url(get_permalink()).'&text='.esc_attr(get_the_title());
        $social['googleplus'] = 'https://plus.google.com/share?url='.esc_url(get_permalink());
        $social['pinterest'] = 'https://pinterest.com/pin/create/bookmarklet/?media='.esc_url(isset($thumb[0]) ? $thumb[0] : '').'&url='.esc_url(get_permalink()).'&description='.esc_attr(get_the_title());

        return $social;
    }








    public static function get_folio_gallery($fpost){
        if( has_shortcode($fpost->post_content, 'gallery') ):
            $gallery = get_post_gallery( $fpost->ID, false );
            $ids = explode(",", isset($gallery['ids']) ? $gallery['ids'] : "");

            $gallery_items = '';
            foreach ($ids as $a_id):
                $attach = get_post($a_id);
                $img = wp_get_attachment_image( $a_id, 'nrgnetwork-folio-item' );
                $img_full = wp_get_attachment_image_src( $a_id, 'full' );
                $img_full = !empty($img_full) ? $img_full[0] : '';

                $gallery_items .= '<div class="item">
                                        <div class="item-desc">
                                            <div class="item-img">
                                                <div class="layer"></div>
                                                <a href="'.$img_full.'" class="popup-img" data-effect="mfp-move-horizontal">'.$img.'</a>
                                            </div>
                                            <div class="vertical-align">
                                                <div class="item-folow">
                                                    <a target="_blank" href="http://www.facebook.com/sharer.php?s=100&amp;'.sprintf('p[title]=%s&amp;p[summary]=%s&amp;p[url]=%s&amp;p[images][0]=%s', urlencode($attach->post_excerpt), urlencode($attach->post_content), urlencode(get_permalink()), urlencode($img_full)).'"><span class="fa fa-facebook"></span></a>
                                                    <a target="_blank" href="https://twitter.com/share?url='.(esc_url(get_permalink()) . '&text=' . esc_attr(get_the_title())).'"><span class="fa fa-twitter"></span></a>
                                                    <a target="_blank" href="https://pinterest.com/pin/create/bookmarklet/'.sprintf('?media=%s&url=%s&description=%s', esc_attr($img_full), get_permalink(), $attach->post_excerpt).'"><span class="fa fa-pinterest"></span></a>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="javascript:;"><h3>'.$attach->post_excerpt.'</h3></a>
                                                <p>'.$attach->post_content.'</p>
                                            </div>
                                        </div>
                                    </div>';

            endforeach;

            return $gallery_items;
        endif;

        return '';
    }




    public static function get_page_titles(){
        if( function_exists('is_shop') && is_shop() ):
            printf( "%s", esc_html__('Shop', 'nrgnetwork') );
        elseif( function_exists('is_shop') && is_product() ):
            printf( "%s", esc_html__('Shop Details', 'nrgnetwork') );
        elseif( is_archive() ):
            if(function_exists('the_archive_title')) :
                the_archive_title();
            else:
                printf( esc_html__('Category: <span>%s</span>', 'nrgnetwork'), single_cat_title( '', false ) );
            endif;

        elseif( is_search() ):
            printf( 'Search Results for: <span>%s</span>', get_search_query() );
        elseif( is_singular('portfolio') ):
            printf( '%s', get_the_title() );
        elseif( is_single() ):
            printf( '%s', esc_html__('Our Blog', 'nrgnetwork') );
        elseif( is_front_page() || is_home() ):
            if( get_query_var('post_type')=='portfolio' ):
                printf('%s', esc_html__('Projects', 'nrgnetwork'));
            else:
                printf('%s', esc_html__('Blog', 'nrgnetwork'));
            endif;
        elseif( is_404() ):
            printf( "%s", esc_html__('404 Page', 'nrgnetwork') );
        else:
            the_title();
        endif;
    }





    public static function get_folio_cats($post_id = null, $is_tag = false){
        $cats = array();
        $tax = $is_tag ? 'portfolio_tag' : 'portfolio_entries';
        $terms = wp_get_post_terms($post_id, $tax);
        foreach ($terms as $term){
            if( isset($term->name, $term->slug) ){
                $cat_title = $term->name;
                $cat_slug = $term->slug;

                $cats[] = array(
                        'id'    => $term->term_id,
                        'title' => $term->name,
                        'slug'  => $term->slug,
                        'link'  => get_term_link($term)
                    );
            }
        }

        return $cats;
    }


    public static function get_post_cats($post_type, $post_id = null, $is_tag = false){
        $cats = array();
        
        $tax = $is_tag ? 'portfolio_tag' : 'portfolio_entries';
        if( $post_type=='post' ){ $tax = $is_tag ? 'post_tag' : 'category'; }
        if( $post_type=='product' ){ $tax = $is_tag ? 'product_tag' : 'product_cat'; }

        $terms = wp_get_post_terms($post_id, $tax);
        foreach ($terms as $term){
            if( isset($term->name, $term->slug) ){
                $cat_title = $term->name;
                $cat_slug = $term->slug;

                $cats[] = array(
                        'id'    => $term->term_id,
                        'title' => $term->name,
                        'slug'  => $term->slug,
                        'link'  => get_term_link($term)
                    );
            }
        }

        return $cats;
    }



    public static function get_post_comment_count_number(){
        global $post;
        $comments = '';
        $comment_obj = wp_count_comments($post->ID);
        $comments = $comment_obj->total_comments;

        return $comments;
    }


    public static function clear_urls($content){
        $pattern = "/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/";
        $content = preg_replace($pattern, "", $content);
        return trim( $content );
    }


}



function getPageSlider($onTop){
    global $post;
    $slider_class = 'fullscreen-section no-padding';

    if (TT::getmeta('slider') != '' && TT::getmeta('slider') != 'none'):
        echo '<div id="tt-slider" class="tt-slider '.$slider_class.'">';
            $slider_name = TT::getmeta("slider");
            $slider = explode("_", $slider_name);
            $shortcode = '';
            if (strpos($slider_name, "layerslider") !== false)
                $shortcode = "[" . $slider[0] . " id='" . $slider[1] . "']";
            elseif (strpos($slider_name, "revslider") !== false)
                $shortcode = "[rev_slider " . $slider[1] . "]";
            elseif (strpos($slider_name, "masterslider") !== false)
                $shortcode = "[master_slider id='" . $slider[1] . "']";
            echo do_shortcode($shortcode);
        echo '</div>';
    endif;
}









// Comment Navigation
if ( ! function_exists( 'tt_theme_comment_nav' ) ) :
    function tt_theme_comment_nav() {
        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'nrgnetwork'); ?></h2>
            <div class="nav-links">
                <?php
                    if ( $prev_link = get_previous_comments_link( esc_html__('Older Comments', 'nrgnetwork') ) ) :
                        printf( '<div class="nav-previous">%s</div>', $prev_link );
                    endif;

                    if ( $next_link = get_next_comments_link( esc_html__('Newer Comments', 'nrgnetwork') ) ) :
                        printf( '<div class="nav-next">%s</div>', $next_link );
                    endif;
                ?>
            </div><!-- .nav-links -->
        </nav><!-- .comment-navigation -->
        <?php
        endif;
    }
endif;









