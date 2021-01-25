<!-- MAIN CONTENT -->
<div id="content-block">

    <?php
    $title_bg = TT::get_option_bg_value('page_title_image');
    ?>
    <div class="head-bg style-2">
        <div class="head-bg-img" style="<?php echo esc_attr($title_bg); ?>"></div>
        <div class="head-bg-content">
            <h1><?php woocommerce_page_title(); ?></h1>
        </div>  
    </div>

    <div class="container be-detail-container woo-category-container">

        <div class="row">
            <div class="col-sm-12">
                <div class="blog-content">
                    <?php woocommerce_content(); ?>
                </div>
            </div>
        </div>

    </div>
</div>