/*!
  * List Filter v0.0.1 (https://iqbalfn.github.io/link-filter/)
  * Copyright 2019 Iqbal Fauzi
  */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('jquery')) :
  typeof define === 'function' && define.amd ? define(['exports', 'jquery'], factory) :
  (global = global || self, factory(global['link-filter'] = {}, global.jQuery));
}(this, function (exports, $) { 'use strict';

  $ = $ && $.hasOwnProperty('default') ? $['default'] : $;

  function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
  }

  function _defineProperty(obj, key, value) {
    if (key in obj) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
    } else {
      obj[key] = value;
    }

    return obj;
  }

  function _objectSpread(target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i] != null ? arguments[i] : {};
      var ownKeys = Object.keys(source);

      if (typeof Object.getOwnPropertySymbols === 'function') {
        ownKeys = ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function (sym) {
          return Object.getOwnPropertyDescriptor(source, sym).enumerable;
        }));
      }

      ownKeys.forEach(function (key) {
        _defineProperty(target, key, source[key]);
      });
    }

    return target;
  }

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.3.1): util.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Private TransitionEnd Helpers
   * ------------------------------------------------------------------------
   */

  var TRANSITION_END = 'transitionend';
  var MAX_UID = 1000000;
  var MILLISECONDS_MULTIPLIER = 1000; // Shoutout AngusCroll (https://goo.gl/pxwQGp)

  function toType(obj) {
    return {}.toString.call(obj).match(/\s([a-z]+)/i)[1].toLowerCase();
  }

  function getSpecialTransitionEndEvent() {
    return {
      bindType: TRANSITION_END,
      delegateType: TRANSITION_END,
      handle: function handle(event) {
        if ($(event.target).is(this)) {
          return event.handleObj.handler.apply(this, arguments); // eslint-disable-line prefer-rest-params
        }

        return undefined; // eslint-disable-line no-undefined
      }
    };
  }

  function transitionEndEmulator(duration) {
    var _this = this;

    var called = false;
    $(this).one(Util.TRANSITION_END, function () {
      called = true;
    });
    setTimeout(function () {
      if (!called) {
        Util.triggerTransitionEnd(_this);
      }
    }, duration);
    return this;
  }

  function setTransitionEndSupport() {
    $.fn.emulateTransitionEnd = transitionEndEmulator;
    $.event.special[Util.TRANSITION_END] = getSpecialTransitionEndEvent();
  }
  /**
   * --------------------------------------------------------------------------
   * Public Util Api
   * --------------------------------------------------------------------------
   */


  var Util = {
    TRANSITION_END: 'bsTransitionEnd',
    getUID: function getUID(prefix) {
      do {
        // eslint-disable-next-line no-bitwise
        prefix += ~~(Math.random() * MAX_UID); // "~~" acts like a faster Math.floor() here
      } while (document.getElementById(prefix));

      return prefix;
    },
    getSelectorFromElement: function getSelectorFromElement(element) {
      var selector = element.getAttribute('data-target');

      if (!selector || selector === '#') {
        var hrefAttr = element.getAttribute('href');
        selector = hrefAttr && hrefAttr !== '#' ? hrefAttr.trim() : '';
      }

      try {
        return document.querySelector(selector) ? selector : null;
      } catch (err) {
        return null;
      }
    },
    getTransitionDurationFromElement: function getTransitionDurationFromElement(element) {
      if (!element) {
        return 0;
      } // Get transition-duration of the element


      var transitionDuration = $(element).css('transition-duration');
      var transitionDelay = $(element).css('transition-delay');
      var floatTransitionDuration = parseFloat(transitionDuration);
      var floatTransitionDelay = parseFloat(transitionDelay); // Return 0 if element or transition duration is not found

      if (!floatTransitionDuration && !floatTransitionDelay) {
        return 0;
      } // If multiple durations are defined, take the first


      transitionDuration = transitionDuration.split(',')[0];
      transitionDelay = transitionDelay.split(',')[0];
      return (parseFloat(transitionDuration) + parseFloat(transitionDelay)) * MILLISECONDS_MULTIPLIER;
    },
    reflow: function reflow(element) {
      return element.offsetHeight;
    },
    triggerTransitionEnd: function triggerTransitionEnd(element) {
      $(element).trigger(TRANSITION_END);
    },
    // TODO: Remove in v5
    supportsTransitionEnd: function supportsTransitionEnd() {
      return Boolean(TRANSITION_END);
    },
    isElement: function isElement(obj) {
      return (obj[0] || obj).nodeType;
    },
    typeCheckConfig: function typeCheckConfig(componentName, config, configTypes) {
      for (var property in configTypes) {
        if (Object.prototype.hasOwnProperty.call(configTypes, property)) {
          var expectedTypes = configTypes[property];
          var value = config[property];
          var valueType = value && Util.isElement(value) ? 'element' : toType(value);

          if (!new RegExp(expectedTypes).test(valueType)) {
            throw new Error(componentName.toUpperCase() + ": " + ("Option \"" + property + "\" provided type \"" + valueType + "\" ") + ("but expected type \"" + expectedTypes + "\"."));
          }
        }
      }
    },
    findShadowRoot: function findShadowRoot(element) {
      if (!document.documentElement.attachShadow) {
        return null;
      } // Can find the shadow root otherwise it'll return the document


      if (typeof element.getRootNode === 'function') {
        var root = element.getRootNode();
        return root instanceof ShadowRoot ? root : null;
      }

      if (element instanceof ShadowRoot) {
        return element;
      } // when we don't find a shadow root


      if (!element.parentNode) {
        return null;
      }

      return Util.findShadowRoot(element.parentNode);
    }
  };
  setTransitionEndSupport();

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME = 'linkfilter';
  var VERSION = '0.0.1';
  var DATA_KEY = 'bs.linkfilter';
  var EVENT_KEY = "." + DATA_KEY;
  var DATA_API_KEY = '.data-api';
  var JQUERY_NO_CONFLICT = $.fn[NAME];
  var KEY_UP = 38;
  var KEY_DOWN = 40;
  var KEY_ENTER = 13; // https://stackoverflow.com/questions/3446170/escape-string-for-use-in-javascript-regex

  var RE_KEYS = ["-", "[", "]", "/", "{", "}", "(", ")", "*", "+", "?", ".", "\\", "^", "$", "|"].join('\\');
  var RE_ESCAPE = RegExp('[' + RE_KEYS + ']', 'g');
  var Default = {
    active: 'active',
    delay: 300,
    input: 'string',
    empty: false
  };
  var DefaultType = {
    active: 'string',
    delay: 'number',
    input: 'string',
    empty: 'boolean'
  };
  var Event = {
    FINDING: "finding" + EVENT_KEY + DATA_API_KEY,
    FOUND: "found" + EVENT_KEY + DATA_API_KEY,
    EMPTY: "empty" + EVENT_KEY + DATA_API_KEY,
    KEYDOWN: "keydown" + EVENT_KEY + DATA_API_KEY
  };
  var ClassName = {
    NOT_MATCH: 'linkfilter-not-match'
    /**
     * ------------------------------------------------------------------------
     * Class Definition
     * ------------------------------------------------------------------------
     */

  };

  var LinkFilter =
  /*#__PURE__*/
  function () {
    function LinkFilter(element, config) {
      this._config = this._getConfig(config);
      this._element = element;
      this._input = document.querySelector(config.input);
      this._timer = null;
      this._lastQuery = null;

      this._addElementListener();

      this._findItem(this._input);
    } // Getters


    var _proto = LinkFilter.prototype;

    // Public
    _proto.dispose = function dispose() {
      [this._input].forEach(function (htmlElement) {
        return $(htmlElement).off(EVENT_KEY);
      });
      $.removeData(this._element, DATA_KEY);
      this._config = null;
      this._element = null;
      this._timer = null;
      this._input = null;
    } // Private
    ;

    _proto._addElementListener = function _addElementListener() {
      var _this = this;

      $(this._input).on(Event.KEYDOWN, function (e) {
        if (e.keyCode === KEY_ENTER) return _this._clickActive(e);
        if (e.keyCode === KEY_DOWN) return _this._focusNextItem(e);
        if (e.keyCode === KEY_UP) return _this._focusPrevItem(e);
        if (_this._timer) clearTimeout(_this._timer);
        _this._timer = setTimeout(function (el) {
          return _this._findItem(el);
        }, _this._config.delay, _this._input);
      });
    };

    _proto._clickActive = function _clickActive(e) {
      var el = this._element.querySelector("." + this._config.active);

      if (!el) return;
      if (el.tagName != 'A') el = el.querySelector('a');
      if (el) el.click();
      e.preventDefault();
    };

    _proto._focusNextItem = function _focusNextItem(e) {
      var next, current;

      for (var i = this._element.children.length - 1; i >= 0; i--) {
        var child = this._element.children[i];
        if (child.classList.contains(ClassName.NOT_MATCH)) continue;

        if (child.classList.contains(this._config.active)) {
          current = child;
          if (next) break;
          continue;
        }

        next = child;
      }

      if (next) {
        if (current) current.classList.remove(this._config.active);
        next.classList.add(this._config.active);
      }

      e.preventDefault();
    };

    _proto._focusPrevItem = function _focusPrevItem(e) {
      var prev, current;

      for (var i = 0; i < this._element.children.length; i++) {
        var child = this._element.children[i];
        if (child.classList.contains(ClassName.NOT_MATCH)) continue;

        if (child.classList.contains(this._config.active)) {
          current = child;
          if (prev) break;
          continue;
        }

        prev = child;
      }

      if (prev) {
        if (current) current.classList.remove(this._config.active);
        prev.classList.add(this._config.active);
      }

      e.preventDefault();
    };

    _proto._findItem = function _findItem(relatedTarget) {
      var _this2 = this;

      var findingEvent = $.Event(Event.FINDING, {
        relatedTarget: relatedTarget
      });
      $(this._element).trigger(findingEvent);

      var val = this._input.value.trim().replace(RE_ESCAPE, "\\$&");

      var re = new RegExp(val, 'i');
      var found = 0;
      var firstItem;
      var activeFound;
      if (val === this._lastQuery) return;
      this._lastQuery = val;
      $(this._element).children().each(function (i, e) {
        var eText = e.innerText;
        if ('text' in e.dataset) eText = e.dataset.text;
        var show = false;

        if (!val) {
          show = !_this2._config.empty;
        } else if (re.test(eText)) {
          show = true;
        }

        if (show) {
          found++;
          if (!firstItem) firstItem = e;
          e.classList.remove(ClassName.NOT_MATCH);
          e.style.removeProperty('display');
          if (e.classList.contains(_this2._config.active)) activeFound = true;
        } else {
          e.style.display = 'none';
          e.classList.add(ClassName.NOT_MATCH);
          if (e.classList.contains(_this2._config.active)) e.classList.remove(_this2._config.active);
        }
      });
      var finalEvent;

      if (found) {
        if (!activeFound && found === 1) firstItem.classList.add(this._config.active);
        finalEvent = $.Event(Event.FOUND, {
          relatedTarget: relatedTarget
        });
      } else {
        finalEvent = $.Event(Event.EMPTY, {
          relatedTarget: relatedTarget
        });
      }

      $(this._element).trigger(finalEvent);
    };

    _proto._getConfig = function _getConfig(config) {
      config = _objectSpread({}, Default, config);
      Util.typeCheckConfig(NAME, config, DefaultType);
      return config;
    } // Static
    ;

    LinkFilter._jQueryInterface = function _jQueryInterface(config, relatedTarget) {
      return this.each(function () {
        var data = $(this).data(DATA_KEY);

        var _config = _objectSpread({}, Default, $(this).data(), typeof config === 'object' && config ? config : {});

        if (!data) {
          data = new LinkFilter(this, _config);
          $(this).data(DATA_KEY, data);
        }
      });
    };

    _createClass(LinkFilter, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default;
      }
    }]);

    return LinkFilter;
  }();
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */


  $.fn[NAME] = LinkFilter._jQueryInterface;
  $.fn[NAME].Constructor = LinkFilter;

  $.fn[NAME].noConflict = function () {
    $.fn[NAME] = JQUERY_NO_CONFLICT;
    return LinkFilter._jQueryInterface;
  };

  exports.LinkFilter = LinkFilter;

  Object.defineProperty(exports, '__esModule', { value: true });

}));
//# sourceMappingURL=link-filter.js.map
