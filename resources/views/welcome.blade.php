@extends('layouts.app')

@section('content')
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map" style="height: 100%"> </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="$('#notifyToast').toast('show')">Add to
                    Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="itemDetailsModal" tabindex="-1" role="dialog" aria-labelledby="itemDetailsModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemDetailsModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="$('#notifyToast').toast('show')">Add to
                    Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="my-5 d-none d-sm-block"></div>
<div class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2 d-none d-lg-block">
                <div class="card border-0">
 <!--                   <div class="card-header bg-light text-center py-2">
                        <small class="card-text text-muted">Stores</small>
                    </div> -->
                    <form action="" method="post">
                        <input type="text" class="form-control" name="store_search" placeholder="Search stores..." list="stores_list" style="height: 40px; font-size: .8em;">
                        <datalist id="stores_list">
                            @isset($stores)
                                @foreach ($stores as $store)
                                    <option value="{{$store->name}}"></option>
                                @endforeach
                            @endisset
                        </datalist>
                    </form>
                    <ul class="list-group list-group-flush" style="height: 330px; overflow-y: scroll;">
                        @isset($stores)
                        @foreach ($stores as $store)
                        <li class="list-group-item py-1 px-2" data-toggle="tooltip" data-position="top"
                            title="{{$store->name}}">
                            <a href="{{route('store', $store->id)}}" class="nav-link text-secondary p-0">
                                <small>{{$store->name}}</small>
                            </a>
                        </li>
                        @endforeach
                        @endisset
                    </ul>
                    <button class="btn btn-outline-info btn-block mt-1 rounded-0">Find Nearest Store <i class="fa fa-map"></i></button>
                </div>
            </div>
            <div class="col-xl-8 col-lg-10 col-md-12 p-0">
                <div class="card">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousel3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousel4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousel5.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 align-self-start d-none d-xl-flex flex-column">
                <div class="card w-100 border-0 bg-danger d-flex align-items-center text-center justify-content-center">
                    <h5 class="text-warning p-3" style="font-size: 2em; font-weight: 700"><em>%40 <span
                                class="text-white">Discount deals</span></em></h5>
                </div>
                <div
                    class="card w-100 border-0 bg-dark mt-2 px-3 py-5 d-flex align-items-center text-center justify-content-center">
                    <h5 class="py-3" style="font-size: 2em; font-weight: 700">Ads</h5>
                </div>
            </div>
        </div>
        <div class="moble-stores-search d-md-none my-1">
            <form action="" method="post">
                <div class="input-group">
                     <input type="text" class="form-control" name="store_search" placeholder="Search stores..." list="stores_list" style="height: 40px; font-size: .8em;">

                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
                <datalist id="stores_list">
                    @isset($stores)
                        @foreach ($stores as $store)
                            <option value="{{$store->name}}"></option>
                        @endforeach
                    @endisset
                </datalist>
            </form>
            <button class="btn btn-outline-info btn-block py-2 rounded-0 my-1" style="font-size: 1em;">Find Nearest Store <i class="fa fa-shopping-bag"></i></button>
        </div>
 
        @include('ads_vertical')
        {{--  @component('top_stores')
        @endcomponent --}}
   </div>

    @component('top_items', ["products" => $products])
    @endcomponent
</div>

@endsection
