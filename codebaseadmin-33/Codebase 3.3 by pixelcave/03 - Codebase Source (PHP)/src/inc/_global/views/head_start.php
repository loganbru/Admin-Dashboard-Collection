<?php
/**
 * head_start.php
 *
 * Author: pixelcave
 *
 * The first block of code used in every page of the template
 *
 */
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title><?php echo $cb->title; ?></title>

        <meta name="description" content="<?php echo $cb->description; ?>">
        <meta name="author" content="<?php echo $cb->author; ?>">
        <meta name="robots" content="<?php echo $cb->robots; ?>">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="<?php echo $cb->title; ?>">
        <meta property="og:site_name" content="<?php echo $cb->name; ?>">
        <meta property="og:description" content="<?php echo $cb->description; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo $cb->og_url_site; ?>">
        <meta property="og:image" content="<?php echo $cb->og_url_image; ?>">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo $cb->assets_folder; ?>/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $cb->assets_folder; ?>/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $cb->assets_folder; ?>/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
