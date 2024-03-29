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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=5,user-scalable=yes' />
    <meta name='description' content='Shop from your favourites stores at the comfort of your home'/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#000000">

    <!-- Page Title -->
    <title>{{ config('app.name', 'OpenMarket') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" defer>
    <!--
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}" defer>

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    -->
    <link href="{{asset('css/fontawesome/font-awesome.css')}}" rel="stylesheet">
    <!--<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" defer>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" defer>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    <link rel="apple-touch-icon" href="{{asset('icons/apple-touch-icon.png')}}">
    <link rel="manifest" href="/manifest.json">

	<!-- Global site site (adsbygoogle.js) - Google Adsense -->
	<script data-ad-client="ca-pub-3588854090963660" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" defer></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-TB1D9N6DPJ" defer></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'G-TB1D9N6DPJ');
	</script>
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
</head>

<body>
	 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKD3V5H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">
        <div class="toast bg-dark d-none" role="alert" aria-live="assertive" aria-atomic="true" id="notifyToast" data-delay="5000"
            style="height: max-content; position: fixed; bottom: 0; right: 0; z-index: 9999;">
            <!--
            <div class="toast-header">
                <strong class="mr-auto text-dark toast-title"></strong>
                <small class="text-secondary">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        -->
            <div class="toast-body d-flex align-items-center p-3">

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
        <nav class="navbar navbar-expand-md ftco_navbar ftco-navbar-light pt-0 scrolled awake"
            id="ftco-navbar">
            <div class="container">
                @if (Auth::check())
                    <a class="navbar-brand d-none d-md-block" href="{{url('/home')}}">
                        <img style="max-width: 80px; height: auto;" src="{{asset('images/logo.png')}}" alt="Open Market Logo">
                    </a>
                    <a class="navbar-brand d-md-none" href="{{url('/home')}}">
                        <img style="max-width: 50px; height: auto;" src="{{asset('images/logo.png')}}" alt="Open Market Logo">
                    </a>

                @else
                    <a class="navbar-brand d-none d-md-block" href="{{url('/')}}">
                        <img style="max-width: 80px; height: auto;" src="{{asset('images/logo.png')}}" alt="Open Market Logo">
                    </a>
                    <a class="navbar-brand d-md-none" href="{{url('/')}}">
                        <img style="max-width: 50px; height: auto;" src="{{asset('images/logo.png')}}" alt="Open Market Logo">
                    </a>

                @endif
                <form
                    class="form-inline d-none d-md-flex my-2 my-md-0 bg-white searchbar p-0 justify-content-between shadow-sm w-100 rounded-0"
                    style="border: 1px solid #ced4da !important; height: 40px;">
                    <input class="form-control mr-sm-2 searchinput bg-white text-secondary w-75 border-0 rounded-0" type="search"
                        placeholder="Search" aria-label="Search" name="search" required
                        style="font-size: 14px; color: #ced4da; height: auto !important;">
                    <button class="btn btn-light my-2 my-sm-0 d-none d-md-block w-5 rounded-0 border-0 px-4"
                        type="submit"
                        style="height: 40px; background: transparent; border-left: 1px solid #ced4da !important;">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                <div class="d-md-none">
                    <button class="btn btn-clear mobile-searchbar-toggler" onclick="toggleSearchBar()"><i
                            class="fa fa-search"></i></button>
                    <a href="{{route('cart')}}" class="btn btn-clear" title="cart"><i
                        class="fa fa-shopping-cart"></i>[<span
                        class="cart cart-count">{{$cart ?? 0}}</span>]</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-clear dropdown-toggle" data-bs-display="static" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Stores
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            @isset($stores)
                                @foreach ($stores as $store)
                                    <a href="{{route('products.store', $store->id)}}" class="dropdown-item">
                                        <small>{{$store->name}}</small>
                                    </a>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                    @if (Auth::check())
                        <div class="btn-group">
                            <button type="button" class="btn btn-clear dropdown-toggle" data-bs-display="static" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i
                                class="fa fa-user-circle-o"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-shopping-basket"></i>
                                    {{__("Orders")}}</a>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-user-circle"></i>
                                    {{__("Profile")}}</a>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-sliders"></i>
                                    {{__("Settings")}}</a>
                                </a>

                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('mobile-logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i><small>{{ __('Logout') }}</small>
                                </a>

                                <form id="mobile-logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="btn-group">
                            <button type="button" class="btn btn-clear dropdown-toggle" data-bs-display="static" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i
                                class="fa fa-user-circle-o"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{route('login')}}" class="dropdown-item">
                                    <i class="fa fa-sign-in"></i>
                                    {{__("Login")}}
                                </a>
                                <a href="{{route('register')}}" class="dropdown-item">
                                    <i class="fa fa-user-plus"></i>
                                    {{__("Register")}}
                                </a>
                            </div>
                        </div>
                    @endif

                    <!--
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span>
                    </button>
                -->
                </div>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link">Cart <i
                                    class="fa fa-shopping-cart"></i>[<span
                                    class="cart cart-count">{{$cart ?? 0}}</span>]</a></li>
                        <li class="nav-item dropdown">
                            @if (Auth::check())
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
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
                        <h2 class="ftco-heading-2 text-white" style='font-family: "Lato", Arial, sans-serif;'>{{ config('app.name', 'OpenMarket') }}</h2>
                        @if (isset($site))
                            <p>{{$site->description}}</p>
                        @else
                            <p>Revolutionizing trade with passion</p>
                        @endif
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
                                    class="py-2 d-block">Home</a></li>
                            <li><a href="{{route('store.index')}}" class="py-2 d-block">Stores</a></li>
                            <li><a href="{{route('cart')}}" class="py-2 d-block">Cart</a></li>
                            <li><a href="{{route('contactus')}}" class="py-2 d-block">Contact Us</a></li>
                            <li><a href="{{route('aboutus')}}" class="py-2 d-block">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 text-white">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
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
                                                class="text">{{$site->phone_developer}}</span></a></li>
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
                                                class="text">{{__("info@openmartgh.com")}}</span></a></li>
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
    <script>

        const main = async () => {
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('/service-worker.js');

                const registration = await navigator.serviceWorker.ready;
                // Check if periodicSync is supported
                if ('periodicSync' in registration) {
                    // Request permission
                    const status = await navigator.permissions.query({
                        name: 'periodic-background-sync',
                    });

                    if (status.state === 'granted') {
                        try {
                                // Register new sync every 24 hours
                                await registration.periodicSync.register('content-syncy', {
                                minInterval: 24 * 60 * 60 * 1000, // 1 day
                            });
                            console.log('Periodic background sync registered!');
                        } catch(e) {
                            console.error(`Periodic background sync failed:\nx${e}`);
                        }
                    } else {
                        console.info('Periodic background sync is not granted.');
                    }
                } else {
                    console.log('Periodic background sync is not supported.');
                }
            }
        };

        main();
    </script>
    <!-- Scripts -->
   <!-- <script src="{{ asset('js/fontawesome.js') }}" defer></script> -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="{{ asset('js/scripts.js') }}" defer></script>
</body>

</html>
