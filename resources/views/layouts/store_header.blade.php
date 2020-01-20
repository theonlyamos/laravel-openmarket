<!DOCTYPE html>
<html lang="en">

<head>
    <title>OpenMarket Stores | {{$title ?? ""}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

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
</head>

<body>
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="fa fa-phone"></span></div>
                            <span class="text">{{$site->phone_1}}</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="fa fa-paper-plane"></span></div>
                            <span class="text">{{Str::lower($site->email_info)}}</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="fa fa-calendar"></span></div>
                            <span class="text">24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light pt-0 scrolled awake" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="/">{{config("app.name", "OpenMarket")}}</a>
                    <form class="form-inline d-none d-lg-flex my-2 my-lg-0 bg-white searchbar p-0 justify-content-between air w-50" style="border: 1px solid #ced4da !important; height: 40px;">
                        <input class="form-control mr-sm-2 searchinput bg-light text-secondary w-75 border-0" type="search"
                            placeholder="Search" aria-label="Search" name="search" required style="font-size: 14px; color: #ced4da; height: auto !important;">
                        <button class="btn btn-light my-2 my-sm-0 d-none d-md-block w-5 rounded-0 border-0 px-4" type="submit" style="height: 40px; background: transparent; border-left: 1px solid #ced4da !important;">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                    </button>

                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a href="{{route('store.index')}}" class="nav-link">Stores</a></li>
                                <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link">Cart <i
                                    class="fa fa-shopping-cart"></i>[<span class="cart cart-count">0</span>]</a></li>
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
                    <form class="form-inline d-lg-none my-2 my-lg-0 bg-white searchbar p-0 justify-content-between air w-100" style="border: 1px solid #ced4da !important; height: 40px;">
                            <input class="form-control mr-sm-2 searchinput bg-light text-secondary w-75 border-0" type="search"
                                placeholder="Search" aria-label="Search" name="search" required style="font-size: 14px; color: #ced4da; height: 30px !important;">
                            <button class="btn btn-light my-sm-0 w-5 rounded-0 border-0 px-4" type="submit" style="height: 40px; background: transparent; border-left: 1px solid #ced4da !important;">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                </div>
            </nav>

    <!-- END nav -->
    <!-- Main Content Start -->
    @yield('content')
    <!-- Main Content End -->
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="fa fa-angle-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">{{config('app.name', "OpenMarket")}}</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{config('app.url', 'https://openmart.ga')}}" class="py-2 d-block">Shop</a>
                            </li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Journal</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="fa fa-map-marker fa-fw"></span><span class="text">{{$site->address}}</span></li>
                                <li><a href="#"><span class="fa fa-phone fa-fw"></span><span class="text">{{$site->phone_1}}</span></a></li>
                                <li><a href="#"><span class="fa fa-envelope fa-fw"></span><span
                                            class="text">{{Str::lower($site->email_support)}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved.
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBUCHsKcPB42kheop8QdzlUPUSl43LJbVM">
    </script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
