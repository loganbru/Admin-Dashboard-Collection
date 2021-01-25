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
else if( $network_post_type=='product' ){
    $network_post_term = 'product_cat';
    $network_post_tag = 'product_tag';
}


?>

    <?php
    global $wp_query, $post_id, $post_author;
    $post_id = abs($wp_query->query_vars['portfolio']);
    $post_author = '';

    if( !empty($post_id) && abs($post_id)>0 ){
        $front_query = new WP_Query('p='.$post_id."&post_type=".$network_post_type);
        while ( $front_query->have_posts() ) {
            $front_query->the_post();
            $post_author = get_post_field( 'post_author', get_the_id() );
        }
    }

    if( !tt_editmode() ){
        $post_id = 0;
    }

    function tt_editmode(){
        global $post_id, $post_author;
        $logged_user = get_current_user_id();
        return !empty($post_id) && abs($post_id)>0 && $post_author==$logged_user;
    }
    
    ?>

    <!-- MAIN CONTENT -->
    <div id="content-block" class="work-box">
        <div class="editor-menu">
            <div class="container">
                <ul class="editor-nav">
                    <li id="content-w" class="en-nav active">1. <?php esc_html_e('Content', 'nrgnetwork'); ?></li>
                    <li id="cover-w" class="en-nav">2. <?php esc_html_e('Cover', 'nrgnetwork'); ?></li>
                    <li id="setting-w" class="en-nav">3. <?php esc_html_e('Settings', 'nrgnetwork'); ?></li>
                </ul>
                <div class="buttons-navbar">
                    <button type="button" class="btn btn-default" id="tt_frontend_prev"><?php esc_html_e('Previous', 'nrgnetwork'); ?></button>
                    <button type="button" class="btn btn-success" id="tt_frontend_next"><?php esc_html_e('Next', 'nrgnetwork'); ?></button>
                    <button type="button" class="btn btn-primary" id="tt_frontend_save"><?php esc_html_e('Save', 'nrgnetwork'); ?></button>
                </div>
            </div>
        </div>

        <div class="work-area">


            <div class="cover-popup">
                <div class="cover-box">
                    <form action="">

                        <div class="tt-frontend-cover-img" data-img="<?php echo tt_editmode() ? get_post_thumbnail_id($post_id) : ''; ?>">
                            <img src="<?php echo tt_editmode() ? wp_get_attachment_url( get_post_thumbnail_id($post_id), 'full' ) : get_template_directory_uri().'/img/blank.png'; ?>">
                        </div>

                        <textarea placeholder="<?php esc_html_e('Title Project', 'nrgnetwork'); ?>"><?php echo tt_editmode() ? get_the_title() : esc_html__('Portfolio Title', 'nrgnetwork'); ?></textarea>
                    </form>
                    <a href="javascript:;" class="anothel-upload tt-frontend-cover-upload"><i class="fa fa-cloud-upload"></i> <?php esc_html_e('Upload New Image', 'nrgnetwork'); ?></a>
                    <br>
                    <div class="btn-row">
                        <button type="button" class="btn btn-primary btn-cancel"><?php esc_html_e('Cancel', 'nrgnetwork'); ?></button>
                        <button type="button" class="btn btn-success"><?php esc_html_e('Continue', 'nrgnetwork'); ?></button>
                    </div>
                </div>
            </div>


            <div class="setting-popup">
                <div class="cover-box s-cover-box">
                    <div class="setting-form">
                        <form>
                            <div class="form-group">
                                <label for="in1"><?php esc_html_e('Creative Fields', 'nrgnetwork'); ?></label>
                                <select id="tt_frontend_cats" class="form-control" multiple="multiple">
                                    <?php
                                    $folio_cats = array();
                                    $terms = get_terms($network_post_term, array('hide_empty'=>false));
                                    if( tt_editmode() ){
                                        $cur_cats = TPL::get_folio_cats($post_id);
                                        foreach ($cur_cats as $cat) {
                                            $folio_cats[] = $cat['id'];
                                        }
                                    }
                                    foreach ($terms as $term) {
                                        $selected = in_array($term->term_id, $folio_cats) ? 'selected' : '';
                                        echo '<option value="'.$term->term_id.'" '.$selected.'>'.$term->name.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><?php esc_html_e('Project Tags', 'nrgnetwork'); ?></label>
                                <textarea id="tt_frontend_tags"><?php
                                     if( tt_editmode() ){
                                        $folio_tags = array();
                                        $cur_tags = TPL::get_folio_cats($post_id, true);
                                        foreach ($cur_tags as $tag) {
                                            $folio_tags[] = $tag['title'];
                                        }
                                        echo implode(",", $folio_tags);
                                     }
                                 ?></textarea>
                            </div>
                            <div class="form-group">
                                <label><?php esc_html_e('Project Description', 'nrgnetwork'); ?></label>
                                <textarea id="tt_frontend_excerpt"><?php echo tt_editmode() ? get_the_excerpt() : ''; ?></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="setting-block">
                        <div class="settings-row cfix">

                            
                            <div class="left settings-label"><?php echo TT::get_mod('meta_field1'); ?>:</div>
                            <div class="left settings-option">
                                <div class="settings-sub-option cfix">
                                    <div class="left settings-note st-label">
                                        
                                        <?php if( tt_editmode() ): ?>
                                        <span class="grey"><?php echo TT::getmeta('extra_brand'); ?> ...</span>
                                        <input type="hidden" id="tt_extra_brand" value="<?php echo TT::getmeta('extra_brand'); ?>">
                                        <?php else: ?>
                                        <span class="grey"><?php esc_html_e('example1, example2...', 'nrgnetwork'); ?></span>
                                        <input type="hidden" id="tt_extra_brand">
                                        <?php endif; ?>

                                    </div>
                                    <div class="right fake-link" id="edit-brand">+ <?php esc_html_e('Edit', 'nrgnetwork'); ?></div>
                                </div>
                            </div>
                            
                            <div class="left settings-label"><?php echo TT::get_mod('meta_field2'); ?>:</div>
                            <div class="left settings-option">
                                <div class="settings-sub-option cfix">
                                    <div class="left settings-note st-label">

                                        <?php if( tt_editmode() ): ?>
                                        <span class="grey"><?php echo TT::getmeta('extra_tools'); ?> ...</span>
                                        <input type="hidden" id="tt_extra_tools" value="<?php echo TT::getmeta('extra_tools'); ?>">
                                        <?php else: ?>
                                        <span class="grey"><?php esc_html_e('example1, example2...', 'nrgnetwork'); ?></span>
                                        <input type="hidden" id="tt_extra_tools">
                                        <?php endif; ?>

                                    </div>
                                    <div class="right fake-link" id="edit-tools">+ <?php esc_html_e('Edit', 'nrgnetwork'); ?></div>
                                </div>
                            </div>

                            <div class="left settings-label"><?php echo TT::get_mod('meta_field3'); ?>:</div>
                            <div class="left settings-option">
                                <div class="settings-sub-option cfix">
                                    <div class="left settings-note st-label">

                                        <?php if( tt_editmode() ): ?>
                                        <span class="grey"><?php echo TT::getmeta('extra_color'); ?> <span class="<?php echo TT::getmeta('extra_color'); ?>">...</span></span>
                                        <input type="hidden" id="tt_extra_color" value="<?php echo TT::getmeta('extra_color'); ?>">
                                        <?php else: ?>
                                        <span class="grey">color group 1-2 <span class="">...</span></span>
                                        <input type="hidden" id="tt_extra_color">
                                        <?php endif; ?>

                                    </div>
                                    <div class="right fake-link" id="edit-color">+ <?php esc_html_e('Edit Color', 'nrgnetwork'); ?></div>
                                </div>
                            </div>
                            
                            <div class="left settings-label"><?php echo TT::get_mod('meta_field4'); ?>:</div>
                            <div class="left settings-option">
                                <div class="settings-sub-option cfix">
                                    <div class="left settings-note st-label">
                                        
                                        <?php if( tt_editmode() ): ?>
                                        <span class="grey"><?php echo TT::getmeta('extra_copyright'); ?> ...</span>
                                        <input type="hidden" id="tt_extra_copyright" value="<?php echo TT::getmeta('extra_copyright'); ?>">
                                        <?php else: ?>
                                        <span class="grey"><?php esc_html_e('example1, example2...', 'nrgnetwork'); ?></span>
                                        <input type="hidden" id="tt_extra_copyright">
                                        <?php endif; ?>

                                    </div>
                                    <div class="right fake-link" id="edit-copyright">+ <?php esc_html_e('Edit', 'nrgnetwork'); ?></div>
                                </div>
                            </div>
                            
                            <div class="left settings-label">
                                <label>
                                    <?php if( tt_editmode() ): ?>
                                    <input type="checkbox" id="tt_extra_adult" value="adult" <?php
                                        $adult = TT::getmeta('extra_adult');
                                        if( $adult=='adult' ){
                                            echo 'checked';
                                        }
                                    ?>> Adult Content
                                    <?php else: ?>
                                    <input type="checkbox" id="tt_extra_adult" value="adult"> <?php esc_html_e('Adult Content', 'nrgnetwork'); ?>
                                    <?php endif; ?>
                                </label>
                            </div>

                            
                        </div>
                    </div>
                    <div class="popup-buttons right-buttons">
                        <button type="button" class="btn btn-primary btn-cancel"><?php esc_html_e('Close', 'nrgnetwork'); ?></button>
                        <button type="button" class="btn btn-success"><?php esc_html_e('Publish', 'nrgnetwork'); ?></button>
                    </div>
                </div>
            </div>

            <div class="container be-detail-container">
                <div class="row">
                    <div class="col-xs-12 col-md-3 st-col left-feild">
                        <div class="be-vidget behance-style" >
                            <h3 class="letf-menu-article">
                                <?php esc_html_e('ADD MEDIA', 'nrgnetwork'); ?>
                            </h3>
                            <div class="creative_filds_block">
                                <ul class="ul nav b-work-list embed_components">
                                    <li ><a href="javascript:;" class="embed_com_image"><i class="fa fa-cloud-upload"></i><?php esc_html_e('Upload Image', 'nrgnetwork'); ?></a></li>
                                    <li><a href="javascript:;" class="embed_com_media"><i class="fa fa-pencil-square-o"></i><?php esc_html_e('Embed media', 'nrgnetwork'); ?></a></li>
                                    <li ><a href="javascript:;" class="embed_com_text"><i class="fa fa-text-width"></i><?php esc_html_e('Add text', 'nrgnetwork'); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="be-vidget  behance-style">
                            <h3 class="letf-menu-article">
                                <?php esc_html_e('CUSTOMIZE DESIGN', 'nrgnetwork'); ?>
                            </h3>
                            <div class="creative_filds_block">
                                <ul class="ul nav b-work-list b-work-list-no">
                                    <li ><a class="open-custom" href="#"><?php esc_html_e('Dividers & Spacing', 'nrgnetwork'); ?> <i class="fa fa-chevron-down"></i></a>
                                        <div class="inner-filter-info">
                                            
                                            <?php
                                            $cs_divider = tt_editmode() ? TT::getmeta('cs_divider', $post_id) : 'none';
                                            ?>
                                            <div class="inner-filter-inner inner-d">
                                                <input  type="radio" id="d1" class="ch" name="divider" value="none" <?php echo esc_attr( in_array($cs_divider, array('solid','dashed','dotted')) ? '' : 'checked' ); ?>/>
                                                <label for="d1"><?php esc_html_e('No Divider', 'nrgnetwork'); ?></label>
                                            </div>

                                            <div class="inner-filter-inner inner-d">
                                                <div class="label-box ">
                                                    <input  type="radio" id="d2" class="ch" name="divider" value="solid" <?php echo esc_attr( $cs_divider=='solid' ? 'checked' : '' ); ?>/>
                                                    <label for="d2"></label>
                                                </div>
                                                <div class="label-box">
                                                    <input  type="radio" id="d3" class="ch" name="divider" value="dashed" <?php echo esc_attr( $cs_divider=='dashed' ? 'checked' : '' ); ?>/>
                                                    <label for="d3"></label>
                                                </div>
                                                <div class="label-box">
                                                    <input  type="radio" id="d4" class="ch" name="divider" value="dotted" <?php echo esc_attr( $cs_divider=='dotted' ? 'checked' : '' ); ?>/>
                                                    <label for="d4"></label>
                                                </div>
                                            </div>

                                            <div class="inner-filter-inner inner-filter-inner-mod">
                                                <span><?php esc_html_e('Spacing', 'nrgnetwork'); ?></span>
                                                <div class="range">
                                                    <div class="slider-range-max" id="slider-range-max"></div>
                                                    <input type="text" class="amount" id="amount" readonly value="<?php echo tt_editmode() ? TT::getmeta('cs_space', $post_id) : '0'; ?>">
                                                </div>
                                            </div>

                                            <div class="inner-filter-inner inner-filter-inner-mod">
                                                <span><?php esc_html_e('Header', 'nrgnetwork'); ?></span>
                                                <div class="range">
                                                    <div class="slider-range-max" id="slider-head"></div>
                                                    <input type="text" class="amount" id="amount-h" readonly value="<?php echo tt_editmode() ? TT::getmeta('cs_padding', $post_id) : '0'; ?>">
                                                </div>
                                            </div>

                                            <div class="inner-filter-inner">
                                                <span><?php esc_html_e('Color', 'nrgnetwork'); ?></span> <input id="divider_color" class="color-i no-alpha" data-colorMode="rgba" value="<?php echo tt_editmode() ? TT::getmeta('cs_color', $post_id) : ''; ?>" style="color: rgb(255, 255, 55); background-color: rgb(255, 255, 255);">
                                            </div>

                                        </div>
                                    </li>
                                    <li ><a class="open-custom" href="#"><?php esc_html_e('Background', 'nrgnetwork'); ?> <i class="fa fa-chevron-down"></i></a>
                                        <div class="inner-filter-info">
                                            <div class="inner-filter-inner ">
                                                <span><?php esc_html_e('Color', 'nrgnetwork'); ?></span> <input id="bg_color" class="color-i no-alpha" data-colorMode="rgba" value="<?php echo tt_editmode() ? TT::getmeta('cs_bg', $post_id) : ''; ?>" style="color: rgb(255, 255, 255); background-color: rgb(255, 255, 255);">
                                            </div>
                                            <div class="inner-filter-inner ">
                                                <span><?php esc_html_e('Text', 'nrgnetwork'); ?>&nbsp;&nbsp;</span> <input id="text_color" class="color-i no-alpha" data-colorMode="rgba" value="<?php echo tt_editmode() ? TT::getmeta('cs_text', $post_id) : ''; ?>" style="color: rgb(255, 255, 255); background-color: rgb(255, 255, 255);">
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                
                            </div>

                            <?php
                            if( tt_editmode() ):
                                $nonce = wp_create_nonce('net_remove_post');
                            ?>
                            <a href="javascript:;" class="btn btn-danger" id="btn_remove_project" data-post="<?php echo esc_attr($post_id); ?>" data-nonce="<?php echo esc_attr($nonce); ?>">
                                <?php esc_html_e('Delete Project', 'nrgnetwork'); ?>
                            </a>
                            <?php endif; ?>

                        </div>

                    </div>


                    <div class="col-xs-12 col-md-9 _editor-content_">
                        <div class="sec"  data-sec="basic-information">
                            
                            <input type="hidden" id="post_id" value="<?php echo esc_attr($post_id); ?>">
                            <div class="be-large-post large-area" id="tt_frontend_container">
                                <div class="info-block style-2">
                                    <div class="be-large-post-align ">
                                        <h3 class="info-block-label" contenteditable="true" id="tt_fontend_title"><?php echo tt_editmode() ? get_the_title() : esc_html__('Portfolio name', 'nrgnetwork'); ?></h3>
                                    </div>
                                </div>
                                <div class="be-large-post-align" id="tt_frontend_content">

                                    <?php
                                    if( tt_editmode() ):
                                        the_content();
                                    else:
                                    ?>
                                    <div class="tt-el-embed tt-el-embed-image">
                                        <div class="entry-image"></div>
                                        <div class="entry-tools">
                                            <a href="javascript:;" class="el-move"><i class="fa fa-arrows"></i></a>
                                        </div>
                                        <a href="javascript:;" class="browse-media"></a>
                                    </div>

                                    <div class="tt-el-embed tt-el-embed-text">
                                        <div class="entry-text" contenteditable="true">
                                            <?php esc_html_e('Compellingly redefine timely interfaces vis-a-vis proactive web-readiness. Objectively synthesize impactful markets with client-centric channels. Proactively target granular meta-services via.', 'nrgnetwork'); ?>
                                        </div>
                                        <div class="entry-tools">
                                            <a href="javascript:;" class="el-move"><i class="fa fa-arrows"></i></a>
                                            <a href="javascript:;" class="el-close"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    
    
    <div class="mini-popup-wrapper extra-popup">
        <div class="mini-popup ">
            <i class="fa close-mini fa-times"></i>
            <h3><?php esc_html_e('Add Brand', 'nrgnetwork'); ?></h3>
            <form action="./">
                <input type="text" class="mini-popup-text"><br>
                <button type="button" class="btn btn-primary"><?php esc_html_e('DONE', 'nrgnetwork'); ?></button>
            </form>
        </div>
    </div>

    <div class="mini-popup-wrapper color-popup">
        <div class="mini-popup ">
            <i class="fa close-mini fa-times"></i>
            <h3><?php esc_html_e('Choose Color', 'nrgnetwork'); ?></h3>
            <div class="for-colors">
                <ul class="colors  cfix">
                    <li class="color filter color-0-0"></li>
                    <li class="color filter color-0-1"></li>
                    <li class="color filter color-0-2"></li>
                    <li class="color filter color-0-3"></li>
                    <li class="color filter color-0-4"></li>
                    <li class="color filter color-0-5"></li>
                    <li class="color filter color-0-6"></li>
                    <li class="color filter color-0-7"></li>
                    <li class="color filter color-0-8"></li>
                    <li class="color filter color-0-9"></li>
                    <li class="color filter color-0-10"></li>
                    <li class="color filter color-0-11"></li>
                    <li class="color filter color-1-0"></li>
                    <li class="color filter color-1-1"></li>
                    <li class="color filter color-1-2"></li>
                    <li class="color filter color-1-3"></li>
                    <li class="color filter color-1-4"></li>
                    <li class="color filter color-1-5"></li>
                    <li class="color filter color-1-6"></li>
                    <li class="color filter color-1-7"></li>
                    <li class="color filter color-1-8"></li>
                    <li class="color filter color-1-9"></li>
                    <li class="color filter color-1-10"></li>
                    <li class="color filter color-1-11"></li>
                    <li class="color filter color-2-0"></li>
                    <li class="color filter color-2-1"></li>
                    <li class="color filter color-2-2"></li>
                    <li class="color filter color-2-3"></li>
                    <li class="color filter color-2-4"></li>
                    <li class="color filter color-2-5"></li>
                    <li class="color filter color-2-6"></li>
                    <li class="color filter color-2-7"></li>
                    <li class="color filter color-2-8"></li>
                    <li class="color filter color-2-9"></li>
                    <li class="color filter color-2-10"></li>
                    <li class="color filter color-2-11"></li>
                    <li class="color filter color-3-0"></li>
                    <li class="color filter color-3-1"></li>
                    <li class="color filter color-3-2"></li>
                    <li class="color filter color-3-3"></li>
                    <li class="color filter color-3-4"></li>
                    <li class="color filter color-3-5"></li>
                    <li class="color filter color-3-6"></li>
                    <li class="color filter color-3-7"></li>
                    <li class="color filter color-3-8"></li>
                    <li class="color filter color-3-9"></li>
                    <li class="color filter color-3-10"></li>
                    <li class="color filter color-3-11"></li>
                    <li class="color filter color-4-0"></li>
                    <li class="color filter color-4-1"></li>
                    <li class="color filter color-4-2"></li>
                    <li class="color filter color-4-3"></li>
                    <li class="color filter color-4-4"></li>
                    <li class="color filter color-4-5"></li>
                    <li class="color filter color-4-6"></li>
                    <li class="color filter color-4-7"></li>
                    <li class="color filter color-4-8"></li>
                    <li class="color filter color-4-9"></li>
                    <li class="color filter color-4-10"></li>
                    <li class="color filter color-4-11"></li>
                    <li class="color filter color-5-0"></li>
                    <li class="color filter color-5-1"></li>
                    <li class="color filter color-5-2"></li>
                    <li class="color filter color-5-3"></li>
                    <li class="color filter color-5-4"></li>
                    <li class="color filter color-5-5"></li>
                    <li class="color filter color-5-6"></li>
                    <li class="color filter color-5-7"></li>
                    <li class="color filter color-5-8"></li>
                    <li class="color filter color-5-9"></li>
                    <li class="color filter color-5-10"></li>
                    <li class="color filter color-5-11"></li>
                    <li class="color filter color-6-0"></li>
                    <li class="color filter color-6-1"></li>
                    <li class="color filter color-6-2"></li>
                    <li class="color filter color-6-3"></li>
                    <li class="color filter color-6-4"></li>
                    <li class="color filter color-6-5"></li>
                    <li class="color filter color-6-6"></li>
                    <li class="color filter color-6-7"></li>
                    <li class="color filter color-6-8"></li>
                    <li class="color filter color-6-9"></li>
                    <li class="color filter color-6-10"></li>
                    <li class="color filter color-6-11"></li>
                    <li class="color filter color-7-0"></li>
                    <li class="color filter color-7-1"></li>
                    <li class="color filter color-7-2"></li>
                    <li class="color filter color-7-3"></li>
                    <li class="color filter color-7-4"></li>
                    <li class="color filter color-7-5"></li>
                    <li class="color filter color-7-6"></li>
                    <li class="color filter color-7-7"></li>
                    <li class="color filter color-7-8"></li>
                    <li class="color filter color-7-9"></li>
                    <li class="color filter color-7-10"></li>
                    <li class="color filter color-7-11"></li>
                    <li class="color filter color-8-0"></li>
                    <li class="color filter color-8-1"></li>
                    <li class="color filter color-8-2"></li>
                    <li class="color filter color-8-3"></li>
                    <li class="color filter color-8-4"></li>
                    <li class="color filter color-8-5"></li>
                    <li class="color filter color-8-6"></li>
                    <li class="color filter color-8-7"></li>
                    <li class="color filter color-8-8"></li>
                    <li class="color filter color-8-9"></li>
                    <li class="color filter color-8-10"></li>
                    <li class="color filter color-8-11"></li>
                    <li class="color filter color-9-0"></li>
                    <li class="color filter color-9-1"></li>
                    <li class="color filter color-9-2"></li>
                    <li class="color filter color-9-3"></li>
                    <li class="color filter color-9-4"></li>
                    <li class="color filter color-9-5"></li>
                    <li class="color filter color-9-6"></li>
                    <li class="color filter color-9-7"></li>
                    <li class="color filter color-9-8"></li>
                    <li class="color filter color-9-9"></li>
                    <li class="color filter color-9-10"></li>
                    <li class="color filter color-9-11"></li>
                </ul>
            </div>
        </div>
    </div>
    


    <div class="large-popup embed tpl-embed">
        <div class="large-popup-fixed"></div>
        <div class="container large-popup-container">
            <div class="row">
                <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-times close-button close-media"></i>
                            <h5 class="large-popup-title"><?php esc_html_e('Embed Media', 'nrgnetwork'); ?></h5>
                        </div>
                        <div class="col-md-12">
                            <form action="./">
                                <textarea class="main-textarea" ></textarea>
                                <input type="button" class="be-popup-sign-button" value="<?php esc_html_e('Embed', 'nrgnetwork'); ?>" id="submit_embed_media"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>