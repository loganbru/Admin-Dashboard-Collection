<!-- MAIN CONTENT -->
<div id="content-block">

    <?php
    $shop_page_id = woocommerce_get_page_id('shop');
    if( abs($shop_page_id)<1 ){
        global $post;
        $post = get_post(abs($shop_page_id));
    }

        $title_show = TT::getmeta('title_show');
        $title_bg = TT::get_meta_bg_value('title_bg');

        if( $title_show=='1' ):
    ?>
    <div class="head-bg">
        <div class="head-bg-img" style="<?php echo esc_attr($title_bg); ?>"></div>
        <div class="head-bg-content">
            <h1><?php woocommerce_page_title(); ?></h1>
            <div class="desc">
            <?php
            if (is_user_logged_in()) {
                if(TT::getmeta('title_desc_loggedin')!='') { 
                    echo TT::getmeta('title_desc_loggedin');
                } else {
                    echo TT::getmeta('title_desc');
                }
            } else {
                echo TT::getmeta('title_desc');
            }
            ?>
            </div>
        </div>  
    </div>
    <?php endif; ?>


    <div class="container-fluid custom-container be-detail-container">

        <div class="row">

            <div class="col-md-2 left-feild">
                <form class="input-search" id="search-form-folio">
                    <input type="text" placeholder="<?php esc_html_e('Enter keyword', 'nrgnetwork'); ?>" id="folio_filter_search">
                    <i class="fa fa-search"></i>
                    <input type="submit" value="">
                    <input type="hidden" id="projects_type" name="projects_type" value="product">
                </form>
            </div>

            <div class="col-md-10 ">

                <div class="for-be-dropdowns">

                    <div class="be-drop-down filter-projects">
                        <i class="fa fa-th"></i>
                        <span class="be-dropdown-content"><?php esc_html_e('Products', 'nrgnetwork'); ?></span>
                        <input type="hidden" class="form-input" value="projects" id="folio_filter_type">
                        <ul class="drop-down-list">
                            <li><a href="javascript:;" data-id="projects"><i class="fa fa-th"></i>&nbsp;&nbsp;<?php esc_html_e('Products', 'nrgnetwork'); ?></a></li>
                            <li><a href="javascript:;" data-id="people"><i class="fa fa-users"></i>&nbsp;&nbsp;<?php esc_html_e('People', 'nrgnetwork'); ?></a></li>
                        </ul>
                    </div>

                    <div class="be-drop-down filter-categories">
                        <i class="fa fa-folder-open-o"></i>
                        <span class="be-dropdown-content"><?php esc_html_e('All Creative Categories', 'nrgnetwork'); ?></span>
                        <input type="hidden" class="form-input" value="0" id="folio_filter_category">
                        <ul class="drop-down-list">
                            <li><a href="javascript:;" data-id="0"><?php esc_html_e('All Categories', 'nrgnetwork'); ?></a></li>
                            <?php
                            $terms = get_terms('product_cat');
                            foreach ($terms as $term) {
                                echo "<li><a href='javascript:;' data-id='$term->term_id'>$term->name</a></li>";
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="be-drop-down filter-features">
                        <i class="fa fa-star-half-o"></i>
                        <span class="be-dropdown-content">Most Recent</span>
                        <input type="hidden" class="form-input" value="features" id="folio_filter_features">
                        <ul class="drop-down-list">
                            <li><a href="javascript:;" data-id="features"><i class="fa fa-star-half-o"></i>&nbsp;&nbsp;<?php esc_html_e('Most Recent', 'nrgnetwork'); ?></a></li>
                            <li><a href="javascript:;" data-id="likes"><i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;<?php esc_html_e('Most Appreciated', 'nrgnetwork'); ?></a></li>
                            <li><a href="javascript:;" data-id="views"><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php esc_html_e('Most Viewed', 'nrgnetwork'); ?></a></li>
                            <li><a href="javascript:;" data-id="comments"><i class="fa fa-comments-o"></i>&nbsp;&nbsp;<?php esc_html_e('Most Discussed', 'nrgnetwork'); ?></a></li>
                        </ul>
                    </div>

                    <div class="be-drop-down filter-worldwide">
                        <i class="fa fa-globe"></i>
                        <span class="be-dropdown-content"><?php esc_html_e('Worldwide', 'nrgnetwork'); ?></span>
                        <input type="hidden" class="form-input" value="0" id="folio_filter_worldwide">
                        <ul class="drop-down-list">
                            <li><a href="javascript:;" data-id="0"><?php esc_html_e('Worldwide', 'nrgnetwork'); ?></a></li>
                            <?php
                            $users_country = get_users(array(
                                        'meta_key'     => 'cs_country',
                                        'meta_value'   => '_country',
                                        'meta_compare' => '!=',
                                        'orderby'      => 'meta_value',
                                        'order'        => 'ASC'
                                    ));

                            $countries = array();
                            foreach ($users_country as $val) {
                                $countries[] = $val->get('cs_country');
                            }

                            $countries = array_unique($countries);
                            foreach ($countries as $val) {
                                echo "<li><a href='javascript:;' data-id='".esc_attr($val)."'>$val</a></li>";
                            }
                            ?>
                        </ul>
                    </div>

                </div>              
            </div>

        </div>

    </div>






    <div id="main-content-panel" class="container-fluid custom-container">
        <div class="row">
            
            <div class="col-md-2 left-feild">
                
                <div class="be-vidget">
                    <h3 class="letf-menu-article"><?php esc_html_e('Popular Categories', 'nrgnetwork'); ?></h3>
                    <div class="creative_filds_block">
                        <div class="ul">
                            <?php
                            $args_tag = array(
                                'orderby' => 'count',
                                'order' => 'DESC',
                                'number' => 5
                            );

                            $terms = get_terms('product_cat', $args_tag);
                            foreach ($terms as $term) {
                                echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="be-vidget">
                    <h3 class="letf-menu-article"><?php esc_html_e('Popular Tags', 'nrgnetwork'); ?></h3>
                    <div class="tags_block clearfix">
                        <ul>
                            <?php
                            $args_tag = array(
                                'orderby' => 'count',
                                'order' => 'DESC',
                                'number' => 10
                            );

                            $terms = get_terms('product_tag', $args_tag);
                            if(!is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <?php get_template_part('tpl', 'filter'); ?>


            </div>




            <div class="col-md-10">
                <div class="row _post-container_ woo-content-container">

                    <?php woocommerce_content(); ?>

                </div>
            </div>

        </div>
    </div>
</div>