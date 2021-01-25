    <!-- main sidebar -->
    <aside id="sidebar_main">
        <a href="#" class="uk-close sidebar_main_close_button"></a>
        <div class="sidebar_main_header">
            <div class="sidebar_logo"><a href="index.html"><img src="assets/img/logo_main.png" alt="" height="15" width="71"/></a></div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
        <div class="menu_section">
            <ul>
                <li<?php if($sPage == "index") { echo ' class="act_section"'; }; ?>>
                    <a href="index.html">
                        <span class="menu_icon uk-icon-th-large"></span>
                        Dashboard
                    </a>
                </li>
                <li<?php if($sPage == "page_mailbox") { echo ' class="act_section"'; }; ?>>
                    <a href="page_mailbox.html">
                        <span class="menu_icon uk-icon-envelope-o"></span>
                        Mailbox
                    </a>
                </li>
                <li<?php if($sPage == "page_invoices") { echo ' class="act_section"'; }; ?>>
                    <a href="page_invoices.html">
                        <span class="menu_icon uk-icon-usd"></span>
                        Invoices
                    </a>
                </li>
                <li<?php if($sPage == "page_snippets") { echo ' class="act_section"'; }; ?>>
                    <a href="page_snippets.html">
                        <span class="menu_icon uk-icon-code"></span>
                        Snippets
                    </a>
                </li>
                <li<?php if($sPage == "page_user_profile") { echo ' class="act_section"'; }; ?>>
                    <a href="page_user_profile.html">
                        <span class="menu_icon uk-icon-user"></span>
                        User Profile
                    </a>
                </li>
                <li<?php if($sPage == "forms") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon uk-icon-list-alt"></span>
                        Forms
                    </a>
                    <ul>
                        <li<?php if($sPage == "forms_regular") { echo ' class="act_item"'; }; ?>><a href="forms_regular.html">Regular Elements</a></li>
                        <li<?php if($sPage == "forms_advanced") { echo ' class="act_item"'; }; ?>><a href="forms_advanced.html">Advanced Elements</a></li>
                        <li<?php if($sPage == "forms_file_upload") { echo ' class="act_item"'; }; ?>><a href="forms_file_upload.html">File Upload</a></li>
                        <li<?php if($sPage == "forms_validation") { echo ' class="act_item"'; }; ?>><a href="forms_validation.html">Validation</a></li>
                    </ul>
                </li>
                <?php $kendoui_subpages = array('kendoui_autocomplete','kendoui_calendar','kendoui_colorpicker','kendoui_combobox')?>
                <li<?php if(in_array($sPage, $kendoui_subpages)) echo ' class="act_section"'; ?>>
                    <a href="#">
                        <span class="menu_icon uk-icon-flask"></span>
                        Kendo UI Widgets
                    </a>
                    <ul>
                        <li<?php if($sPage == "kendoui_autocomplete") { echo ' class="act_item"'; }; ?>><a href="kendoui_autocomplete.html">Autocomplete</a></li>
                        <li<?php if($sPage == "kendoui_calendar") { echo ' class="act_item"'; }; ?>><a href="kendoui_calendar.html">Calendar</a></li>
                        <li<?php if($sPage == "kendoui_colorpicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_colorpicker.html">ColorPicker</a></li>
                        <li<?php if($sPage == "kendoui_combobox") { echo ' class="act_item"'; }; ?>><a href="kendoui_combobox.html">ComboBox</a></li>
                        <li<?php if($sPage == "kendoui_datepicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_datepicker.html">DatePicker</a></li>
                        <li<?php if($sPage == "kendoui_datetimepicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_datetimepicker.html">DateTimePicker</a></li>
                        <li<?php if($sPage == "kendoui_dropdown_list") { echo ' class="act_item"'; }; ?>><a href="kendoui_dropdown_list.html">DropDownList</a></li>
                        <li<?php if($sPage == "kendoui_masked_input") { echo ' class="act_item"'; }; ?>><a href="kendoui_masked_input.html">Masked Input</a></li>
                        <li<?php if($sPage == "kendoui_menu") { echo ' class="act_item"'; }; ?>><a href="kendoui_menu.html">Menu</a></li>
                        <li<?php if($sPage == "kendoui_multiselect") { echo ' class="act_item"'; }; ?>><a href="kendoui_multiselect.html">MultiSelect</a></li>
                        <li<?php if($sPage == "kendoui_numeric_textbox") { echo ' class="act_item"'; }; ?>><a href="kendoui_numeric_textbox.html">Numeric TextBox</a></li>
                        <li<?php if($sPage == "kendoui_panelbar") { echo ' class="act_item"'; }; ?>><a href="kendoui_panelbar.html">PanelBar</a></li>
                        <li<?php if($sPage == "kendoui_timepicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_timepicker.html">TimePicker</a></li>
                        <li<?php if($sPage == "kendoui_toolbar") { echo ' class="act_item"'; }; ?>><a href="kendoui_toolbar.html">Toolbar</a></li>
                        <li<?php if($sPage == "kendoui_window") { echo ' class="act_item"'; }; ?>><a href="kendoui_window.html">Window</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-newspaper-o"></span>
                        Components
                    </a>
                    <ul>
                        <li<?php if($sPage == "components_accordion") { echo ' class="act_item"'; }; ?>><a href="components_accordion.html">Accordions</a></li>
                        <li<?php if($sPage == "components_buttons") { echo ' class="act_item"'; }; ?>><a href="components_buttons.html">Buttons</a></li>
                        <li<?php if($sPage == "components_cards") { echo ' class="act_item"'; }; ?>><a href="components_cards.html">Cards</a></li>
                        <li<?php if($sPage == "components_common") { echo ' class="act_item"'; }; ?>><a href="components_common.html">Common</a></li>
                        <li<?php if($sPage == "components_dropdowns") { echo ' class="act_item"'; }; ?>><a href="components_dropdowns.html">Dropdowns</a></li>
                        <li<?php if($sPage == "components_dynamic_grid") { echo ' class="act_item"'; }; ?>><a href="components_dynamic_grid.html">Dynamic Grid</a></li>
                        <li<?php if($sPage == "components_grid") { echo ' class="act_item"'; }; ?>><a href="components_grid.html">Grid</a></li>
                        <li<?php if($sPage == "components_icons") { echo ' class="act_item"'; }; ?>><a href="components_icons.html">Icons</a></li>
                        <li<?php if($sPage == "components_modal") { echo ' class="act_item"'; }; ?>><a href="components_modal.html">Lightbox/Modal</a></li>
                        <li<?php if($sPage == "components_lists") { echo ' class="act_item"'; }; ?>><a href="components_lists.html">Lists</a></li>
                        <li<?php if($sPage == "components_nestable") { echo ' class="act_item"'; }; ?>><a href="components_nestable.html">Nestable</a></li>
                        <li<?php if($sPage == "components_notifications") { echo ' class="act_item"'; }; ?>><a href="components_notifications.html">Notifications</a></li>
                        <li<?php if($sPage == "components_preloaders") { echo ' class="act_item"'; }; ?>><a href="components_preloaders.html">Preloaders</a></li>
                        <li<?php if($sPage == "components_sortable") { echo ' class="act_item"'; }; ?>><a href="components_sortable.html">Sortable</a></li>
                        <li<?php if($sPage == "components_tables") { echo ' class="act_item"'; }; ?>><a href="components_tables.html">Tables</a></li>
                        <li<?php if($sPage == "components_tooltips") { echo ' class="act_item"'; }; ?>><a href="components_tooltips.html">Tooltips</a></li>
                        <li<?php if($sPage == "components_tabs") { echo ' class="act_item"'; }; ?>><a href="components_tabs.html">Tabs</a></li>
                    </ul>
                </li>
                <li <?php if($sPage == "e-commerce") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon uk-icon-shopping-cart"></span>
                        E-commerce
                    </a>
                    <ul>
                        <li<?php if($sPage == "ecommerce_product_details") { echo ' class="act_item"'; }; ?>><a href="ecommerce_product_details.html">Product Details</a></li>
                        <li<?php if($sPage == "ecommerce_product_edit") { echo ' class="act_item"'; }; ?>><a href="ecommerce_product_edit.html">Product Edit</a></li>
                        <li<?php if($sPage == "ecommerce_products_grid") { echo ' class="act_item"'; }; ?>><a href="ecommerce_products_grid.html">Products Grid</a></li>
                        <li<?php if($sPage == "ecommerce_products_list") { echo ' class="act_item"'; }; ?>><a href="ecommerce_products_list.html">Products List</a></li>
                    </ul>
                </li>
                <li <?php if($sPage == "plugins") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon uk-icon-plug"></span>
                        Plugins
                    </a>
                    <ul>
                        <li<?php if($sPage == "plugins_calendar") { echo ' class="act_item"'; }; ?>><a href="plugins_calendar.html">Calendar</a></li>
                        <li<?php if($sPage == "plugins_charts") { echo ' class="act_item"'; }; ?>><a href="plugins_charts.html">Charts</a></li>
                        <li<?php if($sPage == "plugins_datatables") { echo ' class="act_item"'; }; ?>><a href="plugins_datatables.html">Datatables</a></li>
                        <li<?php if($sPage == "plugins_gantt_chart") { echo ' class="act_item"'; }; ?>><a href="plugins_gantt_chart.html">Gantt Chart</a></li>
                        <li<?php if($sPage == "plugins_google_maps") { echo ' class="act_item"'; }; ?>><a href="plugins_google_maps.html">Google Maps</a></li>
                        <li<?php if($sPage == "plugins_vector_maps") { echo ' class="act_item"'; }; ?>><a href="plugins_vector_maps.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li <?php if($sPage == "pages") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon uk-icon-folder-o"></span>
                        Pages
                    </a>
                    <ul>
                        <li<?php if($sPage == "page_blank") { echo ' class="act_item"'; }; ?>><a href="page_blank.html">Blank</a></li>
                        <li<?php if($sPage == "page_contact_list") { echo ' class="act_item"'; }; ?>><a href="page_contact_list.html">Contact List</a></li>
                        <li><a href="error_404.html">Error 404</a></li>
                        <li><a href="error_500.html">Error 500</a></li>
                        <li<?php if($sPage == "page_help") { echo ' class="act_item"'; }; ?>><a href="page_help.html">Help/Faq</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li<?php if($sPage == "page_notes") { echo ' class="act_item"'; }; ?>><a href="page_notes.html"> Notes </a> </li>
                        <li<?php if($sPage == "page_settings") { echo ' class="act_item"'; }; ?>><a href="page_settings.html">Settings</a></li>
                        <li<?php if($sPage == "page_user_edit") { echo ' class="act_item"'; }; ?>><a href="page_user_edit.html">User edit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->