<?php

class WPBakeryShortCode_Tt_Blog_Posts extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract(shortcode_atts(array(
            'count' => '9',
            'categories' => '',
            'blog_type' => 'grid',
            'show_filter' => 'yes',
            'show_pagination' => 'yes',
            'extra_class' => ''
        ), $atts));

        $filter = '';
        $filter_item = '';

        $cats = array();
        if( !empty($categories) ){
            $exps = explode(",", $categories);
            foreach($exps as $val){
                if( (int)$val>-1 ){
                    $cats[]=(int)$val;
                }
            }
        }

        if($show_filter == 'yes') {
            $args = array(
              'orderby' => 'name',
              'parent' => 0
              );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) {
                $filter_item .= '<a class="btn color-4 size-2 hover-9" href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
            }
            $filter = "<div class='blog-filter'>$filter_item</div>";
        }


        global $paged;
        if( is_front_page() ){
            $paged = get_query_var('page') ? get_query_var('page') : 1;
        }

        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => $count,
                        'ignore_sticky_posts' => true,
                        'paged' => $paged
                    );
        if(!empty($cats)){
            $args['category__in'] = $cats;
        }


        $items = '';
        $posts_query = new WP_Query($args);
        while ( $posts_query->have_posts() ) {
            $posts_query->the_post();
            $excerpt = TPL::clear_urls( wp_trim_words( wp_strip_all_tags(do_shortcode(get_the_content())), 30 ) );

            $comments = get_comments_number('0', '1', '%');
            $postclass = implode(' ',get_post_class('blog-item'));

            if($blog_type == 'grid') {                
                $media = TPL::get_post_media('nrgnetwork-blog-grid-thumb');
                $items .= "<div class='$postclass grid-item col-xs-12 col-sm-6 col-md-4'>
                        <div class='blog-post'>
                            <div class='post-header clearfix'>
                                <div class='post-date'>
                                    <i class='fa fa-clock-o'></i> ".get_the_date()."
                                </div>
                                <div class='author-post'>
                                    ".get_avatar(get_the_author())."
                                    <span>".esc_html__('by', 'nrgnetwork')." <a href='". esc_url(get_permalink())."'>".get_the_author()."</a></span>
                                </div>
                            </div>                      
                            <div class='post-media'>$media</div>
                            <div class='post-desc'>
                                <div class='post-category'>".get_the_category_list( esc_html__(', ', 'nrgnetwork') )."</div>
                                <a class='post-label' href='".esc_url(get_permalink())."'>".get_the_title()."</a>
                                <div class='post-text'>$excerpt</div>
                                <a class='btn color-1 size-2 hover-1' href='".esc_url(get_permalink())."'>".esc_html__('Read More', 'nrgnetwork')."</a>
                                <div class='info-block'>
                                    ".TT_C::get_like_link('<i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes()).
                                    "<a href='". get_permalink() ."'><i class='fa fa-eye'></i> ". TT_C::get_views() ."</a>
                                    <a href='". get_permalink() ."#be-comment-block'><i class='fa fa-comment-o'></i> ". get_comments_number('0', '1', '%') ."</a>
                                </div>
                            </div>
                        </div>
                    </div>";
            } elseif ($blog_type == 'big') {
                get_template_part( 'content', get_post_format() );
            }else {
                $media = TPL::get_post_media();
                if( !empty($media) && $media != ''){
                    $media = "<div class='col-xs-12 col-sm-7'>
                                <div class='post-media'>".$media."</div>
                            </div>
                            <div class='col-xs-12 col-sm-5'>";
                }
                else{
                    $media = "<div class='col-xs-12 col-sm-12 list-no-thumb'>";
                }
                $items .= "<div class='blog-post'>
                    <div class='row'>
                            ".$media."
                            <div class='post-desc'>
                                <div class='post-category'>".get_the_category_list( esc_html__(', ', 'nrgnetwork') )."</div>
                                <a class='post-label' href='".esc_url(get_permalink())."'>".get_the_title()."</a>
                                <div class='post-text'>$excerpt</div>
                                <div class='author-post'>
                                    ".get_avatar( get_the_author() )."
                                    <span>".esc_html__('by', 'nrgnetwork')." <a href='".esc_url(get_permalink())."'>".get_the_author()."</a> , ".get_the_date()."</span>
                                </div>
                                <div class='info-block'>
                                    ".TT_C::get_like_link('<i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes()).
                                    "<a href='". get_permalink() ."'><i class='fa fa-eye'></i> ". TT_C::get_views() ."</a>
                                    <a href='". get_permalink() ."#be-comment-block'><i class='fa fa-comment-o'></i> ". comments_number('0', '1', '%') ."</a>
                                </div>                                                              
                            </div>
                        </div>
                    </div>
                </div>";
            }

            
        }
        $pager_result = '';
        if( $show_pagination == 'yes' ) {
            ob_start();
            TPL::pagination($posts_query);
            $pager_result .= ob_get_contents();
            ob_end_clean();
        }

        // reset query
        wp_reset_postdata();

        if($blog_type == 'grid') {
            return "<div class='network-blog-item blog-wrapper blog-grid'>
                        $filter
                        <div class='row'>
                            $items
                        </div>
                    </div>
                    $pager_result";
        }else {
            return "<div class='network-blog-item blog-wrapper blog-list'>
                        $filter
                        $items
                    </div>
                    $pager_result";
        }
    }
}

vc_map( array(
    "name" => esc_html__('Blog Posts', 'nrgnetwork'),
    "description" => esc_html__("Only post type: post", 'nrgnetwork'),
    "base" => 'tt_blog_posts',
    "icon" => "icon-wpb-themeton",
    "content_element" => true,
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    'params' => array(
        array(
            "type" => "dropdown",
            "param_name" => "blog_type",
            "heading" => esc_html__("Blog Style", 'nrgnetwork'),
            "value" => array(
                "Grid" => "grid",
                "List (media left)" => "list",
                "Big" => "big"
            ),
            "std" => "grid"
        ),
        array(
            "type" => 'textfield',
            "param_name" => "count",
            "heading" => esc_html__("Posts Count", 'nrgnetwork'),
            "value" => '9'
        ),
        array(
            "type" => 'textfield',
            "param_name" => "categories",
            "heading" => esc_html__("Categories", 'nrgnetwork'),
            "description" => esc_html__("Specify category Id or leave blank to display items from all categories.", 'nrgnetwork'),
            "value" => ''
        ),
        array(
            "type" => "dropdown",
            "param_name" => "show_filter",
            "heading" => esc_html__("Show Categories?", 'nrgnetwork'),
            "value" => array(
                "Yes" => "yes",
                "No" => "no"
            ),
            "std" => "yes"
        ),
        array(
            "type" => "dropdown",
            "param_name" => "show_pagination",
            "heading" => esc_html__("Show Pagination?", 'nrgnetwork'),
            "value" => array(
                "Yes" => "yes",
                "No" => "no"
            ),
            "std" => "yes"
        ),
        array(
            "type" => "textfield",
            "param_name" => "extra_class",
            "heading" => esc_html__("Extra Class", 'nrgnetwork'),
            "value" => "",
            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'nrgnetwork'),
        )
    )
));