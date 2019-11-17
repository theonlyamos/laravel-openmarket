@extends('layouts.store_metronic')

@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Customers
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <a href="#" class="btn btn-clean btn-icon-sm">
                    <i class="la la-long-arrow-left"></i>
                    Back
                </a>
                &nbsp;
                <div class="dropdown dropdown-inline">
                    <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="flaticon2-plus"></i> Add New
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="kt-nav">
                            <li class="kt-nav__section kt-nav__section--first">
                                <span class="kt-nav__section-text">Choose an action:</span>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                    <span class="kt-nav__link-text">Reservations</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                    <span class="kt-nav__link-text">Appointments</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-bell-alarm-symbol"></i>
                                    <span class="kt-nav__link-text">Reminders</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-contract"></i>
                                    <span class="kt-nav__link-text">Announcements</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-shopping-cart-1"></i>
                                    <span class="kt-nav__link-text">Orders</span>
                                </a>
                            </li>
                            <li class="kt-nav__separator kt-nav__separator--fit">
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-rocket-1"></i>
                                    <span class="kt-nav__link-text">Projects</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-chat-1"></i>
                                    <span class="kt-nav__link-text">User Feedbacks</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                                    aria-label="Order ID: activate to sort column descending">Order ID</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 104.25px;" aria-label="Country: activate to sort column ascending">
                                    Country</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 121.25px;" aria-label="Ship City: activate to sort column ascending">
                                    Ship City</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 162.25px;"
                                    aria-label="Ship Address: activate to sort column ascending">Ship Address</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 126.25px;"
                                    aria-label="Company Agent: activate to sort column ascending">Company Agent</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 196.25px;"
                                    aria-label="Company Name: activate to sort column ascending">Company Name</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 52.25px;" aria-label="Status: activate to sort column ascending">
                                    Status</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"
                                    style="width: 36.25px;" aria-label="Type: activate to sort column ascending">Type
                                </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Order ID</th>
                                <th rowspan="1" colspan="1">Country</th>
                                <th rowspan="1" colspan="1">Ship City</th>
                                <th rowspan="1" colspan="1">Ship Address</th>
                                <th rowspan="1" colspan="1">Company Agent</th>
                                <th rowspan="1" colspan="1">Company Name</th>
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
<!--end::Page Scripts -->

@endsection
