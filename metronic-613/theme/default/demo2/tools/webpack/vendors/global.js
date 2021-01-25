"use strict";

/**
 * Define the output of this file. The output of CSS and JS file will be auto detected.
 *
 * @output plugins/global/plugins.bundle
 */



window.jQuery = window.$ = require("jquery");
require("bootstrap");
require("morris.js");
require("block-ui");
require("autosize");
require("clipboard");
window.moment = require("moment");
window.Sticky = require("sticky-js");
window.Chart = require("chart.js");
window.Raphael = require("raphael");
window.Cookies = require("js-cookie");
window.Popper = require("popper.js");
require("jquery-form");

// toastr
require("toastr/build/toastr.css");
window.toastr = require("toastr");

// tooltips
import Tooltip from "tooltip.js";

window.Tooltip = Tooltip;

// perfect-scrollbar
require("perfect-scrollbar/css/perfect-scrollbar.css");
window.PerfectScrollbar = require("perfect-scrollbar/dist/perfect-scrollbar");

// owl.carousel
require("owl.carousel/dist/assets/owl.carousel.css");
require("owl.carousel/dist/assets/owl.theme.default.css");
require("owl.carousel");

// daterangepicker
require("bootstrap-daterangepicker/daterangepicker.css");
require("bootstrap-daterangepicker");

// bootstrap-select
require("bootstrap-select/dist/css/bootstrap-select.css");
require("bootstrap-select");

// bootstrap-session-timeout
require("../../../src/assets/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.js");

// jquery-idletimer
require("../../../src/assets/plugins/jquery-idletimer/idle-timer.js");

// bootstrap-switch
require("bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css");
require("bootstrap-switch");
require("../../../src/assets/js/global/integration/plugins/bootstrap-switch.init.js");

// sweetalert2
require("sweetalert2/dist/sweetalert2.css");
import swal from "sweetalert2/dist/sweetalert2";
window.swal = swal;
require("es6-promise-polyfill/promise.min.js");
require("../../../src/assets/js/global/integration/plugins/sweetalert2.init");

// bootstrap-notify
require("bootstrap-notify");
require("../../../src/assets/js/global/integration/plugins/bootstrap-notify.init.js");

// bootstrap-datepicker
require("bootstrap-datepicker/dist/css/bootstrap-datepicker3.css");
require("bootstrap-datepicker");
require("../../../src/assets/js/global/integration/plugins/bootstrap-datepicker.init");

// bootstrap-datetime-picker
require("bootstrap-datetime-picker/css/bootstrap-datetimepicker.css");
require("bootstrap-datetime-picker");

// select2
require("select2/dist/css/select2.css");
require("select2");

// bootstrap-timepicker
require("bootstrap-timepicker/css/bootstrap-timepicker.css");
require("bootstrap-timepicker");
require("../../../src/assets/js/global/integration/plugins/bootstrap-timepicker.init");

// Tagify
require("@yaireo/tagify/dist/tagify.css");
window.Tagify = require("@yaireo/tagify/dist/tagify");
require("@yaireo/tagify/dist/tagify.polyfills.min");

// typeahead
window.Bloodhound = require("typeahead.js");
window.Handlebars = require("handlebars/dist/handlebars.js");

// dropzone
require("dropzone/dist/dropzone.css");
window.Dropzone = require("dropzone");
require("../../../src/assets/js/global/integration/plugins/dropzone.init");

// ClipboardJS
window.ClipboardJS = require("clipboard");

// autosize
window.autosize = require("autosize");

// summernote
require("summernote/dist/summernote.css");
require("summernote");

// quill
require("quill/dist/quill.snow.css");
window.Quill = require("quill");

// inputmask
require("inputmask/dist/jquery.inputmask.bundle");
require("inputmask/dist/inputmask/inputmask.date.extensions");
require("inputmask/dist/inputmask/inputmask.numeric.extensions");

// ion-rangeslider
require("ion-rangeslider/css/ion.rangeSlider.css");
require("ion-rangeslider");

// jquery.repeater
require("jquery.repeater");

// nouislider
require("nouislider/distribute/nouislider.css");
window.noUiSlider = require("nouislider");

// wnumb
window.wNumb = require("wnumb");

// jquery-validation
require("jquery-validation");
require("jquery-validation/dist/additional-methods.js");
require("../../../src/assets/js/global/integration/plugins/jquery-validation.init");

// bootstrap-multiselectsplitter
require("../../../src/assets/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js");

// bootstrap-maxlength
require("bootstrap-maxlength");

// bootstrap-touchspin
require("bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css");
require("bootstrap-touchspin");

// bootstrap-markdown
require("bootstrap-markdown/css/bootstrap-markdown.min.css");
require("bootstrap-markdown/js/bootstrap-markdown");
require("../../../src/assets/js/global/integration/plugins/bootstrap-markdown.init");

// animate.css
require("animate.css/animate.css");

// dual-listbox
import DualListbox from "dual-listbox";
window.DualListbox = DualListbox;
require("dual-listbox/dist/dual-listbox.css");

// fonts
require("../../../src/assets/plugins/line-awesome/css/line-awesome.css");
require("../../../src/assets/plugins/flaticon/flaticon.css");
require("../../../src/assets/plugins/flaticon2/flaticon.css");
require("@fortawesome/fontawesome-free/css/all.min.css");
require("socicon");
