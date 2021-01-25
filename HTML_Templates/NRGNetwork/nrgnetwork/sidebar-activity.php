<!-- Sidebar
================================================== -->
<?php 
$sidebar_id = 'sidebar-activity';
?>

<?php
if ( is_active_sidebar( $sidebar_id ) ) :
    dynamic_sidebar($sidebar_id);
endif;
?>