@extends('layouts.store_profile')

@section('content')
<section class="dashboard" style="position: relative">
    <div class="row mx-1">
        <div class="col-md-2 px-0 d-none d-md-block">
            <div class="card border-0 bg-light" style="min-height: 100vh">
                <div class="list-group list-group-flush bg-light">
                    <a href="#"
                        class="list-group-item list-group-item-action active d-flex align-items-center">
                        <i class="fa fa-line-chart pr-3"></i><span class="">Dashboard</span>
                    </a>
                    <a href="#"
                        class="list-group-item list-group-item-action align-items-center">
                        <i class="fa fa-shopping-cart pr-3"></i><span class="">Products</span>
                        <span class="badge badge-warning badge-pill">2</span>
                    </a>
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="fa fa-user pr-3"></i><span class="">Profile</span>
                        <span class="badge badge-danger badge-pill">1</span>
                    </a>
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="fa fa-gears pr-3"></i><span class="">Settings</span>
                        <span class="badge badge-success badge-pill">1</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card sidebar air bg-light border-0 d-sm-block d-md-none" style="min-height: 100vh; position: absolute">
        <div class="list-group list-group-flush bg-light">
            <a href="#"
                class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center px-3">
                <i class="fa fa-line-chart"></i>
            </a>
            <a href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-3">
                <i class="fa fa-shopping-basket"></i>
            </a>
            <a href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-3">
                <i class="fa fa-user"></i>
            </a>
            <a href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-3">
                <i class="fa fa-gears"></i>
            </a>
        </div>
    </div>
</section>

@endsection
