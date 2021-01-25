<?php

$network_post_type = TT::get_mod('network_post_type');
$network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

if( $network_post_type=='post' ){

	get_template_part( 'single', 'portfolio' );

}
else{

	get_header();

	if( isset($_GET['post_sidebar']) && $_GET['post_sidebar']=='no-sidebar' ){
		get_template_part( 'single', 'no-sidebar' );
	}
	else{
		$post_sidebar = TT::get_mod('post_sidebar');
	    if( $post_sidebar=='1' ){
	        get_template_part( 'single', 'sidebar' );
	    }
	    else{
	    	get_template_part( 'single', 'no-sidebar' );
	    }
	}

	get_footer();

}
?>