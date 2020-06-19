/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/input.js":
/*!*******************************!*\
  !*** ./resources/js/input.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

//   gestisco il cambiamento degli input
var name = document.querySelectorAll('input[name="first_name"]');
var lastName = document.querySelectorAll('input[name="last_name"]');
var address = document.querySelectorAll('input[name="address"]');
var postCode = document.querySelectorAll('input[name="code"]');
var state = document.querySelectorAll('input[name="state"]');
var number = document.querySelectorAll('input[name="phone_number"]');
var job = document.querySelectorAll('input[name="job"]');
name.forEach(function (input) {
  input.addEventListener('keyup', function () {
    if (this.value.match(/\d+/g) || this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
      this.classList.remove('is-valid');
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
      this.classList.add('is-valid');
    }
  });
});
lastName.forEach(function (input) {
  input.addEventListener('keyup', function () {
    if (this.value.match(/\d+/g) || this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
      this.classList.remove('is-valid');
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
      this.classList.add('is-valid');
    }
  });
});
address.forEach(function (input) {
  input.addEventListener('keyup', function () {
    if (this.value.match(/[@\$!_\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
      this.classList.remove('is-valid');
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
      this.classList.add('is-valid');
    }
  });
});
postCode.forEach(function (input) {
  input.addEventListener('keyup', function () {
    if (this.value.match(/[a-zA-Z]/g) || this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
      this.classList.remove('is-valid');
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
      this.classList.add('is-valid');
    }
  });
});
state.forEach(function (input) {
  input.addEventListener('keyup', function () {
    if (this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
      this.classList.remove('is-valid');
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
      this.classList.add('is-valid');
    }
  });
});
number.forEach(function (input) {
  input.addEventListener('keyup', function () {
    if (this.value.match(/[a-zA-Z]/g) || this.value.match(/[@\$!_\-\?\"\'\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
      this.classList.remove('is-valid');
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
      this.classList.add('is-valid');
    }
  });
});
job.forEach(function (input) {
  input.addEventListener('keyup', function () {
    if (this.value.match(/[@\$!_\?\"\'\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
      this.classList.remove('is-valid');
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
      this.classList.add('is-valid');
    }
  });
});

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/input.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/marcopetrini/Desktop/Esercizi Boolean/laravel-base-crud/resources/js/input.js */"./resources/js/input.js");


/***/ })

/******/ });