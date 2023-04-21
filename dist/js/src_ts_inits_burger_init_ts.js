"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunktwoje_finanse"] = self["webpackChunktwoje_finanse"] || []).push([["src_ts_inits_burger_init_ts"],{

/***/ "./src/ts/inits/burger_init.ts":
/*!*************************************!*\
  !*** ./src/ts/inits/burger_init.ts ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function (burger, burgerMenu) {\r\n    burger.addEventListener(\"click\", function (e) {\r\n        e.preventDefault();\r\n        burger.setAttribute('aria-expanded', toggleAriaExpanded(burger));\r\n        burgerMenu.setAttribute(\"aria-hidden\", toggleAriaHidden(burgerMenu));\r\n    });\r\n});\r\nvar toggleAriaHidden = function (element) {\r\n    if (element.getAttribute(\"aria-hidden\") === \"true\")\r\n        return \"false\";\r\n    return \"true\";\r\n};\r\nvar toggleAriaExpanded = function (element) {\r\n    if (element.getAttribute(\"aria-expanded\") === \"true\")\r\n        return \"false\";\r\n    return \"true\";\r\n};\r\n\n\n//# sourceURL=webpack://twoje_finanse/./src/ts/inits/burger_init.ts?");

/***/ })

}]);