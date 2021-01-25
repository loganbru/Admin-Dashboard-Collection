<?php
/**
 * dashboards/social/config.php
 *
 * Author: pixelcave
 *
 * Social Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = false;
$cb->inc_sidebar                = 'inc/dashboards/social/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/social/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/social/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_visible_desktop  = false;
$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = '';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Home',
        'icon'  => 'si si-compass',
        'url'   => 'db_social.php'
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'si si-flag',
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'si si-envelope',
        'url'   => ''
    )
);
