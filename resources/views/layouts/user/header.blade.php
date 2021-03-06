<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MKD3V5H');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OpenMarket') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    <link href="{{asset('css/fontawesome/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/fontawesome.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
		
		<!-- Global site site (adsbygoogle.js) - Google Adsense --> 
    <script data-ad-client="ca-pub-3588854090963660" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" defer></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TB1D9N6DPJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-TB1D9N6DPJ');
    </script>

    <style>
      .bg-transparent {
          background: transparent !important;
      }
      
      .card {
          box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
          border-radius: 0 !important;
      }

      article {
          height: 100vh;
          overflow-y: auto;
          padding-left: 250px;
          z-index: 0;
      }

      aside {
          width: 250px;
          z-index: 10;
      }

      .list-group-item.active {
          border: 0;
          background: #000 !important;
      }
      
      .list-group-item.active a {
          color: white !important;
      }


      @media screen and (max-width: 640px){
          aside {
              width: 50px;
          }
          
          article {
              padding-left: 50px;
          }

          .link-name {
              display: none;
          }

          .list-group-item {
              padding-left: 17px;
          }
      }
    </style>
</head>

<body style="overflow: hidden">
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKD3V5H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">
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
        <nav class="container navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light py-0 pl-0 scrolled awake" id="ftco-navbar">
                <a class="navbar-brand text-white text-center mr-0 py-2 d-none d-sm-block" href="/" style="background: #20a8d8; font-weight: 700; width: 250px; border-bottom: 1px solid #20a8d8">{{config("app.name", "OpenMarket")}}</a>
                 <a class="navbar-brand text-white text-center mr-0 py-2 d-block d-sm-none" href="/" style="background: #20a8d8; font-weight: 700; width: 50px; border-bottom: 1px solid #20a8d8">O</a>
                <a href="#" class="navbar-brand bg-white text-center d-flex align-items-center justify-content-center" style="border-right: 1px solid #e1e6ef; border-bottom: 1px solid ##e1e6ef; width: 50px; color: #e1e6ef">
                    <i class="fa fa-align-left"></i>
                </a>
<!--
                    <form class="form-inline d-none d-lg-flex my-2 my-lg-0 bg-white searchbar p-0 justify-content-between air w-25" style="height: 40px;">
                        <input class="form-control mr-sm-2 searchinput bg-light text-secondary w-50 border-0" type="search"
                            placeholder="Search" aria-label="Search" name="search" required style="font-size: 14px; color: #ced4da; height: auto !important;">
                        <button class="btn btn-light my-2 my-sm-0 d-none d-md-block w-5 rounded-0 border-0 px-4" type="submit" style="height: 40px; background: transparent; border-left: 1px solid #ced4da !important;">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                    </button>

                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link">Cart <i
                                    class="fa fa-shopping-cart"></i>[<span class="cart cart-count">0</span>]</a></li>
                                <li class="nav-item dropdown">
                                    @if (Auth::check())
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                                            <a class="dropdown-item" href="{{route('user.page', 'dashboard')}}">
                                                <i class="fa fa-tv"></i>
                                                {{__("Dashboard")}}</a>
                                            <a class="dropdown-item" href="{{route('user.page', 'orders')}}">
                                                <i class="fa fa-shopping-cart"></i>
                                                {{__("Orders")}}</a>
                                            <a class="dropdown-item" href="{{route('user.page', 'profile')}}">
                                                <i class="fa fa-user"></i>
                                                {{__("Profile")}}</a>

                                            <a class="dropdown-item" href="{{route('user.page', 'settings')}}">
                                                <i class="fa fa-gear"></i>
                                                {{__("Settings")}}</a>
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out fa-fw"></i><small>{{ __('Logout') }}</small>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    @else
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Account</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                                            <a class="dropdown-item" href="{{route('login')}}">{{__("Login")}}</a>
                                            <a class="dropdown-item" href="{{route('register')}}">{{__("Register")}}</a>
                                        </div>
                                    @endif
                            </li>
                        </ul>
                    </div>
<!--
                    <form class="form-inline d-lg-none my-2 my-lg-0 bg-white searchbar p-0 justify-content-between air w-100" style="border: 1px solid #ced4da !important; height: 40px;">
                            <input class="form-control mr-sm-2 searchinput bg-light text-secondary w-75 border-0" type="search"
                                placeholder="Search" aria-label="Search" name="search" required style="font-size: 14px; color: #ced4da; height: 30px !important;">
                            <button class="btn btn-light my-sm-0 w-5 rounded-0 border-0 px-4" type="submit" style="height: 40px; background: transparent; border-left: 1px solid #ced4da !important;">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
-->
            </nav>
  <main class="container p-0" style="overflow: hidden; margin-top: 50px;">
    <aside class="bg-dark card rounded-0 border-0" style="height: 100vh; top: 50px; position: fixed;">
        <div class="list-group list-group-flush bg-dark rounded-0">
                <a href="#" class="list-group-item list-group-item-secondary disabled bg-secondary text-center align-items-center justify-content-center d-none d-md-flex flex-column rounded-0">
                    <div class="border" style="width: 50px; height: 50px; border-radius: 50%;"></div>
                    <div class="pl-2 link-name text-dark">{{Auth::user()->name}}</div></a>
                @foreach($pages as $page)
                    @if ($page['name'] == $curpage)
                        <a href="#" class="list-group-item list-group-item-action active bg-transparent text-white"><i class="fa {{$page['icon']}}"></i><span class="pl-2 link-name">{{ucfirst($page['name'])}}</span></a>

                    @else
                        <a href="{{route('user.page', $page['name'])}}" class="list-group-item list-group-item-action bg-transparent text-primary"><i class="fa {{$page['icon']}}"></i><span class="pl-2 link-name">{{ucfirst($page['name'])}}</span></a>
                    @endif
                @endforeach

        </div>
    </aside>
    @yield('content')
  </main>
 </div>
    <footer class="ftco-footer bg-black ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 text-white"
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
                        <h2 class="ftco-heading-2 text-white">Menu</h2>
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
                        <h2 class="ftco-heading-2 text-white">Help</h2>
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
                        <h2 class="ftco-heading-2 text-white">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li class="pb-2"><span class="fa fa-map fa-fw"></span><span class="text">Market Circle, Takoradi</span></li>
                                <li><a href="tel:+233 557 821 030" class="text-secondary"><span class="fa fa-phone fa-fw"></span><span class="text">+233 557 821 030</span></a></li>
                                <li><a href="mailto:info@openmart.ga" class="text-secondary"><span class="fa fa-envelope fa-fw"></span><span
                                            class="text">info@openmart.ga</span></a></li>
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
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }

        function getLocation(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var location = new google.maps.LatLng(pos.lat, pos.lng);

                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({"location": location}, (result, status) => {

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
</body>

</html>
