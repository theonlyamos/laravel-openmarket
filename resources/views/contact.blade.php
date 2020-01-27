@extends('layouts.store_header')

@section('content')
<section class="ftco-section contact-section bg-light">
    <div class="container">
        <h1 class="text-center my-5">Contact Us</h1>
        <div class="row d-flex mb-1 contact-info">
            <div class="col-md-4 d-flex py-2 my-1 row bg-secondary text-white">
                <div class="col-3">
                    <i class="fa fa-map-marker fa-3x"></i>
                </div>
                <div class="col-8">
                    <span class="text-white">{{$site->address}}</span>
                </div>
            </div>
            <div class="col-md-4 d-flex py-2 my-1 row bg-dark text-white">
                <div class="col-3">
                    <i class="fa fa-envelope fa-3x"></i>
                </div>
                <div class="col-8">
                    <a class="nav-link text-white" href="mailto:{{$site->email_info}}">{{$site->email_info}}</a>
                </div>
            </div>
            <div class="col-md-4 d-flex py-2 my-1 row bg-black text-white">
                <div class="col-3">
                    <i class="fa fa-globe fa-3x"></i>
                </div>
                <div class="col-8">
                    <a class="nav-link text-white" href="https://{{$site->website_home}}">{{$site->website_home}}</a>
                </div>

            </div>
        </div>
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4 d-flex py-2 my-1 row bg-black text-white align-items-center">
                <div class="col-3 border-right">
                    <i class="fa fa-phone fa-3x"></i>
                </div>
                <div class="col-8">
                    <span>Amos Amissah</span>
                    <br><a class="text-white" href="tel:{{$site->phone_1}}">{{$site->phone_1}}</a>
                </div>
            </div>
            <div class="col-md-4 d-flex py-2 my-1 row bg-dark text-white align-items-center">
                <div class="col-3 border-right">
                    <i class="fa fa-phone fa-3x"></i>
                </div>
                <div class="col-8">
                    <span>Felix Amihere</span>
                    <br><a class="text-white" href="tel:+233 249 577 827">+233 249 577 827</a>
                </div>
            </div>
            <div class="col-md-4 d-flex py-2 my-1 row bg-secondary text-white align-items-center">
                <div class="col-3 border-right">
                    <i class="fa fa-phone fa-3x"></i>
                </div>
                <div class="col-8">
                    <span>Nhyiraba Paa Kwesi</span>
                    <br><a class="text-white" href="tel:+233 24 473 4418">+233 24 473 4418</a>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    var map, infoWindow, geocoder;

    function initMap() {

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
                geocoder.geocode({
                    "location": location
                }, (result, status) => {

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

                })
            }, function () {
                alert("Your device does not support geolocation")
            });
        } else {
            // Browser doesn't support Geolocation
            alert("Your device does not support geoloaction")
        }
    }

</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUCHsKcPB42kheop8QdzlUPUSl43LJbVM&callback=initMap">
</script>
@endsection
