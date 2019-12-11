"use strict";

// Class definition
var KTAppUserAdd = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	var avatar;

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_apps_user_add_user', {
			startStep: 1,
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		})

		// Change event
		wizard.on('change', function(wizard) {
			KTUtil.scrollTop();
		});
	}

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {
				// Step 1
				profile_avatar: {
					//required: true
				},
				profile_first_name: {
					required: true
				},
				profile_last_name: {
					required: true
				},
				profile_phone: {
					required: true
				},
				profile_email: {
					required: true,
					email: true
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
		var btn = formEl.find('[data-ktwizard-type="action-submit"]');

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
							"text": "The product has been added successfully",
							"type": "success",
							"confirmButtonClass": "btn btn-secondary"
                        });
                        var product = "<tr>";
                        product += "<td>"+data.product.id+"</td>";
                        product += "<td>"+data.product.name+"</td>";
                        product += "<td><a href='/storage/"+data.product.thumbnail+"' target='_blank'>"
                        product += "<img src='/storage/"+data.product.thumbnail+"' alt='"+data.product.name+"' ";
                        product += "style='width: 50px; height: 50px; cursor: zoom-in'></a></td>";
                        product += "<td>"+data.product.category+"</td>";
                        product += "<td>"+data.product.description.substring(0, 40)+"...</td>";
                        product += "<td>"+data.product.features.substring(0, 40)+"...</td>";
                        product += "<td>&dollar;"+data.product.price+"</td>";
                        product += `<td>
                        <div class="kt-portlet__head-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                                    <span class="kt-nav__link-text">View/Edit</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link text-danger">
                                                    <i class="kt-nav__link-icon flaticon-trash"></i>
                                                    <span class="kt-nav__link-text">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>`;
												product += "</tr>";
												formEl.reset();
                        $("#kt_table_1 tbody").prepend(product);
                        $("#add_product_modal").modal("hide");
                    },
                    error: function(data){
                        swal.fire({
							"title": "Failure",
							"text": data.responseText,
							"type": "error",
							"confirmButtonClass": "btn btn-secondary"
                        });
                        btn.text("Submit");
                    }
				});
			}
		});
	}

	var initKTAppsUserAdd = function() {
		avatar = new KTAvatar('kt_apps_user_add_user_avatar');
	}

	return {
		// public functions
		init: function() {
			formEl = $('#kt_apps_user_add_user_form');

			initWizard();
			initValidation();
			initSubmit();
			initKTAppsUserAdd();
		}
	};
}();

jQuery(document).ready(function() {
	KTAppUserAdd.init();
});