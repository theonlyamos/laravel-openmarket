<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OpenMarket') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/font-awesome.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/fontawesome.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
</head>

<body>
    <div id="app">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="notifyToast" data-delay="5000">
            <div class="toast-header">
                <strong class="mr-auto text-dark toast-title"></strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body d-flex align-items-center">

            </div>
        </div>
        <!--
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="index.html">Modist</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>

              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                  <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                      <a class="dropdown-item" href="shop.html">Shop</a>
                    <a class="dropdown-item" href="product-single.html">Single Product</a>
                    <a class="dropdown-item" href="cart.html">Cart</a>
                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                  </div>
                </li>
                  <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                  <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                  <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

                </ul>
              </div>
            </div>
          </nav>
        -->
        <nav class="navbar navbar-expand-md navbar-light ftco_navbar bg-light ftco-navbar-light-2 border border-bottom"
            id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="d-none d-md-block text-dark"
                        style='letter-spacing: 2px; font-weight: 300; font-family: "Lato", Arial, sans-serif;'>{{ config('app.name', 'OpenMarket') }}</span>
                    <i class="fa fa-home fa-2x d-md-none text-secondary"></i>
                </a>
                <form class="form-inline my-2 my-lg-0 bg-white searchbar p-0 justify-content-between">
                    <input class="form-control mr-sm-2 searchinput bg-light text-secondary" type="search"
                        placeholder="Search" aria-label="Search" name="search" required>
                    <button class="btn btn-light my-2 my-sm-0 d-none d-md-block search-btn" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Account <i class="fa fa-user"></i></a>
                            <div class="dropdown-menu border-0 bg-light" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{route('login')}}">Login</a>
                                <a class="dropdown-item" href="{{route('register')}}">Register</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cart')}}" aria-label="Cart"><i
                                    class="fa fa-shopping-cart"></i>
                                [<div class="badge badge-light text-danger cart"><span class="cart-count">0</span></div>]
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pb-4">
            <!--            <div class="my-5 d-none d-sm-block"></div> -->
            @yield('content')
        </main>
    </div>
    <footer class="ftco-footer bg-light ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"
                            style='font-family: "Lato", Arial, sans-serif;'>
                            {{ config('app.name', 'OpenMarket') }}</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="bg-dark"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="bg-dark"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="bg-dark"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block text-secondary">Home</a></li>
                            <li><a href="#" class="py-2 d-block text-secondary">Stores</a></li>
                            <li><a href="#" class="py-2 d-block text-secondary">Cart</a></li>
                            <li><a href="{{route('contactus')}}" class="py-2 d-block text-secondary">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block text-secondary">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block text-secondary">Privacy Policy</a></li>
                                <li><a href="#" class="py-2 d-block text-secondary">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block text-secondary">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li class="pb-2"><span class="fa fa-map fa-fw"></span><span class="text">Market Circle, Takoradi</span></li>
                                <li><a href="tel:+233 557 821 040" class="text-secondary"><span class="fa fa-phone fa-fw"></span><span class="text">+233 557 821 040</span></a></li>
                                <li><a href="#" class="text-secondary"><span class="fa fa-envelope fa-fw"></span><span
                                            class="text">info@openmarket.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright © <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var map, infoWindow;

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

    </script>
    <!--    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXZYpDBJojD5xpDf9B8HERolTGr3NbCP8&callback=initMap">
    </script>
-->
</body>

</html>
