<div class="container-fluid">
	<div class="row">
		<?php 

		the_content();
        wp_link_pages( array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'nrgnetwork') . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . esc_html__('Page', 'nrgnetwork') . ' </span>%',
            'separator'   => '<span class="screen-reader-text">, </span>',
        ) );

		?>
	</div>
</div>