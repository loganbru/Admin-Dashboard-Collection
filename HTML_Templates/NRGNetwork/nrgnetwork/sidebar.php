<!-- Sidebar
================================================== -->
<?php 
global $sidebar;
$sidebar_id = 'sidebar';
?>

<div class="col-xs-12 col-sm-3 left-feild">
	
	<?php
    if( isset($sidebar) && !empty($sidebar) )
        $sidebar_id = $sidebar_id ."-". $sidebar;

    if ( is_active_sidebar( $sidebar_id ) ) :
        dynamic_sidebar($sidebar_id);
    else: 
        echo "<div class='widget be-vidget'>
				<h3 class='widget-title'>".esc_html__('Please add your widgets.', 'nrgnetwork')."</h3>
			  </div>";
    endif;
    ?>    

</div>