<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
    <h2 class="content-heading">CountTo <small>Counting has never been easier</small></h2>
    <div class="row">
        <div class="col-sm-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 mb-0" data-toggle="countTo" data-to="250">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 mb-0" data-toggle="countTo" data-to="500">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 mb-0" data-toggle="countTo" data-to="750">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CountTo -->

    <!-- Speed -->
    <h2 class="content-heading">Speed <small>You can set the speed of your choice</small></h2>
    <div class="row">
        <div class="col-sm-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 text-success mb-0" data-toggle="countTo" data-to="1000" data-speed="1000">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 text-warning mb-0" data-toggle="countTo" data-to="1000" data-speed="2500">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 text-danger mb-0" data-toggle="countTo" data-to="1000" data-speed="5000">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Speed -->

    <!-- Prepend Content -->
    <h2 class="content-heading">Prepend Content <small>You can easily prepend custom text</small></h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 mb-0" data-toggle="countTo" data-to="1000" data-before="$ ">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 mb-0" data-toggle="countTo" data-to="1000" data-before="More than ">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Prepend Content -->

    <!-- Append Content -->
    <h2 class="content-heading">Append Content <small>You can easily append custom text</small></h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 mb-0" data-toggle="countTo" data-to="1000" data-after=" €">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="h2 mb-0" data-toggle="countTo" data-to="1000" data-after=" Sales">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Append Content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>