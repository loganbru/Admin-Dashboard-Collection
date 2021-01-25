<?php get_header(); ?>

<?php

global $wp_query;
$user = abs($wp_query->query_vars['user']);

$custom_section_op = get_user_meta($user, 'custom_section', true);
$custom_section = unserialize( urldecode($custom_section_op) );
$custom_section = is_array($custom_section) ? $custom_section : array();

$cs_socials_op = get_user_meta($user, 'cs_socials', true);
$cs_socials = unserialize( urldecode($cs_socials_op) );
$cs_socials = is_array($cs_socials) ? $cs_socials : array();

if( !isset($cs_socials['facebook']) ){ $cs_socials['facebook'] = '#'; }
if( !isset($cs_socials['twitter']) ){ $cs_socials['twitter'] = '#'; }
if( !isset($cs_socials['google']) ){ $cs_socials['google'] = '#'; }
if( !isset($cs_socials['pinterest']) ){ $cs_socials['pinterest'] = '#'; }
if( !isset($cs_socials['instagram']) ){ $cs_socials['instagram'] = '#'; }
if( !isset($cs_socials['linkedin']) ){ $cs_socials['linkedin'] = '#'; }


?>

<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="container be-detail-container">
        <div class="row">
            <div class="col-xs-12 col-md-3 left-feild">
                <div class="be-vidget back-block">
                    <a class="btn full color-1 size-1 hover-1" href="<?php echo TT_C::get_author_uri($user); ?>">
                        <i class="fa fa-chevron-left"></i><?php esc_html_e('back to profile', 'nrgnetwork'); ?>
                    </a>
                </div>
                <div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
                    <h3 class="letf-menu-article">
                        <?php esc_html_e('Choose Category', 'nrgnetwork'); ?>
                    </h3>
                    <div class="creative_filds_block">
                        <ul class="ul nav">
                            <li><a href="#basic-information"><?php esc_html_e('Basic Information', 'nrgnetwork'); ?></a></li>
                            <li><a href="#author-change-pass"><?php esc_html_e('Change Password', 'nrgnetwork'); ?></a></li>
                            <li><a href="#on-the-web"><?php esc_html_e('On The Web', 'nrgnetwork'); ?></a></li>
                            <li><a href="#about-me"><?php esc_html_e('About Me', 'nrgnetwork'); ?></a></li>
                            <?php
                            foreach ($custom_section as $item) {
                                echo '<li><a href="#'.$item['id'].'">'.$item['title'].'</a></li>';
                            }
                            ?>
                        </ul>
                    </div>

                </div>
                
                <a class="btn full color-1 size-1 hover-1" href="javascript:;" id="save-profile">
                    <i class="fa fa-check"></i><?php esc_html_e('save profile', 'nrgnetwork'); ?>
                </a>

            </div>
            <div class="col-xs-12 col-md-9 _editor-content_">
                <div class="affix-block" id="basic-information">
                    <div class="be-large-post">
                        <div class="info-block style-2">
                            <div class="be-large-post-align"><h3 class="info-block-label"><?php esc_html_e('Basic Information', 'nrgnetwork'); ?></h3></div>
                        </div>
                        <div class="be-large-post-align">
                            <div class="be-change-ava">
                                <a class="be-ava-user style-2 img-round" id="user-avatar" href="javascript:;">
                                    <?php echo get_avatar( $user, 115 ); ?>
                                </a>
                                <a class="btn color-4 size-2 hover-7" id="edit-avatar" href="javascript:;"><?php esc_html_e('Edit Image', 'nrgnetwork'); ?></a>
                                <input type="hidden" id="user-avatar-attach" value="<?php
                                    $image = get_the_author_meta('user_image', $user);
                                    echo !empty($image) ? $image : '';
                                ?>">
                            </div>
                        </div>
                        <div class="be-large-post-align">
                            <div class="row">
                                <div class="input-col col-xs-12 col-sm-6">
                                    <div class="form-group fg_icon focus-2">
                                        <div class="form-label"><?php esc_html_e('First Name', 'nrgnetwork'); ?></div>
                                        <input class="form-input cs-fname" type="text" value="<?php echo get_the_author_meta('first_name', $user); ?>">
                                    </div>                          
                                </div>
                                <div class="input-col col-xs-12 col-sm-6">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Last Name', 'nrgnetwork'); ?></div>                                 
                                        <input class="form-input cs-lname" type="text" value="<?php echo get_the_author_meta('last_name', $user); ?>">
                                    </div>                              
                                </div>
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Occupation', 'nrgnetwork'); ?></div>
                                        <input class="form-input cs-occupation" type="text" value="<?php echo get_user_meta($user, 'cs_occupation', true); ?>" placeholder="<?php esc_html_e('UI/UX, Web Design, Art Direction', 'nrgnetwork'); ?>">
                                    </div>                              
                                </div>
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Company', 'nrgnetwork'); ?></div>                                   
                                        <input class="form-input cs-company" type="text" value="<?php echo get_user_meta($user, 'cs_company', true); ?>" placeholder="<?php esc_html_e('Company', 'nrgnetwork'); ?>">
                                    </div>                              
                                </div>
                                <div class="input-col col-xs-12 col-sm-6">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Country', 'nrgnetwork'); ?></div>
                                        <div class="be-drop-down icon-none">
                                            <span class="be-dropdown-content"> <?php echo get_user_meta($user, 'cs_country', true); ?> </span>
                                            <input class="form-input cs-country" type="hidden" value="<?php echo get_user_meta($user, 'cs_country', true); ?>">
                                            <ul class="drop-down-list">
                                                <?php
                                                $countries =TT_C::get_countries();
                                                foreach ($countries as $val) {
                                                    echo "<li><a href='javascript:;'>$val</a></li>";
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-col col-xs-12 col-sm-6">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('City', 'nrgnetwork'); ?></div>                                  
                                        <input class="form-input cs-city" type="text" value="<?php echo get_user_meta($user, 'cs_city', true); ?>" placeholder="<?php esc_html_e('City name', 'nrgnetwork'); ?>">
                                    </div>
                                </div>
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Website URL', 'nrgnetwork'); ?></div>
                                        <input class="form-input cs-website" type="text" value="<?php echo get_user_meta($user, 'user_url', true); ?>">
                                    </div>                              
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>


                <div class="affix-block" id="author-change-pass">
                    <div class="be-large-post">
                        <div class="info-block style-2">
                            <div class="be-large-post-align"><h3 class="info-block-label"><?php esc_html_e('Change Password', 'nrgnetwork'); ?></h3></div>
                        </div>
                        <div class="be-large-post-align">
                            <div class="row">
                                <div class="input-col col-xs-12 col-sm-6">
                                    <div class="form-group fg_icon focus-2">
                                        <div class="form-label"><?php esc_html_e('Password', 'nrgnetwork'); ?></div>
                                        <input class="form-input cs-new-pass" type="password" value="">
                                    </div>                          
                                </div>
                                <div class="input-col col-xs-12 col-sm-6">
                                    <div class="form-group fg_icon focus-2">
                                        <div class="form-label"><?php esc_html_e('Repeat Password', 'nrgnetwork'); ?></div>
                                        <input class="form-input cs-repeat-pass" type="password" value="">
                                    </div>                          
                                </div>
                                <div class="col-sm-12">
                                    <small><?php esc_html_e('If you don\'t wanna change password, leave blank password field.', 'nrgnetwork'); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="affix-block" id="on-the-web">
                    <div class="be-large-post">
                        <div class="info-block style-2">
                            <div class="be-large-post-align"><h3 class="info-block-label"><?php esc_html_e('On The Web', 'nrgnetwork'); ?></h3></div>
                        </div>
                        <div class="be-large-post-align">
                            <div class="social-input form-group focus-2">
                                <div class="s_icon">
                                    <div class="social-bars"><i class="fa fa-bars"></i></div>
                                    <div class="social-btn color-1"><i class="fa fa-facebook"></i></div>
                                </div>
                                <div class="s_input">
                                    <input class="form-input cs-socials" type="text" placeholder="http://facebook.com/#user" value="<?php echo esc_attr($cs_socials['facebook']); ?>">
                                </div>
                            </div>
                            <div class="social-input form-group focus-2">
                                <div class="s_icon">
                                    <div class="social-bars"><i class="fa fa-bars"></i></div>
                                    <div class="social-btn color-2"><i class="fa fa-twitter"></i></div>
                                </div>
                                <div class="s_input">
                                    <input class="form-input cs-socials" type="text" placeholder="http://twitter.com/#user" value="<?php echo esc_attr($cs_socials['twitter']); ?>">
                                </div>
                            </div>
                            <div class="social-input form-group focus-2">
                                <div class="s_icon">
                                    <div class="social-bars"><i class="fa fa-bars"></i></div>
                                    <div class="social-btn color-3"><i class="fa fa-google-plus"></i></div>
                                </div>
                                <div class="s_input">
                                    <input class="form-input cs-socials" type="text" placeholder="http://googleplus.com/#user" value="<?php echo esc_attr($cs_socials['google']); ?>">
                                </div>
                            </div>
                            <div class="social-input form-group focus-2">
                                <div class="s_icon">
                                    <div class="social-bars"><i class="fa fa-bars"></i></div>
                                    <div class="social-btn color-4"><i class="fa fa-pinterest"></i></div>
                                </div>
                                <div class="s_input">
                                    <input class="form-input cs-socials" type="text" placeholder="http://pinterest.com/#user" value="<?php echo esc_attr($cs_socials['pinterest']); ?>">
                                </div>
                            </div>
                            <div class="social-input form-group focus-2">
                                <div class="s_icon">
                                    <div class="social-bars"><i class="fa fa-bars"></i></div>
                                    <div class="social-btn color-5"><i class="fa fa-instagram"></i></div>
                                </div>
                                <div class="s_input">
                                    <input class="form-input cs-socials" type="text" placeholder="http://instagram.com/#user" value="<?php echo esc_attr($cs_socials['instagram']); ?>">
                                </div>
                            </div>
                            <div class="social-input form-group focus-2">
                                <div class="s_icon">
                                    <div class="social-bars"><i class="fa fa-bars"></i></div>
                                    <div class="social-btn color-5"><i class="fa fa-linkedin"></i></div>
                                </div>
                                <div class="s_input">
                                    <input class="form-input cs-socials" type="text" placeholder="http://linkedin.com/#user" value="<?php echo esc_attr($cs_socials['linkedin']); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="affix-block" id="about-me">
                    <div class="be-large-post">
                        <div class="info-block style-2">
                            <div class="be-large-post-align"><h3 class="info-block-label"><?php esc_html_e('About Me', 'nrgnetwork'); ?></h3></div>
                        </div>
                        <div class="be-large-post-align">
                            <div class="row">
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Description', 'nrgnetwork'); ?></div>
                                        <textarea class="form-input cs-description" required="" placeholder="<?php esc_html_e('Something about you', 'nrgnetwork'); ?>"><?php echo get_the_author_meta('description', $user); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>

                <?php foreach ($custom_section as $item): ?>
                <div class="affix-block custom-section-block saved-section" id="<?php echo esc_attr($item['id']); ?>">
                    <div class="be-large-post">
                        <div class="info-block style-2">
                            <div class="be-large-post-align">
                                <h3 class="info-block-label"><?php printf('%s', $item['title']); ?></h3>
                            </div>
                            <i class="fa fa-times close-w"></i>
                        </div>
                        <div class="be-large-post-align">
                            <div class="row">
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Section Title', 'nrgnetwork'); ?></div>
                                        <input class="form-input cs-input" type="text" value="<?php echo esc_attr($item['title']); ?>">
                                    </div>
                                </div>
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label"><?php esc_html_e('Description', 'nrgnetwork'); ?></div>
                                        <textarea class="form-input cs-textarea" required=""><?php printf('%s', $item['content']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>


                <a class="btn full color-1 size-1 hover-1 add_section"><i class="fa fa-check"></i><?php esc_html_e('add sections', 'nrgnetwork'); ?></a>                                                                               
            </div>              
        </div>
    </div>
</div>



<?php get_footer(); ?>