<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Button Styles -->
    <h2 class="content-heading">Button Styles</h2>

    <!-- Contextual -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Contextual</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">You can easily style a button or a link by adding the base class <code>btn</code> and then by applying a color variation class.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-primary min-width-125">Primary</button>
                    <div class="mt-10">
                        <code>btn-primary</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-secondary min-width-125">Secondary</button>
                    <div class="mt-10">
                        <code>btn-secondary</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-success min-width-125">Success</button>
                    <div class="mt-10">
                        <code>btn-success</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-info min-width-125">Info</button>
                    <div class="mt-10">
                        <code>btn-info</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-warning min-width-125">Warning</button>
                    <div class="mt-10">
                        <code>btn-warning</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-danger min-width-125">Danger</button>
                    <div class="mt-10">
                        <code>btn-danger</code>
                    </div>
                </div>
            </div>
            <p class="mb-30">You can also achieve outline styles for your buttons by using the related classes.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-primary min-width-125">Primary</button>
                    <div class="mt-10">
                        <code>btn-outline-primary</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-secondary min-width-125">Secondary</button>
                    <div class="mt-10">
                        <code>btn-outline-secondary</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-success min-width-125">Success</button>
                    <div class="mt-10">
                        <code>btn-outline-success</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-info min-width-125">Info</button>
                    <div class="mt-10">
                        <code>btn-outline-info</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-warning min-width-125">Warning</button>
                    <div class="mt-10">
                        <code>btn-outline-warning</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-danger min-width-125">Danger</button>
                    <div class="mt-10">
                        <code>btn-outline-danger</code>
                    </div>
                </div>
            </div>
            <p class="mb-30">Finally, there is also an alternative style which you can use with your buttons.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-primary min-width-125">Primary</button>
                    <div class="mt-10">
                        <code>btn-alt-primary</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-secondary min-width-125">Secondary</button>
                    <div class="mt-10">
                        <code>btn-alt-secondary</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-success min-width-125">Success</button>
                    <div class="mt-10">
                        <code>btn-alt-success</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-info min-width-125">Info</button>
                    <div class="mt-10">
                        <code>btn-alt-info</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-warning min-width-125">Warning</button>
                    <div class="mt-10">
                        <code>btn-alt-warning</code>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-danger min-width-125">Danger</button>
                    <div class="mt-10">
                        <code>btn-alt-danger</code>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Contextual Styles -->

    <!-- Ripple Effect -->
    <!-- Ripple functionality ([data-toggle="click-ripple"] is initialized in Helpers.coreRipple()) -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Ripple Effect</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">You can easily add a ripple effect on click to any button you want by adding <code>data-toggle=&quot;click-ripple&quot;</code>.</p>
            <div class="row items-push text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-primary min-width-125" data-toggle="click-ripple">Primary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-secondary min-width-125" data-toggle="click-ripple">Secondary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-success min-width-125" data-toggle="click-ripple">Success</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-info min-width-125" data-toggle="click-ripple">Info</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-warning min-width-125" data-toggle="click-ripple">Warning</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-danger min-width-125" data-toggle="click-ripple">Danger</button>
                </div>
            </div>
            <div class="row items-push text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-primary min-width-125" data-toggle="click-ripple">Primary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-secondary min-width-125" data-toggle="click-ripple">Secondary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-success min-width-125" data-toggle="click-ripple">Success</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-info min-width-125" data-toggle="click-ripple">Info</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-warning min-width-125" data-toggle="click-ripple">Warning</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-outline-danger min-width-125" data-toggle="click-ripple">Danger</button>
                </div>
            </div>
            <div class="row items-push text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-primary min-width-125" data-toggle="click-ripple">Primary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-secondary min-width-125" data-toggle="click-ripple">Secondary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-success min-width-125" data-toggle="click-ripple">Success</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-info min-width-125" data-toggle="click-ripple">Info</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-warning min-width-125" data-toggle="click-ripple">Warning</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-alt-danger min-width-125" data-toggle="click-ripple">Danger</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Ripple Effect -->

    <!-- Sizes -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Sizes</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">You might need various button sizes based on your content and context. Making your buttons smaller or larger is as easy as adding an extra size variation class. It can be applied along with any other color or shape variation class to create the button that fits you best.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-sm btn-warning mb-10">Small</button><br>
                    <button type="button" class="btn btn-sm btn-outline-warning mb-10">Small</button><br>
                    <button type="button" class="btn btn-sm btn-alt-warning">Small</button>
                    <p class="mt-10">
                        <code>btn</code> <code>btn-sm</code>
                    </p>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info mb-10">Normal</button><br>
                    <button type="button" class="btn btn-outline-info mb-10">Normal</button><br>
                    <button type="button" class="btn btn-alt-info">Normal</button>
                    <p class="mt-10">
                        <code>btn</code>
                    </p>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-lg btn-success mb-10">Large</button><br>
                    <button type="button" class="btn btn-lg btn-outline-success mb-10">Large</button><br>
                    <button type="button" class="btn btn-lg btn-alt-success">Large</button>
                    <p class="mt-10">
                        <code>btn</code> <code>btn-lg</code>
                    </p>
                </div>
            </div>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-hero btn-sm btn-warning text-uppercase mb-10">Small</button><br>
                    <button type="button" class="btn btn-hero btn-sm btn-outline-warning text-uppercase mb-10">Small</button><br>
                    <button type="button" class="btn btn-hero btn-sm btn-alt-warning text-uppercase">Small</button>
                    <p class="mt-10">
                        <code>btn</code> <code>btn-hero</code> <code>btn-sm</code>
                    </p>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-hero btn-info text-uppercase mb-10">Normal</button><br>
                    <button type="button" class="btn btn-hero btn-outline-info text-uppercase mb-10">Normal</button><br>
                    <button type="button" class="btn btn-hero btn-alt-info text-uppercase">Normal</button>
                    <p class="mt-10">
                        <code>btn</code> <code>btn-hero</code>
                    </p>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-hero btn-lg btn-success text-uppercase mb-10">Large</button><br>
                    <button type="button" class="btn btn-hero btn-lg btn-outline-success text-uppercase mb-10">Large</button><br>
                    <button type="button" class="btn btn-hero btn-lg btn-alt-success text-uppercase">Large</button>
                    <p class="mt-10">
                        <code>btn</code> <code>btn-hero</code> <code>btn-lg</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Sizes -->
    <!-- END Button Styles -->

    <!-- Button Variations -->
    <h2 class="content-heading">Button Variations</h2>

    <!-- Square -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Square</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">You can easily have a square button by adding the <code>btn-square</code> class.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-md-6 col-xl-4">
                    <button type="button" class="btn btn-square btn-primary min-width-125 mb-10">Primary</button><br>
                    <button type="button" class="btn btn-square btn-outline-primary min-width-125 mb-10">Primary</button><br>
                    <button type="button" class="btn btn-square btn-alt-primary min-width-125">Primary</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <button type="button" class="btn btn-square btn-secondary min-width-125 mb-10">Secondary</button><br>
                    <button type="button" class="btn btn-square btn-outline-secondary min-width-125 mb-10">Secondary</button><br>
                    <button type="button" class="btn btn-square btn-alt-secondary min-width-125">Secondary</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <button type="button" class="btn btn-square btn-success min-width-125 mb-10">Success</button><br>
                    <button type="button" class="btn btn-square btn-outline-success min-width-125 mb-10">Success</button><br>
                    <button type="button" class="btn btn-square btn-alt-success min-width-125">Success</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <button type="button" class="btn btn-square btn-info min-width-125 mb-10">Info</button><br>
                    <button type="button" class="btn btn-square btn-outline-info min-width-125 mb-10">Info</button><br>
                    <button type="button" class="btn btn-square btn-alt-info min-width-125">Info</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <button type="button" class="btn btn-square btn-warning min-width-125 mb-10">Warning</button><br>
                    <button type="button" class="btn btn-square btn-outline-warning min-width-125 mb-10">Warning</button><br>
                    <button type="button" class="btn btn-square btn-alt-warning min-width-125">Warning</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <button type="button" class="btn btn-square btn-danger min-width-125 mb-10">Danger</button><br>
                    <button type="button" class="btn btn-square btn-outline-danger min-width-125 mb-10">Danger</button><br>
                    <button type="button" class="btn btn-square btn-alt-danger min-width-125">Danger</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Square -->

    <!-- Rounded -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Rounded</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">The same way, by adding the <code>btn-rounded</code> class, you can have rounded buttons.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-primary min-width-125 mb-10">Primary</button><br>
                    <button type="button" class="btn btn-rounded btn-outline-primary min-width-125 mb-10">Primary</button><br>
                    <button type="button" class="btn btn-rounded btn-alt-primary min-width-125">Primary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-secondary min-width-125 mb-10">Secondary</button><br>
                    <button type="button" class="btn btn-rounded btn-outline-secondary min-width-125 mb-10">Secondary</button><br>
                    <button type="button" class="btn btn-rounded btn-alt-secondary min-width-125">Secondary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-success min-width-125 mb-10">Success</button><br>
                    <button type="button" class="btn btn-rounded btn-outline-success min-width-125 mb-10">Success</button><br>
                    <button type="button" class="btn btn-rounded btn-alt-success min-width-125">Success</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-info min-width-125 mb-10">Info</button><br>
                    <button type="button" class="btn btn-rounded btn-outline-info min-width-125 mb-10">Info</button><br>
                    <button type="button" class="btn btn-rounded btn-alt-info min-width-125">Info</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-warning min-width-125 mb-10">Warning</button><br>
                    <button type="button" class="btn btn-rounded btn-outline-warning min-width-125 mb-10">Warning</button><br>
                    <button type="button" class="btn btn-rounded btn-alt-warning min-width-125">Warning</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-danger min-width-125 mb-10">Danger</button><br>
                    <button type="button" class="btn btn-rounded btn-outline-danger min-width-125 mb-10">Danger</button><br>
                    <button type="button" class="btn btn-rounded btn-alt-danger min-width-125">Danger</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Rounded -->

    <!-- No Border -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">No Border</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">You can even remove the border from your buttons styles (default and outline), by adding the <code>btn-noborder</code> class.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-noborder btn-primary min-width-125 mb-10">Primary</button><br>
                    <button type="button" class="btn btn-rounded btn-noborder btn-outline-primary min-width-125">Primary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-noborder btn-secondary min-width-125 mb-10">Secondary</button><br>
                    <button type="button" class="btn btn-rounded btn-noborder btn-outline-secondary min-width-125">Secondary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-noborder btn-success min-width-125 mb-10">Success</button><br>
                    <button type="button" class="btn btn-rounded btn-noborder btn-outline-success min-width-125">Success</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-noborder btn-info min-width-125 mb-10">Info</button><br>
                    <button type="button" class="btn btn-rounded btn-noborder btn-outline-info min-width-125">Info</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-noborder btn-warning min-width-125 mb-10">Warning</button><br>
                    <button type="button" class="btn btn-rounded btn-noborder btn-outline-warning min-width-125">Warning</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-rounded btn-noborder btn-danger min-width-125 mb-10">Danger</button><br>
                    <button type="button" class="btn btn-rounded btn-noborder btn-outline-danger min-width-125">Danger</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END No Border -->

    <!-- Disabled -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Disabled</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">If you need to disable a button, just add the <code>disabled</code> attribute.</p>
            <div class="row items-push-2x text-center text-sm-left">
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-primary min-width-125 mb-10" disabled>Primary</button><br>
                    <button type="button" class="btn btn-outline-primary min-width-125 mb-10" disabled>Primary</button><br>
                    <button type="button" class="btn btn-alt-primary min-width-125" disabled>Primary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-secondary min-width-125 mb-10" disabled>Secondary</button><br>
                    <button type="button" class="btn btn-outline-secondary min-width-125 mb-10" disabled>Secondary</button><br>
                    <button type="button" class="btn btn-alt-secondary min-width-125" disabled>Secondary</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-success min-width-125 mb-10" disabled>Success</button><br>
                    <button type="button" class="btn btn-outline-success min-width-125 mb-10" disabled>Success</button><br>
                    <button type="button" class="btn btn-alt-success min-width-125" disabled>Success</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-info min-width-125 mb-10" disabled>Info</button><br>
                    <button type="button" class="btn btn-outline-info min-width-125 mb-10" disabled>Info</button><br>
                    <button type="button" class="btn btn-alt-info min-width-125" disabled>Info</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-warning min-width-125 mb-10" disabled>Warning</button><br>
                    <button type="button" class="btn btn-outline-warning min-width-125 mb-10" disabled>Warning</button><br>
                    <button type="button" class="btn btn-alt-warning min-width-125" disabled>Warning</button>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <button type="button" class="btn btn-danger min-width-125 mb-10" disabled>Danger</button><br>
                    <button type="button" class="btn btn-outline-danger min-width-125 mb-10" disabled>Danger</button><br>
                    <button type="button" class="btn btn-alt-danger min-width-125" disabled>Danger</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Disabled -->
    <!-- END Button Variations -->

    <!-- Buttons with Icons -->
    <h2 class="content-heading">Button with Icons</h2>

    <!-- Default -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Default</h3>
        </div>
        <div class="block-content">
            <p class="mb-30">You can use any icon you like with your buttons! Prefer the ones that better represent the action of each button.</p>
            <div class="mb-10">
                <button type="button" class="btn btn-success mr-5 mb-5">
                    <i class="fa fa-plus mr-5"></i>Add User
                </button>
                <button type="button" class="btn btn-info mr-5 mb-5">
                    <i class="fa fa-download mr-5"></i>Download
                </button>
                <button type="button" class="btn btn-warning mr-5 mb-5">
                    <i class="fa fa-exclamation-triangle mr-5"></i>Are you sure?
                </button>
                <button type="button" class="btn btn-primary mr-5 mb-5">
                    <i class="fa fa-upload mr-5"></i>Upload
                </button>
                <button type="button" class="btn btn-danger mr-5 mb-5">
                    <i class="fa fa-times mr-5"></i>Delete
                </button>
                <button type="button" class="btn btn-primary mr-5 mb-5">
                    <i class="fa fa-thumbs-up mr-5"></i>Like
                </button>
                <button type="button" class="btn btn-secondary mr-5 mb-5">
                    <i class="fa fa-play mr-5"></i>Play
                </button>
            </div>
            <div class="mb-10">
                <button type="button" class="btn btn-outline-success mr-5 mb-5">
                    <i class="fa fa-plus mr-5"></i>Add User
                </button>
                <button type="button" class="btn btn-outline-info mr-5 mb-5">
                    <i class="fa fa-download mr-5"></i>Download
                </button>
                <button type="button" class="btn btn-outline-warning mr-5 mb-5">
                    <i class="fa fa-exclamation-triangle mr-5"></i>Are you sure?
                </button>
                <button type="button" class="btn btn-outline-primary mr-5 mb-5">
                    <i class="fa fa-upload mr-5"></i>Upload
                </button>
                <button type="button" class="btn btn-outline-danger mr-5 mb-5">
                    <i class="fa fa-times mr-5"></i>Delete
                </button>
                <button type="button" class="btn btn-outline-primary mr-5 mb-5">
                    <i class="fa fa-thumbs-up mr-5"></i>Like
                </button>
                <button type="button" class="btn btn-outline-secondary mr-5 mb-5">
                    <i class="fa fa-play mr-5"></i>Play
                </button>
            </div>
            <div class="mb-10">
                <button type="button" class="btn btn-alt-success mr-5 mb-5">
                    <i class="fa fa-plus mr-5"></i>Add User
                </button>
                <button type="button" class="btn btn-alt-info mr-5 mb-5">
                    <i class="fa fa-download mr-5"></i>Download
                </button>
                <button type="button" class="btn btn-alt-warning mr-5 mb-5">
                    <i class="fa fa-exclamation-triangle mr-5"></i>Are you sure?
                </button>
                <button type="button" class="btn btn-alt-primary mr-5 mb-5">
                    <i class="fa fa-upload mr-5"></i>Upload
                </button>
                <button type="button" class="btn btn-alt-danger mr-5 mb-5">
                    <i class="fa fa-times mr-5"></i>Delete
                </button>
                <button type="button" class="btn btn-alt-primary mr-5 mb-5">
                    <i class="fa fa-thumbs-up mr-5"></i>Like
                </button>
                <button type="button" class="btn btn-alt-secondary mr-5 mb-5">
                    <i class="fa fa-play mr-5"></i>Play
                </button>
            </div>
        </div>
    </div>
    <!-- END Default -->

    <!-- Variations -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Variations</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="push">
                <p class="mb-30">You can use icons with any button variation you want, they will adjust accordingly.</p>
                <button type="button" class="btn btn-square btn-secondary mr-5 mb-5">
                    <i class="fa fa-wifi mr-5"></i>Square
                </button>
                <button type="button" class="btn btn-hero btn-rounded btn-noborder btn-danger mr-5 mb-5">
                    <i class="fa fa-times mr-5"></i>Rounded
                </button>
                <button type="button" class="btn btn-success mr-5 mb-5">
                    <i class="fa fa-check"></i>
                </button>
                <button type="button" class="btn btn-warning mr-5 mb-5">
                    <i class="fa fa-exclamation-circle"></i>
                </button>
                <button type="button" class="btn btn-hero btn-rounded btn-alt-success mr-5 mb-5">
                    <i class="fa fa-pencil"></i>
                </button>
                <button type="button" class="btn btn-lg btn-secondary mr-5 mb-5">
                    <i class="fa fa-youtube mr-5"></i>Large
                </button>
                <button type="button" class="btn btn-sm btn-primary mr-5 mb-5">
                    <i class="fa fa-support mr-5"></i>Small
                </button>
                <button type="button" class="btn btn-sm btn-secondary mr-5 mb-5">
                    <i class="fa fa-wrench mr-5"></i>Small
                </button>
                <button type="button" class="btn btn-lg btn-alt-warning mr-5 mb-5">
                    <i class="fa fa-tint mr-5"></i>Large
                </button>
            </div>
            <div class="push">
                <p class="mb-30">You can also use the <code>.btn-circle</code> class to create circle buttons with only icons.</p>
                <button type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5">
                    <i class="fa fa-wifi"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5">
                    <i class="fa fa-check"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5">
                    <i class="fa fa-exclamation-circle"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5">
                    <i class="fa fa-info"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5">
                    <i class="fa fa-times"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-outline-secondary mr-5 mb-5">
                    <i class="fa fa-wordpress"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-outline-success mr-5 mb-5">
                    <i class="fa fa-check-square"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-outline-warning mr-5 mb-5">
                    <i class="fa fa-space-shuttle"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-outline-info mr-5 mb-5">
                    <i class="fa fa-terminal"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-outline-danger mr-5 mb-5">
                    <i class="fa fa-gears"></i>
                </button>
            </div>
            <div class="push">
                <button type="button" class="btn btn-circle btn-alt-secondary mr-5 mb-5">
                    <i class="fa fa-wifi"></i>
                </button>
                <button type="button" class="btn btn-circle btn-alt-success mr-5 mb-5">
                    <i class="fa fa-check"></i>
                </button>
                <button type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5">
                    <i class="fa fa-exclamation-circle"></i>
                </button>
                <button type="button" class="btn btn-circle btn-alt-info mr-5 mb-5">
                    <i class="fa fa-info"></i>
                </button>
                <button type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5">
                    <i class="fa fa-times"></i>
                </button>
                <button type="button" class="btn btn-circle btn-outline-secondary mr-5 mb-5">
                    <i class="fa fa-wordpress"></i>
                </button>
                <button type="button" class="btn btn-circle btn-outline-success mr-5 mb-5">
                    <i class="fa fa-check-square"></i>
                </button>
                <button type="button" class="btn btn-circle btn-outline-warning mr-5 mb-5">
                    <i class="fa fa-space-shuttle"></i>
                </button>
                <button type="button" class="btn btn-circle btn-outline-info mr-5 mb-5">
                    <i class="fa fa-terminal"></i>
                </button>
                <button type="button" class="btn btn-circle btn-outline-danger mr-5 mb-5">
                    <i class="fa fa-gears"></i>
                </button>
            </div>
            <div class="push">
                <button type="button" class="btn btn-lg btn-circle btn-alt-secondary mr-5 mb-5">
                    <i class="fa fa-wifi"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-alt-success mr-5 mb-5">
                    <i class="fa fa-check"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-alt-warning mr-5 mb-5">
                    <i class="fa fa-exclamation-circle"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-alt-info mr-5 mb-5">
                    <i class="fa fa-info"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-alt-danger mr-5 mb-5">
                    <i class="fa fa-times"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-outline-secondary mr-5 mb-5">
                    <i class="fa fa-wordpress"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-outline-success mr-5 mb-5">
                    <i class="fa fa-check-square"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-outline-warning mr-5 mb-5">
                    <i class="fa fa-space-shuttle"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-outline-info mr-5 mb-5">
                    <i class="fa fa-terminal"></i>
                </button>
                <button type="button" class="btn btn-lg btn-circle btn-outline-danger mr-5 mb-5">
                    <i class="fa fa-gears"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- END Variations -->
    <!-- END Buttons with Icons -->

    <!-- Buttons Groups, Dropdowns and Toolbars -->
    <h2 class="content-heading">Button Groups, Dropdowns &amp; Toolbars</h2>

    <!-- Groups and Dropdowns -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Groups and Dropdowns</h3>
        </div>
        <div class="block-content">
            <div class="push">
                <p class="mb-30">Grouping buttons or creating dropdowns/dropups in various sizes is just a few lines away.</p>
                <div class="row items-push">
                    <div class="col-xl-6">
                        <div class="push">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-primary">1</button>
                                <button type="button" class="btn btn-primary">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bell mr-5"></i>News
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="push">
                            <div class="btn-group btn-group-sm" role="group" aria-label="btnGroup1">
                                <button type="button" class="btn btn-secondary">Left</button>
                                <button type="button" class="btn btn-secondary">Middle</button>
                                <button type="button" class="btn btn-secondary">Right</button>
                            </div>
                        </div>
                        <div class="push">
                            <div class="btn-group" role="group" aria-label="btnGroup2">
                                <button type="button" class="btn btn-info">Left</button>
                                <button type="button" class="btn btn-info">Middle</button>
                                <button type="button" class="btn btn-info">Right</button>
                            </div>
                        </div>
                        <div class="push">
                            <div class="btn-group btn-group-lg" role="group" aria-label="btnGroup3">
                                <button type="button" class="btn btn-warning">Left</button>
                                <button type="button" class="btn btn-warning">Middle</button>
                                <button type="button" class="btn btn-warning">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="push">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropup">
                                <button type="button" class="btn btn-primary">1</button>
                                <button type="button" class="btn btn-primary">2</button>
                                <div class="btn-group dropup" role="group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bell mr-5"></i>News
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="push">
                            <div class="btn-group btn-group-sm" role="group" aria-label="btnGroupIcons1">
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-play"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-pause"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-stop"></i>
                                </button>
                            </div>
                        </div>
                        <div class="push">
                            <div class="btn-group" role="group" aria-label="btnGroupIcons2">
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-play"></i>
                                </button>
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-pause"></i>
                                </button>
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-stop"></i>
                                </button>
                            </div>
                        </div>
                        <div class="push">
                            <div class="btn-group btn-group-lg" role="group" aria-label="btnGroupIcons3">
                                <button type="button" class="btn btn-warning">
                                    <i class="fa fa-play"></i>
                                </button>
                                <button type="button" class="btn btn-warning">
                                    <i class="fa fa-pause"></i>
                                </button>
                                <button type="button" class="btn btn-warning">
                                    <i class="fa fa-stop"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push">
                <p class="mb-30">You can also have vertical button groups with dropdowns or dropups</p>
                <div class="row items-push">
                    <div class="col-xl-6">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group with nested dropdown">
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-bell mr-5"></i>News
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                    </a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Button</button>
                            <div class="btn-group dropup" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-bell mr-5"></i>News
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group with nested dropdown">
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-bell mr-5"></i>News
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                    </a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <div class="btn-group dropup" role="group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-bell mr-5"></i>News
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Groups and Dropdowns -->

    <!-- Toolbars -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Toolbars</h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-12">
                    <p class="mb-30">Create toolbars by using icons and buttons.</p>
                    <div class="push">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-5" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-align-left"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-align-center"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-align-right"></i>
                                </button>
                            </div>
                            <div class="btn-group mr-5" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-list-ul"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-list-ol"></i>
                                </button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" id="toolbarDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                <div class="dropdown-menu" aria-labelledby="toolbarDrop">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-bell mr-5"></i>News
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="push">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-5" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-file"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-floppy-o"></i>
                                </button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-bold"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-italic"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-underline"></i>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <i class="fa fa-strikethrough"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="mb-30">You can also change toolbar’s size easily.</p>
                    <div class="btn-toolbar push" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group btn-group-sm mr-5" role="group" aria-label="First group">
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-file"></i>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-floppy-o"></i>
                            </button>
                        </div>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-bold"></i>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-italic"></i>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-underline"></i>
                            </button>
                        </div>
                    </div>
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group btn-group-lg mr-5" role="group" aria-label="First group">
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-file-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-floppy-o"></i>
                            </button>
                        </div>
                        <div class="btn-group btn-group-lg" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-bold"></i>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-italic"></i>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i class="fa fa-underline"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Toolbars -->
    <!-- END Buttons Groups, Dropdowns and Toolbars -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>