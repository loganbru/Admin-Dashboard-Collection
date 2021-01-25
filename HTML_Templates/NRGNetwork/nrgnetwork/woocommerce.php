<?php get_header(); ?>

<?php
	if( is_shop() ){
	    get_template_part('woo', 'shop');
	}
	else if( is_product() ){
		get_template_part('woo', 'single');
	}
	else{
		get_template_part('woo', 'pages');
	}
	
?>


<?php get_footer(); ?>