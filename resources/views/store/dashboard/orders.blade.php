@extends('layouts.store_metronic')

@section('content')
<div class="kt-portlet">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Orders
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
                        <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <div class="row"><div class="col-sm-12"><table class="table table-striped- table-bordered table-hover table-checkable dataTable dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1184px;" style="font-size: 13px !important;">
                <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 60.25px;" aria-sort="ascending" aria-label="Order ID: activate to sort column descending">Order ID</th><th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 104.25px;" aria-label="Country: activate to sort column ascending">Country</th><th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 121.25px;" aria-label="Ship City: activate to sort column ascending">Ship City</th><th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 162.25px;" aria-label="Ship Address: activate to sort column ascending">Ship Address</th><th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 126.25px;" aria-label="Company Agent: activate to sort column ascending">Company Agent</th><th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 196.25px;" aria-label="Company Name: activate to sort column ascending">Company Name</th><th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 52.25px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 36.25px;" aria-label="Type: activate to sort column ascending">Type</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">0007-3230</td>
                        <td>Russia</td>
                        <td>Bilyarsk</td>
                        <td>5899 Basil Place</td>
                        <td>Ashley Blick</td>
                        <td>Cummings-Goodwin</td>
                        <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                        <td><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">0093-1016</td>
                        <td>Indonesia</td>
                        <td>Merdeka</td>
                        <td>3150 Cherokee Center</td>
                        <td>Gusti Clamp</td>
                        <td>Stokes Group</td>
                        <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                        <td><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">0093-5142</td>
                        <td>China</td>
                        <td>Jianggao</td>
                        <td>289 Badeau Alley</td>
                        <td>Otis Jobbins</td>
                        <td>Ruecker, Leffler and Abshire</td>
                        <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                        <td><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">0185-0130</td>
                        <td>China</td>
                        <td>Jiamachi</td>
                        <td>23 Walton Pass</td>
                        <td>Norri Foldes</td>
                        <td>Strosin, Nitzsche and Wisozk</td>
                        <td><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></td>
                        <td><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">0187-2201</td>
                        <td>Brazil</td>
                        <td>Rio das Ostras</td>
                        <td>5722 Buhler Place</td>
                        <td>Shaw Puvia</td>
                        <td>Veum LLC</td>
                        <td><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></td>
                        <td><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">0363-0724</td>
                        <td>Morocco</td>
                        <td>Temara</td>
                        <td>9550 Weeping Birch Crossing</td>
                        <td>Felix Nazaret</td>
                        <td>Waters, Quigley and Keeling</td>
                        <td><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></td>
                        <td><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></td>
                    </tr><tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">0404-0360</td>
                        <td>Colombia</td>
                        <td>San Carlos</td>
                        <td>38099 Ilene Hill</td>
                        <td>Freida Morby</td>
                        <td>Haley, Schamberger and Durgan</td>
                        <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span></td>
                        <td><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">10819-6003</td>
                        <td>France</td>
                        <td>Rivesaltes</td>
                        <td>4981 Springs Center</td>
                        <td>Mellisa Laurencot</td>
                        <td>Jacobs Group</td>
                        <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></td>
                        <td><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></td>
                    </tr><tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">11673-479</td>
                        <td>Brazil</td>
                        <td>Conceição das Alagoas</td>
                        <td>191 Stone Corner Road</td>
                        <td>Michaelina Plenderleith</td>
                        <td>Legros-Gleichner</td>
                        <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></td>
                        <td><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1" tabindex="0">15127-874</td>
                        <td>Tanzania</td>
                        <td>Nanganga</td>
                        <td>33 Anniversary Parkway</td>
                        <td>Magdaia Rotlauf</td>
                        <td>Hettinger, Medhurst and Heaney</td>
                        <td><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></td>
                        <td><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></td>
                    </tr></tbody>
                <tfoot>
                    <tr><th rowspan="1" colspan="1">Order ID</th><th rowspan="1" colspan="1">Country</th><th rowspan="1" colspan="1">Ship City</th><th rowspan="1" colspan="1">Ship Address</th><th rowspan="1" colspan="1">Company Agent</th><th rowspan="1" colspan="1">Company Name</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Type</th></tr>
                </tfoot>
            </table></div></div></div>

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
