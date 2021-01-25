<?php
/**
 * dashboards/clean/config.php
 *
 * Author: pixelcave
 *
 * Clean Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/dashboards/clean/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/clean/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/clean/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/clean/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Home <span class="badge badge-pill badge-primary ml-5">3</span></span>',
        'icon'  => 'si si-home',
        'url'   => 'db_clean.php'
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
