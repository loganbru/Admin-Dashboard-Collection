<?php get_header(); ?>

<?php
$user = get_current_user_id();


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

?>
<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="container be-detail-container">
        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                <div class="be-large-post">
                    <div class="info-block style-2">
                        <div class="be-large-post-align"><h3 class="info-block-label"><?php esc_html_e('Statistics', 'nrgnetwork'); ?></h3></div>
                    </div>
                    <div class="be-large-post-align">
                        <div class="tab-wrapper style-2 color-2">
                            <div class="tab-nav-wrapper">
                                <div  class="nav-tab  clearfix">
                                    <div class="nav-tab-item active">
                                        <span><?php esc_html_e('Profile Views', 'nrgnetwork'); ?></span>
                                    </div>
                                    <div class="nav-tab-item ">
                                        <span><?php esc_html_e('Appreciations', 'nrgnetwork'); ?></span>
                                    </div>
                                    <div class="nav-tab-item ">
                                        <span><?php esc_html_e('Projects Comments', 'nrgnetwork'); ?></span>
                                    </div> 
                                    <div class="nav-tab-item ">
                                        <span><?php esc_html_e('Projects Views', 'nrgnetwork'); ?></span>
                                    </div>
                                    <!--
                                    <div class="stat-sort be-drop-down">
                                        <span class="be-dropdown-content"> Current Week </span>
                                        <ul class="drop-down-list">
                                            <li><a>This Week</a></li>
                                            <li><a>This Month</a></li>
                                            <li><a>Last 6 Month</a></li>
                                            <li><a>Year</a></li>
                                        </ul>
                                    </div>
                                    -->
                                </div>

                            </div>
                            <div class="tabs-content clearfix">
                                <div class="tab-info chart-info  active">
                                    <div class="stat-chartjs">
                                        <div class="chart-viewport" style="height: 300px; width: 100%;"></div>
                                        <div class="chart-data" data-label="<?php esc_attr_e('Weekly Profile Views', 'nrgnetwork'); ?>"><?php

                                        $data = array();
                                        $data[] = array('label'=>esc_attr__('Mon', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Tue', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Wed', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Thu', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Fri', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sat', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sun', 'nrgnetwork'), 'y'=>0);

                                        $meta = 'netprofile_view_' . date('Y') . '_' . date('m');
                                        $meta_val = get_user_meta($user, $meta, true);
                                        $meta_data = TT_C::decode($meta_val);

                                        $day = abs(date('d'));
                                        $w = abs(date('w'));
                                        $w = $w==0 ? 7 : $w;

                                        for($i=0; $i<$w; $i++){
                                            $d = $day-$i;
                                            if( $d>0 ){
                                                $mk = 'd' . ($d>9 ? $d : '0'.$d);
                                                $data[$w-$i-1]['y'] = isset($meta_data[$mk]) ? abs($meta_data[$mk]) : 0;
                                            }
                                        }
                                        

                                        echo json_encode($data);
                                        ?></div>
                                    </div>
                                </div>
                                <div class="tab-info chart-info">
                                    <div class="stat-chartjs">
                                        <div class="chart-viewport" style="height: 300px; width: 100%;"></div>
                                        <div class="chart-data" data-label="<?php esc_attr_e('Weekly Appreciations', 'nrgnetwork'); ?>"><?php
                                        $data = array();
                                        $data[] = array('label'=>esc_attr__('Mon', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Tue', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Wed', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Thu', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Fri', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sat', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sun', 'nrgnetwork'), 'y'=>0);

                                        $meta = 'netproject_like_' . date('Y') . '_' . date('m');
                                        $meta_val = get_user_meta($user, $meta, true);
                                        $meta_data = TT_C::decode($meta_val);
                                        
                                        $day = abs(date('d'));
                                        $w = abs(date('w'));
                                        $w = $w==0 ? 7 : $w;

                                        for($i=0; $i<$w; $i++){
                                            $d = $day-$i;
                                            if( $d>0 ){
                                                $mk = 'd' . ($d>9 ? $d : '0'.$d);
                                                $data[$w-$i-1]['y'] = isset($meta_data[$mk]) ? abs($meta_data[$mk]) : 0;
                                            }
                                        }

                                        echo json_encode($data);
                                        ?></div>
                                    </div>
                                </div>
                                <div class="tab-info chart-info">
                                    <div class="stat-chartjs">
                                        <div class="chart-viewport" style="height: 300px; width: 100%;"></div>
                                        <div class="chart-data" data-label="<?php esc_attr_e('Weekly Comments', 'nrgnetwork'); ?>"><?php
                                        $data = array();
                                        $data[] = array('label'=>esc_attr__('Mon', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Tue', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Wed', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Thu', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Fri', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sat', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sun', 'nrgnetwork'), 'y'=>0);

                                        $meta = 'netproject_view_' . date('Y') . '_' . date('m');
                                        $meta_val = get_user_meta($user, $meta, true);
                                        $meta_data = TT_C::decode($meta_val);

                                        $day = abs(date('d'));
                                        $w = abs(date('w'));
                                        $w = $w==0 ? 7 : $w;

                                        for($i=0; $i<$w; $i++){
                                            $d = $day-$i;
                                            if( $d>0 ){
                                                $dcomment = get_comments(array('post_author'=>$user, 'date_query'=>array(array('year'=>date('Y'), 'month'=>date('m'), 'day'=>$d)) ));
                                                $data[$w-$i-1]['y'] = count($dcomment);
                                            }
                                        }

                                        echo json_encode($data);
                                        ?></div>
                                    </div>
                                </div>
                                <div class="tab-info chart-info">
                                    <div class="stat-chartjs">
                                        <div class="chart-viewport" style="height: 300px; width: 100%;"></div>
                                        <div class="chart-data" data-label="<?php esc_attr_e('Weekly Project Views', 'nrgnetwork'); ?>"><?php
                                        $data = array();
                                        $data[] = array('label'=>esc_attr__('Mon', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Tue', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Wed', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Thu', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Fri', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sat', 'nrgnetwork'), 'y'=>0);
                                        $data[] = array('label'=>esc_attr__('Sun', 'nrgnetwork'), 'y'=>0);

                                        $meta = 'netproject_view_' . date('Y') . '_' . date('m');
                                        $meta_val = get_user_meta($user, $meta, true);
                                        $meta_data = TT_C::decode($meta_val);

                                        $day = abs(date('d'));
                                        $w = abs(date('w'));
                                        $w = $w==0 ? 7 : $w;

                                        for($i=0; $i<$w; $i++){
                                            $d = $day-$i;
                                            if( $d>0 ){
                                                $mk = 'd' . ($d>9 ? $d : '0'.$d);
                                                $data[$w-$i-1]['y'] = isset($meta_data[$mk]) ? abs($meta_data[$mk]) : 0;
                                            }
                                        }

                                        echo json_encode($data);
                                        ?></div>
                                    </div>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>

                <div class="statistic-block">
                    <div class="tab-wrapper style-3 color-2">
                        <div class="tab-nav-wrapper">
                            <div  class="nav-tab  clearfix">
                                <div class="nav-tab-item active">
                                    <span><?php esc_html_e('Receives', 'nrgnetwork'); ?></span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span><?php esc_html_e('Given', 'nrgnetwork'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active"> 
                                <div class="stat-wrapper">
                                    <div class="row no-padding">
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_1.png" alt="">
                                                <div class="stat-number"><?php
                                                    $total_views = get_user_meta( $user, 'netproject_who_view', true );
                                                    echo abs($total_views);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('project views', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_2.png" alt="">
                                                <div class="stat-number"><?php
                                                    $total_likes = get_user_meta( $user, 'netproject_total_likes', true );
                                                    echo abs($total_likes);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('project appreciations', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_3.png" alt="">
                                                <div class="stat-number"><?php
                                                    $all_comments = get_comments(array('post_author'=>get_current_user_id(), 'post_type'=>$network_post_type));
                                                    echo count($all_comments);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('project comments', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_4.png" alt="">
                                                <div class="stat-number"><?php
                                                    $total_views = get_user_meta( $user, 'netprofile_who_view', true );
                                                    echo abs($total_views);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('profile views', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>                                                                                                                      
                                    </div>
                                </div>
                            </div>
                            <div class="tab-info"> 
                                <div class="stat-wrapper">
                                    <div class="row no-padding">
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_2.png" alt="">
                                                <div class="stat-number"><?php
                                                    $total_likes = get_user_meta( $user, 'netproject_likes_count', true );
                                                    echo abs($total_likes);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('project appreciations', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>                                  
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_1.png" alt="">
                                                <div class="stat-number"><?php
                                                    $total_views = get_user_meta( $user, 'netproject_view', true );
                                                    echo abs($total_views);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('profile views', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_4.png" alt="">
                                                <div class="stat-number"><?php
                                                    $total_views = get_user_meta( $user, 'netprofile_view', true );
                                                    echo abs($total_views);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('profile views', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>                                      
                                        <div class="stat-item col-xs-12 col-sm-3">
                                            <div class="stat-entry">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/stat_3.png" alt="">
                                                <div class="stat-number"><?php
                                                    $all_comments = get_comments(array('author__in'=>array($user), 'post_type'=>$network_post_type));
                                                    echo count($all_comments);
                                                ?></div>
                                                <div class="stat-text"><?php esc_html_e('project comments', 'nrgnetwork'); ?></div>
                                            </div>
                                        </div>                                                                          
                                    </div>
                                </div>                                                     
                            </div>                         
                        </div>
                    </div>
                </div>

                


                <div class="be-large-post">
                    <div class="info-block style-2">
                        <div class="be-large-post-align"><div class="info-block-right"><?php esc_html_e('in all time', 'nrgnetwork'); ?></div><h3 class="info-block-label"><?php esc_html_e('Portfolio All Time Review', 'nrgnetwork'); ?></h3></div>
                    </div>
                    <div class="be-large-post-align">                       
                        <div class="table-responsive">
                            <table class="table table-sotring tablesorter">
                                <thead>
                                  <tr>
                                    <th class="col-xs-4"><?php esc_html_e('Project', 'nrgnetwork'); ?></th>
                                    <th class="col-xs-1 text-center">
                                        <img width="18px" src="<?php echo get_template_directory_uri(); ?>/img/stat_1.png" alt="">
                                    </th>
                                    <th class="col-xs-1 text-center">
                                        <img width="18px" src="<?php echo get_template_directory_uri(); ?>/img/stat_2.png" alt="">
                                    </th>
                                    <th class="col-xs-1 text-center">
                                        <img width="18px" src="<?php echo get_template_directory_uri(); ?>/img/stat_3.png" alt="">
                                    </th>
                                    <th class="col-xs-5"><?php esc_html_e('Appreciated By', 'nrgnetwork'); ?>:</th>
                                  </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $folio_likes = array();
                                    $folio_comments = array();
                                    $args = array(
                                        'post_type' => $network_post_type,
                                        'posts_per_page' => 100,
                                        'ignore_sticky_posts' => true,
                                        'author' => get_current_user_id()
                                    );
                                    $posts_query = new WP_Query($args);
                                    while ( $posts_query->have_posts() ):
                                        $posts_query->the_post();

                                        $img = '';
                                        if( has_post_thumbnail() ){
                                            $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-thumb', false, array('class'=>'t_project-img'));
                                        }
                                    ?>
                                    <tr>
                                        <td class="col-xs-4">
                                            <div class="t_project clearfix">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php print($img); ?>
                                                </a>
                                                <div class="t_project-desc">
                                                    <a class="t_project-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    <div class="t_project-date"><i class="fa fa-clock-o"></i> <?php echo get_the_date('M d, Y'); ?></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center"><strong><?php
                                            // views
                                            $views = TT_C::get_views();
                                            echo abs($views);
                                        ?></strong></td>
                                        <td class="text-center"><strong><?php
                                            // likes
                                            $likes = TT_C::get_likes();
                                            echo abs($likes);
                                        ?></strong></td>
                                        <td class="text-center"><strong><?php
                                            // comments
                                            comments_number('0', '1', '%');

                                            $comments = get_comments(array('post_id'=>get_the_id()));
                                            foreach ($comments as $value) {
                                                $folio_comments[] = $value->user_id;
                                            }
                                        ?></strong></td>
                                        <td>
                                            <?php
                                            $liked_authors_data = TT::getmeta('post_likes_data');
                                            $liked_authors = TT_C::decode($liked_authors_data);

                                            $folio_likes += $liked_authors;

                                            if( !empty($liked_authors) ){
                                                $usr_index = 0;
                                                foreach ($liked_authors as $val) {
                                                    echo '<a class="t_project_icon img-round" href="'.TT_C::get_author_uri($val).'">'.get_avatar($val, 40).'</a>';
                                                    $usr_index++;
                                                    if( $usr_index>3 ){
                                                        break;
                                                    }
                                                }
                                            }
                                            else{
                                                echo '--';
                                            }

                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>

                                  
                                </tbody>
                            </table>
                        </div>
                    </div>                      
                </div>
                


                <div class="be-large-post">
                    <div class="info-block style-2">
                        <div class="be-large-post-align"><h3 class="info-block-label"><?php esc_html_e('Appreciations', 'nrgnetwork'); ?></h3></div>
                    </div>
                    <div class="be-large-post-align">
                        <div class="row">
                            <?php
                            $_likes = array_unique($folio_likes);
                            foreach ($_likes as $val):
                                $usr = abs(str_replace("user-", "", $val));
                            ?>
                            <div class="col-xs-12 col-sm-3">
                                <div class="appreciator clearfix">
                                    <a href="<?php echo TT_C::get_author_uri($usr); ?>">
                                        <?php
                                        $avatar = get_avatar($usr, 60);
                                        $avatar = str_replace('class="avatar', 'class="avatar img-round appreciator-img', $avatar);
                                        printf('%s', $avatar);
                                        ?>
                                    </a>
                                    <div class="appreciator-desc">
                                        <div class="appreciator-title"><?php
                                            echo get_the_author_meta('display_name', $usr);
                                        ?></div>
                                        <div class="appreciator-text"><?php
                                            echo count( array_keys( $folio_likes, $usr ));
                                        ?> <?php esc_html_e('Appreciations', 'nrgnetwork'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            ?>
                                                                                                                                                      
                        </div>
                    </div>
                </div>




                <div class="be-large-post">
                    <div class="info-block style-2">
                        <div class="be-large-post-align"><h3 class="info-block-label"><?php esc_html_e('Commentors', 'nrgnetwork'); ?></h3></div>
                    </div>
                    <div class="be-large-post-align">
                        <div class="row">
                            
                            <?php
                            $_comments = array_unique($folio_comments);
                            foreach ($_comments as $usr):
                            ?>
                            <div class="col-xs-12 col-sm-3">
                                <div class="appreciator clearfix">
                                    <a href="<?php echo TT_C::get_author_uri($usr); ?>">
                                        <?php
                                        $avatar = get_avatar($usr, 60);
                                        $avatar = str_replace('class="avatar', 'class="avatar img-round appreciator-img', $avatar);
                                        printf('%s', $avatar);
                                        ?>
                                    </a>
                                    <div class="appreciator-desc">
                                        <div class="appreciator-title"><?php
                                            echo get_the_author_meta('display_name', $usr);
                                        ?></div>
                                        <div class="appreciator-text"><?php
                                            echo count( array_keys( $folio_comments, $usr ));
                                        ?> <?php esc_html_e('Comments', 'nrgnetwork'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            ?>
                            
                        </div>
                    </div>
                </div>  



            </div>
        </div>

        
    </div>
</div>

<?php get_footer(); ?>