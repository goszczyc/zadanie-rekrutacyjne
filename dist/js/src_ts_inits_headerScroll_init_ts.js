"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunktwoje_finanse"] = self["webpackChunktwoje_finanse"] || []).push([["src_ts_inits_headerScroll_init_ts"],{

/***/ "./src/ts/inits/headerScroll_init.ts":
/*!*******************************************!*\
  !*** ./src/ts/inits/headerScroll_init.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function (header) {\r\n    window.addEventListener(\"scroll\", function (e) {\r\n        if (window.scrollY > 10) {\r\n            header.classList.add('pt-2');\r\n            header.classList.add('pb-2');\r\n        }\r\n        else {\r\n            header.classList.remove('pt-2');\r\n            header.classList.remove('pb-2');\r\n        }\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://twoje_finanse/./src/ts/inits/headerScroll_init.ts?");

/***/ })

}]);