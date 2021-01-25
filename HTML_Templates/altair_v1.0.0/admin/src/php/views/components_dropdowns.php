<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Dropdowns</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn">Hover me <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Separated item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                                <button class="md-btn">Click me <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Separated item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn">Small <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Separated item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="heading_c">Grid</p>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn">3 Columns <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown uk-dropdown-width-3">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-3">
                                            <ul class="uk-nav uk-nav-dropdown uk-panel">
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="#">Separated item</a></li>
                                            </ul>
                                            <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <ul class="uk-nav uk-nav-dropdown uk-panel">
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="#">Separated item</a></li>
                                            </ul>
                                            <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
                                            <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn">2 Columns <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown uk-dropdown-width-2">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-2">
                                            <ul class="uk-nav uk-nav-dropdown uk-panel">
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="#">Separated item</a></li>
                                            </ul>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <ul class="uk-nav uk-nav-dropdown uk-panel">
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="#">Separated item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="heading_c">Position</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn">Up <i class="material-icons">&#xE316;</i></button>
                                <div class="uk-dropdown uk-dropdown-up">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Separated item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn">Center <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown uk-dropdown-center">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Separated item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn">Flip <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown uk-dropdown-flip">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Another item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Separated item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
