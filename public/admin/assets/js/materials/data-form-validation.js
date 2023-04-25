(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(self, function() {
return /******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/admin/assets/js/materials/data-form-validation.js":
/*!*********************************************************************!*\
  !*** ./resources/admin/assets/js/materials/data-form-validation.js ***!
  \*********************************************************************/
/***/ (function(module, exports, __webpack_require__) {

/* module decorator */ module = __webpack_require__.nmd(module);
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
(function webpackUniversalModuleDefinition(root, factory) {
  if (( false ? 0 : _typeof(exports)) === 'object' && ( false ? 0 : _typeof(module)) === 'object') module.exports = factory();else if (true) !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));else { var i, a; }
})(self, function () {
  return (/******/function () {
      // webpackBootstrap
      /******/
      "use strict";

      var __webpack_exports__ = {};
      /*!*****************************************************************!*\
        !*** ./resources/admin/assets/js/products/create-validation.js ***!
        \*****************************************************************/

      (function () {
        // Init custom option check
        window.Helpers.initCustomOptionCheck();

        // Bootstrap validation example
        //------------------------------------------------------------------------------------------
        // const flatPickrEL = $('.flatpickr-validation');
        var flatPickrList = [].slice.call(document.querySelectorAll('.flatpickr-validation'));
        // Flat pickr
        if (flatPickrList) {
          flatPickrList.forEach(function (flatPickr) {
            flatPickr.flatpickr({
              allowInput: true,
              monthSelectorType: 'static'
            });
          });
        }

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var bsValidationForms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(bsValidationForms).forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            } else {
              // Submit your form
              alert('Submitted!!!');
            }
            form.classList.add('was-validated');
          }, false);
        });
      })();
      /**
       * Form Validation (https://formvalidation.io/guide/examples)
       * ? Primary form validation plugin for this template
       * ? In this example we've try to covered as many form inputs as we can.
       * ? Though If we've miss any 3rd party libraries, then refer: https://formvalidation.io/guide/examples/integrating-with-3rd-party-libraries
       */
      //------------------------------------------------------------------------------------------
      document.addEventListener('DOMContentLoaded', function (e) {
        (function () {
          var formValidationExamples = document.getElementById('createMaterialForm');
          var fv = FormValidation.formValidation(formValidationExamples, {
            fields: {
              name: {
                validators: {
                  notEmpty: {
                    message: 'Please make sure to enter a material name.'
                  },
                  stringLength: {
                    min: 4,
                    max: 50,
                    message: 'The material name must be between 4 and 50 characters in length.'
                  },
                  regexp: {
                    regexp: /^[^\d]*$/,
                    message: 'The material name can only contain alphabetical and space characters.'
                  }
                }
              }
            },
            plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap5: new FormValidation.plugins.Bootstrap5({
                // Use this for enabling/changing valid/invalid class
                // eleInvalidClass: '',
                eleValidClass: '',
                rowSelector: function rowSelector(field, ele) {
                  // field is the field name & ele is the field element
                  switch (ele) {
                    case 'name':
                    default:
                      return '.row';
                  }
                }
              }),
              submitButton: new FormValidation.plugins.SubmitButton(),
              // Submit the form when all fields are valid
              defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
              autoFocus: new FormValidation.plugins.AutoFocus()
            },
            init: function init(instance) {
              instance.on('plugins.message.placed', function (e) {
                //* Move the error message out of the `input-group` element
                if (e.element.parentElement.classList.contains('input-group')) {
                  // `e.field`: The field name
                  // `e.messageElement`: The message element
                  // `e.element`: The field element
                  e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
                }
                //* Move the error message out of the `row` element for custom-options
                if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
                  e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
                }
              });
            }
          });
        })();
      });
      /******/
      return __webpack_exports__;
      /******/
    }()
  );
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			loaded: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/************************************************************************/
/******/ 	/* webpack/runtime/node module decorator */
/******/ 	!function() {
/******/ 		__webpack_require__.nmd = function(module) {
/******/ 			module.paths = [];
/******/ 			if (!module.children) module.children = [];
/******/ 			return module;
/******/ 		};
/******/ 	}();
/******/
/************************************************************************/
/******/
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/admin/assets/js/materials/data-form-validation.js");
/******/
/******/ 	return __webpack_exports__;
/******/ })()
;
});
