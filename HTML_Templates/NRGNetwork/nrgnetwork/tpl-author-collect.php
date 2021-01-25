<?php get_header(); ?>

<?php

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




global $wp_query;
$user = abs($wp_query->query_vars['user']);
$coll_id = $wp_query->query_vars['collect'];

$collect = array('id'=>'', 'name'=>'', 'posts'=>array());
$coll_name = 'add2collection' . $user;
$option = get_option($coll_name  , '' );
$colls = !empty($option) ? unserialize( urldecode($option) ) : array();
$colls = is_array($colls) ? $colls : array();
foreach ($colls as $coll){
	if( $coll['id']==$coll_id ){
		$collect = $coll;
	}
}

?>

<!-- MAIN CONTENT -->
<div id="content-block">
	<div class="container-fluid custom-container be-detail-container">

		<h2 class="content-title"><?php
			printf('%s: %s', get_the_author_meta('user_nicename', $user), $collect['name']);
		?></h2>

		<div class="row">

			<?php
			$args = array(
	                        'post_type' => $network_post_type,
	                        'posts_per_page' => 99,
	                        'ignore_sticky_posts' => true,
	                        'post__in' => isset($collect['posts']) && !empty($collect['posts']) ? $collect['posts'] : array(0)
	                    );
			$nonce = wp_create_nonce('coll_edit_nonce');
	        $posts_query = new WP_Query($args);
	        while ( $posts_query->have_posts() ):
	            $posts_query->the_post();
			?>
			<div class="col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
				<div class="be-post item-media author-collection-view">
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

                    <?php
                    if( is_user_logged_in() && get_current_user_id()==$user ){
                    	printf('<a href="javascript:;" class="collection-item-remove" data-id="%s" data-nonce="%s" data-coll="%s"><i class="fa fa-remove"></i></a>', get_the_id(), $nonce, $coll_id);
                    }
                    ?>

					<span>
						<?php
                        $cat_html = array();
                        $cats = TPL::get_post_cats($network_post_type, get_the_id());
                        foreach ($cats as $cat){
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
</div>

<?php get_footer(); ?>