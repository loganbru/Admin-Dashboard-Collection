<?php
/**
 * dashboards/minimal/config.php
 *
 * Author: pixelcave
 *
 * Minimal Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = false;
$cb->inc_sidebar                = 'inc/dashboards/minimal/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/minimal/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/minimal/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$cb->theme                      = 'earth';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_visible_desktop  = false;
$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_style             = '';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'si si-cup',
        'url'   => ''
    ),
    array(
        'name'  => 'Features',
        'icon'  => 'si si-rocket',
        'url'   => ''
    ),
    array(
        'name'  => 'Pricing',
        'icon'  => 'si si-wallet',
        'url'   => ''
    ),
    array(
        'name'  => 'Plan',
        'icon'  => 'si si-grid',
        'url'   => ''
    ),
    array(
        'name'  => 'Account',
        'icon'  => 'si si-user',
        'url'   => ''
    ),
    array(
        'name'  => 'Logout',
        'icon'  => 'si si-logout',
        'url'   => ''
    )
);
