'use strict';

var _postcss = require('postcss');

var _lodash = require('lodash.merge');

var _lodash2 = _interopRequireDefault(_lodash);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var parse = function parse(css) {
  var ast = (0, _postcss.parse)(css);
  var result = {};

  ast.nodes.forEach(function (node) {
    if (node.type === 'rule') {
      (function () {
        var declarations = {};

        node.nodes.forEach(function (dcl) {
          if (dcl.type !== 'decl') {
            return;
          }
          declarations[dcl.prop] = dcl.value;
        });

        result = (0, _lodash2.default)(result, _defineProperty({}, node.selector, declarations));
      })();
    }
  });

  return result;
};

var toString = function toString(css) {
  var result = '';

  Object.keys(css).forEach(function (selector) {
    result = '' + result + selector + ' {\n';

    Object.keys(css[selector]).forEach(function (prop) {
      result = result + '  ' + prop + ': ' + css[selector][prop] + ';\n';
    });

    result = result + '}\n';
  });

  return result;
};

var addProp = function addProp(diff, selector, prop, value) {
  if (diff[selector]) {
    diff[selector][prop] = value;
  } else {
    diff[selector] = _defineProperty({}, prop, value);
  }

  return diff;
};

var cssDiff = function cssDiff(source, reversed) {
  var isStringified = false;

  try {
    source = JSON.parse(source);
    reversed = JSON.parse(reversed);
    isStringified = true;
  } catch (e) {}

  var sourceObject = parse(source);
  var reversedObject = parse(reversed);
  var diff = {};

  Object.keys(reversedObject).forEach(function (selector) {
    Object.keys(reversedObject[selector]).forEach(function (prop) {
      if (sourceObject[selector][prop]) {
        if (sourceObject[selector][prop] !== reversedObject[selector][prop]) {
          diff = addProp(diff, selector, prop, reversedObject[selector][prop]);
        }
      } else {
        diff = addProp(diff, selector, prop, reversedObject[selector][prop]);
      }
    });
  });

  diff = toString(diff);

  if (isStringified) {
    diff = JSON.stringify(diff);
  }

  return diff;
};

module.exports = cssDiff;
module.exports.parse = parse;
module.exports.toString = toString;