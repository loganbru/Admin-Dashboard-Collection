<?php
/**
 * dashboards/classic/config.php
 *
 * Author: pixelcave
 *
 * Classic Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$cb->inc_side_overlay           = 'inc/dashboards/classic/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/classic/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/classic/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/classic/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = '';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$cb->l_m_content                = '';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
        'icon'  => 'si si-cup',
        'url'   => 'db_classic.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">HQ</span><span class="sidebar-mini-hidden">Headquarters</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Projects</span>',
        'icon'  => 'si si-briefcase',
        'sub'   => array(
            array(
                'name'  => 'New',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Invoices</span>',
        'icon'  => 'si si-docs',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Clients</span>',
        'icon'  => 'si si-users',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Payments</span>',
        'icon'  => 'si si-wallet',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Requests</span>',
        'icon'  => 'si si-layers',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Profile</span>',
        'icon'  => 'si si-notebook',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Security</span>',
        'icon'  => 'si si-lock',
        'url'   => ''
    )
);
