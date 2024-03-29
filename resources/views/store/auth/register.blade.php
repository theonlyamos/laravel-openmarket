@extends('layouts.store_header')

@section('content')
<div class="row w-100 mx-0" style="min-height: 97vh">
    <div class="col-md-6 py-3 d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://res.cloudinary.com/openmarket/image/upload/v1579552475/backgrounds/register-257986_1920_dqyknt.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="d-none d-sm-block">
            <!--<i class="fa fa-user-plus fa-3x text-danger"></i> -->
        </div>
        <h1 class="text-white">Register</h1>
    </div>
    <div class="col-md-6 p-0 d-flex flex-column justify-content-center align-items-center">
        <div class="card my-5 rounded-0">
            <div class="card-body">
                <form method="POST" action="{{route('store.register.post')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="category" class="text-md-right">{{ __('Store') }} {{ __('Category') }}</label>

                            <select id="category" class="custom-select @error('category') is-invalid @enderror"
                                name="category" required>
                                <option></option>
                                <option value="groceries"> Groceries &amp; General Goods</option>
                                <option value="electronics">Electronics</option>
                                <option value="fashion">Fashion</option>
                                <option value="hardware">Hardware</option>
                                <option value="software">Software</option>
                            </select>

                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="name" class="text-md-right">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="email"
                                class="text-md-right">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="address"
                                class="text-md-right">{{ __('Address') }}</label>

                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                    name="address" value="{{ old('address') }}" required autocomplete placeholder="Street name">

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="location"
                            class="text-md-right">{{ __('Location') }}</label>

                            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror"
                                name="location" value="{{ old('location') }}" required autocomplete placeholder="longitude, latitude">

                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="region"
                            class="text-md-right">{{ __('Region') }}</label>

                            <input id="region" type="text" class="form-control @error('region') is-invalid @enderror"
                                name="region" value="{{ old('region') }}" required autocomplete placeholder="Eg. Western Region">

                            @error('region')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="city"
                            class="text-md-right">{{ __('City') }}</label>

                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                name="city" value="{{ old('city') }}" required autocomplete placeholder="Eg. Sekondi-Takoradi">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="postal"
                            class="text-md-right">{{ __('Postal Code') }}</label>

                            <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror"
                                name="postal" value="{{ old('postal') }}" required autocomplete placeholder="Eg. WS0034423">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="password" class="text-md-right">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="password-confirm"
                            class="text-md-right">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                    </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-info btn-block rounded-0 py-2 px-5">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                    document.getElementById("location").value = `${result[0].geometry.location.lat()}, ${result[0].geometry.location.lng()}`;
                    document.getElementById("address").value = `${result[0].formatted_address}`;
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

