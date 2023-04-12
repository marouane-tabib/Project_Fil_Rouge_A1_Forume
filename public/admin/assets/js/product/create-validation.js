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
/******/ 	"use strict";
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
            notEmpty: {
              message: 'Please select your product image',
            },
            file: {
                extension: 'jpeg,jpg,png',
                type: 'image/jpeg,image/png',
                maxSize: 2097152, // 2048 * 1024
                message: 'The selected file is not valid. Please make sure you upload a JPEG or PNG image file with a maximum size of 2 MB.',
            },
          }
        },
        title: {
          validators: {
            notEmpty: {
              message: 'Please enter your product title'
            },
            stringLength: {
              min: 4,
              max: 50,
              message: 'The title must be more than 4 and less than 50 characters long'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9 ]+$/,
              message: 'The name can only consist of alphabetical, number and space'
            }
          }
        },
        price: {
          validators: {
            integer: {
              message: 'The product price value is not an integer',
              // The default separators
              thousandsSeparator: '',
              decimalSeparator: '.',
            },
            notEmpty: {
              message: 'Please enter your product price'
            },
            greaterThan: {
              message: 'The value of product price must be greater than or equal to 50',
              min: 50,
            },
          }
        },
        quantity: {
          validators: {
            integer: {
              message: 'The product quantity value is not an integer',
              // The default separators
              thousandsSeparator: '',
              decimalSeparator: '.',
            },
            notEmpty: {
              message: 'Please enter your product quantity'
            },
            greaterThan: {
              message: 'The value of product quantity must be greater than or equal to 1',
              min: 1,
            },
          }
        },
        sku: {
          validators: {
            integer: {
              message: 'The product sku value is not an integer',
              // The default separators
              thousandsSeparator: '',
              decimalSeparator: '.',
            },
            notEmpty: {
              message: 'Please enter your product sku'
            },
            greaterThan: {
              message: 'The value of product sku must be greater than or equal to 1',
              min: 1,
            },
          }
        },
        width: {
          validators: {
            integer: {
              message: 'The product width value is not an integer',
              // The default separators
              thousandsSeparator: '',
              decimalSeparator: '.',
            },
            notEmpty: {
              message: 'Please enter your product width'
            },
            greaterThan: {
              message: 'The value of product width must be greater than or equal to 0',
              min: 0,
            },
          }
        },
        length_value: {
          validators: {
            integer: {
              message: 'The product length value is not an integer',
              // The default separators
              thousandsSeparator: '',
              decimalSeparator: '.',
            },
            notEmpty: {
              message: 'Please enter your product length'
            },
            greaterThan: {
              message: 'The value of product length must be greater than or equal to 0',
              min: 1,
            },
          }
        },
        category_id: {
          validators: {
            notEmpty: {
              message: 'Please enter your product category'
            },
          }
        },
        primary_color_id: {
          validators: {
            notEmpty: {
              message: 'Please enter your product primary color'
            },
          }
        },
        secondary_color_id: {
          validators: {
            notEmpty: {
              message: 'Please enter your product secondary color'
            },
          }
        },
        home_style_id: {
          validators: {
            notEmpty: {
              message: 'Please enter your product home style'
            },
          }
        },
        description: {
          validators: {
            notEmpty: {
              message: 'Please enter your product description'
            },
            stringLength: {
              min: 10,
              max: 5000,
              message: 'The bio must be more than 100 and less than 500 characters long'
            }
          }
        },
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
/******/ 	return __webpack_exports__;
/******/ })()
;
});
