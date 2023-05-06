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
/*!**********************************************************************!*\
  !*** ./resources/admin/assets/js/auth/login-data-form-validation.js ***!
  \**********************************************************************/
/**
 *  Pages Authentication
 */



var formAuthentication = document.querySelector('#loginFromValidation');
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    // Form validation for Add new record
    if (formAuthentication) {
      var fv = FormValidation.formValidation(formAuthentication, {
        fields: {
          email: {
            validators: {
              notEmpty: {
                message: 'Please enter your email address.'
              },
              emailAddress: {
                message: 'Please enter valid email address'
              },
              stringLength: {
                max: 150,
                message: 'The email must not be greater than 150 characters.'
              }
            }
          },
          password: {
            validators: {
              notEmpty: {
                message: 'Please enter your password'
              },
              stringLength: {
                min: 8,
                max: 150,
                message: 'The password must be between 8 and 150 characters in length.'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
            rowSelector: '.mb-3'
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
          autoFocus: new FormValidation.plugins.AutoFocus()
        },
        init: function init(instance) {
          instance.on('plugins.message.placed', function (e) {
            if (e.element.parentElement.classList.contains('input-group')) {
              e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
            }
          });
        }
      });
    }

    //  Two Steps Verification
    var numeralMask = document.querySelectorAll('.numeral-mask');

    // Verification masking
    if (numeralMask.length) {
      numeralMask.forEach(function (e) {
        new Cleave(e, {
          numeral: true
        });
      });
    }
  })();
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});