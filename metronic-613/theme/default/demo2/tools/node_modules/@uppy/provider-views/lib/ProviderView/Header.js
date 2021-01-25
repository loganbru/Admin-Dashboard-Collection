var User = require('./User');

var Breadcrumbs = require('../Breadcrumbs');

module.exports = function (props) {
  var components = [];

  if (props.showBreadcrumbs) {
    components.push(Breadcrumbs({
      getFolder: props.getFolder,
      directories: props.directories,
      breadcrumbsIcon: props.pluginIcon && props.pluginIcon(),
      title: props.title
    }));
  }

  components.push(User({
    logout: props.logout,
    username: props.username,
    i18n: props.i18n
  }));
  return components;
};