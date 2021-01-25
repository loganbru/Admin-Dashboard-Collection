<?php
/**
 * dashboards/pop/config.php
 *
 * Author: pixelcave
 *
 * Pop Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/dashboards/pop/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/pop/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/pop/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/pop/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$cb->theme                      = 'pulse';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_mini             = true;
$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = '';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

// You can use the following array to create your main menu
$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
        'icon'  => 'si si-cup',
        'url'   => 'db_pop.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Projects</span>',
        'icon'  => 'si si-briefcase',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Clients</span>',
        'icon'  => 'si si-users',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Invoices</span>',
        'icon'  => 'si si-docs',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Assets</span>',
        'icon'  => 'si si-energy',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Tickets</span>',
        'icon'  => 'si si-shield',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Profile</span>',
        'icon'  => 'si si-user',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Security</span>',
        'icon'  => 'si si-lock',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">MR</span><span class="sidebar-mini-hidden">More</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Notifications</span>',
        'icon'  => 'si si-flag',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Help</span>',
        'icon'  => 'si si-support',
        'url'   => ''
    )
);
