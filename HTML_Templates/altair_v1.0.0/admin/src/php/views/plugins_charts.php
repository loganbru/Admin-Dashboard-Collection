<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Charts</h3>

            <h4 class="heading_a uk-margin-bottom">MetricsGraphics.js</h4>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Linked graphics
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-2">
                                    <div id="mg_chart_linked_a" class="mGraph"></div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div id="mg_chart_linked_b" class="mGraph"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div id="mg_chart_confidence_band" class="mGraph"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div id="mg_chart_currency" class="mGraph"></div>
                        </div>
                    </div>
                </div>
            </div>


            <h4 class="heading_a uk-margin-bottom">C3.js</h4>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Donut Chart</h4>
                            <div id="c3_chart_donut" class="c3chart"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Stacked Bars Chart</h4>
                            <div id="c3_chart_bar_stacked" class="c3chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Spline Chart</h4>
                            <div id="c3_chart_spline" class="c3chart"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Stacked Area Chart</h4>
                            <div id="c3_chart_area_stacked" class="c3chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Scatter Plot</h4>
                            <div id="c3_chart_scatter" class="c3chart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
