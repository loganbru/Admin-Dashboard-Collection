<?php
/**
 * dashboards/corporate/config.php
 *
 * Author: pixelcave
 *
 * Corporate Dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = false;
$cb->inc_sidebar                = 'inc/dashboards/corporate/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/dashboards/corporate/views/inc_header.php';
$cb->inc_footer                 = 'inc/dashboards/corporate/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$cb->theme                      = 'corporate';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_visible_desktop  = false;
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
        'name'  => 'Dashboard',
        'icon'  => 'si si-rocket',
        'url'   => 'db_corporate.php'
    ),
    array(
        'name'  => 'Settings',
        'icon'  => 'si si-settings',
        'url'   => ''
    ),
    array(
        'name'  => 'Features',
        'icon'  => 'si si-layers',
        'sub'   => array(
            array(
                'name'  => 'Backend',
                'url'   => ''
            ),
            array(
                'name'  => 'Frontend',
                'url'   => ''
            ),
            array(
                'name'  => 'More',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Resources',
                        'url'   => ''
                    )
                )
            )
        )
    )
);
