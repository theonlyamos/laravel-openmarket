"use strict";

// Class definition
var KTAppUserAdd = function () {
	// Base elements
	var formEl;
	var validator;
	var avatar;

	// Private functions

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {
				// Step 1
				name: {
					required: true
				},
				price: {
					required: true
				},
				category: {
					required: true
				},
				description: {
					required: true
				},
				features: {
					required: true
                },
                keywords: {
                    required: true
                }
			},

			// Display error
			invalidHandler: function(event, validator) {
				KTUtil.scrollTop();

				swal.fire({
					"title": "",
					"text": "There are some errors in your submission. Please correct them.",
					"type": "error",
					"buttonStyling": false,
					"confirmButtonClass": "btn btn-brand btn-sm btn-bold"
				});
			},

			// Submit valid form
			submitHandler: function (form) {

			}
		});
	}

	var initSubmit = function() {
		var btn = $('[data-action="submit"]');

		btn.on('click', function(e) {
			e.preventDefault();

			if (validator.form()) {
				// See: src\js\framework\base\app.js
				KTApp.progress(btn);
				//KTApp.block(formEl);

				// See: http://malsup.com/jquery/form/#ajaxSubmit
				formEl.ajaxSubmit({
					success: function(data) {
						KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);
						swal.fire({
							"title": "Success",
							"text": data.message,
							"type": "success",
							"confirmButtonClass": "btn btn-secondary"
                        });

                    },
                    error: function(data){
                        swal.fire({
							"title": "Failure",
							"text": data.responseText,
							"type": "error",
							"confirmButtonClass": "btn btn-secondary"
                        });
                        btn.text("Submit");
                        KTApp.unprogress(btn);
                    }
				});
			}
		});
	}

	return {
		// public functions
		init: function() {
            formEl = $('#kt_apps_product_add_product_form');
            //editForm = $('#edit_product_form');

			initValidation();
			initSubmit();
		}
	};
}();

jQuery(document).ready(function() {
	KTAppUserAdd.init();
});
