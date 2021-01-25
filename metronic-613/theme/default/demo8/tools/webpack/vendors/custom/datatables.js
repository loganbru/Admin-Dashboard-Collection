"use strict";

/**
 * Define the output of this file. The output of CSS and JS file will be auto detected.
 *
 * @output plugins/custom/datatables/datatables.bundle
 */

// datatables.net
window.$.fn.DataTable = require("datatables.net");
require("datatables.net-bs4");
require("datatables.net-autofill");
require("datatables.net-autofill-bs4");
require("datatables.net-buttons-bs4");
require("datatables.net-buttons/js/buttons.print.js");
require("datatables.net-buttons/js/buttons.html5.js");
require("datatables.net-buttons/js/buttons.flash.js");
require("datatables.net-buttons/js/buttons.colVis.js");
require("datatables.net-colreorder-bs4");
require("datatables.net-fixedcolumns-bs4");
require("datatables.net-fixedheader-bs4");
require("datatables.net-keytable-bs4");
require("datatables.net-responsive-bs4");
require("datatables.net-rowgroup-bs4");
require("datatables.net-rowreorder-bs4");
require("datatables.net-scroller-bs4");
require("datatables.net-select-bs4");

require("jszip/dist/jszip.min.js");
require("pdfmake/build/pdfmake.min.js");
require("pdfmake/build/vfs_fonts.js");

require("datatables.net-bs4/css/dataTables.bootstrap4.css");
require("datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css");
require("datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css");
require("datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css");
require("datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css");
require("datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css");
require("datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css");
require("datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css");
require("datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css");
require("datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css");
require("datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css");
require("datatables.net-select-bs4/css/select.bootstrap4.min.css");
