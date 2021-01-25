<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_sidebar_left               = false;
$cb->l_sidebar_mini               = false;
$cb->l_sidebar_visible_desktop    = true;
$cb->l_side_overlay_visible       = false;
$cb->l_header_fixed               = false;
$cb->l_header_style               = 'modern';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Flipped Layout</h2>
    <p>Right Sidebar, left Side Overlay and a static Header.</p>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>