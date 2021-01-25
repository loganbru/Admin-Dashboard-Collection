    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown="{mode:'click'}" class="uk-hidden-small">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE0BE;</i><span class="uk-badge">12</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge uk-dropdown-flip uk-dropdown-scrollable">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-cyan"><?php echo $letters[array_rand($letters)]; echo $letters[array_rand($letters)]; ?></span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html"><?php echo $faker->sentence(2); ?></a></span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html"><?php echo $faker->sentence(2); ?></a></span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <span class="md-user-letters md-bg-light-green"><?php echo $letters[array_rand($letters)]; echo $letters[array_rand($letters)]; ?></span>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html"><?php echo $faker->sentence(2); ?></a></span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html"><?php echo $faker->sentence(2); ?></a></span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><a href="pages_mailbox.html"><?php echo $faker->sentence(2); ?></a></span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary md-btn-block js-uk-prevent uk-margin-small-top">Show All</a>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">4</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge uk-dropdown-flip uk-dropdown-scrollable">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->sentence(2); ?></span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(6); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->sentence(2); ?></span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(6); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->sentence(2); ?></span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(6); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->sentence(2); ?></span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(6); ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="page_user_profile.html">My profile</a></li>
                                    <li><a href="page_settings.html">Settings</a></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
            </form>
        </div>
    </header><!-- main header end -->