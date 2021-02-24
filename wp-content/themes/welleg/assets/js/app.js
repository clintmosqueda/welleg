/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_hack__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/hack */ "./src/js/components/hack.js");
/* harmony import */ var _components_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/router */ "./src/js/components/router.js");
/* harmony import */ var _controllers_home_controller__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./controllers/home-controller */ "./src/js/controllers/home-controller.js");
if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
} //import 'intersection-observer';





new _components_hack__WEBPACK_IMPORTED_MODULE_0__.default();
var routes = [{
  id: 'home',
  controller: _controllers_home_controller__WEBPACK_IMPORTED_MODULE_2__.default
}];
var router = new _components_router__WEBPACK_IMPORTED_MODULE_1__.default(routes);
router.route();

/***/ }),

/***/ "./src/js/components/hack.js":
/*!***********************************!*\
  !*** ./src/js/components/hack.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Hack)
/* harmony export */ });
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Hack = /*#__PURE__*/function () {
  function Hack() {
    _classCallCheck(this, Hack);

    this.init();
  }

  _createClass(Hack, [{
    key: "init",
    value: function init() {
      var _$body$classList;

      var $body = document.querySelector('html'),
          userAgent = navigator.userAgent;
      var classBrowser = null,
          classOS = null;

      function getBrowser() {
        var browser = null;

        if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) !== -1) {
          browser = 'is-opera';
        } else if (navigator.userAgent.indexOf("Edge") >= 0) {
          browser = 'is-edge';
        } else if (navigator.userAgent.indexOf("Chrome") !== -1) {
          browser = 'is-chrome';
        } else if (navigator.userAgent.indexOf("Safari") !== -1) {
          browser = 'is-safari';
        } else if (navigator.userAgent.indexOf("Firefox") !== -1) {
          browser = 'is-firefox';
        } else if (navigator.userAgent.indexOf("MSIE") !== -1 || !!document.documentMode === true) {
          browser = 'is-ie';
        }

        return browser;
      }

      function getOS() {
        var platform = window.navigator.platform,
            macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
            windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
            iosPlatforms = ['iPhone', 'iPad', 'iPod'];
        var os = [],
            ratio = window.devicePixelRatio || 1,
            screen = {
          width: window.screen.width * ratio,
          height: window.screen.height * ratio
        };

        if (macosPlatforms.indexOf(platform) !== -1) {
          os = ['is-mac'];
        } else if (iosPlatforms.indexOf(platform) !== -1) {
          os = ['is-ios'];

          if (screen.width === 1125 && screen.height === 2436) {
            //iphonex screensize
            os.push('is-iphonex');
          }
        } else if (windowsPlatforms.indexOf(platform) !== -1) {
          os = ['is-windows'];
        } else if (/Android/.test(userAgent)) {
          os = ['is-android'];
        } else if (!os && /Linux/.test(platform)) {
          os = ['is-linux'];
        }

        return os;
      }

      classOS = getOS();
      classBrowser = getBrowser();
      $body.classList.add(classBrowser);

      (_$body$classList = $body.classList).add.apply(_$body$classList, _toConsumableArray(classOS));
    }
  }]);

  return Hack;
}();



/***/ }),

/***/ "./src/js/components/header-nav.js":
/*!*****************************************!*\
  !*** ./src/js/components/header-nav.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ HeaderNav)
/* harmony export */ });
/* harmony import */ var _constants_index__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../constants/index */ "./src/js/constants/index.js");
/* harmony import */ var _constants_index__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_constants_index__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scroll_able_lock__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scroll-able-lock */ "./src/js/components/scroll-able-lock.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }




var HeaderNav = /*#__PURE__*/function () {
  function HeaderNav(target, parent, link) {
    _classCallCheck(this, HeaderNav);

    this.target = document.querySelector(target);
    this.parent = document.querySelector(parent);
    this.link = document.querySelectorAll(link);
    this.init();
  }

  _createClass(HeaderNav, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.target.addEventListener('click', function () {
        _this.target.classList.toggle((_constants_index__WEBPACK_IMPORTED_MODULE_0___default().OPEN_CLASS));

        _this.parent.classList.toggle((_constants_index__WEBPACK_IMPORTED_MODULE_0___default().OPEN_CLASS));

        if (_this.parent.classList.contains((_constants_index__WEBPACK_IMPORTED_MODULE_0___default().OPEN_CLASS))) {
          (0,_scroll_able_lock__WEBPACK_IMPORTED_MODULE_1__.scrollLock)();
        } else {
          (0,_scroll_able_lock__WEBPACK_IMPORTED_MODULE_1__.scrollAble)();
        }
      });
      this.link.forEach(function (item) {
        item.addEventListener('click', function () {
          _this.target.classList.remove((_constants_index__WEBPACK_IMPORTED_MODULE_0___default().OPEN_CLASS));

          _this.parent.classList.remove((_constants_index__WEBPACK_IMPORTED_MODULE_0___default().OPEN_CLASS));

          (0,_scroll_able_lock__WEBPACK_IMPORTED_MODULE_1__.scrollAble)();

          _this.link.forEach(function (item) {
            item.classList.remove((_constants_index__WEBPACK_IMPORTED_MODULE_0___default().ACTIVE_CLASS));
          });

          item.classList.add((_constants_index__WEBPACK_IMPORTED_MODULE_0___default().ACTIVE_CLASS));
        });
      });
    }
  }]);

  return HeaderNav;
}();



/***/ }),

/***/ "./src/js/components/router.js":
/*!*************************************!*\
  !*** ./src/js/components/router.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Router)
/* harmony export */ });
/* harmony import */ var _controllers_base_controller__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../controllers/base-controller */ "./src/js/controllers/base-controller.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var Router = /*#__PURE__*/function () {
  function Router() {
    var routes = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];

    _classCallCheck(this, Router);

    this.routes = routes;
  }

  _createClass(Router, [{
    key: "route",
    value: function route() {
      var controller;
      this.routes.forEach(function (route) {
        if (document.body.classList.contains(route.id)) {
          controller = new route.controller();
        }
      });

      if (!controller) {
        new _controllers_base_controller__WEBPACK_IMPORTED_MODULE_0__.default();
      }
    }
  }]);

  return Router;
}();



/***/ }),

/***/ "./src/js/components/scroll-able-lock.js":
/*!***********************************************!*\
  !*** ./src/js/components/scroll-able-lock.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "ableScroll": () => (/* binding */ ableScroll),
/* harmony export */   "lockScroll": () => (/* binding */ lockScroll),
/* harmony export */   "scrollAble": () => (/* binding */ scrollAble),
/* harmony export */   "scrollLock": () => (/* binding */ scrollLock)
/* harmony export */ });
var IS_SCROLLABLE = 'is-scrollable',
    wrap = document.querySelector('.js-wrap');
var scrollTop = null;
var ableScroll = function ableScroll() {
  wrap.classList.remove(IS_SCROLLABLE);
  window.scrollTo(0, scrollTop);
};
var lockScroll = function lockScroll() {
  scrollTop = window.pageYOffset;
  wrap.style.top = "-".concat(scrollTop, "px");
  wrap.classList.add(IS_SCROLLABLE);
};
function scrollAble() {
  ableScroll();
}
function scrollLock() {
  lockScroll();
}

/***/ }),

/***/ "./src/js/constants/index.js":
/*!***********************************!*\
  !*** ./src/js/constants/index.js ***!
  \***********************************/
/***/ ((module) => {

module.exports = {
  ACTIVE_CLASS: 'is-active',
  FIXED_CLASS: 'is-fixed',
  OPEN_CLASS: 'is-open',
  LOCK_CLASS: 'is-locked',
  SHOW_CLASS: 'is-seen',
  LOADED_CLASS: 'is-loaded',
  HOVER_CLASS: 'is-hover',
  HIDDEN_CLASS: 'is-hidden',
  BREAK_POINT: 980,
  BREAK_POINT_MOBILE: 767,
  DURATION: 2000
};

/***/ }),

/***/ "./src/js/controllers/base-controller.js":
/*!***********************************************!*\
  !*** ./src/js/controllers/base-controller.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ BaseController)
/* harmony export */ });
/* harmony import */ var _components_header_nav__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/header-nav */ "./src/js/components/header-nav.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var BaseController = /*#__PURE__*/function () {
  function BaseController() {
    _classCallCheck(this, BaseController);

    new _components_header_nav__WEBPACK_IMPORTED_MODULE_0__.default('.js-menu', '.js-header', '.js-nav-link');
    this.init();
  }

  _createClass(BaseController, [{
    key: "init",
    value: function init() {}
  }]);

  return BaseController;
}();



/***/ }),

/***/ "./src/js/controllers/home-controller.js":
/*!***********************************************!*\
  !*** ./src/js/controllers/home-controller.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ HomeController)
/* harmony export */ });
/* harmony import */ var _base_controller__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./base-controller */ "./src/js/controllers/base-controller.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }



var HomeController = /*#__PURE__*/function (_BaseController) {
  _inherits(HomeController, _BaseController);

  var _super = _createSuper(HomeController);

  function HomeController() {
    _classCallCheck(this, HomeController);

    return _super.apply(this, arguments);
  }

  _createClass(HomeController, [{
    key: "init",
    value: function init() {
      console.log('home');
    }
  }]);

  return HomeController;
}(_base_controller__WEBPACK_IMPORTED_MODULE_0__.default);



/***/ }),

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/******/ 	// the startup function
/******/ 	// It's empty as some runtime module handles the default behavior
/******/ 	__webpack_require__.x = x => {};
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// Promise = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/wp-content/themes/welleg/assets/js/app": 0
/******/ 		};
/******/ 		
/******/ 		var deferredModules = [
/******/ 			["./src/js/app.js"],
/******/ 			["./src/scss/app.scss"]
/******/ 		];
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		var checkDeferredModules = x => {};
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime, executeModules] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0, resolves = [];
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					resolves.push(installedChunks[chunkId][0]);
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			while(resolves.length) {
/******/ 				resolves.shift()();
/******/ 			}
/******/ 		
/******/ 			// add entry modules from loaded chunk to deferred list
/******/ 			if(executeModules) deferredModules.push.apply(deferredModules, executeModules);
/******/ 		
/******/ 			// run deferred modules when all chunks ready
/******/ 			return checkDeferredModules();
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkwelleg"] = self["webpackChunkwelleg"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 		
/******/ 		function checkDeferredModulesImpl() {
/******/ 			var result;
/******/ 			for(var i = 0; i < deferredModules.length; i++) {
/******/ 				var deferredModule = deferredModules[i];
/******/ 				var fulfilled = true;
/******/ 				for(var j = 1; j < deferredModule.length; j++) {
/******/ 					var depId = deferredModule[j];
/******/ 					if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferredModules.splice(i--, 1);
/******/ 					result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 				}
/******/ 			}
/******/ 			if(deferredModules.length === 0) {
/******/ 				__webpack_require__.x();
/******/ 				__webpack_require__.x = x => {};
/******/ 			}
/******/ 			return result;
/******/ 		}
/******/ 		var startup = __webpack_require__.x;
/******/ 		__webpack_require__.x = () => {
/******/ 			// reset startup function so it can be called again when more startup code is added
/******/ 			__webpack_require__.x = startup || (x => {});
/******/ 			return (checkDeferredModules = checkDeferredModulesImpl)();
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// run startup
/******/ 	var __webpack_exports__ = __webpack_require__.x();
/******/ 	
/******/ })()
;