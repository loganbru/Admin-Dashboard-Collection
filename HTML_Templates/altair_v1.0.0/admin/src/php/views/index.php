<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <!-- statistics (small charts) -->
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Visitors (last 7d)</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>12456</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Sale</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>142384</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                            <span class="uk-text-muted uk-text-small">Orders Completed</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Visitors (live)</span>
                            <h2 class="uk-margin-remove" id="peity_live_text">0<noscript>46</noscript></h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- large chart -->
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                                <div class="md-card-dropdown" data-uk-dropdown>
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#">Action 1</a></li>
                                            <li><a href="#">Action 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Chart
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="mGraph-wrapper">
                                <div id="mGraph_sale" class="mGraph"></div>
                            </div>
                            <div class="md-card-fullscreen-content">
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-no-border uk-text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Best Seller</th>
                                            <th>Total Sale</th>
                                            <th>Change</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>January 2014</td>
                                            <td><?php echo $faker->sentence(3); ?></td>
                                            <td>$3 234 162</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>February 2014</td>
                                            <td><?php echo $faker->sentence(3); ?></td>
                                            <td>$3 771 083</td>
                                            <td class="uk-text-success">+2.5%</td>
                                        </tr>
                                        <tr>
                                            <td>March 2014</td>
                                            <td><?php echo $faker->sentence(3); ?></td>
                                            <td>$2 429 352</td>
                                            <td class="uk-text-danger">-4.6%</td>
                                        </tr>
                                        <tr>
                                            <td>April 2014</td>
                                            <td><?php echo $faker->sentence(3); ?></td>
                                            <td>$4 844 169</td>
                                            <td class="uk-text-success">+7%</td>
                                        </tr>
                                        <tr>
                                            <td>May 2014</td>
                                            <td><?php echo $faker->sentence(3); ?></td>
                                            <td>$5 284 318</td>
                                            <td class="uk-text-success">+3.2%</td>
                                        </tr>
                                        <tr>
                                            <td>June 2014</td>
                                            <td><?php echo $faker->sentence(3); ?></td>
                                            <td>$4 688 183</td>
                                            <td class="uk-text-danger">-6%</td>
                                        </tr>
                                        <tr>
                                            <td>July 2014</td>
                                            <td><?php echo $faker->sentence(3); ?></td>
                                            <td>$4 353 427</td>
                                            <td class="uk-text-success">-5.3%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                <p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some Info:</p>
                                <p class="uk-margin-top-remove"><?php echo $faker->sentence(120); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- circular charts -->
            <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE0BE;</i></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    User Messages
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content uk-flex uk-flex-center uk-flex-middle">
                            <span class="peity_conversions_large peity_data">5,3,9,6,5,9,7</span>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Conversions
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay md-card-overlay-active">
                        <div class="md-card-content" id="canvas_1">
                            <div class="epc_chart" data-percent="37" data-bar-color="#9c27b0">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE85D;</i></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Tasks List
                                </h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <button class="md-btn md-btn-primary">More</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="53" data-bar-color="#009688">
                                <span class="epc_chart_text"><span class="countUpMe">53</span>%</span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Orders
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    User Registrations
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
            </div>


            <!-- info cards -->
            <div class="uk-grid uk-grid-medium uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
                <div>
                    <div class="md-card">
                        <div class="md-card-head head_blue">
                            <div class="md-card-head-menu" data-uk-dropdown>
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                    <ul class="uk-nav">
                                        <li><a href="#">User profile</a></li>
                                        <li><a href="#">User permissions</a></li>
                                        <li><a href="#" class="uk-text-danger">Delete user</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_11.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                <?php echo $faker->firstNameFemale; echo ' '. $faker->lastName; ?>

                                <span><?php echo $faker->email; ?></span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon">
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->email; ?></span>
                                        <span class="uk-text-small uk-text-muted">Email</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->phoneNumber; ?></span>
                                        <span class="uk-text-small uk-text-muted">Phone</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">facebook.com/envato</span>
                                        <span class="uk-text-small uk-text-muted">Facebook</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon uk-icon-twitter"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">twitter.com/envato</span>
                                        <span class="uk-text-small uk-text-muted">Twitter</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-head">
                            <div id="video_player"></div>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon md-list-interactive" id="video_player_playlist">
                                <li data-video-src="-CYs99M7hzA">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Unboxing the HERO4</span>
                                        <span class="uk-text-small uk-text-muted">Mashable</span>
                                    </div>
                                </li>
                                <li data-video-src="te689fEo2pY">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Apple Watch Unboxing & Setup</span>
                                        <span class="uk-text-small uk-text-muted">Unbox Therapy</span>
                                    </div>
                                </li>
                                <li data-video-src="7AFJeaYojhU">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Energous WattUp Power Transmitter</span>
                                        <span class="uk-text-small uk-text-muted">TechCrunch</span>
                                    </div>
                                </li>
                                <li data-video-src="hajnEpCq5SE">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">The new MacBook - Design</span>
                                        <span class="uk-text-small uk-text-muted">Apple</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-head">
                            <h3 class="md-card-head-text">Server load <span id="ch_memory_usage_server">Server 1</span></h3>
                            <div id="c3_server_load" class="head_chart"></div>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li class="md-list-item-active">
                                    <div class="md-list-content">
                                        <span class="uk-badge uk-badge-success">Online</span>
                                        <span class="md-list-heading">Server 1 (New York)</span>
                                        <span class="uk-text-small uk-text-muted">8 192 MB</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="uk-badge uk-badge-success">Online</span>
                                        <span class="md-list-heading">Server 2 (Amsterdam)</span>
                                        <span class="uk-text-small uk-text-muted">32 768 MB</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="uk-badge uk-badge-danger">Offline</span>
                                        <span class="md-list-heading">Server 3 (Honk Kong)</span>
                                        <span class="uk-text-small uk-text-muted">16 384 MB</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-head head_background" style="background-image: url('<?php echo $img_path; ?>/gallery/Image17.jpg')">
                            <div class="md-card-head-menu">
                                <i class="md-icon material-icons md-icon-light">&#xE5D5;</i>
                            </div>
                            <h3 class="md-card-head-text">
                                Some City
                            </h3>
                            <div class="md-card-head-subtext">
                                <i class="md-card-head-icon wi wi-day-sunny-overcast uk-margin-right"></i>
                                <span>14&deg;</span>
                            </div>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon">
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-day-sunny-overcast"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">22&deg; Mostly Sunny</span>
                                        <span class="uk-text-small uk-text-muted"><?php $moment = new Moment\Moment(); echo $moment->addDays(1)->format('j M'); $moment = new Moment\Moment(); echo ' (' . $moment->addDays(1)->format('l') . ')'; ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-cloudy"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">19&deg; Partly Cloudy</span>
                                        <span class="uk-text-small uk-text-muted"><?php $moment = new Moment\Moment(); echo $moment->addDays(2)->format('j M'); $moment = new Moment\Moment(); echo ' (' . $moment->addDays(2)->format('l') . ')'; ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-day-rain"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">16&deg; Rainy</span>
                                        <span class="uk-text-small uk-text-muted"><?php $moment = new Moment\Moment(); echo $moment->addDays(3)->format('j M'); $moment = new Moment\Moment(); echo ' (' . $moment->addDays(3)->format('l') . ')'; ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-day-sunny uk-text-warning"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">24&deg; Sunny</span>
                                        <span class="uk-text-small uk-text-muted"><?php $moment = new Moment\Moment(); echo $moment->addDays(3)->format('j M'); $moment = new Moment\Moment(); echo ' (' . $moment->addDays(3)->format('l') . ')'; ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-large-1-2">
                    <div class="md-card">
                        <div id="clndr_events" class="clndr-wrapper">
                            <script>
                                // calendar events
                                clndrEvents = [
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(7)->format('Y-m-d'); ?>', title: 'Doctor appointment', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(8)->format('Y-m-d'); ?>', title: 'John\'s Birthday', url: 'javascript:void(0)' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(8)->format('Y-m-d'); ?>', title: 'Party', url: 'javascript:void(0)', timeStart: '08:00', timeEnd: '08:30' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(12)->format('Y-m-d'); ?>', title: 'Meeting', url: 'javascript:void(0)', timeStart: '18:00', timeEnd: '18:20' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(17)->format('Y-m-d'); ?>', title: 'Work Out', url: 'javascript:void(0)', timeStart: '07:00', timeEnd: '08:00' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(17)->format('Y-m-d'); ?>', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '11:10', timeEnd: '11:45' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(22)->format('Y-m-d'); ?>', title: 'Meeting', url: 'javascript:void(0)', timeStart: '20:25', timeEnd: '20:50' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(25)->format('Y-m-d'); ?>', title: 'Haircut', url: 'javascript:void(0)' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(25)->format('Y-m-d'); ?>', title: 'Lunch with Katy', url: 'javascript:void(0)', timeStart: '08:45', timeEnd: '09:45' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(25)->format('Y-m-d'); ?>', title: 'Concept review', url: 'javascript:void(0)', timeStart: '15:00', timeEnd: '16:00' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(26)->format('Y-m-d'); ?>', title: 'Swimming Poll', url: 'javascript:void(0)', timeStart: '13:50', timeEnd: '14:20' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(28)->format('Y-m-d'); ?>', title: 'Team Meeting', url: 'javascript:void(0)', timeStart: '17:25', timeEnd: '18:15' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addMonths(1)->addDays(1)->format('Y-m-d'); ?>', title: 'Dinner with John', url: 'javascript:void(0)', timeStart: '16:25', timeEnd: '18:45' },
                                    { date: '<?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addMonths(1)->addDays(12)->format('Y-m-d'); ?>', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' }
                                ]
                            </script>
                            <script id="clndr_events_template" type="text/x-handlebars-template">
                                <div class="md-card-toolbar">
                                    <div class="md-card-toolbar-actions">
                                        <i class="md-icon clndr_add_event material-icons">&#xE145;</i>
                                        <i class="md-icon clndr_today material-icons">&#xE8DF;</i>
                                        <i class="md-icon clndr_previous material-icons">&#xE408;</i>
                                        <i class="md-icon clndr_next material-icons uk-margin-remove">&#xE409;</i>
                                    </div>
                                    <h3 class="md-card-toolbar-heading-text">
                                        {{ month }} {{ year }}
                                    </h3>
                                </div>
                                <div class="clndr_days">
                                    <div class="clndr_days_names">
                                        {{#each daysOfTheWeek}}
                                        <div class="day-header">{{ this }}</div>
                                        {{/each}}
                                    </div>
                                    <div class="clndr_days_grid">
                                        {{#each days}}
                                        <div class="{{ this.classes }}" {{#if this.id }} id="{{ this.id }}" {{/if}}>
                                            <span>{{ this.day }}</span>
                                        </div>
                                        {{/each}}
                                    </div>
                                </div>
                                <div class="clndr_events">
                                    <i class="material-icons clndr_events_close_button">&#xE5CD;</i>
                                    {{#each eventsThisMonth}}
                                    <div class="clndr_event" data-clndr-event="{{ dateFormat this.date format='YYYY-MM-DD' }}">
                                        <a href="{{ this.url }}">
                                            <span class="clndr_event_title">{{ this.title }}</span>
                                            <span class="clndr_event_more_info">
                                                {{~dateFormat this.date format='MMM Do'}}
                                                {{~#ifCond this.timeStart '||' this.timeEnd}} ({{/ifCond}}
                                                {{~#if this.timeStart }} {{~this.timeStart~}} {{/if}}
                                                {{~#ifCond this.timeStart '&&' this.timeEnd}} - {{/ifCond}}
                                                {{~#if this.timeEnd }} {{~this.timeEnd~}} {{/if}}
                                                {{~#ifCond this.timeStart '||' this.timeEnd}}){{/ifCond~}}
                                            </span>
                                        </a>
                                    </div>
                                    {{/each}}
                                </div>
                            </script>
                        </div>
                        <div class="uk-modal" id="modal_clndr_new_event">
                            <div class="uk-modal-dialog">
                                <div class="uk-modal-header">
                                    <h3 class="uk-modal-title">New Event</h3>
                                </div>
                                <div class="uk-margin-bottom">
                                    <label for="clndr_event_title_control">Event Title</label>
                                    <input type="text" class="md-input" id="clndr_event_title_control" />
                                </div>
                                <div class="uk-margin-medium-bottom">
                                    <label for="clndr_event_link_control">Event Link</label>
                                    <input type="text" class="md-input" id="clndr_event_link_control" />
                                </div>
                                <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-large-bottom" data-uk-grid-margin>
                                    <div>
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                            <label for="clndr_event_date_control">Event Date</label>
                                            <input class="md-input" type="text" id="clndr_event_date_control" data-uk-datepicker="{format:'YYYY-MM-DD', addClass: 'dropdown-modal', minDate: '<?php $moment = new Moment\Moment(); echo $moment->format('Y-m-d'); ?>' }">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                            <label for="clndr_event_start_control">Event Start</label>
                                            <input class="md-input" type="text" id="clndr_event_start_control" data-uk-timepicker>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                            <label for="clndr_event_end_control">Event End</label>
                                            <input class="md-input" type="text" id="clndr_event_end_control" data-uk-timepicker>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-modal-footer uk-text-right">
                                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="clndr_new_event_submit">Add Event</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-2">
                    <div class="md-card">
                        <div id="map_users_controls"></div>
                        <div id="map_users" class="gmap"></div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon gmap_list" id="map_users_list">
<?php
    $user_lat = [ '37.406267','37.379267','37.410267','37.397267','37.372267' ];
    $user_lon = [ '-122.06742','-122.02148','-122.11048','-122.084417','-122.090417' ];
    for($i=0;$i<5;$i++) {
    $user_name = $faker->name;
    $user_company = $faker->company;
?>
                                <li data-gmap-lat="<?php echo $user_lat[$i]; ?>"  data-gmap-lon="<?php echo $user_lon[$i]; ?>" data-gmap-user="<?php echo $user_name; ?>" data-gmap-user-company="<?php echo $user_company; ?>">
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_<?php if($i < 10) echo '0'; echo $i+1;?>_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $user_name; ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $user_company; ?></span>
                                    </div>
                                </li>
<?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- secondary sidebar -->
    <aside id="sidebar_secondary">
        <div class="sidebar_secondary_wrapper">
            <h4 class="heading_c uk-margin-bottom">Recent Activity</h4>

            <div class="timeline timeline_small">
                <div class="timeline_item">
                    <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                    <div class="timeline_date">
                        <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(8)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                    </div>
                    <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                    <div class="timeline_date">
                        <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(14)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                    </div>
                    <div class="timeline_content">Deleted post <a href="#"><strong><?php echo $faker->sentence(6); ?></strong></a></div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                    <div class="timeline_date">
                        <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(18)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                    </div>
                    <div class="timeline_content">
                        Added photo
                        <div class="timeline_content_addon">
                            <img src="<?php echo $img_path ?>/gallery/Image16.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                    <div class="timeline_date">
                        <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(20)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                    </div>
                    <div class="timeline_content">
                        New comment on post <a href="#"><strong><?php echo $faker->sentence(4); ?></strong></a>
                        <div class="timeline_content_addon">
                            <blockquote>
                                <?php echo $faker->sentence(10); ?>&hellip;
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                    <div class="timeline_date">
                        <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(28)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                    </div>
                    <div class="timeline_content">
                        Added to Friends
                        <div class="timeline_content_addon">
                            <ul class="md-list md-list-addon">
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->firstNameFemale;?> <?php echo $faker->lastName;?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </aside><!-- secondary sidebar end -->
