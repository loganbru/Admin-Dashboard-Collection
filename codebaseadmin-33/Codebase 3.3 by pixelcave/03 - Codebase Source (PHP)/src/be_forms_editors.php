<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/summernote/summernote-bs4.css'); ?>
<?php $cb->get_css('js/plugins/simplemde/simplemde.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Summernote (.js-summernote + .js-summernote-air classes are initialized in Helpers.summernote()) -->
    <!-- For more info and examples you can check out http://summernote.org/ -->
    <h2 class="content-heading">Summernote</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Air Mode <small>Inline Editing</small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- Summernote Container -->
            <div class="js-summernote-air">
                <h3 class="h4">This is an Air-mode editable area.</h3>
                <ul>
                  <li>Select a text to reveal the toolbar.</li>
                  <li>Edit rich document on-the-fly, so elastic!</li>
                </ul>
                <p>End of air-mode area!</p>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- Summernote Container -->
            <div class="js-summernote">Hello Summernote!</div>
        </div>
    </div>
    <!-- END Summernote -->

    <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
    <!-- For more info and examples you can check out http://ckeditor.com -->
    <h2 class="content-heading">CKEditor</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">In-place Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_editors.php" method="post" onsubmit="return false;">
                <div class="form-group row">
                    <div class="col-12">
                        <!-- CKEditor Container -->
                        <div id="js-ckeditor-inline">Hello inline CKEditor! Click this text to edit it!</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_editors.php" method="post" onsubmit="return false;">
                <div class="form-group row">
                    <div class="col-12">
                        <!-- CKEditor Container -->
                        <textarea id="js-ckeditor" name="ckeditor">Hello CKEditor!</textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END CKEditor -->

    <!-- SimpleMDE Editor (js-simplemde class is initialized in Helpers.simpleMDE()) -->
    <!-- For more info and examples you can check out https://github.com/NextStepWebs/simplemde-markdown-editor -->
    <h2 class="content-heading">SimpleMDE</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Markdown Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_editors.php" method="post" onsubmit="return false;">
                <div class="form-group row">
                    <div class="col-12">
                        <!-- SimpleMDE Container -->
                        <textarea class="js-simplemde" id="simplemde" name="simplemde">Hello SimpleMDE!</textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END SimpleMDE Editor -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/summernote/summernote-bs4.min.js'); ?>
<?php $cb->get_js('js/plugins/ckeditor/ckeditor.js'); ?>
<?php $cb->get_js('js/plugins/simplemde/simplemde.min.js'); ?>

<!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
<script>jQuery(function(){ Codebase.helpers(['summernote', 'ckeditor', 'simplemde']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>