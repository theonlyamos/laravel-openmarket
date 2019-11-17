@extends('layouts.store_metronic')

@section('content')
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-4">

            <!--begin:: Widgets/Trends-->
            <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Trends
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-send"></i>
                                            <span class="kt-nav__link-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                            <span class="kt-nav__link-text">Charts</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                            <span class="kt-nav__link-text">Members</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                    <div class="kt-widget4 kt-widget4--sticky">
                        <div class="kt-widget4__chart">
                            <canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
                        </div>
                        <div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__img kt-widget4__img--logo">
                                    <img src="{{asset('assets/media/client-logos/logo3.png')}}" alt="">
                                </div>
                                <div class="kt-widget4__info">
                                    <a href="#" class="kt-widget4__title">
                                        Phyton
                                    </a>
                                    <span class="kt-widget4__sub">
                                        A Programming Language
                                    </span>
                                </div>
                                <span class="kt-widget4__ext">
                                    <span class="kt-widget4__number kt-font-danger">+$17</span>
                                </span>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__img kt-widget4__img--logo">
                                    <img src="{{asset('assets/media/client-logos/logo1.png')}}" alt="">
                                </div>
                                <div class="kt-widget4__info">
                                    <a href="#" class="kt-widget4__title">
                                        FlyThemes
                                    </a>
                                    <span class="kt-widget4__sub">
                                        A Let's Fly Fast Again Language
                                    </span>
                                </div>
                                <span class="kt-widget4__ext">
                                    <span class="kt-widget4__number kt-font-danger">+$300</span>
                                </span>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__img kt-widget4__img--logo">
                                    <img src="{{asset('assets/media/client-logos/logo2.png')}}" alt="">
                                </div>
                                <div class="kt-widget4__info">
                                    <a href="#" class="kt-widget4__title">
                                        AirApp
                                    </a>
                                    <span class="kt-widget4__sub">
                                        Awesome App For Project Management
                                    </span>
                                </div>
                                <span class="kt-widget4__ext">
                                    <span class="kt-widget4__number kt-font-danger">+$6700</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Trends-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Sales Stats-->
            <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Sales Stats
                        </h3>
                    </div>
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
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Widget 6-->
                    <div class="kt-widget15">
                        <div class="kt-widget15__chart">
                            <canvas id="kt_chart_sales_stats" style="height:160px;"></canvas>
                        </div>
                        <div class="kt-widget15__items kt-margin-t-40">
                            <div class="row">
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            63%
                                        </span>
                                        <span class="kt-widget15__text">
                                            Sales Grow
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-widget15__chart-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            54%
                                        </span>
                                        <span class="kt-widget15__text">
                                            Orders Grow
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            41%
                                        </span>
                                        <span class="kt-widget15__text">
                                            Profit Grow
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            79%
                                        </span>
                                        <span class="kt-widget15__text">
                                            Member Grow
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="kt-widget15__desc">
                                        * lorem ipsum dolor sit amet consectetuer sediat elit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end::Widget 6-->
                </div>
            </div>

            <!--end:: Widgets/Sales Stats-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Top Locations-->
            <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Top Locations
                        </h3>
                    </div>
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
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget15">
                        <div class="kt-widget15__map">
                            <div id="kt_chart_latest_trends_map" style="height:320px;"></div>
                        </div>
                        <div class="kt-widget15__items kt-margin-t-30">
                            <div class="row">
                                <div class="col">

                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            63%
                                        </span>
                                        <span class="kt-widget15__text">
                                            London
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <!--end::widget item-->
                                </div>
                                <div class="col">

                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            54%
                                        </span>
                                        <span class="kt-widget15__text">
                                            Glasgow
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <!--end::widget item-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            41%
                                        </span>
                                        <span class="kt-widget15__text">
                                            Dublin
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <!--end::widget item-->
                                </div>
                                <div class="col">

                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
                                            79%
                                        </span>
                                        <span class="kt-widget15__text">
                                            Edinburgh
                                        </span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <!--end::widget item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Top Locations-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Exclusive Datatable Plugin
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-link"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
                                                <span class="kt-badge kt-badge--success">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <!--begin: Datatable -->
                    <div class="kt-datatable" id="kt_datatable_latest_orders"></div>

                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-4">

            <!--begin:: Widgets/Finance Summary-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Finance Summary
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
                            Latest
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Export Options
                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Activity</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-link"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support</span>
                                        <span class="kt-nav__link-badge">
                                            <span class="kt-badge kt-badge--success">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>

                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget12">
                        <div class="kt-widget12__content">
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Annual Companies Taxes EMS</span>
                                    <span class="kt-widget12__value">$500,000</span>
                                </div>
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Next Tax Review Date</span>
                                    <span class="kt-widget12__value">July 24,2017</span>
                                </div>
                            </div>
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Total Annual Profit Before Tax</span>
                                    <span class="kt-widget12__value">$3,800,000</span>
                                </div>
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Type Of Market Share</span>
                                    <span class="kt-widget12__value">Grossery</span>
                                </div>
                            </div>
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Avarage Product Price</span>
                                    <span class="kt-widget12__value">$60,70</span>
                                </div>
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Satisfication Rate</span>
                                    <span class="kt-widget12__progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="kt-widget12__stat">
                                            63%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Finance Summary-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Audit Log-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Latest Log
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab11_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab12_content" role="tab">
                                    Week
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab13_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab11_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab12_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab13_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Audit Log-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Blog-->
            <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                    <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url({{asset('assets/media/products/product4.jpg')}})">
                        <h3 class="kt-widget19__title kt-font-light">
                            Introducing New Feature
                        </h3>
                        <div class="kt-widget19__shadow"></div>
                        <div class="kt-widget19__labels">
                            <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Recent</a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget19__wrapper">
                        <div class="kt-widget19__content">
                            <div class="kt-widget19__userpic">
                                <img src="{{asset('assets/media/users/user1.jpg')}}" alt="">
                            </div>
                            <div class="kt-widget19__info">
                                <a href="#" class="kt-widget19__username">
                                    Anna Krox
                                </a>
                                <span class="kt-widget19__time">
                                    UX/UI Designer, Google
                                </span>
                            </div>
                            <div class="kt-widget19__stats">
                                <span class="kt-widget19__number kt-font-brand">
                                    18
                                </span>
                                <a href="#" class="kt-widget19__comment">
                                    Comments
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget19__text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
                        </div>
                    </div>
                    <div class="kt-widget19__action">
                        <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Blog-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-4">

            <!--begin:: Widgets/Download Files-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Download Files
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                            Latest
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Export Options
                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Activity</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-link"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support</span>
                                        <span class="kt-nav__link-badge">
                                            <span class="kt-badge kt-badge--success">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>

                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::k-widget4-->
                    <div class="kt-widget4">
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__pic kt-widget4__pic--icon">
                                <img src="{{asset('assets/media/files/doc.svg')}}" alt="">
                            </div>
                            <a href="#" class="kt-widget4__title">
                                Metronic Documentation
                            </a>
                            <div class="kt-widget4__tools">
                                <a href="#" class="btn btn-clean btn-icon btn-sm">
                                    <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__pic kt-widget4__pic--icon">
                                <img src="{{asset('assets/media/files/jpg.svg')}}" alt="">
                            </div>
                            <a href="#" class="kt-widget4__title">
                                Project Launch Event
                            </a>
                            <div class="kt-widget4__tools">
                                <a href="#" class="btn btn-clean btn-icon btn-sm">
                                    <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__pic kt-widget4__pic--icon">
                                <img src="{{asset('assets/media/files/pdf.svg')}}" alt="">
                            </div>
                            <a href="#" class="kt-widget4__title">
                                Full Developer Manual For 4.7
                            </a>
                            <div class="kt-widget4__tools">
                                <a href="#" class="btn btn-clean btn-icon btn-sm">
                                    <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__pic kt-widget4__pic--icon">
                                <img src="{{asset('assets/media/files/javascript.svg')}}" alt="">
                            </div>
                            <a href="#" class="kt-widget4__title">
                                Make JS Great Again
                            </a>
                            <div class="kt-widget4__tools">
                                <a href="#" class="btn btn-clean btn-icon btn-sm">
                                    <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__pic kt-widget4__pic--icon">
                                <img src="{{asset('assets/media/files/zip.svg')}}" alt="">
                            </div>
                            <a href="#" class="kt-widget4__title">
                                Download Ziped version OF 5.0
                            </a>
                            <div class="kt-widget4__tools">
                                <a href="#" class="btn btn-clean btn-icon btn-sm">
                                    <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__pic kt-widget4__pic--icon">
                                <img src="{{asset('assets/media/files/pdf.svg')}}" alt="">
                            </div>
                            <a href="#" class="kt-widget4__title">
                                Finance Report 2016/2017
                            </a>
                            <div class="kt-widget4__tools">
                                <a href="#" class="btn btn-clean btn-icon btn-sm">
                                    <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--end::Widget 9-->
                </div>
            </div>

            <!--end:: Widgets/Download Files-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/New Users-->
            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            New Users
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab1_content">
                            <div class="kt-widget4">
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_4.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Anna Strong
                                        </a>
                                        <p class="kt-widget4__text">
                                            Visual Designer,Google Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_14.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Milano Esco
                                        </a>
                                        <p class="kt-widget4__text">
                                            Product Designer, Apple Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_11.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_1.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Wiltor Delton
                                        </a>
                                        <p class="kt-widget4__text">
                                            Project Manager, Amazon Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_5.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Stone
                                        </a>
                                        <p class="kt-widget4__text">
                                            Visual Designer, Github Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab2_content">
                            <div class="kt-widget4">
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_2.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Kristika Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Product Designer,Apple Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_13.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Ron Silk
                                        </a>
                                        <p class="kt-widget4__text">
                                            Release Manager, Loop Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-brand">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_9.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-danger">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_2.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Wiltor Delton
                                        </a>
                                        <p class="kt-widget4__text">
                                            Project Manager, Amazon Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="{{asset('assets/media/users/100_8.jpg')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-info">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/New Users-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Last Updates-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Latest Updates
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                            Today
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Export Options
                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Activity</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-link"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support</span>
                                        <span class="kt-nav__link-badge">
                                            <span class="kt-badge kt-badge--success">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>

                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::widget 12-->
                    <div class="kt-widget4">
                        <div class="kt-widget4__item">
                            <span class="kt-widget4__icon">
                                <i class="flaticon-pie-chart-1 kt-font-info"></i>
                            </span>
                            <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                Metronic v6 has been arrived!
                            </a>
                            <span class="kt-widget4__number kt-font-info">+500</span>
                        </div>
                        <div class="kt-widget4__item">
                            <span class="kt-widget4__icon">
                                <i class="flaticon-safe-shield-protection  kt-font-success"></i>
                            </span>
                            <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                Metronic community meet-up 2019 in Rome.
                            </a>
                            <span class="kt-widget4__number kt-font-success">+1260</span>
                        </div>
                        <div class="kt-widget4__item">
                            <span class="kt-widget4__icon">
                                <i class="flaticon2-line-chart kt-font-danger"></i>
                            </span>
                            <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                Metronic Angular 7 version will be landing soon...
                            </a>
                            <span class="kt-widget4__number kt-font-danger">+1080</span>
                        </div>
                        <div class="kt-widget4__item">
                            <span class="kt-widget4__icon">
                                <i class="flaticon2-pie-chart-1 kt-font-primary"></i>
                            </span>
                            <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                ale! Purchase Metronic at 70% off for limited time
                            </a>
                            <span class="kt-widget4__number kt-font-primary">70% Off!</span>
                        </div>
                        <div class="kt-widget4__item">
                            <span class="kt-widget4__icon">
                                <i class="flaticon2-rocket kt-font-brand"></i>
                            </span>
                            <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                Metronic VueJS version is in progress. Stay tuned!
                            </a>
                            <span class="kt-widget4__number kt-font-brand">+134</span>
                        </div>
                        <div class="kt-widget4__item">
                            <span class="kt-widget4__icon">
                                <i class="flaticon2-notification kt-font-warning"></i>
                            </span>
                            <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                Black Friday! Purchase Metronic at ever lowest 90% off for limited time
                            </a>
                            <span class="kt-widget4__number kt-font-warning">70% Off!</span>
                        </div>
                        <div class="kt-widget4__item">
                            <span class="kt-widget4__icon">
                                <i class="flaticon2-file kt-font-success"></i>
                            </span>
                            <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                Metronic React version is in progress.
                            </a>
                            <span class="kt-widget4__number kt-font-success">+13%</span>
                        </div>
                    </div>

                    <!--end::Widget 12-->
                </div>
            </div>

            <!--end:: Widgets/Last Updates-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-8">

            <!--begin:: Widgets/Best Sellers-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Best Sellers
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
                                    Latest
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
                                    Month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
                                    All time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                            <div class="kt-widget5">
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product27.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Great Logo Designn
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Keenthemes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">19,200</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1046</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product22.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Branding Mockup
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic bootstrap themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">24,583</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">3809</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product15.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Awesome Mobile App
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.Lorem Ipsum Amet
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">210,054</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1103</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget5_tab2_content">
                            <div class="kt-widget5">
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product10.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Branding Mockup
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic bootstrap themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">24,583</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">3809</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product11.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Awesome Mobile App
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.Lorem Ipsum Amet
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">210,054</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1103</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product6.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Great Logo Designn
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Keenthemes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">19,200</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1046</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget5_tab3_content">
                            <div class="kt-widget5">
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product11.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Awesome Mobile App
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.Lorem Ipsum Amet
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">210,054</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1103</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product6.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Great Logo Designn
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Keenthemes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">19,200</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1046</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="{{asset('assets/media/products/product10.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Branding Mockup
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic bootstrap themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">24,583</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">3809</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Best Sellers-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Company Summary-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Company Summary
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
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
                <div class="kt-portlet__body">
                    <div class="kt-widget13">
                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                Company Name
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                Loop Inc.
                            </span>
                        </div>
                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc kt-align-right">
                                Annual Revenue:
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                $520,000
                            </span>
                        </div>
                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                Business Description:
                            </span>
                            <span class="kt-widget13__text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </span>
                        </div>
                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                Employee Amount:
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                1,300
                            </span>
                        </div>
                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                Emal:
                            </span>
                            <span class="kt-widget13__text">
                                supporet@keenthemes.com
                            </span>
                        </div>
                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                Phone:
                            </span>
                            <span class="kt-widget13__text  kt-font-brand kt-widget13__text--bold">
                                (0) 123 456 78 90
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Company Summary-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-8">

            <!--begin:: Widgets/User Progress -->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            User Progress
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget31_tab1_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">
                                    Week
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget31_tab1_content">
                            <div class="kt-widget31">
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic">
                                            <img src="{{asset('assets/media/users/100_4.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Anna Strong
                                            </a>
                                            <p class="kt-widget31__text">
                                                Visual Designer,Google Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <a href="#" class="kt-widget31__stats">
                                                <span>63%</span>
                                                <span>London</span>
                                            </a>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic">
                                            <img src="{{asset('assets/media/users/100_14.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Milano Esco
                                            </a>
                                            <p class="kt-widget31__text">
                                                Product Designer, Apple Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <a href="#" class="kt-widget31__stats">
                                                <span>33%</span>
                                                <span>Paris</span>
                                            </a>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic kt-widget4__pic--pic">
                                            <img src="{{asset('assets/media/users/100_11.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Nick Bold
                                            </a>
                                            <p class="kt-widget31__text">
                                                Web Developer, Facebook Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <a href="#" class="kt-widget31__stats">
                                                <span>13%</span>
                                                <span>London</span>
                                            </a>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic kt-widget4__pic--pic">
                                            <img src="{{asset('assets/media/users/100_1.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Wiltor Delton
                                            </a>
                                            <p class="kt-widget31__text">
                                                Project Manager, Amazon Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <div class="kt-widget31__stats">
                                                <span>93%</span>
                                                <span>New York</span>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic">
                                            <img src="{{asset('assets/media/users/100_6.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Sam Stone
                                            </a>
                                            <p class="kt-widget31__text">
                                                Project Manager, Kilpo Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <div class="kt-widget31__stats">
                                                <span>50%</span>
                                                <span>New York</span>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget31_tab2_content">
                            <div class="kt-widget31">
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic kt-widget4__pic--pic">
                                            <img src="{{asset('assets/media/users/100_11.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Nick Bold
                                            </a>
                                            <p class="kt-widget31__text">
                                                Web Developer, Facebook Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <a href="#" class="kt-widget31__stats">
                                                <span>13%</span>
                                                <span>London</span>
                                            </a>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic kt-widget4__pic--pic">
                                            <img src="{{asset('assets/media/users/100_1.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Wiltor Delton
                                            </a>
                                            <p class="kt-widget31__text">
                                                Project Manager, Amazon Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <div class="kt-widget31__stats">
                                                <span>93%</span>
                                                <span>New York</span>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic">
                                            <img src="{{asset('assets/media/users/100_14.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Milano Esco
                                            </a>
                                            <p class="kt-widget31__text">
                                                Product Designer, Apple Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <a href="#" class="kt-widget31__stats">
                                                <span>33%</span>
                                                <span>Paris</span>
                                            </a>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic">
                                            <img src="{{asset('assets/media/users/100_6.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Sam Stone
                                            </a>
                                            <p class="kt-widget31__text">
                                                Project Manager, Kilpo Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <div class="kt-widget31__stats">
                                                <span>50%</span>
                                                <span>New York</span>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                                <div class="kt-widget31__item">
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__pic">
                                            <img src="{{asset('assets/media/users/100_4.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget31__info">
                                            <a href="#" class="kt-widget31__username">
                                                Anna Strong
                                            </a>
                                            <p class="kt-widget31__text">
                                                Visual Designer,Google Inc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__content">
                                        <div class="kt-widget31__progress">
                                            <a href="#" class="kt-widget31__stats">
                                                <span>63%</span>
                                                <span>London</span>
                                            </a>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/User Progress -->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Sales States-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Sales Stats
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-send"></i>
                                            <span class="kt-nav__link-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                            <span class="kt-nav__link-text">Charts</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                            <span class="kt-nav__link-text">Members</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget6">
                        <div class="kt-widget6__head">
                            <div class="kt-widget6__item">
                                <span>Sceduled</span>
                                <span>Count</span>
                                <span>Amount</span>
                            </div>
                        </div>
                        <div class="kt-widget6__body">
                            <div class="kt-widget6__item">
                                <span>16/13/17</span>
                                <span>67</span>
                                <span class="kt-font-success kt-font-bold">$14,740</span>
                            </div>
                            <div class="kt-widget6__item">
                                <span>02/28/17</span>
                                <span>120</span>
                                <span class="kt-font-brand kt-font-bold">$11,002</span>
                            </div>
                            <div class="kt-widget6__item">
                                <span>03/06/17</span>
                                <span>32</span>
                                <span class="kt-font-warning kt-font-bold">$10,900</span>
                            </div>
                            <div class="kt-widget6__item">
                                <span>10/21/17</span>
                                <span>130</span>
                                <span class="kt-font-danger kt-font-bold">$14,740</span>
                            </div>
                            <div class="kt-widget6__item">
                                <span>01/02/17</span>
                                <span>5</span>
                                <span class="kt-font-info kt-font-bold">$18,540</span>
                            </div>
                            <div class="kt-widget6__item">
                                <span>03/06/17</span>
                                <span>32</span>
                                <span class="kt-font-danger kt-font-bold">$10,900</span>
                            </div>
                            <div class="kt-widget6__item">
                                <span>12/31/17</span>
                                <span>201</span>
                                <span class="kt-font-success kt-font-bold">$25,609</span>
                            </div>
                        </div>
                        <div class="kt-widget6__foot">
                            <div class="kt-widget6__action kt-align-right">
                                <a href="#" class="btn btn-label-brand btn-sm btn-bold">Export...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Sales States-->
        </div>
    </div>

    <!--End::Section-->
@endsection
