"use strict";

/**
 * Define the output of this file. The output of CSS and JS file will be auto detected.
 *
 * @output plugins/custom/jquery-ui/jquery-ui.bundle
 */

// dependencies
window.jQuery = window.$ = require("jquery");
require("bootstrap/js/dist/tooltip");

// jquery ui
require("jquery-ui");
require("jquery-ui/ui/widgets/sortable");
require("jquery-ui/ui/disable-selection");

require("jquery-ui/themes/base/all.css");
