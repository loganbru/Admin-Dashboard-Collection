var _require = require('preact'),
    h = _require.h;

module.exports = function (props) {
  return h("button", {
    type: "button",
    onclick: props.triggerSearchInput,
    class: "uppy-u-reset uppy-ProviderBrowser-userLogout"
  }, props.i18n('backToSearch'));
};