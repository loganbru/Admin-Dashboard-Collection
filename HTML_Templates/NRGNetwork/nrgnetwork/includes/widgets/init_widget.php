<?php


$widget_files = array(
					'social_links_widget.php',
					'recent_works_widget.php', 
					'address_widget.php', 
					'post_slider_widget.php', 
					'popular_posts_widget.php'
					);

/* Custom widgets */

foreach ($widget_files as $w) {
	require_once TT::file_require(get_template_directory() . "/includes/widgets/$w");
}


?>