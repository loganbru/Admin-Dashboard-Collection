{{-- BEGIN: Customizer --}}
<div class="customizer d-none d-md-block">
    <a class="customizer-close" href="javascript:void(0)">
        <i class="feather icon-x"></i>
    </a>
    <a class="customizer-toggle" href="javascript:void(0)">
        <i class="feather icon-settings fa fa-spin fa-fw white"></i>
    </a>
    <div class="customizer-content p-2">
        <h4 class="text-uppercase mb-0">Theme Customizer</h4>
        <small>Customize & Preview in Real Time</small>
        <hr>
        {{-- Menu Colors Starts --}}
        <div id="customizer-theme-colors">
            <h5>Menu Colors</h5>
            <ul class="list-inline unstyled-list">
            <li class="color-box bg-primary selected" data-color="theme-primary"></li>
            <li class="color-box bg-success" data-color="theme-success"></li>
            <li class="color-box bg-danger" data-color="theme-danger"></li>
            <li class="color-box bg-info" data-color="theme-info"></li>
            <li class="color-box bg-warning" data-color="theme-warning"></li>
            <li class="color-box bg-dark" data-color="theme-dark"></li>
            </ul>
        </div>
        {{-- Menu Colors Ends --}}
        <hr>
        {{-- Theme options starts --}}
        <h5 class="mt-1">Theme Layout</h5>
        <div class="theme-layouts">
            <div class="d-flex justify-content-start">
            <div class="mx-50">
                <fieldset>
                <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="" checked>
                    <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Light</span>
                </div>
                </fieldset>
            </div>
            <div class="mx-50">
                <fieldset>
                <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="dark-layout">
                    <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Dark</span>
                </div>
                </fieldset>
            </div>
            <div class="mx-50 semi-dark">
                <fieldset>
                <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="semi-dark-layout">
                    <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Semi Dark</span>
                </div>
                </fieldset>
            </div>
            </div>
        </div>
        {{-- Theme options starts --}}
        <hr>

        {{-- Collapse sidebar switch starts --}}
        <div id="collapse-sidebar">
            <div class="collapse-sidebar d-flex justify-content-between">
                <div class="collapse-option-title">
                <h5 class="pt-25">Collapse Sidebar</h5>
                </div>
                <div class="collapse-option-switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                    <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                </div>
                </div>
            </div>
            <hr>
        </div>
        {{-- Collapse sidebar switch Ends --}}

        {{-- Navbar colors starts --}}
        <div id="customizer-navbar-colors">
            <h5>Navbar Colors</h5>
            <ul class="list-inline unstyled-list">
            <li class="color-box bg-white border selected" data-navbar-default=""></li>
            <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
            <li class="color-box bg-success" data-navbar-color="bg-success"></li>
            <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
            <li class="color-box bg-info" data-navbar-color="bg-info"></li>
            <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
            <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
            </ul>
            <hr>
        </div>
        {{-- Navbar colors ends --}}
        {{-- Navbar Type Starts --}}
        <div id="navbar-type">
            <h5 class="navbar_type">Navbar Type</h5>
            <h5 class="menu_type d-none">Menu Type</h5>
            <div class="navbar-type d-flex justify-content-between">
                <div class="mx-50">
                <fieldset>
                    <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                    <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Hidden</span>
                    </div>
                </fieldset>
                </div>
                <div class="mx-50">
                <fieldset>
                    <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="navbarType" value="false" id="navbar-static">
                    <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Static</span>
                    </div>
                </fieldset>
                </div>
                <div class="mx-50">
                <fieldset>
                    <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="navbarType" value="false" id="navbar-sticky">
                    <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Sticky</span>
                    </div>
                </fieldset>
                </div>
                <div class="mx-50">
                <fieldset>
                    <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="navbarType" value="false" id="navbar-floating" checked>
                    <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Floating</span>
                    </div>
                </fieldset>
                </div>
            </div>
            <hr>
        </div>
        {{-- Navbar Type Starts --}}

        {{-- Footer Type Starts --}}
        <h5>Footer Type</h5>
        <div class="footer-type d-flex justify-content-start">
            <div class="mx-50">
            <fieldset>
                <div class="vs-radio-con vs-radio-primary">
                <input type="radio" name="footerType" value="false" id="footer-hidden">
                <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                </span>
                <span class="">Hidden</span>
                </div>
            </fieldset>
            </div>
            <div class="mx-50">
            <fieldset>
                <div class="vs-radio-con vs-radio-primary">
                <input type="radio" name="footerType" value="false" id="footer-static" checked>
                <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                </span>
                <span class="">Static</span>
                </div>
            </fieldset>
            </div>
            <div class="mx-50">
            <fieldset>
                <div class="vs-radio-con vs-radio-primary">
                <input type="radio" name="footerType" value="false" id="footer-sticky">
                <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                </span>
                <span class="">Sticky</span>
                </div>
            </fieldset>
            </div>
        </div>
        {{-- Footer Type Ends --}}
        <hr>

        {{-- Hide Scroll To Top Starts--}}
        <div class="hide-scroll-to-top d-flex justify-content-between py-25">
            <div class="hide-scroll-title">
            <h5 class="pt-25">Hide Scroll To Top</h5>
            </div>
            <div class="hide-scroll-top-switch">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                <label class="custom-control-label" for="hide-scroll-top-switch"></label>
            </div>
            </div>
        </div>
        {{-- Hide Scroll To Top Ends--}}
    </div>
</div>
{{-- End: Customizer --}}
