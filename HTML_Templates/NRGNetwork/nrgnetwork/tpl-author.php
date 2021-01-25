<?php get_header(); ?>

<?php

global $wp_query;
$user = abs($wp_query->query_vars['user']);
$user_data = null;

if( $user<1 ){
    $user_data = get_user_by( 'login', $wp_query->query_vars['user'] );
    $user = $user_data->ID;
}
else{
    $user_data = get_userdata($user);
}




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



$data_followers = get_user_meta($user, 'net_data_followers', true);
$friend_followers = TT_C::decode($data_followers);
$friend_followers = array_unique($friend_followers);

$data_following = get_user_meta($user, 'net_data_following', true);
$following = TT_C::decode($data_following);
$following = array_unique($following);

?>

<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="container be-detail-container">
        <div class="row">
            <div class="col-xs-12 col-md-4 left-feild">
                <div class="be-user-block style-3">
                    <div class="be-user-detail">
                        <a class="be-ava-user style-2 img-round" href="javascript:;">
                            <?php echo get_avatar( $user, 115 ); ?>
                        </a>
                        
                        <?php
                        if( is_user_logged_in() ){
                            if( $user == get_current_user_id() ){
                                echo '<a class="be-ava-left btn color-1 size-2 hover-1" href="'.TT_C::get_author_edit_uri($user).'"><i class="fa fa-pencil"></i>'.esc_html__('Edit', 'nrgnetwork').'</a>';
                            }
                            else{
                                $is_following = TT_C::net_is_following($user);

                                if( $is_following=='following' ){
                                    echo '<a href="javascript:;" class="be-ava-left btn color-1 size-2 hover-1 bp-follow-action" data-user-id="'.$user.'" data-text-follow="'.esc_html__('FOLLOW', 'nrgnetwork').'" data-text-following="'.esc_html__('FOLLOWING', 'nrgnetwork').'">'.esc_html__('FOLLOWING', 'nrgnetwork').'</a>';
                                }
                                else{
                                    echo '<a href="javascript:;" class="be-ava-left btn color-1 size-2 hover-1 bp-follow-action" data-user-id="'.$user.'" data-text-follow="'.esc_html__('FOLLOW', 'nrgnetwork').'" data-text-following="'.esc_html__('FOLLOWING', 'nrgnetwork').'"><i class="fa fa-plus"></i>'.esc_html__('FOLLOW', 'nrgnetwork').'</a>';
                                }
                            }
                        }
                        else{
                            echo '<a class="be-ava-left btn color-1 size-2 hover-1 no-logged-in"><i class="fa fa-plus"></i>'.esc_html__('Follow', 'nrgnetwork').'</a>';
                        }
                        ?>
                        

                        <?php if( $user==get_current_user_id() ): ?>
                        <div class="be-ava-right btn btn-share color-4 size-2 hover-7">
                            <i class="fa fa-share-alt"></i><?php esc_html_e('share', 'nrgnetwork'); ?>
                            <div class="share-buttons author-profile-share">
                                <?php
                                $profile_url = TT_C::get_author_uri($user);
                                $profile_name = get_the_author_meta('display_name', $user);
                                ?>
                                <a class="color-1" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url($profile_url); ?>"><i class="fa fa-facebook"></i></a>
                                <a class="color-2" target="_blank" href="https://twitter.com/share?url=<?php echo esc_url($profile_url); ?>&text=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-twitter"></i></a>
                                <a class="color-3" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?url=<?php echo esc_url($profile_url); ?>&description=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-pinterest-p"></i></a>
                                <a class="color-4" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($profile_url); ?>&title=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>

                        <?php else: ?>

                        <div class="be-ava-right btn btn-message color-4 size-2 hover-7" data-author="<?php echo esc_attr($user_data->ID); ?>">
                            <i class="fa fa-envelope-o"></i><?php esc_html_e('message', 'nrgnetwork'); ?>
                            <?php if( is_user_logged_in() ): ?>
                            <div class="message-popup msg-popup-window">
                                <div class="message-popup-inner container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                            <i class="fa fa-times close-button"></i>
                                            <h5 class="large-popup-title"><?php esc_html_e('Send Message To', 'nrgnetwork'); ?> <?php printf('%s', $user_data->user_login); ?></h5>
                                            <div class="form-group">
                                                <input type="hidden" id="msg_username" value="<?php echo esc_attr($user_data->ID); ?>">
                                                <textarea class="form-input" id="msg_content" placeholder="<?php esc_attr_e('Your text', 'nrgnetwork'); ?>"></textarea>
                                            </div>
                                            <a class="btn btn-right color-1 size-1 hover-1" id="msg_button_send" href="javascript:;"><?php esc_html_e('send message', 'nrgnetwork'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <p class="be-use-name"><?php
                            $fname = get_the_author_meta('first_name', $user);
                            $lname = get_the_author_meta('last_name', $user);

                            if( !empty($fname) || !empty($lname) ){
                                printf('%s %s', $fname, $lname);
                            }
                            else{
                                echo get_the_author_meta('display_name', $user);
                            }
                        ?></p>

                        <div class="be-user-info">
                            <?php echo get_user_meta($user, 'cs_city', true) . ', ' . get_user_meta($user, 'cs_country', true); ?>
                        </div>
                        <?php if($user != get_current_user_id() ) : ?>
                        <div class="btn btn-share color-4 size-2 hover-7">
                            <i class="fa fa-share-alt"></i><?php esc_html_e('share', 'nrgnetwork'); ?>
                            <div class="share-buttons author-profile-share">
                                <?php
                                $profile_url = TT_C::get_author_uri($user);
                                $profile_name = get_the_author_meta('display_name', $user);
                                ?>
                                <a class="color-1" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url($profile_url); ?>"><i class="fa fa-facebook"></i></a>
                                <a class="color-2" target="_blank" href="https://twitter.com/share?url=<?php echo esc_url($profile_url); ?>&text=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-twitter"></i></a>
                                <a class="color-3" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?url=<?php echo esc_url($profile_url); ?>&description=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-pinterest-p"></i></a>
                                <a class="color-4" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($profile_url); ?>&title=<?php echo esc_attr($profile_name); ?>"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="be-text-tags style-2">
                            <?php echo get_user_meta($user, 'cs_occupation', true); ?>
                        </div>

                        <div class="be-user-social">
                            <?php
                            $cs_socials_op = get_user_meta($user, 'cs_socials', true);
                            $cs_socials = TT_C::decode($cs_socials_op);
                            $cs_socials = is_array($cs_socials) ? $cs_socials : array();

                            if( !isset($cs_socials['facebook']) ){ $cs_socials['facebook'] = '#'; }
                            if( !isset($cs_socials['twitter']) ){ $cs_socials['twitter'] = '#'; }
                            if( !isset($cs_socials['google']) ){ $cs_socials['google'] = '#'; }
                            if( !isset($cs_socials['pinterest']) ){ $cs_socials['pinterest'] = '#'; }
                            if( !isset($cs_socials['instagram']) ){ $cs_socials['instagram'] = '#'; }
                            if( !isset($cs_socials['linkedin']) ){ $cs_socials['linkedin'] = '#'; }

                            ?>
                            <a class="social-btn color-1" href="<?php echo esc_attr($cs_socials['facebook']); ?>"><i class="fa fa-facebook"></i></a>
                            <a class="social-btn color-2" href="<?php echo esc_attr($cs_socials['twitter']); ?>"><i class="fa fa-twitter"></i></a>
                            <a class="social-btn color-3" href="<?php echo esc_attr($cs_socials['google']); ?>"><i class="fa fa-google-plus"></i></a>
                            <a class="social-btn color-4" href="<?php echo esc_attr($cs_socials['pinterest']); ?>"><i class="fa fa-pinterest"></i></a>
                            <a class="social-btn color-5" href="<?php echo esc_attr($cs_socials['instagram']); ?>"><i class="fa fa-instagram"></i></a>
                            <a class="social-btn color-6" href="<?php echo esc_attr($cs_socials['linkedin']); ?>"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a class="be-user-site" href="<?php echo get_user_meta($user, 'user_url', true); ?>"><i class="fa fa-link"></i> <?php echo get_user_meta($user, 'user_url', true); ?></a>

                    </div>

                    <div class="be-user-statistic">
                        <div class="stat-row clearfix">
                            <i class="stat-icon icon-views-b"></i>
                            <?php esc_html_e('Projects views', 'nrgnetwork'); ?>
                            <span class="stat-counter"><?php
                                $project_views = get_user_meta($user, 'netproject_who_view', true);
                                echo abs($project_views);
                            ?></span>
                        </div>
                        <div class="stat-row clearfix">
                            <i class="stat-icon icon-like-b"></i>
                            <?php esc_html_e('Appreciations', 'nrgnetwork'); ?>
                            <span class="stat-counter"><?php
                                $total_likes = get_user_meta($user, 'netproject_total_likes', true);
                                echo abs($total_likes);
                            ?></span>
                        </div>
                        <div class="stat-row clearfix">
                            <i class="stat-icon icon-followers-b"></i>
                            <?php esc_html_e('Followers', 'nrgnetwork'); ?>
                            <span class="stat-counter"><?php
                                echo count($friend_followers);
                            ?></span>
                        </div>
                        <div class="stat-row clearfix">
                            <i class="stat-icon icon-following-b"></i>
                            <?php esc_html_e('Following', 'nrgnetwork'); ?>
                            <span class="stat-counter"><?php
                                echo count($following);
                            ?></span>
                        </div>
                    </div>

                </div>
                <div class="be-desc-block">
                
                    <div class="be-desc-author">
                        <div class="be-desc-label"><?php esc_html_e('About Me', 'nrgnetwork'); ?></div>
                        <div class="clearfix"></div>
                        <div class="be-desc-text">
                            <?php echo get_the_author_meta('description', $user); ?>
                        </div>
                    </div>

                    <?php
                    $custom_section_op = get_user_meta($user, 'custom_section', true);
                    $custom_section = unserialize( urldecode($custom_section_op) );
                    $custom_section = is_array($custom_section) ? $custom_section : array();
                    foreach ($custom_section as $item):
                    ?>
                    <div class="be-desc-author">
                        <div class="be-desc-label"><?php printf('%s', $item['title']); ?></div>
                        <div class="clearfix"></div>
                        <div class="be-desc-text">
                            <?php printf('%s', $item['content']); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>                                      
            </div>




            <div class="col-xs-12 col-md-8">
                
                <div class="tab-wrapper style-1">

                    <div class="tab-nav-wrapper">
                        <div  class="nav-tab  clearfix">
                            <div class="nav-tab-item active">
                                <span><?php esc_html_e('Projects', 'nrgnetwork'); ?></span>
                            </div>
                            <div class="nav-tab-item ">
                                <span><?php esc_html_e('Appreciated', 'nrgnetwork'); ?></span>
                            </div>
                            <div class="nav-tab-item ">
                                <span><?php esc_html_e('Collections', 'nrgnetwork'); ?></span>
                            </div>
                            <div class="nav-tab-item ">
                                <span><?php esc_html_e('Followers', 'nrgnetwork'); ?></span>
                            </div>
                            <div class="nav-tab-item ">
                                <span><?php esc_html_e('Following', 'nrgnetwork'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="tabs-content clearfix">

                        <div class="tab-info active">
                            <div class="tab-info-viewport">
                                <div class="row">

                                    <?php
                                    
                                    // build query
                                    $args = array(
                                                    'post_type' => $network_post_type,
                                                    'post_status' => array('publish', 'draft', 'pending'),
                                                    'posts_per_page' => 9,
                                                    'ignore_sticky_posts' => true,
                                                    'paged' => '1',
                                                    'author' => $user
                                                );
                                    $posts_query = new WP_Query($args);
                                    while ( $posts_query->have_posts() ):
                                        $posts_query->the_post();
                                    ?>
                                    <div class="col-ml-12 col-xs-6 col-sm-4 netauthor-item">
                                        <div class="be-post item-media">
                                            <?php
                                            if( has_post_thumbnail() ){
                                                $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-grid' );
                                                echo '<a href="'.esc_url(get_permalink()).'" class="be-img-block">
                                                        '.TT_C::image_filter($img).'
                                                      </a>';
                                            }

                                            if( $user != get_current_user_id() ){
                                                $featured = TT::getmeta('featured_item');
                                                $featured = $featured=='1' ? '<span class="item-featured"><i class="fa fa-star-o"></i></span>' : '';
                                                echo "$featured";
                                            }

                                            if( $user == get_current_user_id() ){
                                                echo '<a href="'.TT_C::get_folio_edit_uri(get_the_ID()).'" class="folio-edit-uri">Edit</a>';
                                            }

                                            $post_status = get_post_status(get_the_id());
                                            if( in_array($post_status, array('draft', 'pending')) ){
                                                echo '<a href="javascript:;" class="folio-post-status">'.$post_status.'</a>';
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
                                                <span>by <a href="<?php echo TT_C::get_author_uri($user); ?>"><?php the_author(); ?></a></span>
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
                            </div>

                            <?php if( abs($posts_query->post_count)>8 ): ?>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <a href="javascript:;" class="btn color-4 size-2 hover-7 btn_load_projects" id="btn_load_projects"><?php esc_html_e('Load more ...', 'nrgnetwork'); ?></a>
                                    <div class="hidden" id="load_more_projects"><?php echo TT_C::encode($args); ?></div>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>

                        <div class="tab-info">
                            <div class="tab-info-viewport">
                                <div class="row">

                                    <?php
                                    $liked_posts = TT_C::get_liked_posts($user);
                                    // build query
                                    $args = array(
                                                    'post_type' => $network_post_type,
                                                    'posts_per_page' => 9,
                                                    'ignore_sticky_posts' => true,
                                                    'paged' => '1',
                                                    'post__in' => $liked_posts
                                                );
                                    $posts_query = new WP_Query($args);
                                    while ( $posts_query->have_posts() ):
                                        $posts_query->the_post();
                                    ?>
                                    <div class="col-ml-12 col-xs-6 col-sm-4 netauthor-item">
                                        <div class="be-post item-media style-4">
                                            <?php
                                            if( has_post_thumbnail() ){
                                                $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-grid' );
                                                echo '<a href="'.esc_url(get_permalink()).'" class="be-img-block">
                                                        '.TT_C::image_filter($img).'
                                                      </a>';
                                            }

                                            $featured = TT::getmeta('featured_item');
                                            $featured = $featured=='1' ? '<span class="item-featured"><i class="fa fa-star-o"></i></span>' : '';
                                            echo "$featured";
                                            ?>
                                            <a href="<?php the_permalink(); ?>" class="be-post-title"><?php the_title(); ?></a>

                                            <div class="author-post clearfix">
                                                <?php echo get_avatar( $post->post_author, 20 ); ?>
                                                <span>by <a href="<?php echo TT_C::get_author_uri($post->post_author); ?>"><?php the_author(); ?></a></span>
                                                <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> <?php echo TT_C::get_likes(); ?></span>
                                            </div>
                                        </div>                                  
                                    </div>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>

                                </div>
                            </div>

                            <?php if( abs($posts_query->post_count)>8 ): ?>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <a href="javascript:;" class="btn color-4 size-2 hover-7" id="btn_load_likes"><?php esc_html_e('Load more ...', 'nrgnetwork'); ?></a>
                                    <div class="hidden" id="load_more_likes"><?php echo TT_C::encode($args); ?></div>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                        </div>

                        <div class="tab-info">


                            <?php
                            $coll_name = 'add2collection' . $user;
                            $option = get_option($coll_name  , '' );
                            $colls = TT_C::decode($option);
                            $nonce = wp_create_nonce('coll_edit_nonce');
                            
                            foreach ($colls as $coll):
                                if( !isset($coll['id']) ){
                                    $coll['id'] = isset($coll[0]) ? $coll[0] : 0;
                                }
                            ?>
                            <div class="collection">
                                <h3 class="menu-article"><?php echo isset($coll['name']) ? $coll['name'] : 'Collection'; ?></h3>
                                <div class="collection-header">
                                    <span><i class="fa fa-user"></i>by <a href="<?php echo TT_C::get_author_uri($user); ?>"><?php echo get_the_author_meta('user_nicename', $user); ?></a> </span>
                                    <span><i class="fa fa-file-text-o"></i> <?php echo isset($coll['posts']) ? count($coll['posts']) : '0'; ?></span>

                                    <span class="collection-actions">
                                        <?php
                                        if( is_user_logged_in() && get_current_user_id()==$user ):
                                        ?>
                                        <a href="javascript:;" class="coll_edit_action" data-nonce="<?php echo esc_attr($nonce); ?>" data-id="<?php echo esc_attr($coll['id']); ?>"><i class="fa fa-pencil"></i> <?php esc_html_e('Rename', 'nrgnetwork'); ?></a>
                                        <a href="javascript:;" class="col_remove_action" data-nonce="<?php echo esc_attr($nonce); ?>" data-id="<?php echo esc_attr($coll['id']); ?>"><i class="fa fa-remove"></i> <?php esc_html_e('Rename', 'nrgnetwork'); ?></a>
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <div class="collection-entry">
                                    <a href="<?php echo TT_C::get_author_collect_uri($user, $coll['id']); ?>" class="portfolio-link type-2 clearfix">
                                        <?php
                                        $args = array(
                                                        'post_type' => $network_post_type,
                                                        'posts_per_page' => 5,
                                                        'ignore_sticky_posts' => true,
                                                        'post__in' => isset($coll['posts']) && !empty($coll['posts']) ? $coll['posts'] : array(0)
                                                    );
                                        $posts_query = new WP_Query($args);
                                        while ( $posts_query->have_posts() ){
                                            $posts_query->the_post();
                                            
                                            if( has_post_thumbnail() ){
                                                $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-thumb' );
                                                print( TT_C::image_filter($img) );
                                            }
                                        }
                                        wp_reset_postdata();
                                        ?>
                                        <div class="color_bg">
                                            <span><?php esc_html_e('view collection', 'nrgnetwork'); ?></span>
                                            <span class="child"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            ?>



                        </div>

                        

                        <div class="tab-info">
                            <div class="tab-info-viewport net-author-follow-vp">
                                <div class="row">
                                    <?php
                                    
                                    $cs_class = new NRGCommunity_Setings();
                                    $result = $cs_class->get_authors_list($friend_followers);
                                    $result = str_replace(" custom-column-5 ", " col-sm-4 ", $result);

                                    printf('%s', $result);
                                    ?>
                                </div>
                            </div>
                        </div>



                        <div class="tab-info">
                            <div class="tab-info-viewport net-author-follow-vp">
                                <div class="row">
                                    <?php
                                    
                                    $cs_class = new NRGCommunity_Setings();
                                    $result = $cs_class->get_authors_list($following);
                                    $result = str_replace(" custom-column-5 ", " col-sm-4 ", $result);

                                    printf('%s', $result);

                                    ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>              
            </div>





        </div>
    </div>
</div>




<?php get_footer(); ?>