<?php
    $title_attr = '';
    
    // background image
    $img = TT::get_option_bg_value('page_title_image');
    if( !empty($img) ){
        $title_attr = $img;
    }

    // Background Image
    if( (is_page() || is_single()) && has_post_thumbnail() ){
        $img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );
        $title_attr = "background-image:url($img);";
    }

    global $post;

    if( is_singular('portfolio') ){
        $custom_color = TT::getmeta('folio_color');
        echo '<style type="text/css">
                .work-title h1 {color: '.$custom_color.';}
                .item:hover a {color: '.$custom_color.';}
                .item .n-title svg path.fill-circle {stroke: '.$custom_color.';}
                .item .n-title.act svg path.fill-circle {stroke:'.$custom_color.';}
                .n-title.act svg path.fill-circle {stroke: '.$custom_color.';}
                .descr-block {background: '.$custom_color.';}
              </style>';
    }

?>

<div class="detail-wrr">
    <div class="clip">
        <div class="bg bg-bg-chrome act center-bg" style="<?php echo esc_attr($title_attr); ?>"></div>
    </div>
    <div class="layer"></div>
    <div class="work-title vertical-align delay-1">
        <h1><?php
                
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
                printf( '%s', get_the_title() );
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
            ?></h1>
    </div>

    <div class="intro-scroll-down">
        <div>
            <span class="fa fa-angle-down"></span>
            <span class="fa fa-angle-down"></span>
            <span class="fa fa-angle-down"></span>
        </div>
    </div>

    <?php
        if(is_single()):
    ?>
        <div class="descr-block slide">
          <div class="descr-block-w">
            <h5><span class="tt"><?php esc_html_e('Date', 'nrgnetwork'); ?></span><span>/</span><?php echo get_the_date(false, $post); ?></h5>
            <h5><span class="tt"><?php esc_html_e('Category', 'nrgnetwork'); ?></span><span>/</span><?php
                if( is_singular('portfolio') ){
                    $terms = wp_get_post_terms($post->ID, 'portfolio_entries');
                    foreach ($terms as $term){
                        $cat_title = $term->name;
                        $cat_slug = $term->slug;
                        echo "<a href='javascript:;'>$cat_title</a> ";
                    }
                }
                else{
                    echo get_the_category_list( ' ' );
                }
            ?></h5>
            <h5><span class="tt"><?php esc_html_e('Author', 'nrgnetwork'); ?></span><span>/</span><?php the_author_meta( 'user_nicename', $post->post_author ); ?></h5>
          </div>    
        </div>
    <?php endif; ?>
</div>