"use strict";

// Class definition
var KTAppProduct = function () {
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
            if (wizard.isLastStep()){
                $("input").each((i, e)=> {
                    if ($(e).attr('type') !== 'checkbox')
                        $(`#${$(e).data('name')}-preview`).text($(e).val());
                })

                $("textarea").each((i, e)=> {
                    $(`#${$(e).data('name')}-preview`).text($(e).val());
                })
            }
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
				category: {
					required: true
				},
				description: {
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
                        product += "<td><a href='/storage/"+data.product.images[0].name+"' target='_blank'>"
                        product += "<img src='/storage/"+data.product.images[0].name+"' alt='"+data.product.name+"' ";
                        product += "style='width: 50px; height: 50px; cursor: zoom-in;object-fit:contain'></a></td>";
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
                        $('#kt_apps_user_add_user').css("display", "none");
                        $('#products_view_portlet').show(300);
                    },
                    error: function(data){
                        swal.fire({
                          "title": "Failure",
                          "text": data.responseText,
                          "type": "error",
                          "confirmButtonClass": "btn btn-secondary"
                        });
                        btn.text("Add to Store");
                        KTApp.unprogress(btn);
                    }
				});
			}
		});
	}

	var initKTAppsProductAdd = function() {
		avatar = new KTAvatar('kt_apps_user_add_avatar');
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
							"text": data.message,
							"type": "success",
							"confirmButtonClass": "btn btn-secondary"
                        });
                        var product = "<tr>";
                        product += "<td>"+data.product.id+"</td>";
                        product += "<td>"+data.product.name+"</td>";
                        product += "<td><a href='/storage/"+data.product.images[0].name+"' target='_blank'>"
                        product += "<img src='/storage/"+data.product.images[0].name+"' alt='"+data.product.name+"' ";
                        product += "style='width: 50px; height: 50px; cursor: zoom-in;object-fit:contain'></a></td>";
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
                        //$("#kt_table_1 tbody").prepend(product);
                        $('#kt_apps_user_add_user').css("display", "none");
                        $('#products_view_portlet').show(300);
                    },
                    error: function(data){
                        swal.fire({
							"title": "Failure",
							"text": data.responseText,
							"type": "error",
							"confirmButtonClass": "btn btn-secondary"
                        });
                        btn.text("Add to Store");
                        KTApp.unprogress(btn);
                    }
				});
			}
		});
    }

    const getProduct = function(){
        $(".edit").on("click", (e) => {
            e.preventDefault();
            $(".show_product_form").hide();
            $("#hide_product_form").show();

            const url = $(e.currentTarget).attr('href');
            $.getJSON(url, (result) => {
                if (result.success == true){
                    var product = result.product;
                    formEl.attr("action",url);
                    var btn = formEl.find('[data-ktwizard-type="action-submit"]');
                    btn.text("UPDATE");

                    $("input[name='_method']").val('PUT');
                    $("input[name='name']").val(product.name);
                    $("input[name='price']").val(product.price);
                    $("input[name='category']").val(product.category);
                    $("textarea[name='description']").val(product.description);
                    $("textarea[name='features']").val(product.features);
                    $("textarea[name='keywords']").val(product.keywords);
                    $("#thumbnail").css("background-image", `url('/storage/${product.images[0].name}')`);

                    $("#name-preview").text(product.name);
                    $("#price-preview").text(product.price);
                    $("#category-preview").text(product.category);
                    $("#description-preview").text(product.description);
                    $("#features-preview").text(product.features);
                    $("#keywords-preview").text(product.keywords);
                    $("#thumbnail-preview").css("background-image", `url('/storage/${product.images[0].name}')`);

                    $("input[name='thumbnail']").removeAttr("required");

                    $('#products_view_portlet').hide(300);
                    $('#kt_apps_user_add_user').css("display", "flex");
                }
            })
        })
    }

    const deleteProduct = ()=>{
        $(".delete").on("click", (e) => {
            e.preventDefault();
            const url = $(e.currentTarget).attr('href');
            $.getJSON(url, {_method: 'delete'}, (result)=>{
                if (result.success){
                    $(`#product_row_${result.product.id}`).remove()
                    swal.fire({
                        "title": "Success",
                        "text": result.message,
                        "type": "success",
                        "confirmButtonClass": "btn btn-secondary"
                    });
                }
            })

        })
    }

    var hideProductForm = () => {
        $('#hide_product_form').on('click', ()=> {
            $("#hide_product_form").hide();
            $(".show_product_form").show();
            $('#kt_apps_user_add_user').css("display", "none");
            $('#products_view_portlet').show(300);
        })
    }

    var showProductForm = () => {
        $('.show_product_form').on('click', ()=> {
            $(".show_product_form").hide();
            $("#hide_product_form").show();
            //formEl.attr("action", window.location.origin + "/add_product");
            $("input[name='_method']").val('POST');
            var btn = formEl.find('[data-ktwizard-type="action-submit"]');
            btn.text("Add to Store");

            $('#kt_apps_product_add_product_form')[0].reset();

            $(".preview").text("");
            $("#thumbnail").css("background-image", `url('/assets/media/files/jpg.svg')`);
            $("#thumbnail-preview").css("background-image", `url('/assets/media/files/jpg.svg')`);

            $('#products_view_portlet').hide(300);
            $('#kt_apps_user_add_user').css("display", "flex");
        })
    }

    var previewProductForm = () => {
        $(".kt-form input").on("keypress", (e) => {
            $(`#${$(e.currentTarget).data('name')}-preview`).text(`${e.currentTarget.value + e.key}`);
        })

        $("textarea").on("keypress", (e) => {
            $(`#${$(e.currentTarget).data('name')}-preview`).text(`${e.currentTarget.value + e.key}`);
        })
    }

    const searchFunction = ()=>{
      $("#searchForm").on('keypress', (e)=>{
        let search = e.currentTarget.value + e.key
        $("#searchResults").html("");
        if (search.length > 1){
          $.getJSON('/product/search', {product: search}, (result)=>{
            localStorage.setItem('products', JSON.stringify(result.products))
            result.products.forEach((e, i)=>{
              let product =  `<a href="javascript:productSelect(${e.id})" data-id="${e.id}" class="list-group-item list-group-item-action d-flex search-result">
              <img src="/storage/${e.images[0].name}" alt="" style="width: 50px; height: auto; object-fit: fill">
              <div class="pl-1">
              <div  style="font-size: 1.1em; font-weight: bold;">${e.name.substr(0, 30)}</div>
              <div style="font-size: 1.1em; font-weight: bold;">₵${e.price}</div>
              <div>${e.description.substr(0, 50)}...</div>
              </div>
              </a>`
              $("#searchResults").append(product);
            })
        })
        }
      })
    }

	return {
		// public functions
		init: function() {
            formEl = $('#kt_apps_product_add_product_form');
            //editForm = $('#edit_product_form');

            initWizard();
            initValidation();
            initSubmit();
            initKTAppsProductAdd();
            getProduct();
            //deleteProduct();
            hideProductForm();
            showProductForm();
            previewProductForm();
            searchFunction();
		}
	};
}();

const deleteSchool = (ids)=>{
  $.ajax(`/dashboard/schools`, {
      method: "DELETE",
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      data: JSON.stringify({ids: ids}),
      success: (response) => {
          ids.forEach((i) => {
              $(`#row-${i}`).remove();
          })
          $('#ajaxToast').toast('hide');
          showNotification(response.status, response.message);
      },
      error: (xhr, error, message) => {
          showNotification('error', xhr.responseJSON.message)
      },
      complete: ()=>{
          $("#confirmModal").modal('hide');
          $('#ajaxToast').toast('hide');
      }
  })
}


const deleteProduct = (url, id)=>{
    $.getJSON(url, {_method: 'delete'}, (result)=>{
        $("#confirmModal").modal('hide');
        if (result.success){
            $(`#product_row_${result.product.id}`).remove()
            swal.fire({
                "title": "Success",
                "text": result.message,
                "type": "success",
                "confirmButtonClass": "btn btn-secondary"
            });
        }
    })
}

const loadProduct = (product) => {
    const EXCLUDES = ['id', 'product_id', '_method', '_token', 'sizes[]', 'colors',
    'images[]', 'quick_panel_notifications_1', 'color', 'size', 
    'quick_panel_notifications_2','quick_panel_notifications_3', 
    'quick_panel_notifications_4']
    
    $("input[name='product_id']").val(product.id)
    
    $(".kt-form input").each((i, e) => {
      let key = $(e).attr('name')
      if (!EXCLUDES.includes(key)){
        $(`input[name='${key}']`).val(product[key])
      }
    })
    $("select[name='color']").html("<option>Select Color</option>")
    $("select[name='size']").html("<option>Select Size</option>")

    for (let c in product.colors){
      let colorOption = `<option value='${product.colors[c]}'>
      ${product.colors[c]}</option>`

      $("select[name='color']").append(colorOption)
    }

    for (let c in product.sizes){
      let sizeOption = `<option value='${product.sizes[c]}'>
      ${product.sizes[c]}</option>`

      $("select[name='size']").append(sizeOption)
    }

    $("textarea[name='description']").val(product.description);
    $("textarea[name='keywords']").val(product.keywords);

    $("#productImages").html("")
    for (let i in product.images){
      let imgBox = `<div class="col-xs-6 col-sm-4 col-md-2 card shadow-sm">
      <img class="img-fluid w-100" 
      src="/storage/${product.images[i].name}"
      style="object-fit: cover"></div>
      `
      $("#productImages").append(imgBox)
    }
    
}

const productSelect = (id)=>{
    let products = JSON.parse(localStorage.getItem('products'))
    let product = products.filter((e) => e.id == id)[0]
    loadProduct(product)
}
jQuery(() =>{
    KTAppProduct.init();
});
