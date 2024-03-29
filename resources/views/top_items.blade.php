<section class="trending-items bg-light py-6">
    <div class="container">
        <div class="row justify-content-center pt-5 mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2 class="my-1 text-secondary" style="font-weight: 100; letter-spacing: 1px;">Trending</h2>
                <p>New Arrivals</p>
            </div>
        </div>
        <div class="row pt-3 mb-3 bg-light d-flex justify-content-start align-items-start border-secondary">
            @foreach ($products as $item)
            <div class="col-6 col-sm-6 col-xs-6 col-md-3  col-lg-2 px-1 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="product d-flex flex-column">
                    <a href="{{route('products.show', $item->slug)}}" class="img-prod"  title="{{$item->product->name}}">
                        <img class="img-fluid" src='{{ asset("storage/".$item->product->images[0]->name) }}' alt="{{$item->product->name}}" loading="lazy"/>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex flex-wrap">
                            <div class="cat">
                                <span>{{Str::limit($item->product->category, 7, "...")}}</span>
                            </div>
                            <div class="pricing w-50 text-right">
                                <p class="price text-right"><span>{{__("default.currency")}}{{$item->price}}</span></p>
                            </div>
                            <div class="rating w-100">
                                <p class="mb-0">
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                </p>
                            </div>
                        </div>
                        <h3><a href="{{route('products.show', $item->slug)}}" title="{{$item->name}}">{{Str::limit($item->product->name, 25, "...")}}</a></h3>
                        <!--<div class="pricing d-none d-md-block">
                            <p class="price"><span>{{__("default.currency")}}{{$item->product->price}}</span></p>
                        </div> -->
                        <p class="bottom-area d-none d-md-flex px-3 text-center bg-white">
                            <a href="#" class="add-to-cart btn-action text-center py-2 mr-1" data-action="addToCart" data-target="{{$item->id}}"><span><small>Add to cart</small>
                                    <i class="fa fa-cart-plus ml-1"></i></span></a>
                            <a href="#" class="buy-now btn-action text-center ml-auto py-2" data-action="buy" data-target="{{$item->id}}"><span><small>Buy Now</small><i
                                        class="fa fa-shopping-bag ml-1"></i></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <!--
                            <div class="col-6 col-lg-2 col-md-3 col-sm-4 mb-4 top-items">
                                <div class="card d-flex align-items-center justify-content-start border-0">
                                    <a href="{{route('productDetails', $item->id)}}" class="text-center"
                                        style="text-decoration: none">
                                        <img class="card-img-top w-100" data-id="{{$item->id}}" alt="{{$item->product->name}}"
                                            srcset="https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_500/{{$item->id}}.png 500w,https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1000/{{$item->id}}.png 1000w,https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1500/{{$item->id}}.png 1500w"
                                            sizes="(min-width: 0px) and (max-width: 420px) calc(100vw - 60px),(min-width: 420px) and (max-width: 750px) calc((100vw - 90px) / 2),(min-width: 750px) and (max-width: 1200px) calc((100vw - 120px) / 3),(min-width: 1200px) calc((100vw - 150px) / 4)">
                                        <small class="text-dark text-center p-2 name">{{$item->product->name}}</small>
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
