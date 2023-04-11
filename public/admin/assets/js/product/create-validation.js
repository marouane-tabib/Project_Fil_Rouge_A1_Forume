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
    var formValidationExamples = document.getElementById('formValidationExamples'),
      formValidationSelect2Ele = jQuery(formValidationExamples.querySelector('[name="formValidationSelect2"]'));
      // formValidationTechEle = jQuery(formValidationExamples.querySelector('[name="formValidationTech"]')),
      // formValidationLangEle = formValidationExamples.querySelector('[name="formValidationLang"]'),
      // formValidationHobbiesEle = jQuery(formValidationExamples.querySelector('.selectpicker'));
      // tech = ['ReactJS', 'Angular', 'VueJS', 'Html', 'Css', 'Sass', 'Pug', 'Gulp', 'Php', 'Laravel', 'Python', 'Bootstrap', 'Material Design', 'NodeJS'];
    var fv = FormValidation.formValidation(formValidationExamples, {
      fields: {
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
        formValidationFile: {
          validators: {
            notEmpty: {
              message: 'Please select the file'
            }
          }
        },
        formValidationSelect2: {
          validators: {
            notEmpty: {
              message: 'Please select your country'
            }
          }
        },
        formValidationBio: {
          validators: {
            notEmpty: {
              message: 'Please enter your bio'
            },
            stringLength: {
              min: 100,
              max: 500,
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
            switch (field) {
              case 'title':
              // case 'formValidationEmail':
              // case 'formValidationPass':
              // case 'formValidationConfirmPass':
              case 'formValidationFile':
              // case 'formValidationDob':
              case 'formValidationSelect2':
              // case 'formValidationLang':
              // case 'formValidationTech':
              // case 'formValidationHobbies':
              case 'formValidationBio':
              // case 'formValidationGender':
              //   return '.col-md-6';
              // case 'formValidationPlan':
              //   return '.col-xl-3';
              // case 'formValidationSwitch':
              // case 'formValidationCheckbox':
              //   return '.col-12';
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

    //? Revalidation third-party libs inputs on change trigger

    // Flatpickr
    flatpickr(formValidationExamples.querySelector('[name="formValidationDob"]'), {
      enableTime: false,
      // See https://flatpickr.js.org/formatting/
      dateFormat: 'Y/m/d',
      // After selecting a date, we need to revalidate the field
      onChange: function onChange() {
        fv.revalidateField('formValidationDob');
      }
    });

    // Select2 (Country)
    if (formValidationSelect2Ele.length) {
      formValidationSelect2Ele.wrap('<div class="position-relative"></div>');
      formValidationSelect2Ele.select2({
        placeholder: 'Select country',
        dropdownParent: formValidationSelect2Ele.parent()
      }).on('change.select2', function () {
        // Revalidate the color field when an option is chosen
        fv.revalidateField('formValidationSelect2');
      });
    }

    // Typeahead

    // String Matcher function for typeahead
    var substringMatcher = function substringMatcher(strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function (i, str) {
          if (substrRegex.test(str)) {
            matches.push(str);
          }
        });
        cb(matches);
      };
    };

    // Check if rtl
    if (isRtl) {
      var typeaheadList = [].slice.call(document.querySelectorAll('.typeahead'));

      // Flat pickr
      if (typeaheadList) {
        typeaheadList.forEach(function (typeahead) {
          typeahead.setAttribute('dir', 'rtl');
        });
      }
    }
    // formValidationTechEle.typeahead({
    //   hint: !isRtl,
    //   highlight: true,
    //   minLength: 1
    // }, {
    //   name: 'tech',
    //   source: substringMatcher(tech)
    // });

    // Tagify
    // var formValidationLangTagify = new Tagify(formValidationLangEle);
    // formValidationLangEle.addEventListener('change', onChange);
    // function onChange() {
    //   fv.revalidateField('formValidationLang');
    // }

    //Bootstrap select
    // formValidationHobbiesEle.on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
    //   fv.revalidateField('formValidationHobbies');
    // });
  })();
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});
