<?php
/**
 * _global/config.php
 *
 * Author: pixelcave
 *
 * Global configuration file
 *
 */

// Include required classes
require 'inc/_classes/Template.php';


// **************************************************************************************************
// CODEBASE OBJECT
// **************************************************************************************************

//                              : Name, version and assets folder's name
$cb                             = new Template('Codebase', '3.3', 'assets');


// **************************************************************************************************
// GLOBAL META & OPEN GRAPH DATA
// **************************************************************************************************

//                              : The data is added in the <head> section of the page
$cb->author                     = 'pixelcave';
$cb->robots                     = 'noindex, nofollow';
$cb->title                      = 'Codebase - Bootstrap 4 Admin Template &amp; UI Framework';
$cb->description                = 'Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest';

//                              : The url of your site, used in Open Graph Meta Data (eg 'https://example.com')
$cb->og_url_site                = '';

//                              : The url of your image/logo, used in Open Graph Meta Data (eg 'https://example.com/assets/media/your_logo.png')
$cb->og_url_image               = '';


// **************************************************************************************************
// GLOBAL GENERIC
// **************************************************************************************************

// ''                           : default color theme
// 'elegance'                   : elegance color theme
// 'pulse'                      : pulse color theme
// 'flat'                       : flat color theme
// 'corporate'                  : corporate color theme
// 'earth'                      : earth color theme
$cb->theme                      = '';

// true                         : Remembers active color theme between pages
//                                (when set through color theme helper Template._uiHandleTheme())
// false                        : No cookies
$cb->cookies                    = false;

// You will have to obtain a Google Maps API key to use Google Maps, for more info please have a look at
// https://developers.google.com/maps/documentation/javascript/get-api-key#key
$cb->google_maps_api_key        = '';


// **************************************************************************************************
// GLOBAL INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$cb->inc_side_overlay           = '';
$cb->inc_sidebar                = '';
$cb->inc_header                 = '';
$cb->inc_footer                 = '';


// **************************************************************************************************
// GLOBAL SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

// true                         : Left Sidebar and right Side Overlay
// false                        : Right Sidebar and left Side Overlay
$cb->l_sidebar_left             = true;

// true                         : Mini hoverable Sidebar (screen width > 991px)
// false                        : Normal mode
$cb->l_sidebar_mini             = false;

// true                         : Visible Sidebar (screen width > 991px)
// false                        : Hidden Sidebar (screen width > 991px)
$cb->l_sidebar_visible_desktop  = true;

// true                         : Visible Sidebar (screen width < 992px)
// false                        : Hidden Sidebar (screen width < 992px)
$cb->l_sidebar_visible_mobile   = false;

// true                         : Dark themed Sidebar
// false                        : Light themed Sidebar
$cb->l_sidebar_inverse          = false;

// true                         : Hoverable Side Overlay (screen width > 991px)
// false                        : Normal mode
$cb->l_side_overlay_hoverable   = false;

// true                         : Visible Side Overlay
// false                        : Hidden Side Overlay
$cb->l_side_overlay_visible     = false;

// true                         : Enables a visible clickable (closes Side Overlay) Page Overlay when Side Overlay opens
// false                        : Disables Page Overlay when Side Overlay opens
$cb->l_page_overlay             = true;

// true                         : Custom scrolling (screen width > 991px)
// false                        : Native scrolling
$cb->l_side_scroll              = true;


// **************************************************************************************************
// GLOBAL HEADER
// **************************************************************************************************

// true                         : Fixed Header
// false                        : Static Header
$cb->l_header_fixed             = false;

// ''                           : Classic Header style
// 'modern'                     : Modern Header style
// 'inverse'                    : Dark themed Header (works only with classic Header style)
// 'glass'                      : Light themed Header with transparency by default (absolute position,
//                                perfect for light images underneath - solid light background
//                                on scroll if the Header is also set as fixed)
// 'glass-inverse'              : Dark themed Header with transparency by default (absolute position,
//                                perfect for dark images underneath - solid dark background
//                                on scroll if the Header is also set as fixed)
$cb->l_header_style             = 'modern';


// **************************************************************************************************
// GLOBAL MAIN CONTENT
// **************************************************************************************************

// ''                           : Full width Main Content
// 'boxed'                      : Full width Main Content with a specific maximum width (screen width > 1200px)
// 'narrow'                     : Full width Main Content with a percentage width (screen width > 1200px)
$cb->l_m_content                = 'boxed';


// **************************************************************************************************
// GLOBAL MAIN MENU
// **************************************************************************************************

// It will get compared with the url of each menu link to make the link active and set up main menu accordingly
// If you are using query strings to load different pages, you can use the following value: basename($_SERVER['REQUEST_URI'])
$cb->main_nav_active            = basename($_SERVER['PHP_SELF']);

// You can use the following array to create your main menu
$cb->main_nav                   = array();
