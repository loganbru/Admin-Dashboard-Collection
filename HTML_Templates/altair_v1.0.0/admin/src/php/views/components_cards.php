<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                                <div class="md-card-dropdown" data-uk-dropdown>
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown uk-dropdown-flip">
                                        <ul class="uk-nav">
                                            <li><a href="#">Action 1</a></li>
                                            <li><a href="#">Action 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Heading
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <?php echo $faker->sentence(180); ?>
                            <div class="md-card-fullscreen-content">
                                <h4 class="heading_a uk-margin-bottom">Fullscreen content</h4>
                                <?php echo $faker->sentence(800); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-width-small-1-3" data-uk-grid-margin>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Lorem ipsum dolor sit amet
                                </h3>
                            </div>
                            <p class="truncate-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur, consequuntur deleniti dolor doloremque dolores fugit illum in incidunt laboriosam maxime nulla pariatur, quo rerum saepe sint ut veniam?</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Lorem ipsum dolor sit amet
                                </h3>
                            </div>
                            <p class="truncate-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur, consequuntur deleniti dolor doloremque dolores fugit illum in incidunt laboriosam maxime nulla pariatur, quo rerum saepe sint ut veniam?</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Lorem ipsum dolor sit amet
                                </h3>
                            </div>
                            <p class="truncate-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur, consequuntur deleniti dolor doloremque dolores fugit illum in incidunt laboriosam maxime nulla pariatur, quo rerum saepe sint ut veniam?</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
