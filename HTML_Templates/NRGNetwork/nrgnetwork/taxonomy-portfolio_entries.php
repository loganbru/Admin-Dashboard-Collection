<?php get_header(); ?>


<!-- MAIN CONTENT -->
<div id="content-block">
	<div class="container-fluid custom-container be-detail-container">

		<h2 class="content-title"><?php TPL::get_page_titles(); ?></h2>

		<div class="row">

			<?php
	        while ( have_posts() ) : the_post();
			?>
			<div class="col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
				<div class="be-post item-media">
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
					<span>
						<?php
                        $cat_html = array();
                        $cats = TPL::get_folio_cats(get_the_id());
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
			?>

		</div>

		<div class="row">
			<div class="col-sm-12">
                <?php TPL::pagination(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>