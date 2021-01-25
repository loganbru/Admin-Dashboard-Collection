<?php

class WPBakeryShortCode_Tt_Portfolio extends WPBakeryShortCode {
    protected function content( $atts, $content = null){
        extract(shortcode_atts(array(
            'count' => '16',
            'show_pagination' => 'yes',
            'show_excerpt' => 'no',
            'excerpt_count' => '0',
            'extra_class' => ''
        ), $atts));

		$network_post_type = TT::get_mod('network_post_type');
		$network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

		$network_post_term = 'portfolio_entries';
		$network_post_tag = 'portfolio_tag';

		if( $network_post_type=='post' ){
		    $network_post_term = 'category';
		    $network_post_tag = 'post_tag';
		}
		else if( $network_post_type=='product' ){
		    $network_post_term = 'product_cat';
		    $network_post_tag = 'product_tag';
		}


		echo "<div class='row _post-container_ $extra_class'>";

        $args = array(
            'post_type' => $network_post_type,
            'posts_per_page' => $count,
            'ignore_sticky_posts' => true
        );

        $posts_query = new WP_Query($args);
        while ( $posts_query->have_posts() ):
            $posts_query->the_post();
        ?>
        <div class="custom-column-5">
            <div class="be-post item-media">

                <?php
                if( has_post_thumbnail() ){
                    $img_size = 'full';

                    $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-grid' );

                    echo '<a href="'.esc_url( get_permalink() ).'" class="be-img-block">'.TT_C::image_filter($img).'</a>';
                }

                $featured = TT::getmeta('featured_item');
                $featured = $featured=='1' ? '<span class="item-featured"><i class="fa fa-star-o"></i></span>' : '';
                echo "$featured";
                ?>
                
                <a href="<?php the_permalink(); ?>" class="be-post-title"><?php the_title(); ?></a>

                <span>
                    <?php
                    $cat_html = array();
                    $cats = TPL::get_post_cats($network_post_type, get_the_id());
                    foreach ($cats as $cat) {
                        $cat_html[] = '<a href="'.$cat['link'].'" class="be-post-tag">'.$cat['title'].'</a>';
                    }
                    echo implode(', ', $cat_html);
                    ?>
                </span>

                <?php 
                if($show_excerpt == 'yes'): 

                    if($excerpt_count == '0'): ?>
                        <span><?php the_excerpt(); ?></span>
                    <?php 
                    else:
                        echo '<span>' . showBrief( strip_shortcodes(get_the_excerpt()), $excerpt_count) . '</span>';
                    endif;

                endif; ?>

                <div class="author-post">
                    <?php echo get_avatar( $post->post_author, 20 ); ?>
                    <span>by <a href="<?php echo TT_C::get_author_uri($post->post_author); ?>"><?php the_author(); ?></a></span>
                </div>
                <div class="info-block">
                    <?php echo TT_C::get_like_link('<i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes()); ?>
                    <a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i> <?php echo TT_C::get_views(); ?></a>
                    <a href="<?php the_permalink(); ?>#be-comment-block"><i class="fa fa-comment-o"></i> <?php comments_number('0', '1', '%'); ?></a>
                </div>
            </div>
        </div>
        <?php endwhile;


        echo '</div>';

        if( abs($posts_query->post_count)>(abs($count)-1) && $show_pagination == 'yes'): ?>
        <div class="row">
            <div class="col-sm-12 text-center">
                <br>
                <a href="javascript:;" class="btn color-3 size-1 hover-1" id="netsearch_btn_pager"><?php esc_html_e('Load more ...', 'nrgnetwork'); ?></a>
                <div class="hidden" id="netsearch_args"><?php echo TT_C::encode($args); ?></div>
                <input type="hidden" id="netsearch_paged" value="1">
            </div>
        </div>
        <?php endif;

    }
}

vc_map( array(
    "name" => esc_html__('Portfolio', 'nrgnetwork'),
    "description" => esc_html__("Portfolio and Projects", 'nrgnetwork'),
    "base" => 'tt_portfolio',
    "icon" => "icon-wpb-themeton",
    "content_element" => true,
    "category" => esc_html__('Themeton', 'nrgnetwork'),
    'params' => array(
        array(
            "type" => 'textfield',
            "param_name" => "count",
            "heading" => esc_html__("Posts Count", 'nrgnetwork'),
            "value" => '16'
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
            "type" => "dropdown",
            "param_name" => "show_excerpt",
            "heading" => esc_html__("Show Excerpt?", 'nrgnetwork'),
            "value" => array(
                "Yes" => "yes",
                "No" => "no"
            ),
            "std" => "no"
        ),
        array(
            "type" => 'textfield',
            "param_name" => "excerpt_count",
            "heading" => esc_html__("Custom Excerpt Count", 'nrgnetwork'),
            "value" => '0',
            "description" => 'Type number value that for exceprt words. Default 0 delegates default excerpt of posts.'
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