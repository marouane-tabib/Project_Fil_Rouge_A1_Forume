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

/***/ "./resources/admin/assets/js/products/edit-validation.js":
/*!***************************************************************!*\
  !*** ./resources/admin/assets/js/products/edit-validation.js ***!
  \***************************************************************/
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
          var formValidationExamples = document.getElementById('createProductForm');
          var fv = FormValidation.formValidation(formValidationExamples, {
            fields: {
              image: {
                validators: {
                  file: {
                    extension: 'jpeg,jpg,png',
                    type: 'image/jpeg,image/png',
                    maxSize: 204800,
                    // 200 * 1024
                    minSize: 10240,
                    // 10 * 1024
                    message: 'The selected file is not valid. Please make sure you upload a JPEG or PNG image file with a minimum size of 10 KB and a maximum size of 2 MB.'
                  }
                }
              },
              title: {
                validators: {
                  notEmpty: {
                    message: 'Please make sure to enter a product title.'
                  },
                  stringLength: {
                    min: 4,
                    max: 50,
                    message: 'The product title must be between 4 and 50 characters in length.'
                  },
                  regexp: {
                    regexp: /^[a-zA-Z0-9 ]+$/,
                    message: 'The product name can only contain alphabetical, numeric, and space characters.'
                  }
                }
              },
              price: {
                validators: {
                  integer: {
                    message: 'Please make sure to enter an integer value for the product price.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  },
                  notEmpty: {
                    message: 'Please make sure to enter a product price.'
                  },
                  greaterThan: {
                    message: 'The product price must be greater than or equal to 50.',
                    min: 50
                  }
                }
              },
              quantity: {
                validators: {
                  integer: {
                    message: 'Please make sure to enter an integer value for the product quantity.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  },
                  notEmpty: {
                    message: 'Please make sure to enter a product quantity.'
                  },
                  greaterThan: {
                    message: 'The product quantity must be greater than or equal to 1.',
                    min: 1
                  }
                }
              },
              sku: {
                validators: {
                  integer: {
                    message: 'Please make sure to enter an integer value for the sku price.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  },
                  notEmpty: {
                    message: 'Please make sure to enter a product sku.'
                  },
                  greaterThan: {
                    message: 'The product sku must be greater than or equal to 1.',
                    min: 1
                  }
                }
              },
              width: {
                validators: {
                  integer: {
                    message: 'Please make sure to enter an integer value for the width price.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  },
                  notEmpty: {
                    message: 'Please make sure to enter a product width.'
                  },
                  greaterThan: {
                    message: 'The product width must be greater than or equal to 0.',
                    min: 0
                  }
                }
              },
              length_value: {
                validators: {
                  integer: {
                    message: 'Please make sure to enter an integer value for the product length.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  },
                  notEmpty: {
                    message: 'Please make sure to enter a product price.'
                  },
                  greaterThan: {
                    message: 'The product price must be greater than or equal to 1.',
                    min: 1
                  }
                }
              },
              category_id: {
                validators: {
                  notEmpty: {
                    message: 'Please make sure to enter a product category.'
                  },
                  integer: {
                    message: 'Please make sure to enter category value.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  }
                }
              },
              primary_color_id: {
                validators: {
                  notEmpty: {
                    message: 'Please make sure to enter a product primary color.'
                  },
                  integer: {
                    message: 'Please make sure to enter primary color value.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  }
                }
              },
              secondary_color_id: {
                validators: {
                  notEmpty: {
                    message: 'Please make sure to enter a product secondary color.'
                  },
                  integer: {
                    message: 'Please make sure to enter secondary color value.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  }
                }
              },
              home_style_id: {
                validators: {
                  notEmpty: {
                    message: 'Please make sure to enter a product home style.'
                  },
                  integer: {
                    message: 'Please make sure to enter home style value.',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                  }
                }
              },
              description: {
                validators: {
                  notEmpty: {
                    message: 'Please make sure to enter a product description.'
                  },
                  stringLength: {
                    min: 10,
                    max: 5000,
                    message: 'The description must be more than 100 and less than 500 characters long'
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
                    case 'image':
                    case 'title':
                    case 'price':
                    case 'quantity':
                    case 'sku':
                    case 'width':
                    case 'length_value':
                    case 'category_id':
                    case 'primary_color_id':
                    case 'secondary_color_id':
                    case 'home_style_id':
                    case 'description':
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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/admin/assets/js/products/edit-validation.js");
/******/ 	
/******/ 	return __webpack_exports__;
/******/ })()
;
});