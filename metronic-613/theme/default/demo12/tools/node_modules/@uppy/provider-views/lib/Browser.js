function _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

var classNames = require('classnames');

var Filter = require('./Filter');

var ItemList = require('./ItemList');

var FooterActions = require('./FooterActions');

var _require = require('preact'),
    h = _require.h;

var Browser = function Browser(props) {
  var currentSelection = props.currentSelection,
      folders = props.folders,
      files = props.files,
      uppyFiles = props.uppyFiles,
      filterItems = props.filterItems,
      filterInput = props.filterInput;
  var filteredFolders = folders;
  var filteredFiles = files;

  if (filterInput !== '') {
    filteredFolders = filterItems(folders);
    filteredFiles = filterItems(files);
  }

  var selected = currentSelection.length;
  return h("div", {
    class: classNames('uppy-ProviderBrowser', "uppy-ProviderBrowser-viewType--" + props.viewType)
  }, h("div", {
    class: "uppy-ProviderBrowser-header"
  }, h("div", {
    class: classNames('uppy-ProviderBrowser-headerBar', !props.showBreadcrumbs && 'uppy-ProviderBrowser-headerBar--simple')
  }, props.headerComponent)), props.showFilter && h(Filter, props), h(ItemList, {
    columns: [{
      name: 'Name',
      key: 'title'
    }],
    folders: filteredFolders,
    files: filteredFiles,
    sortByTitle: props.sortByTitle,
    sortByDate: props.sortByDate,
    isChecked: props.isChecked,
    handleFolderClick: props.getNextFolder,
    toggleCheckbox: props.toggleCheckbox,
    handleScroll: props.handleScroll,
    title: props.title,
    showTitles: props.showTitles,
    i18n: props.i18n,
    viewType: props.viewType,
    validateRestrictions: props.validateRestrictions,
    uppyFiles: uppyFiles,
    currentSelection: currentSelection
  }), selected > 0 && h(FooterActions, _extends({
    selected: selected
  }, props)));
};

module.exports = Browser;