<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Tooltips -->
    <!-- Bootstrap Tooltip (data-toggle="tooltip" and .js-tooltip class is initialized in Helpers.coreBootstrapTooltip()) -->
    <!-- For advanced poover usage you can check out https://getbootstrap.com/docs/4.4/components/tooltips/ -->
    <h2 class="content-heading">Tooltips</h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <!-- Top Tooltip -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Top</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-danger" data-toggle="tooltip" data-placement="top" title="Top Tooltip">Show Tooltip</button>
                </div>
            </div>
            <!-- END Top Tooltip -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Right Tooltip -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Right</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-danger" data-toggle="tooltip" data-placement="right" title="Right Tooltip">Show Tooltip</button>
                </div>
            </div>
            <!-- END Right Tooltip -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Bottom Tooltip -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bottom</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-danger" data-toggle="tooltip" data-placement="bottom" title="Bottom Tooltip">Show Tooltip</button>
                </div>
            </div>
            <!-- END Bottom Tooltip -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Left Tooltip -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Left</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-danger" data-toggle="tooltip" data-placement="left" title="Left Tooltip">Show Tooltip</button>
                </div>
            </div>
            <!-- END Left Tooltip -->
        </div>
    </div>
    <!-- END Tooltips -->

    <!-- Popovers -->
    <!-- Bootstrap Popover (data-toggle="popover" and .js-popover class is initialized in Helpers.coreBootstrapPopover()) -->
    <!-- For advanced poover usage you can check out https://getbootstrap.com/docs/4.4/components/popovers/ -->
    <h2 class="content-heading">Popovers</h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <!-- Top Popover -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Top</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-success" data-toggle="popover" title="Top Popover" data-placement="top" data-content="This is example content. You can put a description or more info here.">Show Popover</button>
                </div>
            </div>
            <!-- END Top Popover -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Right Popover -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Right</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-success" data-toggle="popover" title="Right Popover" data-placement="right" data-content="This is example content. You can put a description or more info here.">Show Popover</button>
                </div>
            </div>
            <!-- END Right Popover -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Bottom Popover -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bottom</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-success" data-toggle="popover" title="Bottom Popover" data-placement="bottom" data-content="This is example content. You can put a description or more info here.">Show Popover</button>
                </div>
            </div>
            <!-- END Bottom Popover -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Left Popover -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Left</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-success" data-toggle="popover" title="Left Popover" data-placement="left" data-content="This is example content. You can put a description or more info here.">Show Popover</button>
                </div>
            </div>
            <!-- END Left Popover -->
        </div>
    </div>
    <!-- END Popovers -->

    <!-- Bootstrap Modals -->
    <!-- For advanced modal usage you can check out https://getbootstrap.com/docs/4.4/components/modal/ -->
    <h2 class="content-heading">Bootstrap Modals</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Normal Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Normal</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-info" data-toggle="modal" data-target="#modal-normal">Launch Modal</button>
                </div>
            </div>
            <!-- END Normal Modal -->
        </div>
        <div class="col-md-6">
            <!-- Fade In Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Fade In <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-info" data-toggle="modal" data-target="#modal-fadein">Launch Modal</button>
                </div>
            </div>
            <!-- END Fade In Modal -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Small Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Small</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-info" data-toggle="modal" data-target="#modal-small">Launch Modal</button>
                </div>
            </div>
            <!-- END Small Modal -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Large Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Large</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-info" data-toggle="modal" data-target="#modal-large">Launch Modal</button>
                </div>
            </div>
            <!-- END Large Modal -->
        </div>
        <div class="col-xl-4">
            <!-- Extra Large Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Extra Large</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-info" data-toggle="modal" data-target="#modal-extra-large">Launch Modal</button>
                </div>
            </div>
            <!-- END Extra Large Modal -->
        </div>
    </div>
    <!-- Bootstrap Modals -->

    <!-- Extra Modal Options -->
    <h2 class="content-heading">Extra Modal Options</h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <!-- Top Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Top Position</h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-top">Launch Modal</button>
                </div>
            </div>
            <!-- END Top Modal -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Pop In Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pop In <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-popin">Launch Modal</button>
                </div>
            </div>
            <!-- END Pop In Modal -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Pop Out Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pop Out <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-popout">Launch Modal</button>
                </div>
            </div>
            <!-- END Pop Out Modal -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Slide Up Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Slide Up <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-slideup">Launch Modal</button>
                </div>
            </div>
            <!-- END Slide Up Modal -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Slide Right Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Slide Right <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-slideright">Launch Modal</button>
                </div>
            </div>
            <!-- END Slide Right Modal -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Slide Left Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Slide Left <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-slideleft">Launch Modal</button>
                </div>
            </div>
            <!-- END Slide Left Modal -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- From Right Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">From Right <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-fromright">Launch Modal</button>
                </div>
            </div>
            <!-- END From Right Modal -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- From Left Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">From Left <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-fromleft">Launch Modal</button>
                </div>
            </div>
            <!-- END From Left Modal -->
        </div>
    </div>
    <!-- Extra Modal Options -->

    <!-- JS Modal Methods Modals -->
    <!-- For all modal methods you can check out https://getbootstrap.com/docs/4.4/components/modal/#via-javascript -->
    <h2 class="content-heading">JS Modal Methods</h2>
    <div class="row">
        <div class="col-xl-4">
            <!-- Show Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Show Modal</h3>
                </div>
                <div class="block-content block-content-full">
                    <code>jQuery('#myModalId').modal('show');</code>
                </div>
            </div>
            <!-- END Show Modal -->
        </div>
        <div class="col-xl-4">
            <!-- Hide Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Hide Modal</h3>
                </div>
                <div class="block-content block-content-full">
                    <code>jQuery('#myModalId').modal('hide');</code>
                </div>
            </div>
            <!-- END Hide Modal -->
        </div>
        <div class="col-xl-4">
            <!-- Toggle Modal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Toggle Modal</h3>
                </div>
                <div class="block-content block-content-full">
                    <code>jQuery('#myModalId').modal('toggle');</code>
                </div>
            </div>
            <!-- END Toggle Modal -->
        </div>
    </div>
    <!-- JS Modal Methods Modals -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<!-- Normal Modal -->
<div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Normal Modal -->

<!-- Fade In Modal -->
<div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Fade In Modal -->

<!-- Small Modal -->
<div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-labelledby="modal-small" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Small Modal -->

<!-- Large Modal -->
<div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Large Modal -->

<!-- Extra Large Modal -->
<div class="modal" id="modal-extra-large" tabindex="-1" role="dialog" aria-labelledby="modal-extra-large" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Extra Large Modal -->

<!-- Top Modal -->
<div class="modal fade" id="modal-top" tabindex="-1" role="dialog" aria-labelledby="modal-top" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Top Modal -->

<!-- Pop In Modal -->
<div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Pop In Modal -->

<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Modal -->

<!-- Slide Up Modal -->
<div class="modal fade" id="modal-slideup" tabindex="-1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideup" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Up Modal -->

<!-- Slide Right Modal -->
<div class="modal fade" id="modal-slideright" tabindex="-1" role="dialog" aria-labelledby="modal-slideright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideright" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Right Modal -->

<!-- Slide Left Modal -->
<div class="modal fade" id="modal-slideleft" tabindex="-1" role="dialog" aria-labelledby="modal-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Left Modal -->

<!-- From Right Modal -->
<div class="modal fade" id="modal-fromright" tabindex="-1" role="dialog" aria-labelledby="modal-fromright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromright" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END From Right Modal -->

<!-- From Left Modal -->
<div class="modal fade" id="modal-fromleft" tabindex="-1" role="dialog" aria-labelledby="modal-fromleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END From Left Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
