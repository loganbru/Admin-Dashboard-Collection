<div class="blog-post be-large-post">
    <div class="info-block clearfix">
        <div class="be-large-post-align">
            <span><i class="fa fa-thumbs-o-up"></i> <?php echo TT_STAT::get_likes(get_the_id()); ?></span>
            <span><i class="fa fa-eye"></i> <?php echo TT_STAT::get_views(get_the_id()); ?></span>
            <span><a href="<?php the_permalink(); ?>#be-comment-block"><i class="fa fa-comment-o"></i> <?php comments_number('0', '1', '%'); ?></a></span>
            <span class="be-text-tags">
                <?php echo get_the_category_list(', '); ?>
            </span>                                     
        </div>
    </div>
    <div class="be-large-post-align">
        <a class="be-post-title" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>

        <div class="be-text-tags clearfix">
            <div class="post-date">
                <i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?>
            </div>
            <div class="author-post">
                <?php echo get_avatar( $post->post_author, 20 ); ?>
                <span>by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <?php
        echo TPL::get_post_media();
    ?>

    <div class="be-large-post-align m_t_50">
        <div class="post-text ">
            <?php
            if(strpos($post->post_content, '<!--more-->') > 0) :
                echo TPL::clear_urls( wp_strip_all_tags(get_the_content(false)) );
            elseif(has_excerpt()) :
                echo TPL::clear_urls( wp_strip_all_tags(get_the_excerpt()) );
            else :
                printf( '%s', TPL::clear_urls( wp_trim_words( wp_strip_all_tags(do_shortcode(get_the_content())), 55 ) ) );
            endif;
            ?>
        </div>
        <a class="btn color-1 size-2 hover-1" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'nrgnetwork'); ?></a>
    </div>
</div>