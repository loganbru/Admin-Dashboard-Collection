<?php
/**
 * backend_boxed/config.php
 *
 * Author: pixelcave
 *
 * Backend Boxed pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = false;
$cb->inc_sidebar                = 'inc/backend_boxed/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend_boxed/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend_boxed/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$cb->l_sidebar_visible_desktop  = false;
$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$cb->l_header_fixed             = true;
$cb->l_header_style             = 'inverse';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'si si-compass',
        'url'   => 'bd_dashboard.php'
    ),
    array(
        'name'  => 'Layout',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Variations',
        'icon'  => 'si si-puzzle',
        'sub'   => array(
            array(
                'name'  => 'Hero Simple 1',
                'url'   => 'bd_variations_hero_simple_1.php'
            ),
            array(
                'name'  => 'Hero Simple 2',
                'url'   => 'bd_variations_hero_simple_2.php'
            ),
            array(
                'name'  => 'Hero Simple 3',
                'url'   => 'bd_variations_hero_simple_3.php'
            ),
            array(
                'name'  => 'Hero Simple 4',
                'url'   => 'bd_variations_hero_simple_4.php'
            ),
            array(
                'name'  => 'Hero Image 1',
                'url'   => 'bd_variations_hero_image_1.php'
            ),
            array(
                'name'  => 'Hero Image 2',
                'url'   => 'bd_variations_hero_image_2.php'
            ),
            array(
                'name'  => 'Hero Image 3',
                'url'   => 'bd_variations_hero_image_3.php'
            ),
            array(
                'name'  => 'Hero Image 4',
                'url'   => 'bd_variations_hero_image_4.php'
            ),
            array(
                'name'  => 'Hero Video 1',
                'url'   => 'bd_variations_hero_video_1.php'
            ),
            array(
                'name'  => 'Hero Video 2',
                'url'   => 'bd_variations_hero_video_2.php'
            ),
            array(
                'name'  => 'More Options',
                'sub'   => array(
                    array(
                        'name'  => 'Another Link',
                        'url'   => 'javascript:void(0)'
                    ),
                    array(
                        'name'  => 'Another Link',
                        'url'   => 'javascript:void(0)'
                    ),
                    array(
                        'name'  => 'Another Link',
                        'url'   => 'javascript:void(0)'
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Other Pages',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Search',
        'icon'  => 'si si-magnifier',
        'url'   => 'bd_search.php'
    ),
    array(
        'name'  => 'Go Back',
        'icon'  => 'si si-action-undo',
        'url'   => 'be_pages_dashboard.php'
    )
);
