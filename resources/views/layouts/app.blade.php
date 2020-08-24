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
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/fontawesome.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    <link rel="manifest" href="/manifest.json">
</head>

<body>
    <div id="app">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="notifyToast" data-delay="5000"
            style="position: fixed; bottom: 0; right: 0; z-index: 9999;">
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
        <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light pt-0 scrolled awake"
            id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img style="max-width: 80px; height: auto;" src="{{asset('images/logo.png')}}" alt="Open Market Logo">
                </a>
                <form
                    class="form-inline d-none d-lg-flex my-2 my-lg-0 bg-white searchbar p-0 justify-content-between air w-50"
                    style="border: 1px solid #ced4da !important; height: 40px;">
                    <input class="form-control mr-sm-2 searchinput bg-light text-secondary w-75 border-0" type="search"
                        placeholder="Search" aria-label="Search" name="search" required
                        style="font-size: 14px; color: #ced4da; height: auto !important;">
                    <button class="btn btn-light my-2 my-sm-0 d-none d-md-block w-5 rounded-0 border-0 px-4"
                        type="submit"
                        style="height: 40px; background: transparent; border-left: 1px solid #ced4da !important;">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                <div>
                    <button class="btn btn-clear d-md-none mobile-searchbar-toggler" onclick="toggleSearchBar()"><i
                            class="fa fa-search"></i></button>
                    <div class="btn-group d-md-none">
                        <button type="button" class="btn btn-clear dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Stores
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @isset($stores)
                            @foreach ($stores as $store)
                            <a href="{{route('products.store', $store->id)}}" class="dropdown-item">
                                <small>{{$store->name}}</small>
                            </a>
                            @endforeach
                            @endisset
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link">Cart <i
                                    class="fa fa-shopping-cart"></i>[<span
                                    class="cart cart-count">{{$cart ?? 0}}</span>]</a></li>
                        <li class="nav-item dropdown">
                            @if (Auth::check())
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{route('user.dashboard')}}">
                                    <i class="fa fa-tv"></i>
                                    {{__("Dashboard")}}</a>
                                <a class="dropdown-item" href="{{route('user.account')}}">
                                    <i class="fa fa-user"></i>
                                    {{__("Account")}}</a>
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
                <form
                    class="form-inline d-lg-none d-none my-2 my-lg-0 bg-white searchbar-mobile p-0 justify-content-between air w-100"
                    style="border: 1px solid #ced4da !important; height: 40px;">
                    <input class="form-control mr-sm-2 searchinput bg-light text-secondary w-75 border-0" type="search"
                        placeholder="Search" aria-label="Search" name="search" required
                        style="font-size: 14px; color: #ced4da; height: 30px !important;">
                    <button class="btn btn-light my-sm-0 w-5 rounded-0 border-0 px-4" type="submit"
                        style="height: 40px; background: transparent; border-left: 1px solid #ced4da !important;">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </nav>

        <section class="pb-4">
            <div class="my-5 d-none d-md-block" style="height: 1px;"></div>
            @yield('content')
        </section>
    </div>
    @yield('floater')
    <footer class="ftco-footer bg-black ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 text-white" style='font-family: "Lato", Arial, sans-serif;'>
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
                            <li><a href="{{config('app.url', 'https://openmart.ga')}}"
                                    class="py-2 d-block text-secondary">Home</a></li>
                            <li><a href="{{route('store.index')}}" class="py-2 d-block text-secondary">Stores</a></li>
                            <li><a href="{{route('cart')}}" class="py-2 d-block text-secondary">Cart</a></li>
                            <li><a href="{{route('contactus')}}" class="py-2 d-block text-secondary">Contact Us</a></li>
                            <li><a href="{{route('aboutus')}}" class="py-2 d-block text-secondary">About Us</a></li>
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
                                @if (isset($site))
                                    <li><span class="fa fa-map-marker fa-fw"></span><span
                                        class="text">{{$site->address}}</span></li>
                                    <li><span class="fa fa-plane fa-fw"></span><span
                                            class="text">{{$site->box_office}}</span></li>
                                    <li><a href="#"><span class="fa fa-phone fa-fw"></span><span
                                                class="text">{{$site->phone_1}}</span></a></li>
                                    <li><a href="#"><span class="fa fa-envelope fa-fw"></span><span
                                                class="text">{{Str::lower($site->email_info)}}</span></a></li>
                                @else
                                    <li><span class="fa fa-map-marker fa-fw"></span><span
                                        class="text">{{__("Market Circle, Takoradi, WS0034423, Ghana")}}</span></li>
                                    <li><span class="fa fa-plane fa-fw"></span><span
                                            class="text">{{__("P. O. Box MC 2185, Takoradi")}}</span></li>
                                    <li><a href="#"><span class="fa fa-phone fa-fw"></span><span
                                                class="text">{{__("+233 557 821 030")}}</span></a></li>
                                    <li><a href="#"><span class="fa fa-envelope fa-fw"></span><span
                                                class="text">{{__("info@mail.openmart.ga")}}</span></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy; <script>
                            document.write(new Date().getFullYear());

                        </script> OpenMarket.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    @yield('scripts')
</body>

</html>
