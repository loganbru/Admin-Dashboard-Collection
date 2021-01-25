'use strict';

function _inheritsLoose(subClass, superClass) { subClass.prototype = Object.create(superClass.prototype); subClass.prototype.constructor = subClass; subClass.__proto__ = superClass; }

var RequestClient = require('./RequestClient');

var _getName = function _getName(id) {
  return id.split('-').map(function (s) {
    return s.charAt(0).toUpperCase() + s.slice(1);
  }).join(' ');
};

module.exports = /*#__PURE__*/function (_RequestClient) {
  _inheritsLoose(SearchProvider, _RequestClient);

  function SearchProvider(uppy, opts) {
    var _this;

    _this = _RequestClient.call(this, uppy, opts) || this;
    _this.provider = opts.provider;
    _this.id = _this.provider;
    _this.name = _this.opts.name || _getName(_this.id);
    _this.pluginId = _this.opts.pluginId;
    return _this;
  }

  var _proto = SearchProvider.prototype;

  _proto.fileUrl = function fileUrl(id) {
    return this.hostname + "/search/" + this.id + "/get/" + id;
  };

  _proto.search = function search(text, queries) {
    queries = queries ? "&" + queries : '';
    return this.get("search/" + this.id + "/list?q=" + encodeURIComponent(text) + queries);
  };

  return SearchProvider;
}(RequestClient);