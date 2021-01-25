var _require = require('preact'),
    h = _require.h;

module.exports = function (props) {
  return [h("span", {
    class: "uppy-ProviderBrowser-user",
    key: "username"
  }, props.username), h("button", {
    type: "button",
    onclick: props.logout,
    class: "uppy-u-reset uppy-ProviderBrowser-userLogout",
    key: "logout"
  }, props.i18n('logOut'))];
};