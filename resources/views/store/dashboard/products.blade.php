@extends('layouts.store_metronic')

@section('styles')
<link href="{{asset('assets/css/demo3/pages/general/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel"
    style="display: none; padding-right: 15px;" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Product Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="first">

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
                                data-ktwizard-state="pending">
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
                        <div class="kt-scroll ps ps--active-y" data-scroll="true" data-height="450"
                            style="height: 100vh; overflow: hidden;">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="kt-grid">
                                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                        <!--begin: Form Wizard Form-->
                                        <form class="kt-form pt-0" id="kt_apps_user_add_user_form"
                                            novalidate="novalidate" method="POST" action="{{route('add_product', $id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="store_id" value="{{$id}}" required>
                                            <!--begin: Form Wizard Step 1-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                                data-ktwizard-state="current">
                                                <div class="kt-section kt-section--first mb-0">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-lg-3 col-form-label">Product
                                                                            Name</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text"
                                                                                name="name" value="" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-lg-3 col-form-label">Product
                                                                            Price</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"><span
                                                                                        class="input-group-text">&dollar;</span>
                                                                                </div>
                                                                                <input type="number" class="form-control"
                                                                                     name="price" value=""  required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-lg-3 col-form-label">Product
                                                                            Category</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Category" name="category" value="" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-lg-3 col-form-label">Product
                                                                            Description</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <textarea class="form-control" rows="4"
                                                                                name="description"  required></textarea>
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
                                                data-ktwizard-state="current">
                                                <div class="kt-section kt-section mb-0">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-lg-3 col-form-label">Features</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <textarea class="form-control" rows="5"
                                                                                name="features" placeholder="Example: color: white, size: 3, etc..." required></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-lg-3 col-form-label">Keywords</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <textarea class="form-control" rows="5"
                                                                                name="keywords" placeholder="Example: electronics, phone, infinix, hot 8, etc..." required></textarea>
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
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                <div class="kt-section mb-0">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="form-group row mb-0 justify-content-center">
                                                        <!--
                                                            <div class="col-xl-3 col-lg-3 col-form-label">
                                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                                                     id="productImages">
                                                                    <div class="kt-avatar__holder"
                                                                        style="background-image: url(&quot;/assets/media/files/jpg.svg&quot;); width: 80px; height: 80px;">
                                                                    </div>
                                                                    <label class="kt-avatar__upload"
                                                                        data-toggle="kt-tooltip" title=""
                                                                        data-original-title="Add more product images"
                                                                        style="top: 25px; right: 25px;">
                                                                        <i class="fa fa-plus"></i>
                                                                        <input type="file" name="images[]" id="productImagesSelect"
                                                                            accept="image/*" onchange="handleFiles(this)">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        -->
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                                                    id="kt_apps_user_add_avatar">
                                                                    <div class="kt-avatar__holder" id="thumbnail"
                                                                        style="background-image: url(&quot;/assets/media/files/jpg.svg&quot;); background-position: center; width: 250px; max-width: 100%; height: 300px; max-height: 100vh;">
                                                                    </div>
                                                                    <label class="kt-avatar__upload"
                                                                        data-toggle="kt-tooltip" title=""
                                                                        data-original-title="Select Product Images">
                                                                        <i class="fa fa-pen"></i>
                                                                        <input type="file" name="thumbnail" id="thumbnailSelect"
                                                                            accept="image/*" required  onchange="handleFiles(this)">
                                                                    </label>
                                                                    <span class="kt-avatar__cancel"
                                                                        data-toggle="kt-tooltip" title=""
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
                                                                Your Account Details
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                John Wick
                                                                <br> Phone: +61412345678
                                                                <br> Email: johnwick@reeves.com
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                Your Address Details
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Address Line 1
                                                                <br> Address Line 2
                                                                <br> Melbourne 3000, VIC, Australia
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                Payment Details
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Card Number: xxxx xxxx xxxx 1111
                                                                <br> Card Name: John Wick
                                                                <br> Card Expiry: 01/21
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
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kt-portlet">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Products
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <a href="#" class="btn btn-clean btn-icon-sm">
                    <i class="la la-long-arrow-left"></i>
                    Back
                </a>
                &nbsp;
                <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="modal"
                    data-target="#add_product_modal" aria-haspopup="true" aria-expanded="false">
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
                                    style="width: 60.25px;" aria-sort="ascending"
                                    aria-label="Order ID: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 104.25px;" aria-label="Country: activate to sort column ascending">
                                    Name</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 121.25px;" aria-label="Ship City: activate to sort column ascending">
                                    Image</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 162.25px;"
                                    aria-label="Ship Address: activate to sort column ascending">Category</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 126.25px;"
                                    aria-label="Company Agent: activate to sort column ascending">Description</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 196.25px;"
                                    aria-label="Company Name: activate to sort column ascending">Features</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 52.25px;" aria-label="Status: activate to sort column ascending">
                                    Status</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 36.25px;" aria-label="Type: activate to sort column ascending">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><a href="{{asset('storage/app/'.$item->thumbnail)}}" target="_blank"><i class="fa fa-edit"></i></a></td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->features}}</td>
                                    <td>
                                        @if ($item->status)
                                            <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">full</span>
                                        @else
                                            <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">out of stock</span>
                                        @endif
                                    </td>
                                    <td>
                                            <div class="kt-portlet__head-toolbar">
                                                    <div class="dropdown dropdown-inline">
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="flaticon-more-1"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">Finance</span>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                                                        <span class="kt-nav__link-text">Statistics</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                                        <span class="kt-nav__link-text">Events</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                                                        <span class="kt-nav__link-text">Reports</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">HR</span>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                                        <span class="kt-nav__link-text">Notifications</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                                                        <span class="kt-nav__link-text">Files</span>
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
<script src="{{asset('assets/js/demo3/pages/custom/apps/user/add-product.js')}}" type="text/javascript"></script>
<script src="{{asset('js/image_preview.js')}}" type="text/javascript"></script>
<!--end::Page Scripts -->

@endsection
