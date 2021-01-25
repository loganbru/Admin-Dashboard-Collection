"use strict";

/**
 * Define the output of this file. The output of CSS and JS file will be auto detected.
 *
 * @output plugins/custom/jstree/jstree.bundle
 * @images ../assets/media/plugins/jstree/32px.png
 */

// dependencies
window.$ = window.jQuery = require("jquery");
require("bootstrap/js/dist/tooltip");

// jstree
require("jstree");
require("jstree/dist/themes/default/style.css");
