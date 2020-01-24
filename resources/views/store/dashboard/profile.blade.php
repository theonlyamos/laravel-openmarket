@extends('layouts.store_metronic')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="kt-portlet kt-portlet--tabs">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_1" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_2" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg> Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_3" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"></path>
                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"></path>
                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg> Change Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_4" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" id="Combined-Shape" fill="#000000"></path>
                                </g>
                            </svg> Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="kt-portlet__body">
            <form action="{{route('store.profile.update')}}" method="POST">
                @csrf
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_apps_user_edit_tab_1" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_apps_user_add_avatar">
                                                    <div class="kt-avatar__holder" id="thumbnail" style="background-image: url(&quot;/assets/media/files/jpg.svg&quot;);"></div>
                                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen"></i>
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" onchange="handleFiles(this)">
                                                    </label>
                                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                        <i class="fa fa-times"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Store Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="name" value="{{Auth::guard('store')->user()->name}}">
                                                <span class="form-text text-muted">Name of the store.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Location</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="location" value="{{Auth::guard('store')->user()->location}}">
                                                <span class="form-text text-muted">GPS coordinates (longitude, latitude)</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="address" value="{{Auth::guard('store')->user()->address}}">
                                                <span class="form-text text-muted">Address of where the store is located. (Street Name, postal code, district)</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Region</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="region" value="{{Auth::guard('store')->user()->region}}">
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">City</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="city" value="{{Auth::guard('store')->user()->city}}">
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Postal Code</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="postal" value="{{Auth::guard('store')->user()->postal}}">
                                                <span class="form-text text-muted">Can be gotten with GhanaPost(Mobile App)</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                    <input type="text" class="form-control" name="phone" value="" placeholder="Phone" aria-describedby="basic-addon1">
                                                </div>
                                                <span class="form-text text-muted">We'll never share your contact details with anyone else.</span>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Website</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="website" placeholder="website" value="">
                                                    <div class="input-group-append"><span class="input-group-text">.com</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_apps_user_edit_tab_2" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Account:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                    <input type="text" class="form-control" value="{{Auth::guard('store')->user()->email}}" placeholder="Email" aria-describedby="basic-addon1">
                                                </div>
                                                <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select class="form-control">
                                                    <option>Select Language...</option>
                                                    <option value="id">Bahasa Indonesia - Indonesian</option>
                                                    <option value="msa">Bahasa Melayu - Malay</option>
                                                    <option value="ca">Català - Catalan</option>
                                                    <option value="cs">Čeština - Czech</option>
                                                    <option value="da">Dansk - Danish</option>
                                                    <option value="de">Deutsch - German</option>
                                                    <option value="en" selected="">English</option>
                                                    <option value="en-gb">English UK - British English</option>
                                                    <option value="es">Español - Spanish</option>
                                                    <option value="eu">Euskara - Basque (beta)</option>
                                                    <option value="fil">Filipino</option>
                                                    <option value="fr">Français - French</option>
                                                    <option value="ga">Gaeilge - Irish (beta)</option>
                                                    <option value="gl">Galego - Galician (beta)</option>
                                                    <option value="hr">Hrvatski - Croatian</option>
                                                    <option value="it">Italiano - Italian</option>
                                                    <option value="hu">Magyar - Hungarian</option>
                                                    <option value="nl">Nederlands - Dutch</option>
                                                    <option value="no">Norsk - Norwegian</option>
                                                    <option value="pl">Polski - Polish</option>
                                                    <option value="pt">Português - Portuguese</option>
                                                    <option value="ro">Română - Romanian</option>
                                                    <option value="sk">Slovenčina - Slovak</option>
                                                    <option value="fi">Suomi - Finnish</option>
                                                    <option value="sv">Svenska - Swedish</option>
                                                    <option value="vi">Tiếng Việt - Vietnamese</option>
                                                    <option value="tr">Türkçe - Turkish</option>
                                                    <option value="el">Ελληνικά - Greek</option>
                                                    <option value="bg">Български език - Bulgarian</option>
                                                    <option value="ru">Русский - Russian</option>
                                                    <option value="sr">Српски - Serbian</option>
                                                    <option value="uk">Українська мова - Ukrainian</option>
                                                    <option value="he">עִבְרִית - Hebrew</option>
                                                    <option value="ur">اردو - Urdu (beta)</option>
                                                    <option value="ar">العربية - Arabic</option>
                                                    <option value="fa">فارسی - Persian</option>
                                                    <option value="mr">मराठी - Marathi</option>
                                                    <option value="hi">हिन्दी - Hindi</option>
                                                    <option value="bn">বাংলা - Bangla</option>
                                                    <option value="gu">ગુજરાતી - Gujarati</option>
                                                    <option value="ta">தமிழ் - Tamil</option>
                                                    <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                    <option value="th">ภาษาไทย - Thai</option>
                                                    <option value="ko">한국어 - Korean</option>
                                                    <option value="ja">日本語 - Japanese</option>
                                                    <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                    <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select class="form-control">
                                                    <option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                    <option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                                    <option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                                    <option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                                    <option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                                    <option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                                    <option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                                    <option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                                    <option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                                    <option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                                    <option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                                    <option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                    <option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                                    <option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                                    <option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                                    <option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                                    <option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                                    <option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                                    <option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                                    <option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                                    <option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                                    <option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                                    <option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                                    <option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                                    <option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                                    <option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                                    <option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                                    <option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                                    <option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                                    <option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                                    <option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                                    <option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                                    <option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                                    <option data-offset="0" value="Azores">(GMT) Azores</option>
                                                    <option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                                    <option data-offset="0" value="UTC" selected>(GMT) UTC</option>
                                                    <option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                                    <option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                                    <option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                                    <option data-offset="3600" value="London">(GMT+01:00) London</option>
                                                    <option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                                    <option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                                    <option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                                    <option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                                    <option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                                    <option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                                    <option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                                    <option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                                    <option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                                    <option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                                    <option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                                    <option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                                    <option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                                    <option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                                    <option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                                    <option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                                    <option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                                    <option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                                    <option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                                    <option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                                    <option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                                    <option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                                    <option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                                    <option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                                    <option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                                    <option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                                    <option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                                    <option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                                    <option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                                    <option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                                    <option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                                    <option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                                    <option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                                    <option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                                    <option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                                    <option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                                    <option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                                    <option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                                    <option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                                    <option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                                    <option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                                    <option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                                    <option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                                    <option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                                    <option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                                    <option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                                    <option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                                    <option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                                    <option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                                    <option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                                    <option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                    <option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                                    <option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                                    <option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                                    <option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                                    <option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                                    <option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                                    <option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                                    <option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                                    <option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                                    <option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                                    <option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                                    <option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                                    <option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                                    <option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                                    <option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                    <option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                                    <option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                                    <option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                                    <option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                    <option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                                    <option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                                    <option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                                    <option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                    <option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                                    <option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                                    <option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                                    <option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                                    <option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                                    <option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                                    <option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                                    <option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                                    <option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                                    <option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                                    <option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                                    <option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                                    <option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                                    <option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                                    <option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                                    <option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                                    <option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                                    <option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                                    <option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                                    <option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                                    <option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                                    <option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                                    <option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                                    <option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                                    <option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                                    <option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                                    <option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                                    <option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                                    <option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-checkbox-inline">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked=""> Email
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked=""> SMS
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> Phone
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Security:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
                                                <span class="form-text text-muted">
                                                    After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                                    <a href="#" class="kt-link">Learn more</a>.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-checkbox-single">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> Require personal information to reset your password.
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <span class="form-text text-muted">
                                                    For extra security, this requires you to confirm your email or phone number when you reset your password.
                                                    <a href="#" class="kt-link">Learn more</a>.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_apps_user_edit_tab_3" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                            <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                            <div class="alert-text">Configure user passwords to expire periodically. <br>Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Change Or Recover Your Password:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control" value="" placeholder="Current password">
                                                <a href="#" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">Forgot password ?</a>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control" value="" placeholder="New password">
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control" value="" placeholder="Verify password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-xl-3"></div>
                                    <div class="col-lg-9 col-xl-6">
                                        <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                                        <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_apps_user_edit_tab_4" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-sm row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <span class="kt-switch">
                                                    <label>
                                                        <input type="checkbox" checked="checked" name="email_notification_1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <span class="kt-switch">
                                                    <label>
                                                        <input type="checkbox" name="email_notification_2">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> You have new notifications.
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> You're sent a direct message
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Upon new order
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Updates From OpenMarket:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> News about OpenMarket product and feature updates
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox"> Tips on getting more out of OpenMarket
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Things you missed since you last logged into OpenMarket
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> News about OopenMarket on partner products and other services
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" checked="checked"> Tips on Openmarket business products
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/demo3/pages/custom/apps/user/store_profile.js')}}" type="text/javascript"></script>
<script src="{{asset('js/image_preview.js')}}" type="text/javascript"></script>
<!--end::Page Scripts -->
@endsection
