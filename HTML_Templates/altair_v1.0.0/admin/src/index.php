<?php
    define('safe_access',true);
    include('php/variables.php');
?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin <?php echo $app_version; ?></title>

<?php if (isset($css)) {
    echo '    <!-- additional styles for plugins -->';
    echo $css;
}; ?>
<?php echo $common_styles; ?>

</head>
<body class="sidebar_main_open<?php if(isset($body_class)) echo ' '.$body_class; ?>">
<?php include('php/partials/header_main.php'); ?>


<?php include('php/partials/main_sidebar.php'); ?>

<?php if (isset($includePage)) {
    if (file_exists('php/views/' . $includePage)) {
        include('php/views/' . $includePage);
    } else {
        echo '<div id="page_content"><div id="page_content_inner">';
        echo '<div class="uk-alert uk-alert-danger">Page not found</div>';
        echo '</div></div>';
    }
} else {
    echo '<div id="page_content"><div id="page_content_inner">';
    echo '<div class="uk-alert uk-alert-danger">Page not found</div>';
    echo '</div></div>';
} ?>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- momentJS date library -->
    <script src="bower_components/moment/min/moment.min.js"></script>

    <!-- common functions -->
    <script src="assets/js/common<?php echo $dist_min; ?>.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom<?php echo $dist_min; ?>.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common<?php echo $dist_min; ?>.js"></script>

<?php if (isset($scripts)) {
echo '    <!-- page specific plugins -->';
echo $scripts;
}; ?>

    <!-- enable hires images -->
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

<?php if( isset($_GET["release"]) && $_GET["release"] == true ) { ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-65191727-1', 'auto');
        ga('send', 'pageview');
    </script>
<?php }; ?>
</body>
</html>