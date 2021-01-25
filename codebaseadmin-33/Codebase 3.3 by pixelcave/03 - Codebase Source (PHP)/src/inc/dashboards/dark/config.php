<?php
/**
 * dashboards/dark/config.php
 *
 * Author: pixelcave
 *
 * Clean Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/dashboards/dark/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/dark/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/dark/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/dark/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = 'glass-inverse';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Home <span class="badge badge-pill badge-primary ml-5">3</span></span>',
        'icon'  => 'si si-home',
        'url'   => 'db_dark.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">PR</span><span class="sidebar-mini-hidden">Projects</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Manage</span>',
        'icon'  => 'si si-docs',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Clients</span>',
        'icon'  => 'si si-users',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Team</span>',
        'icon'  => 'si si-energy',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Payments</span>',
        'icon'  => 'si si-wallet',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Security</span>',
        'icon'  => 'si si-fire',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Profile</span>',
        'icon'  => 'si si-pencil',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Notifications</span>',
        'icon'  => 'si si-flag',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Password Update</span>',
        'icon'  => 'si si-lock',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">HP</span><span class="sidebar-mini-hidden">Help</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Knowledge Base</span>',
        'icon'  => 'si si-notebook',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Contact Us</span>',
        'icon'  => 'si si-envelope',
        'url'   => ''
    )
);
