<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="container be-detail-container">
        <h2 class="content-title"><?php TPL::get_page_titles(); ?></h2>
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="blog-wrapper blog-list">


                    <?php
                    while ( have_posts() ) : the_post();
                    ?>
                    <div class="blog-post be-large-post">
                        <div class="info-block clearfix">
                            <div class="be-large-post-align">
                                <span><?php echo TT_C::get_like_link('<i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes()); ?></span>
                                <span><i class="fa fa-eye"></i> <?php echo TT_C::get_views(); ?></span>
                                <span><a href="<?php the_permalink(); ?>#be-comment-block"><i class="fa fa-comment-o"></i> <?php comments_number('0', '1', '%'); ?></a></span>
                                <div class="be-text-tags">
                                    <?php echo get_the_category_list(', '); ?>
                                </div>                                     
                            </div>
                        </div>
                        <div class="be-large-post-align">
                            <h3 class="be-post-title">
                                <?php the_title(); ?>
                            </h3>

                            <span class="be-text-tags clearfix">
                                <div class="post-date">
                                    <i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?>
                                </div>
                                <div class="author-post">
                                    <?php echo get_avatar( $post->post_author, 20 ); ?>
                                    <span><?php esc_html_e('by ', 'nrgnetwork'); ?><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>

                                </div>
                            </span>
                            <div class="clear"></div>
                        </div>

                                <?php
                                    if( has_post_thumbnail() ){
                                            $img = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), 'nrgnetwork-post-thumb', false, array('class'=>'img-full') );
                                            echo '<a class="post-preview post-image" href="'.esc_url(get_permalink()).'">
                                                        '.$img.'
                                                    </a>';
                                        }
                                ?>


                        <div class="blog-content be-large-post-align">
                            <div class="post-text ">
                                <?php the_content(); 
                                    wp_link_pages( array(
                                        'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'nrgnetwork') . '</span>',
                                        'after'       => '</div>',
                                        'link_before' => '<span>',
                                        'link_after'  => '</span>',
                                        'pagelink'    => '<span class="screen-reader-text">' . esc_html__('Page', 'nrgnetwork') . ' </span>%',
                                        'separator'   => '<span class="screen-reader-text">, </span>',
                                    ) );
                                ?>
                            </div>
                        </div>

                        <div class="be-large-post-align">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="be-bottom">
                                        <div class="tags_block clearfix">
                                                <?php
                                                    $tag_list = get_the_tag_list();
                                                    if( !empty($tag_list) ):
                                                    ?>
                                                    <h4 class="be-bottom-title"><?php esc_html_e('Tags', 'nrgnetwork'); ?></h4>
                                                    <div class="tags-button">
                                                    <?php echo get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>'); ?>
                                                    </div>
                                                <?php endif; ?>
                                        </div>                                  
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="be-bottom right">
                                        <h4 class="be-bottom-title"><?php esc_html_e('Share', 'nrgnetwork'); ?></h4>
                                        <ul class="soc_buttons light">
                                            <?php
                                                $links = TPL::get_share_links();
                                                foreach ($links as $key => $value) {
                                                    switch( $key ){
                                                        case 'facebook':
                                                            echo ' <li class="facebook"><a href="'.$value.'"><i class="fa fa-facebook"></i></a></li>';
                                                            break;
                                                        case 'twitter':
                                                            echo ' <li class="twitter"><a href="'.$value.'"><i class="fa fa-twitter"></i></a></li>';
                                                            break;
                                                        case 'googleplus':
                                                            echo ' <li class="google-plus"><a href="'.$value.'"><i class="fa fa-google-plus"></i></a></li>';
                                                            break;
                                                        case 'pinterest':
                                                            echo ' <li class="pinterest"><a href="'.$value.'"><i class="fa fa-pinterest"></i></a></li>';
                                                            break;
                                                        case 'instagram':
                                                            echo ' <li class="instagram"><a href="'.$value.'"><i class="fa fa-instagram"></i></a></li>';
                                                            break;
                                                        case 'linkedin':
                                                            echo ' <li class="linkedin"><a href="'.$value.'"><i class="fa fa-linkedin"></i></a></li>';
                                                            break;
                                                    }
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <?php TPL::get_related_posts(); ?>

                    <?php
                    if ( TT::get_mod('post_comment')=='1' && (comments_open() || get_comments_number()) ) :
                        comments_template();
                    endif;
                    ?>



                </div>
            </div>
            
            <?php get_sidebar(); ?>

        </div>
    </div>
</div>