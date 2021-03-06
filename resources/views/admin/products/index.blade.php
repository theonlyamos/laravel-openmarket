@extends('layouts.admin_metronic')

@section('styles')
<link href="{{asset('assets/css/demo3/pages/general/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="first" style="display: flex;">

    <!--begin: Form Wizard Nav -->
    <div class="kt-wizard-v4__nav">
        <div class="kt-wizard-v4__nav-items nav">
            <div class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step"
                data-ktwizard-state="pending">
                <div class="kt-wizard-v4__nav-body">
                    <div class="kt-wizard-v4__nav-number">
                        1
                    </div>
                    <div class="kt-wizard-v4__nav-label">
                        <div class="kt-wizard-v4__nav-label-desc">
                            Product details
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step"
                data-ktwizard-state="pending">
                <div class="kt-wizard-v4__nav-body">
                    <div class="kt-wizard-v4__nav-number">
                        2
                    </div>
                    <div class="kt-wizard-v4__nav-label">
                        <div class="kt-wizard-v4__nav-label-desc">
                            Features & Keywords
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step"
                data-ktwizard-state="pending">
                <div class="kt-wizard-v4__nav-body">
                    <div class="kt-wizard-v4__nav-number">
                        3
                    </div>
                    <div class="kt-wizard-v4__nav-label">
                        <div class="kt-wizard-v4__nav-label-desc">
                            Product images
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step"
                data-ktwizard-state="current">
                <div class="kt-wizard-v4__nav-body">
                    <div class="kt-wizard-v4__nav-number">
                        4
                    </div>
                    <div class="kt-wizard-v4__nav-label">
                        <div class="kt-wizard-v4__nav-label-desc">
                            Review and Submit
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end: Form Wizard Nav -->
    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-grid">
                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                    <!--begin: Form Wizard Form-->
                    <form class="kt-form pt-0" style="width: 90%" id="kt_apps_product_add_product_form" novalidate="novalidate"
                        method="POST" action="{{route('admin.product.create')}}" enctype="multipart/form-data">
                        @method('_POST')
                        @csrf
                        <!--begin: Form Wizard Step 1-->
                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                            data-ktwizard-state="pending">
                            <div class="kt-section kt-section--first mb-0">
                                <div class="kt-wizard-v4__form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <div class="form-group col-md-9">
                                                        <label>Product Name</label>
                                                        <input class="form-control" type="text" name="name" value="Skull Candy"
                                                            data-name="name" required>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Product Price</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">{{__('default.currency')}}</span>
                                                            </div>
                                                            <input type="number" class="form-control" name="price"
                                                                data-name="price" value="22">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Product Category</label>

                                                        <input type="text" class="form-control" placeholder="Category"
                                                            name="category" data-name="category" value="Phone" required>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Product Brand</label>

                                                        <input type="text" class="form-control" placeholder="Brand"
                                                            data-name="brand" name="brand">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label>Height</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="height"
                                                                data-name="height" value="">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">{{__('metre(s)')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Width</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="width"
                                                                data-name="width" value="">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">{{__('metre(s)')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Breadth</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="breadtg"
                                                                data-name="breadth" value="">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">{{__('metre(s)')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label>Weight</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="weight"
                                                                data-name="weight" value="">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">{{__('kg')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Volume</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="width"
                                                                data-name="width" value="">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text">{{__('litre(s)')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Form Wizard Step 1-->

                        <!--begin: Form Wizard Step 2-->
                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                            data-ktwizard-state="pending">
                            <div class="kt-section kt-section mb-0">
                                <div class="kt-wizard-v4__form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Colors</label>
                                                        <input type="text" class="form-control" name="color"
                                                            data-name="color" value="" placeholder="E.g: red, green, blue">

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Sizes</label>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="size['s']" data-name="size['s']" id="size['s']">
                                                                <label class="custom-control-label" for="size['s']">Small (S)</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="size['m']" data-name="size['m']" id="size['m']">
                                                                <label class="custom-control-label" for="size['m']">Medium (M)</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="size['l']" data-name="size['l']" id="size['l']">
                                                                <label class="custom-control-label" for="size['l']">Large (L)</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="size['xl']" data-name="size['sl']" id="size['sl']">
                                                                <label class="custom-control-label" for="size['sl']">Extra Large (XL)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Product Description</label>

                                                        <textarea class="form-control" rows="5" name="description"
                                                            data-name="description" required minlength="30">Hello World Hello World Hello World Hello World Hello World Hello World</textarea>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Keywords</label>

                                                        <textarea class="form-control" rows="5" name="keywords"
                                                            data-name="keywords"
                                                            placeholder="Example: electronics, phone, infinix, hot 8, etc..."
                                                            required>Hello World Hello World Hello World Hello World Hello World</textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Form Wizard Step 2-->

                        <!--begin: Form Wizard Step 3-->
                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                        data-ktwizard-state="current">
                            <div class="kt-section mb-0">
                                <div class="kt-wizard-v4__form">
                                    <div class="form-group row mb-0 justify-content-start" id="product_images_preview">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                                id="kt_apps_user_add_avatar">
                                                <div class="kt-avatar__holder" id="thumbnailPreview"
                                                    style="background-image: url(&quot;/assets/media/files/jpg.svg&quot;); background-position: center; width: 250px; max-width: 100%; height: 300px; max-height: 100vh;">
                                                </div>
                                                <label class="kt-avatar__upload p-5"
                                                    data-toggle="kt-tooltip" title=""
                                                    data-original-title="Add product images"
                                                    style="top: 50%; right: 50%; transform: translate(50%, -50%)">
                                                    <i class="fa fa-plus fa-3x"></i>
                                                    <input type="file" name="images[]" id="productImagesSelect"
                                                        accept="image/*" onchange="handleFiles(this)">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title=""
                                                    data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end: Form Wizard Step 3-->

                        <!--begin: Form Wizard Step 4-->

                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                            <div class="kt-heading kt-heading--md">Review your Details and Submit
                            </div>
                            <div class="kt-form__section">
                                <div class="kt-wizard-v4__review">
                                    <div class="kt-wizard-v4__review-item">
                                        <div class="kt-wizard-v4__review-title">
                                            Product Details
                                        </div>
                                        <div class="kt-wizard-v4__review-content">
                                            <b>Name:</b> <span id="name-preview"></span>
                                            <br> <b>Price:</b> {{__('default.currency')}}<span class="preview"
                                                id="price-preview"></span>
                                            <br> <b>Category:</b> <span class="preview" id="category-preview"></span>
                                            <br> <b>Brand:</b> <span class="preview" id="brand-preview"></span>
                                        </div>
                                    </div>
                                    <div class="kt-wizard-v4__review-item">
                                        <div class="kt-wizard-v4__review-title">
                                            Product Description, Features and Keywords
                                        </div>
                                        <div class="kt-wizard-v4__review-content">
                                            <b>Description:</b> <span class="preview" id="description-preview"></span>
                                            <br> <b>Features:</b> <span class="preview" id="features-preview"></span>
                                            <br> <b>Keywords:</b> <span class="preview" id="keywords-preview"></span>
                                        </div>
                                    </div>
                                    <div class="kt-wizard-v4__review-item">
                                        <div class="kt-wizard-v4__review-title">
                                            Product Images
                                        </div>
                                        <div class="kt-wizard-v4__review-content">
                                            <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                                id="kt_apps_product_add_product_avatar">
                                                <div class="kt-avatar__holder" id="images_preview"
                                                    style="background-image: url(&quot;/assets/media/files/jpg.svg&quot;); background-position: center; width: 250px; max-width: 100%; height: 300px; max-height: 100vh;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end: Form Wizard Step 4-->

                        <!--begin: Form Actions -->
                        <div class="kt-form__actions">
                            <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                data-ktwizard-type="action-prev">
                                Previous
                            </div>
                            <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                data-ktwizard-type="action-submit">
                                Submit
                            </div>
                            <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                data-ktwizard-type="action-next">
                                Next Step
                            </div>
                        </div>

                        <!--end: Form Actions -->
                    </form>

                    <!--end: Form Wizard Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kt-portlet" id="products_view_portlet">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand {{$pages[$title]['icon']}}"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                {{Str::title($pages[$title]["name"])}}
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <button type="button" class="btn btn-brand btn-icon-sm show_product_form" aria-expanded="false">
                    <i class="flaticon2-plus"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped- table-bordered table-hover table-checkable dataTable dtr-inline"
                        id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1184px;"
                        style="font-size: 13px !important;">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 60.25px;" aria-sort="descending"
                                    aria-label="Product ID: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 104.25px;" aria-label="Name: activate to sort column descending">
                                    Name</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 121.25px;"
                                    aria-label="Product Image: activate to sort column descending">
                                    Image</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 162.25px;" aria-label="Category: activate to sort column descending">
                                    Category</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 126.25px;"
                                    aria-label="Description: activate to sort column descending">Description</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 196.25px;" aria-label="Features: activate to sort column descending">
                                    Features</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 52.25px;" aria-label="Price: activate to sort column descending">
                                    Price</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 36.25px;" aria-label="Type: activate to sort column descending">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr id="{{'product_row_'.$item->id}}">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td><a href="{{asset('storage/'.$item->images[0]->name)}}" target="_blank">
                                        <img src='{{asset("storage/".$item->images[0]->name)}}' alt="{{$item->name}}"
                                            style="width: 50px; height: 50px; cursor: zoom-in;object-fit:contain">
                                    </a>
                                </td>
                                <td>{{$item->category}}</td>
                                <td>{{Str::limit($item->description, 40)}}</td>
                                <td>{{Str::limit($item->features, 40)}}</td>
                                <td>{{__("default.currency")}}{{$item->price}}</td>
                                <td>
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon-more-1"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="kt-nav">
                                                    <li class="kt-nav__item">
                                                        <a href="{{route('admin.product.get', $item->id)}}"
                                                            class="kt-nav__link edit" target="_blank">
                                                            <i class="kt-nav__link-icon flaticon-eye"></i>
                                                            <span class="kt-nav__link-text">Update</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="{{route('admin.product.destroy', $item->id)}}" class="kt-nav__link delete text-danger">
                                                            <i class="kt-nav__link-icon flaticon-delete"></i>
                                                            <span class="kt-nav__link-text">Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Image</th>
                                <th rowspan="1" colspan="1">Category</th>
                                <th rowspan="1" colspan="1">Description</th>
                                <th rowspan="1" colspan="1">Features</th>
                                <th rowspan="1" colspan="1">Status</th>
                                <th rowspan="1" colspan="1">Type</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!--end: Datatable -->
    </div>
</div>
@endsection

@section('scripts')
<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/demo3/pages/crud/datatables/extensions/buttons.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/demo3/pages/custom/apps/user/products.js')}}" type="text/javascript"></script>
<script src="{{asset('js/image_preview.js')}}" type="text/javascript"></script>
<!--end::Page Scripts -->

@endsection
