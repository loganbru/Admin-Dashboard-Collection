<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-primary">
    <div class="bg-pattern bg-black-op-25" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern.png');">
        <div class="content content-top text-center">
            <div class="py-50">
                <h1 class="font-w700 text-white mb-10">Upgrade Plan</h1>
                <h2 class="h4 font-w400 text-white-op">Step up your game with a better plan.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Pricing Tables -->
<div class="content">
    <div class="row py-30">
        <div class="col-md-6 col-xl-3">
            <!-- Developer Plan -->
            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title font-w600">
                        <i class="fa fa-check"></i> Developer
                    </h3>
                </div>
                <div class="block-content bg-body-light">
                    <div class="h1 font-w700 text-primary mb-10">$19</div>
                    <div class="h5 text-muted">per month</div>
                </div>
                <div class="block-content">
                    <p><strong>2</strong> Projects</p>
                    <p><strong>10GB</strong> Storage</p>
                    <p><strong>15</strong> Clients</p>
                    <p><strong>Email</strong> Support</p>
                </div>
                <div class="block-content block-content-full">
                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-alt-primary">Current Plan</span>
                </div>
            </a>
            <!-- END Developer Plan -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Startup Plan -->
            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title">Startup</h3>
                </div>
                <div class="block-content bg-body-light">
                    <div class="h1 font-w700 mb-10">$39</div>
                    <div class="h5 text-muted">per month</div>
                </div>
                <div class="block-content">
                    <p><strong>10</strong> Projects</p>
                    <p><strong>30GB</strong> Storage</p>
                    <p><strong>100</strong> Clients</p>
                    <p><strong>FULL</strong> Support</p>
                </div>
                <div class="block-content block-content-full">
                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-primary">
                        <i class="fa fa-arrow-up mr-5"></i> Upgrade
                    </span>
                </div>
            </a>
            <!-- END Startup Plan -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Business Plan -->
            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title">Business</h3>
                </div>
                <div class="block-content bg-body-light">
                    <div class="h1 font-w700 mb-10">$99</div>
                    <div class="h5 text-muted">per month</div>
                </div>
                <div class="block-content">
                    <p><strong>50</strong> Projects</p>
                    <p><strong>100GB</strong> Storage</p>
                    <p><strong>1000</strong> Clients</p>
                    <p><strong>FULL</strong> Support</p>
                </div>
                <div class="block-content block-content-full">
                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-primary">
                        <i class="fa fa-arrow-up mr-5"></i> Upgrade
                    </span>
                </div>
            </a>
            <!-- END Business Plan -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- VIP Plan -->
            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title">VIP</h3>
                </div>
                <div class="block-content bg-body-light">
                    <div class="h1 font-w700 mb-10">$249</div>
                    <div class="h5 text-muted">per month</div>
                </div>
                <div class="block-content">
                    <p><strong>Unlimited</strong> Projects</p>
                    <p><strong>Unlimited</strong> Storage</p>
                    <p><strong>Unlimited</strong> Clients</p>
                    <p><strong>FULL</strong> Support</p>
                </div>
                <div class="block-content block-content-full">
                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-primary">
                        <i class="fa fa-arrow-up mr-5"></i> Upgrade
                    </span>
                </div>
            </a>
            <!-- END VIP Plan -->
        </div>
    </div>
</div>
<!-- END Pricing Tables -->

<!-- Call to Action -->
<div class="bg-body-dark">
    <div class="content">
        <div class="py-50 nice-copy text-center">
            <h3 class="font-w700 mb-10">Why Upgrade?</h3>
            <p>We value our customers and our goal is to help them achieve their dreams in any way we can. We work hard to save you time and get you up and running as soon as possible. By upgrading you will get tons of new features that can help you expand your business.</p>
            <a class="btn btn-hero btn-noborder btn-lg btn-rounded btn-primary" href="javascript:void(0)">Try a better plan</a>
        </div>
    </div>
</div>
<!-- END Call to Action -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>