<section class="trending-items bg-light py-5">
    <div class="container">
        <div class="row justify-content-center pt-5 mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2 class="my-4 text-secondary" style="font-weight: 100; letter-spacing: 1px;">Trending</h2>
                <p>New Arrivals</p>
            </div>
        </div>
        <div class="row mx-1 pt-3 mb-3 bg-light d-flex justify-content-start align-items-start border-secondary">
            @foreach ($products as $item)
            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="product d-flex flex-column">
                    <a href="{{route('productDetails', $item->id)}}" class="img-prod">
                        <img class="img-fluid" src='{{asset("storage/$item->thumbnail")}}' alt="{{$item->name}}"/>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>{{$item->category}}</span>
                            </div>
                            <div class="rating">
                                <p class="text-right mb-0">
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star-half-alt"></span></a>
                                </p>
                            </div>
                        </div>
                        <h3><a href="{{route('productDetails', $item->id)}}">{{$item->name}}</a></h3>
                        <div class="pricing">
                            <p class="price"><span>{{__("default.currency")}}{{$item->price}}</span></p>
                        </div>
                        <p class="bottom-area d-flex px-3 text-center bg-white">
                            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart
                                    <i class="fa fa-cart-plus ml-1"></i></span></a>
                            <a href="#" class="buy-now text-right ml-auto py-2"><span><i
                                        class="fa fa-heart ml-1"></i></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <!--
                            <div class="col-6 col-lg-2 col-md-3 col-sm-4 mb-4 top-items">
                                <div class="card d-flex align-items-center justify-content-start border-0">
                                    <a href="{{route('productDetails', $item->id)}}" class="text-center"
                                        style="text-decoration: none">
                                        <img class="card-img-top w-100" data-id="{{$item->id}}" alt="{{$item->name}}"
                                            srcset="https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_500/{{$item->id}}.png 500w,https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1000/{{$item->id}}.png 1000w,https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1500/{{$item->id}}.png 1500w"
                                            sizes="(min-width: 0px) and (max-width: 420px) calc(100vw - 60px),(min-width: 420px) and (max-width: 750px) calc((100vw - 90px) / 2),(min-width: 750px) and (max-width: 1200px) calc((100vw - 120px) / 3),(min-width: 1200px) calc((100vw - 150px) / 4)">
                                        <small class="text-dark text-center p-2 name">{{$item->name}}</small>
                                        <div class="badge text-danger price">&dollar;{{$item->price}}</div>
                                    </a>
                                </div>
                            </div>
                        -->
            @endforeach
        </div>

        @include('ads_vertical')
    </div>

</section>
