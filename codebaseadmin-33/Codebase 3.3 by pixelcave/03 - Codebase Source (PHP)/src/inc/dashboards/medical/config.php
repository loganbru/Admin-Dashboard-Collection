<?php
/**
 * dashboards/medical/config.php
 *
 * Author: pixelcave
 *
 * Clean Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/dashboards/medical/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/dashboards/medical/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/medical/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/medical/views/inc_footer.php';


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Overview</span>',
        'icon'  => 'fa fa-hospital-o',
        'url'   => 'db_medical.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Patients</span>',
        'icon'  => 'fa fa-user-circle-o',
        'sub'   => array(
            array(
                'name'  => 'Current',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Patient',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Appointments</span>',
        'icon'  => 'fa fa-calendar',
        'sub'   => array(
            array(
                'name'  => 'Active',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Appointment',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Payments</span>',
        'icon'  => 'fa fa-paypal',
        'sub'   => array(
            array(
                'name'  => 'Pending',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Payment',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Profile</span>',
        'icon'  => 'fa fa-pencil',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Security</span>',
        'icon'  => 'fa fa-lock',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Notifications</span>',
        'icon'  => 'fa fa-flag',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">HP</span><span class="sidebar-mini-hidden">Help</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Knowledge Base</span>',
        'icon'  => 'fa fa-book',
        'url'   => ''
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Hospital Forum</span>',
        'icon'  => 'fa fa-comments',
        'url'   => ''
    )
);
