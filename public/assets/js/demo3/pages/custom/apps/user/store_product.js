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
												formEl[0].reset();
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

    var editSubmit = function() {
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
												formEl[0].reset();
                        $("#kt_table_1 tbody").prepend(product);
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

    var getProduct = function(){
        $(".edit").on("click", (e) => {
            e.preventDefault();

            var product_id = $(e.currentTarget).data('product');
            $.getJSON(`/get_product/${product_id}`, (result) => {
                if (result.success == true){
                    var product = result.product;
                    formEl.attr("action", "/edit_product");
                    var btn = formEl.find('[data-ktwizard-type="action-submit"]');
                    btn.text("SUBMIT");

                    $("input[name='name']").val(product.name);
                    $("input[name='price']").val(product.price);
                    $("input[name='category']").val(product.category);
                    $("textarea[name='description']").val(product.description);
                    $("textarea[name='features']").val(product.features);
                    $("textarea[name='keywords']").val(product.keywords);
                    $("#thumbnail").css("background-image", `url('/storage/${product.thumbnail}')`);

                    $("#name-preview").text(product.name);
                    $("#price-preview").text(product.price);
                    $("#category-preview").text(product.category);
                    $("#description-preview").text(product.description);
                    $("#features-preview").text(product.features);
                    $("#keywords-preview").text(product.keywords);
                    $("#thumbnail-preview").css("background-image", `url('/storage/${product.thumbnail}')`);

                    $("input[name='thumbnail']").removeAttr("required");

                    $('#products_view_portlet').hide(300);
                    $('#add_product_portlet').show(300);
                }
            })
        })
    }

    var hideProductForm = () => {
        $('#hide_product_form').on('click', ()=> {
            $('#add_product_portlet').hide(300);
            $('#products_view_portlet').show(300);
        })
    }

    var showProductForm = () => {
        $('#show_product_form').on('click', ()=> {
            formEl.attr("action", "/edit_product");
            var btn = formEl.find('[data-ktwizard-type="action-submit"]');
            btn.text("SUBMIT");

            $("input[name='thumbnail']").attr("required", "required");
            $('#kt_apps_product_add_user_form')[0].reset();

            $(".preview").text("");
            $("#thumbnail").css("background-image", `url('/assets/media/files/jpg.svg')`);
            $("#thumbnail-preview").css("background-image", `url('/assets/media/files/jpg.svg')`);

            $('#products_view_portlet').hide(300);
            $('#add_product_portlet').show(300);
        })
    }

    var previewProductForm = () => {
        $("input").on("keypress", (e) => {
            $(`#${$(e.currentTarget).data('name')}-preview`).text(`${e.currentTarget.value + e.key}`);
        })

        $("textarea").on("keypress", (e) => {
            $(`#${$(e.currentTarget).data('name')}-preview`).text(`${e.currentTarget.value + e.key}`);
        })
    }

	return {
		// public functions
		init: function() {
            formEl = $('#kt_apps_product_add_user_form');
            //editForm = $('#edit_product_form');

			initWizard();
			initValidation();
			initSubmit();
            initKTAppsUserAdd();
            getProduct();
            hideProductForm();
            showProductForm();
            previewProductForm();
		}
	};
}();

jQuery(document).ready(function() {
	KTAppUserAdd.init();
});
