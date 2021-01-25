<?php get_header(); ?>


<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="container be-detail-container">
        <h2 class="content-title"><?php TPL::get_page_titles(); ?></h2>
        <div class="row">

            <div class="col-xs-12 col-sm-9 main-feild">
                
                <div class="blog-wrapper">

                    <?php
                    if ( have_posts() ):
                        // Start the loop.
                        while ( have_posts() ) : the_post();
                            get_template_part( 'content', get_post_format() );
                        endwhile;

                    // If no content, include the "No posts found" template.
                    else :
                        get_template_part( 'content', 'none' );
                    endif;
                    ?>

                    <!-- pagination -->
                    <?php TPL::pagination(); ?>
                    
                </div>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>