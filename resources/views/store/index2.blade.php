@extends('layouts.store_header')

@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="https://res.cloudinary.com/openmarket/image/upload/c_scale,w_274/v1579570621/backgrounds/earphones-4766270_dpa8dk.png" alt="Hero Image">
                    <div class="one-forth d-flex align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '10%' }">
                        <div class="text">
                            <span class="subheading">#New Arrival</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">Shoes Collection 2019</h1>
                                <p class="mb-4">A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia. It is a paradisematic country.</p>

                                <p><a href="#" class="btn-custom">Discover Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="https://res.cloudinary.com/openmarket/image/upload/c_scale,w_274/v1579551601/samples/ecommerce/shoes.png" alt="Hero Image2">
                    <div class="one-forth d-flex align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '10%' }">
                        <div class="text">
                            <span class="subheading">#New Arrival</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">New Shoes Winter Collection</h1>
                                <p class="mb-4">A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia. It is a paradisematic country.</p>

                                <p><a href="#" class="btn-custom">Discover Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-bag"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Free Shipping</h3>
                        <p>Get your products delivered to your customers free of charge.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support Customer</h3>
                        <p>We are always there to answer all your issues. Reach our customer care 24/7.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-payment-security"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Secure Payments</h3>
                        <p>Receive payments securely from your customers through Credid Card, Paypal and mobile wallet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">New Arrival</h2>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($products as $item)
            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a href="{{route('productDetails', $item->id)}}" class="img-prod">
                        <img class="img-fluid" src="{{asset('storage/'.$item->thumbnail)}}"
                            alt="{{$item->name}}">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>{{Str::title($item->category)}}</span>
                            </div>
                            <div class="rating">
                                <p class="text-right mb-0">
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                </p>
                            </div>
                        </div>
                        <h3><a href="#">{{$item->name}}</a></h3>
                        <div class="pricing">
                            <p class="price"><span>{{__("default.currency")}}{{$item->price}}</span></p>
                        </div>
                        <p class="bottom-area d-flex px-3">
                            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                        class="fa fa-cart-plus ml-1"></i></span></a>
                            <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                        class="fa fa-shopping-bag ml-1"></i></span></a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-4 bg-info">
                <div class="choose-wrap divider-one img p-5 d-flex align-items-end">

                    <div class="text text-center text-white px-2">
                        <span class="subheading">{{$products[5]->category}}</span>
                        <h2>{{$products[5]->name}}</h2>
                        <p>{{Str::limit($products[5]->description, 60)}}</p>
                        <p><a href="{{route('productDetails', $products[5]->id)}}" class="btn btn-black px-3 py-2">Shop now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row no-gutters choose-wrap divider-two align-items-stretch">
                    <div class="col-md-12 bg-primary">
                        <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end"
                            style="background-color: #4e4e4e; background: url({{asset('storage/'.$products[0]->thumbnail)}}); background-size: contain; background-repeat: no-repeat;">
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="text text-dark px-5">
                                    <span class="subheading">{{$products[0]->category}}</span>
                                    <h2>{{$products[0]->name}}</h2>
                                    <p>{{Str::limit($products[0]->description, 60)}}</p>
                                    <p><a href="{{route('productDetails', $products[0]->id)}}" class="btn btn-black px-3 py-2">Shop now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="choose-wrap wrap img align-self-stretch bg-secondary d-flex align-items-center">
                                    <div class="text text-center px-5">
                                        <span class="subheading">Christmas Sale</span>
                                        <h2>Extra 50% Off</h2>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                            large language ocean.</p>
                                        <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 bg-warning">
                                <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center">
                                    <div class="text text-center text-white px-5">
                                        <span class="subheading">{{$products[4]->name}}</span>
                                        <h2>Best Sellers</h2>
                                        <p>{{Str::limit($products[4]->description, 60)}}</p>
                                        <p><a href="{{route('productDetails', $products[0]->id)}}" class="btn btn-black px-3 py-2">Shop now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-deal bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('storage/'.$products[1]->thumbnail)}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="heading-section heading-section-white">
                    <span class="subheading">Deal of the week</span>
                    <h2 class="mb-3">Deal of the week</h2>
                </div>
                <div id="timer" class="d-flex mb-4">
                    <div class="time" id="days"></div>
                    <div class="time pl-4" id="hours"></div>
                    <div class="time pl-4" id="minutes"></div>
                    <div class="time pl-4" id="seconds"></div>
                </div>
                <div class="text-deal">
                    <h2><a href="#">{{$products[1]->name}}</a></h2>
                    <p class="price"><span class="mr-2 price-dc">{{__('default.currency')}}{{$products[1]->price}}</span><span class="price-sale">{{__('default.currency')}}{{$products[1]->price*0.6}}</span>
                    </p>
                    <ul class="thumb-deal d-flex mt-4">
                        <li class="img" style="background-image: url(images/product-6.png);"></li>
                        <li class="img" style="background-image: url(images/product-2.png);"></li>
                        <li class="img" style="background-image: url(images/product-4.png);"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="services-flow">
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-bag"></span>
                        </div>
                        <div class="text">
                            <h3>Free Shipping</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-heart-box"></span>
                        </div>
                        <div class="text">
                            <h3>Valuable Gifts</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-payment-security"></span>
                        </div>
                        <div class="text">
                            <h3>24/7 Support</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="text">
                            <h3>Completely Secure</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="heading-section ftco-animate mb-5">
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-leftt"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-leftt"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-leftt"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-leftt"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-leftt"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
                <h2 class="mb-4">Follow Us On Instagram</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in</p>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/gallery-1.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="fa fa-instagram fa-fw"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/gallery-2.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="fa fa-instagram fa-fw"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/gallery-3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="fa fa-instagram fa-fw"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/gallery-4.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="fa fa-instagram fa-fw"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/gallery-5.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="fa fa-instagram fa-fw"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/gallery-6.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="fa fa-instagram fa-fw"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection
