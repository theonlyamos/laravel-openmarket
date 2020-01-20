@extends('layouts.app')

@section('content')
<section class="store store-products">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a class="text-secondary" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a class="text-secondary" href="{{route('store', $store->id)}}">{{$store->name}}</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-2 d-none d-md-block">
                <div class="card border-0">
                    <ul class="list-group list-group-flush">
                        @isset($categories)
                            <li class="list-group-item bg-light text-center text-dark py-1">
                                <small>Categories</small>
                            </li>
                            @foreach ($categories as $cat)
                                @if (in_array($cat->name, $cats))
                                    <li class="list-group-item d-flex align-items-center py-1 px-2" data-toggle="tooltip"
                                        data-position="top" title="{{$cat->name}}">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" checked value="{{$cat->name}}" class="custom-control-input product-check" data-target="categories" id="{{$cat->name}}">
                                            <label class="custom-control-label" for="{{$cat->name}}">
                                                <small>{{$cat->name}}</small>
                                            </label>
                                        </div>
                                    </li>
                                @else
                                    <li class="list-group-item d-flex align-items-center py-1 px-2" data-toggle="tooltip"
                                        data-position="top" title="{{$cat->name}}">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="{{$cat->name}}" class="custom-control-input product-check" data-target="categories" id="{{$cat->name}}">
                                            <label class="custom-control-label" for="{{$cat->name}}">
                                                <small>{{$cat->name}}</small>
                                            </label>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        @endisset
                    </ul>
                </div>
                <div class="card border-0 my-1">
                    <ul class="list-group list-group-flush">
                        @isset($subcategories)
                        <li class="list-group-item bg-light text-center text-dark py-1">
                            <small>Subcategories</small>
                        </li>
                        @foreach ($subcategories as $subcat)
                            @if (in_array($subcat->name, $subs))
                                <li class="list-group-item d-flex align-items-center py-1 px-2" data-toggle="tooltip"
                                    data-position="top" title="{{$subcat->name}}">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" checked value="{{$subcat->name}}" class="custom-control-input product-check" data-target="subcategories" id="{{$subcat->name}}">
                                        <label class="custom-control-label" for="{{$subcat->name}}">
                                            <small>{{$subcat->name}}</small>
                                        </label>
                                    </div>
                                </li>
                            @else
                                <li class="list-group-item d-flex align-items-center py-1 px-2" data-toggle="tooltip"
                                    data-position="top" title="{{$subcat->name}}">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="{{$subcat->name}}" class="custom-control-input product-check" data-target="subcategories" id="{{$subcat->name}}">
                                        <label class="custom-control-label" for="{{$subcat->name}}">
                                            <small>{{$subcat->name}}</small>
                                        </label>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                        @endisset
                    </ul>
                </div>
                <div class="card border-0 mb-1">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light text-center text-dark py-1">
                            <small>Price Range</small>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-1">
                            <small>
                                <input class="custom-range" type="range" min="{{$min_price}}" max="{{$max_price}}" step="0.1"
                                    value="{{$min_price}}" />
                            </small>
                            <span class="text-dark ml-1">${{$min_price}}</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-1">
                                <small>
                                    <input class="custom-range" type="range" min="{{$min_price}}" max="{{$max_price}}" step="0.1"
                                        value="{{$max_price}}" />
                                </small>
                                <span class="text-dark ml-1">${{$max_price}}</span>
                            </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10">
                <div
                    class="row mx-1 pt-3 mb-3 bg-light d-flex justify-content-start align-items-start border-secondary">
                    @foreach ($products as $item)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 ftco-animate d-flex fadeInUp ftco-animated">
                        <div class="product d-flex flex-column">
                            <a href="{{route('store.product.details', [$store->id, $item->id])}}" class="img-prod">
                                <img class="img-fluid" src='{{asset("storage/$item->thumbnail")}}' alt="{{$item->name}}"/>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3">
                                <div class="d-flex">
                                    <div class="cat">
                                        <span><small>{{$item->category}}</small></span>
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
                                <h3><a href="{{route('productDetails', $item->id)}}">{{$item->name}}</a></h3>
                                <div class="pricing">
                                    <p class="price"><span>&dollar;{{$item->price}}</span></p>
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
                @if ($cats)
                    {{ $products->appends(["categories" => implode(",", $cats)])->links() }}
                @else
                    {{ $products->links() }}
                @endif

            </div>
        </div>
    </div>
</section>
@endsection
