<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Layout API <small>Powerful and simple to use</small></h2>

    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <p>You can either use <code>Codebase.layout('_mode_');</code> or enable it on a button with the attributes <code>data-toggle=&quot;layout&quot; data-action=&quot;_mode_&quot;</code></p>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>Live</th>
                            <th>Mode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-active">
                            <th colspan="2">Sidebar Visibility</th>
                        </tr>
                        <tr>
                            <td style="width: 25%;">
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_toggle">Toggle Sidebar</button>
                            </td>
                            <td style="width: 75%;">
                                <code>sidebar_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_open">Open Sidebar</button>
                            </td>
                            <td>
                                <code>sidebar_open</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_close">Close Sidebar</button>
                            </td>
                            <td>
                                <code>sidebar_close</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Mini Sidebar Mode <span class="font-size-sm font-w400 text-muted">Screen width greater than 991px</span></th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_mini_toggle">Toggle Mini Sidebar Mode</button>
                            </td>
                            <td>
                                <code>sidebar_mini_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_mini_on">Enable Mini Sidebar</button>
                            </td>
                            <td>
                                <code>sidebar_mini_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_mini_off">Disable Mini Sidebar</button>
                            </td>
                            <td>
                                <code>sidebar_mini_off</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Sidebar Style</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Toggle Inverse Style</button>
                            </td>
                            <td>
                                <code>sidebar_style_inverse_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_style_inverse_on">Enable Inverse Style</button>
                            </td>
                            <td>
                                <code>sidebar_style_inverse_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_style_inverse_off">Disable Inverse Style</button>
                            </td>
                            <td>
                                <code>sidebar_style_inverse_off</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Sidebar Position</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_pos_toggle">Toggle Sidebar Position</button>
                            </td>
                            <td>
                                <code>sidebar_pos_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_pos_left">Left Sidebar Position</button>
                            </td>
                            <td>
                                <code>sidebar_pos_left</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="sidebar_pos_right">Right Sidebar Position</button>
                            </td>
                            <td>
                                <code>sidebar_pos_right</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Side Overlay Visibility</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="side_overlay_toggle">Toggle Side Overlay</button>
                            </td>
                            <td>
                                <code>side_overlay_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="side_overlay_open">Open Side Overlay</button>
                            </td>
                            <td>
                                <code>side_overlay_open</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="side_overlay_close">Close Side Overlay</button>
                            </td>
                            <td>
                                <code>side_overlay_close</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Side Overlay Hover Mode <span class="font-size-sm font-w400 text-muted">Screen width greater than 991px</span></th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175 btn-success" data-toggle="layout" data-action="side_overlay_hoverable_toggle">Toggle Side Overlay Hover Mode</button>
                            </td>
                            <td>
                                <code>side_overlay_hoverable_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175 btn-success" data-toggle="layout" data-action="side_overlay_hoverable_on">Enable Side Overlay Hover Mode</button>
                            </td>
                            <td>
                                <code>side_overlay_hoverable_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175 btn-success" data-toggle="layout" data-action="side_overlay_hoverable_off">Disable Side Overlay Hover Mode</button>
                            </td>
                            <td>
                                <code>side_overlay_hoverable_off</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Header Mode</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_fixed_toggle">Toggle Header Fixed Mode</button>
                            </td>
                            <td>
                                <code>header_fixed_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_fixed_on">Enable Header Fixed Mode</button>
                            </td>
                            <td>
                                <code>header_fixed_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_fixed_off">Disable Header Fixed Mode</button>
                            </td>
                            <td>
                                <code>header_fixed_off</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Header Style</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_style_modern">Modern Style</button>
                            </td>
                            <td>
                                <code>header_style_modern</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                            </td>
                            <td>
                                <code>header_style_classic</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_style_glass">Glass Style</button>
                            </td>
                            <td>
                                <code>header_style_glass</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_style_inverse_toggle">Toggle Inverse Style</button>
                            </td>
                            <td>
                                <code>header_style_inverse_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_style_inverse_on">Enable Inverse Style</button>
                            </td>
                            <td>
                                <code>header_style_inverse_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_style_inverse_off">Disable Inverse Style</button>
                            </td>
                            <td>
                                <code>header_style_inverse_off</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_search_on">Open Header Search</button>
                            </td>
                            <td>
                                <code>header_search_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_search_off">Close Header Search</button>
                            </td>
                            <td>
                                <code>header_search_off</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_loader_on">Start Header Loader</button>
                            </td>
                            <td>
                                <code>header_loader_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="header_loader_off">Stop Header Loader</button>
                            </td>
                            <td>
                                <code>header_loader_off</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Custom Side Scrolling Mode <span class="font-size-sm font-w400 text-muted">Screen width greater than 991px</span></th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="side_scroll_toggle">Toggle Custom Side Scroll</button>
                            </td>
                            <td>
                                <code>side_scroll_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="side_scroll_on">Enable Custom Side Scroll</button>
                            </td>
                            <td>
                                <code>side_scroll_on</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="side_scroll_off">Disable Custom Side Scroll</button>
                            </td>
                            <td>
                                <code>side_scroll_off</code>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th colspan="2">Main Content Layout <span class="font-size-sm font-w400 text-muted">Screen width greater than 1200px</span></th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="content_layout_toggle">Toggle all Layouts</button>

                            </td>
                            <td>
                                <code>content_layout_toggle</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="content_layout_boxed">Boxed Layout</button>
                            </td>
                            <td>
                                <code>content_layout_boxed</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="content_layout_narrow">Narrow Layout</button>
                            </td>
                            <td>
                                <code>content_layout_narrow</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-sm btn-alt-primary min-width-175" data-toggle="layout" data-action="content_layout_full_width">Full Width Layout</button>
                            </td>
                            <td>
                                <code>content_layout_full_width</code>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Layout API -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>