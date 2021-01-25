<?php

get_header();

$network_post_type = TT::get_mod('network_post_type');
$network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

$network_post_term = 'portfolio_entries';
$network_post_tag = 'portfolio_tag';

if( $network_post_type=='post' ){
    $network_post_term = 'category';
    $network_post_tag = 'post_tag';
}

?>


<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="container custom-container be-detail-container">
        <div class="row">
            
            <?php
            $post_id = get_the_id();
            while ( have_posts() ) : the_post();
                $post_id = get_the_id();
            ?>
            <div class="col-md-9 pull-right">
                <div class="be-large-post tt-frontend-content-wrapper">
                    <div class="info-block">
                        <div class="be-large-post-align">
                            <span><i class="fa fa-thumbs-o-up"></i> <?php echo TT_C::get_likes(); ?></span>
                            <span><i class="fa fa-eye"></i> <?php echo TT_C::get_views(); ?></span>
                            <span><a href="<?php the_permalink(); ?>#be-comment-block"><i class="fa fa-comment-o"></i> <?php comments_number('0', '1', '%'); ?></a></span>
                        </div>
                    </div>
                    <div class="blog-content be-large-post-align">
                        <h5 class="be-post-title">
                            <?php the_title(); ?>
                        </h5>

                        <span class="be-text-tags">
                            <?php
                            $cat_html = array();
                            $cats = TPL::get_post_cats($network_post_term, get_the_id());
                            foreach ($cats as $cat) {
                                $cat_html[] = '<a href="'.$cat['link'].'" class="be-post-tag">'.$cat['title'].'</a>';
                            }
                            echo implode(', ', $cat_html);
                            ?>
                        </span>
                        <div class="clear"></div>
                        <div class="post-text tt-frontend-viewport">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="be-large-post-align">
                        <h3 class="widget-title">
                            <?php esc_html_e('Tags', 'nrgnetwork'); ?>
                        </h3>
                        <div class="tags_block clearfix">
                            <ul>
                                <?php
                                $cat_html = array();
                                $cats = TPL::get_post_cats($network_post_term, get_the_id(), true);
                                foreach ($cats as $cat) {
                                    if( isset($cat['link'], $cat['title']) ){
                                        $cat_html[] = '<li><a href="'.$cat['link'].'">'.$cat['title'].'</a></li>';
                                    }
                                }
                                echo implode('', $cat_html);
                                ?>
                            </ul>
                        </div>
                    </div>                      
                </div>

                <div class="row">
                    <?php

                        global $post;

                        $args = array(
                            'post_type'     =>  $network_post_type,
                            'author'        =>  $post->post_author,
                            'post__not_in'  => array($post->ID),
                            'posts_per_page' => 3
                        );

                        $html = '';
                        $my_query = new wp_query($args);
                        while ($my_query->have_posts()) {
                            $my_query->the_post();

                            $img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'small-thumb' );
                            if( !empty($img) ){
                                $img = '<img src="'.esc_attr($img).'" alt="">';
                            }

                            $html .= '<div class="col-md-4">
                                        <div class="be-post">
                                            <a href="'.esc_url(get_permalink()).'" class="be-img-block">
                                                '.TT_C::image_filter($img).'
                                            </a>
                                            <a href="'.esc_url(get_permalink()).'" class="be-post-title">'.get_the_title().'</a>
                                            <span>
                                                '.wp_trim_words( wp_strip_all_tags(do_shortcode(get_the_content())), 10 ).'
                                            </span>
                                            <div class="author-post">
                                                '.get_avatar( $post->post_author, 20 ).'
                                                <span>by <a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'">'.get_the_author().'</a></span>
                                            </div>
                                            <div class="info-block">
                                                <span><i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes().'</span>
                                                <span><i class="fa fa-eye"></i> '.TT_C::get_views().'</span>
                                                <span><a href="'. get_permalink() .'#be-comment-block"><i class="fa fa-comment-o"></i> '.get_comments_number('0', '1', '%').'</a></span>
                                            </div> 
                                        </div>                          
                                    </div>';
                        }
                        
                        printf('%s', $html);
                        wp_reset_postdata();
                    ?>
                </div>

            </div>
            <?php endwhile; ?>


            <div class="col-md-3 left-feild clearfix">

                <div class="be-user-block">
                    <div class="be-user-detail">
                        <a class="be-ava-user img-round" href="<?php echo TT_C::get_author_uri($post->post_author); ?>">
                            <?php echo get_avatar( $post->post_author, 70 ); ?>
                        </a>
                        <p class="be-use-name"><?php the_author(); ?></p>
                        <span class="be-user-info">
                            <?php echo get_the_author_meta('description', $post->post_author); ?>
                        </span>
                    </div>
                    <div class="be-user-activity-block">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                <?php
                                if( is_user_logged_in() ){

                                    if( get_current_user_id() == $post->post_author ){
                                        echo '<a href="javascript:;" class="be-user-activity-button be-follow-type"><i class="fa fa-check"></i>'.esc_html__('AUTHOR', 'nrgnetwork').'</a>';
                                    }
                                    else{
                                        $is_following = TT_C::net_is_following($post->post_author);

                                        if( $is_following=='following' ){
                                            echo '<a href="javascript:;" class="be-user-activity-button be-follow-type bp-follow-action bp-follow-no-icon" data-user-id="'.$post->post_author.'" data-text-follow="'.esc_html__('FOLLOW', 'nrgnetwork').'" data-text-following="'.esc_html__('FOLLOWING', 'nrgnetwork').'">'.esc_html__('FOLLOWING', 'nrgnetwork').'</a>';
                                        }
                                        else{
                                            echo '<a href="javascript:;" class="be-user-activity-button be-follow-type bp-follow-action bp-follow-no-icon" data-user-id="'.$post->post_author.'" data-text-follow="'.esc_html__('FOLLOW', 'nrgnetwork').'" data-text-following="'.esc_html__('FOLLOWING', 'nrgnetwork').'"><i class="fa fa-plus"></i>'.esc_html__('FOLLOW', 'nrgnetwork').'</a>';
                                        }
                                    }

                                }
                                else{
                                    echo '<a href="javascript:;" class="be-user-activity-button be-follow-type no-logged-in"><i class="fa fa-plus"></i>'.esc_html__('FOLLOW', 'nrgnetwork').'</a>';
                                }
                                ?>

                            </div>
                            <div class="col-lg-6">

                                <a href="javascript:;" class="col-lg-6 be-user-activity-button btn-message be-message-type" data-author="<?php echo esc_attr($post->post_author); ?>">
                                    <i class="fa fa-envelope-o"></i><?php esc_html_e('MESSAGE', 'nrgnetwork'); ?>
                                </a>
                                <?php if( is_user_logged_in() ): ?>
                                    <?php $user_data = get_userdata($post->post_author); ?>
                                <div class="message-popup msg-popup-window">
                                    <div class="message-popup-inner container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                                <i class="fa fa-times close-button"></i>
                                                <h5 class="large-popup-title"><?php esc_html_e('Send Message To', 'nrgnetwork'); ?> <?php printf('%s', $user_data->user_login); ?></h5>
                                                <div class="form-group">
                                                    <input type="hidden" id="msg_username" value="<?php echo esc_attr($post->post_author); ?>">
                                                    <textarea class="form-input" id="msg_content" placeholder="<?php esc_attr_e('Your text', 'nrgnetwork'); ?>"></textarea>
                                                </div>
                                                <a class="btn btn-right color-1 size-1 hover-1" id="msg_button_send" href="javascript:;"><?php esc_html_e('send message', 'nrgnetwork'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <h5 class="be-title">
                        <?php esc_html_e('About Project', 'nrgnetwork'); ?>
                    </h5>
                    <p class="be-text-userblock">
                        <?php echo TT::getmeta('folio_about', $post_id); ?>
                    </p>

                    <div class="btn btn-share color-4 size-2 hover-7">
                        <i class="fa fa-share-alt"></i><?php esc_html_e('share', 'nrgnetwork'); ?>
                        <div class="share-buttons author-profile-share">
                            <?php
                            $profile_url = get_permalink();
                            $profile_name = get_the_title();
                            ?>
                            <a class="color-1" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url($profile_url); ?>"><i class="fa fa-facebook"></i></a>
                            <a class="color-2" target="_blank" href="https://twitter.com/share?url=<?php echo esc_url($profile_url); ?>&text=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-twitter"></i></a>
                            <a class="color-3" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?url=<?php echo esc_url($profile_url); ?>&description=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-pinterest-p"></i></a>
                            <a class="color-4" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($profile_url); ?>&title=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>


                <?php echo TT_C::get_like_button($post_id); ?>


                <a href="javascript:;" class="be-button-vidget btn-add2collection grey-style <?php echo get_current_user_id() ? '' : 'no-logged-in'; ?>" data-id="<?php echo esc_attr($post_id); ?>">
                    <i class="fa fa-file-o"></i><?php esc_html_e('ADD TO COLLECTION', 'nrgnetwork'); ?>
                </a>
                
                <h3 class="widget-title text-center"><?php esc_html_e('Recent Works', 'nrgnetwork'); ?></h3>
                <div  class="swiper-container" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' =>  $network_post_type,
                            'posts_per_page' => 4
                        );
                        $my_query = new wp_query($args);
                        while ($my_query->have_posts()): $my_query->the_post();
                        ?>
                        <div class="swiper-slide">
                            <div class="be-post">
                                <?php
                                if( has_post_thumbnail() ){
                                    $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-grid' );
                                    echo '<a href="'.esc_url(get_permalink()).'" class="be-img-block">
                                            '.TT_C::image_filter($img).'
                                          </a>';
                                }
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
                                <div class="author-post">
                                    <?php echo get_avatar( $post->post_author, 20 ); ?>
                                    <span>by <a href="<?php echo TT_C::get_author_uri($post->post_author); ?>"><?php the_author(); ?></a></span>
                                </div>
                                <div class="info-block">
                                    <span><i class="fa fa-thumbs-o-up"></i> <?php echo TT_C::get_likes(); ?></span>
                                    <span><i class="fa fa-eye"></i> <?php echo TT_C::get_views(); ?></span>
                                    <span><a href="<?php the_permalink(); ?>#be-comment-block"><i class="fa fa-comment-o"></i> <?php comments_number('0', '1', '%'); ?></a></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                            
                    </div>
                    <div class="pagination"></div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-9 col-md-push-3">
                <?php
                    if ( TT::get_mod('post_comment')=='1' && (comments_open() || get_comments_number()) ) :
                        comments_template();
                    endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>