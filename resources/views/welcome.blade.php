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
<div class="" style="margin-top: 50px;"></div>
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
                                <a href="{{route('products.store', $store->id)}}" class="nav-link text-secondary p-0">
                                    <small>{{$store->name}}</small>
                                </a>
                            </li>
                            @endforeach
                        @endisset
                    </ul>
                    <button class="btn btn-outline-info btn-block mt-1 rounded-0" onclick="getLocation()">Find Nearest Store <i class="fa fa-map"></i></button>
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
        <div class="mobile-stores-search d-md-none my-1">
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
            <button class="btn btn-outline-info btn-block py-2 rounded-0 my-1" style="font-size: 1em;" onclick="getLocation()">Find Nearest Store <i class="fa fa-shopping-bag"></i></button>
        </div>

        @include('ads_vertical')
        {{--  @component('top_stores')
        @endcomponent --}}
   </div>

    @component('top_items', ["products" => $products])
    @endcomponent
</div>

@endsection

@section('scripts')
<script>
    var map, infoWindow, geocoder;

    function initMap() {
        getLocation();
        /*
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 6
            });
            infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var location = new google.maps.LatLng(pos.lat, pos.lng);
                    geocoder = new google.maps.Geocoder();
                    geocoder.geocode({"location": location}, (result, status) => {

                    })
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
            */
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var location = new google.maps.LatLng(pos.lat, pos.lng);

                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    "location": location
                }, (result, status) => {
                    console.log(`${result[0].formatted_address} /n ${pos.lat}, ${pos.lng} /n ${result[0].geometry.location.lat()}, ${result[0].geometry.location.lng()}`);
                })
            }, function () {
                console.log("Your device does not support geolocation")
            });
        } else {
            // Browser doesn't support Geolocation
            console.log("Your device does not support geoloaction")
        }
    }

</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUCHsKcPB42kheop8QdzlUPUSl43LJbVM&callback=initMap">
</script>
@endsection
