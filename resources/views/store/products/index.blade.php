@extends('layouts.store_metronic')

@section('styles')
<link href="{{ asset('assets/css/demo3/pages/general/wizard/wizard-4.css') }}"
    rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="first" style="display: none;">

    <!--begin: Form Wizard Nav -->
    <div class="kt-wizard-v4__nav">
        <div class="kt-wizard-v4__nav-items nav">
            <div class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step"
                data-ktwizard-state="current">
                <div class="kt-wizard-v4__nav-body">
                    <div class="kt-wizard-v4__nav-number">
                        1
                    </div>
                    <div class="kt-wizard-v4__nav-label">
                        <div class="kt-wizard-v4__nav-label-desc">
                            Add Product
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

                    <div class="row w-100">
                        <div class="col-md-4 border-right">
                            <!--begin: Search Input-->
                            <div class="card p-0 mt-5 w-100 rounded-0 border-0 shadow">
                                <div class="card-header">
                                    <label>Search Product</label>
                                </div>
                                <div class="card-body p-0">
                                    <input class="form-control border-0 search-form" autocomplete="off" autofocus type="text" id="searchForm">

                                    <div class="list-group list-group-flush" id="searchResults">

                                    </div>
                                </div>
                            </div>
                            <!--end: Search Input-->
                        </div>
                        <div class="col-md-8">
                            <!--begin: Form Wizard Form-->
                            <form class="kt-form pt-0" style="width: 90%" id="kt_apps_product_add_product_form" novalidate="novalidate"
                                method="POST" action="{{ route('store.product.create') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="store_id"
                                    value="{{ Auth::guard('store')->user()->id }}" required>
                                <!--begin: Form Wizard Step 1-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                    data-ktwizard-state="current">
                                    <div class="kt-section kt-section--first mb-0">
                                        <div class="kt-wizard-v4__form">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="kt-section__body">
                                                        <div class="row">
                                                            <div class="form-group col-md-9">
                                                                <label>Product Name</label>
                                                                <input class="form-control bg-light" type="text" name="name" value=""
                                                                    data-name="name" readonly>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label>Product Price</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text">{{__('default.currency')}}</span>
                                                                    </div>
                                                                    <input type="number" class="form-control" name="price"
                                                                        data-name="price" value="">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Product Category</label>

                                                                <input type="text" class="form-control bg-light" placeholder="Category"
                                                                    name="category" data-name="category" value="" readonly>

                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Product Brand</label>

                                                                <input type="text" class="form-control bg-light" placeholder="Brand"
                                                                    data-name="brand" name="brand" readonly>

                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Color</label>
                                                                <select name="color" id="color" class="custom-select">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Size</label>
                                                                <select name="size" id="size" class="custom-select">
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Height</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control bg-light" name="height"
                                                                        data-name="height" value="" readonly>
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text">{{__('metre(s)')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Width</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control bg-light" name="width"
                                                                        data-name="width" value="" readonly>
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text">{{__('metre(s)')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Breadth</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control bg-light" name="breadth"
                                                                        data-name="breadth" value="" readonly>
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text">{{__('metre(s)')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Weight</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control bg-light" name="weight"
                                                                        data-name="weight" value="" readonly>
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text">{{__('kg')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-4">
                                                                <label>Volume</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control bg-light" name="volume"
                                                                        data-name="volume" value="" readonly>
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text">{{__('litre(s)')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label>Product Description</label>

                                                                            <textarea class="form-control bg-light" rows="5" name="description"
                                                                                data-name="description" readonly minlength="30"></textarea>

                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>Keywords</label>

                                                                            <textarea class="form-control bg-light" rows="5" name="keywords"
                                                                                data-name="keywords"
                                                                                placeholder="Example: electronics, phone, infinix, hot 8, etc..."
                                                                                readonly></textarea>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pl-3" id="productImages">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Form Wizard Step 1-->

                                <!--begin: Form Actions -->
                                <div class="kt-form__actions d-flex justify-content-end">
                                    <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                        data-ktwizard-type="action-submit">
                                        Add to store
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
    </div>
</div>
<div class="kt-portlet" id="products_view_portlet">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand {{ $pages[$title]['icon'] }}"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                {{ Str::title($pages[$title]["name"]) }}
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
                            @foreach($products as $item)
                                <tr id="{{ 'product_row_'.$item->id }}">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td><a href="{{ asset('storage/'.$item->product->images[0]->name) }}"
                                            target="_blank">
                                            <img src='{{ asset("storage/".$item->product->images[0]->name) }}'
                                                alt="{{ $item->name }}"
                                                style="width: 50px; height: 50px; cursor: zoom-in;object-fit:contain">
                                        </a>
                                    </td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ Str::limit($item->description, 40) }}</td>
                                    <td>{{ Str::limit($item->features, 40) }}</td>
                                    <td>{{ __("default.currency") }}{{ $item->price }}</td>
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
                                                            <a href="{{ route('admin.product.get', $item->id) }}"
                                                                class="kt-nav__link edit" target="_blank">
                                                                <i class="kt-nav__link-icon flaticon-eye"></i>
                                                                <span class="kt-nav__link-text">Update</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="{{ route('admin.product.destroy', $item->id) }}"
                                                                class="kt-nav__link delete text-danger">
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
<script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}"
    type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('assets/js/demo3/pages/crud/datatables/extensions/buttons.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('assets/js/demo3/pages/custom/apps/store/products.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('js/image_preview.js') }}" type="text/javascript"></script>
<!--end::Page Scripts -->

@endsection
