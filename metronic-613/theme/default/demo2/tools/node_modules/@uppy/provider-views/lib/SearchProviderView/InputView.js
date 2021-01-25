var _require = require('preact'),
    h = _require.h;

module.exports = function (props) {
  var input;

  var handleKeyPress = function handleKeyPress(ev) {
    if (ev.keyCode === 13) {
      validateAndSearch();
    }
  };

  var validateAndSearch = function validateAndSearch() {
    if (input.value) {
      props.search(input.value);
    }
  };

  return h("div", {
    class: "uppy-SearchProvider"
  }, h("input", {
    class: "uppy-u-reset uppy-c-textInput uppy-SearchProvider-input",
    type: "text",
    "aria-label": props.i18n('enterTextToSearch'),
    placeholder: props.i18n('enterTextToSearch'),
    onkeyup: handleKeyPress,
    ref: function ref(input_) {
      input = input_;
    },
    "data-uppy-super-focusable": true
  }), h("button", {
    class: "uppy-u-reset uppy-c-btn uppy-c-btn-primary uppy-SearchProvider-searchButton",
    type: "button",
    onclick: validateAndSearch
  }, props.i18n('searchImages')));
};