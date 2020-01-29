@extends('layouts.app')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate fadeInUp ftco-animated">
                <a href="{{route('productDetails', $product->id)}}" class="image-popup prod-img-bg" style="">
                    <img data-id="{{$product->id}}" alt="{{$product->name}}"
                        src="{{ asset('storage/'.$product->thumbnail) }}" alt="" class="w-100"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
                <form action="">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="thumbnail" value="{{$product->thumbnail}}">
                    <input type="hidden" name="description" value="{{$product->description}}">
                    <h3>{{$product->name}}</h3>
                    <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span
                                    style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                    <p class="price"><span>{{__("default.currency")}}{{$product->price}}</span></p>
                    <div class="description">
                        <h5 class="text-dark">Description</h5>
                        <p style="font-size: .9em; text-align: justify;">{{$product->description}}</p>
                    </div>
                    <div class="features">
                        <h5 class="text-dark">Features</h5>
                        <p style="font-size: .9em; text-align: justify;">{{$product->features}}</p>
                    </div>
                    <p>
                        @foreach ($keywords as $keyword)
                        <div class="badge badge-light">{{$keyword}}</div>
                        @endforeach
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="fa fa-angle-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Small</option>
                                        <option value="">Medium</option>
                                        <option value="">Large</option>
                                        <option value="">Extra Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn btn-quantity"
                                    data-action="decrease" data-type="minus" data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="quantity form-control input-number"
                                value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn btn-quantity"
                                    data-action="increase" data-type="plus" data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                           <!-- <p style="color: #000;">80 piece available</p> -->
                        </div>
                    </div>
                    <p><a href="#" class="btn btn-black btn-action py-3 px-5 mr-2" data-action="addToCart" data-target="{{$product->id}}">Add to Cart</a>
                        <a href="#" class="btn btn-primary btn-action py-3 px-5" data-action="buy" data-target="{{$product->id}}">Buy now</a></p>
                </form>
            </div>
        </div>
        <!--
        <div class="row mt-5">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link ftco-animate mr-lg-1 fadeInUp ftco-animated active" id="v-pills-1-tab"
                        data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"
                        style="">Description</a>

                    <a class="nav-link ftco-animate mr-lg-1 fadeInUp ftco-animated" id="v-pills-2-tab"
                        data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"
                        style="">Manufacturer</a>

                    <a class="nav-link ftco-animate fadeInUp ftco-animated" id="v-pills-3-tab" data-toggle="pill"
                        href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"
                        style="">Reviews</a>

                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Nike Free RN 2019 iD</h3>
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from
                                it would have been rewritten a thousand times and everything that was left from its
                                origin would be the word "and" and the Little Blind Text should turn around and return
                                to its own, safe country. But nothing the copy said could convince her and so it didn’t
                                take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and
                                Parole and dragged her into their agency, where they abused her for their.</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Manufactured By Nike</h3>
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from
                                it would have been rewritten a thousand times and everything that was left from its
                                origin would be the word "and" and the Little Blind Text should turn around and return
                                to its own, safe country. But nothing the copy said could convince her and so it didn’t
                                take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and
                                Parole and dragged her into their agency, where they abused her for their.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                        <div class="row p-4">
                            <div class="col-md-7">
                                <h3 class="mb-4">23 Reviews</h3>
                                <div class="review">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="desc">
                                        <h4>
                                            <span class="text-left">Jacob Webb</span>
                                            <span class="text-right">14 March 2018</span>
                                        </h4>
                                        <p class="star">
                                            <span>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                            </span>
                                            <span class="text-right"><a href="#" class="reply"><i
                                                        class="icon-reply"></i></a></span>
                                        </p>
                                        <p>When she reached the first hills of the Italic Mountains, she had a last view
                                            back on the skyline of her hometown Bookmarksgrov</p>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="desc">
                                        <h4>
                                            <span class="text-left">Jacob Webb</span>
                                            <span class="text-right">14 March 2018</span>
                                        </h4>
                                        <p class="star">
                                            <span>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                            </span>
                                            <span class="text-right"><a href="#" class="reply"><i
                                                        class="icon-reply"></i></a></span>
                                        </p>
                                        <p>When she reached the first hills of the Italic Mountains, she had a last view
                                            back on the skyline of her hometown Bookmarksgrov</p>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="desc">
                                        <h4>
                                            <span class="text-left">Jacob Webb</span>
                                            <span class="text-right">14 March 2018</span>
                                        </h4>
                                        <p class="star">
                                            <span>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                            </span>
                                            <span class="text-right"><a href="#" class="reply"><i
                                                        class="icon-reply"></i></a></span>
                                        </p>
                                        <p>When she reached the first hills of the Italic Mountains, she had a last view
                                            back on the skyline of her hometown Bookmarksgrov</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="rating-wrap">
                                    <h3 class="mb-4">Give a Review</h3>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>20 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (85%)
                                        </span>
                                        <span>10 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>5 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>0 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>0 Reviews</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
    </div>
</section>
<!--
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 my-2">
            <div class="card border-0">
                <img class="w-100" data-id="{{$product->id}}" alt="{{$product->name}}"
                    srcset="https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_500/{{$product->id}}.png 500w,https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1000/{{$product->id}}.png 1000w,https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1500/{{$product->id}}.png 1500w"
                    sizes="(min-width: 0px) and (max-width: 420px) calc(100vw - 60px),(min-width: 420px) and (max-width: 750px) calc((100vw - 90px) / 2),(min-width: 750px) and (max-width: 1200px) calc((100vw - 120px) / 3),(min-width: 1200px) calc((100vw - 150px) / 4)">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 my-2">
            <form action="">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <div class="card border-0 text-right air mb-1">
                    <table class="table table-striped m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{$product->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Description</th>
                                <td>{{$product->description}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table table-striped m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Features</th>
                                <td>{{$product->features}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Keywords</th>
                                <td>
                                    @foreach ($keywords as $keyword)
                                    <div class="badge badge-light">{{$keyword}}</div>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table table-striped m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Category</th>
                                <td>{{$product->category}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Subcategory</th>
                                <td>{{$product->subcategory}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table table-striped m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Price</th>
                                <td>&dollar;<span class="price">{{$product->price}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Quantity</th>
                                <td class="d-flex align-products-center justify-content-center">
                                    <button type="button" class="btn btn-light btn-sm air rounded-circle btn-quantity"
                                        data-action="decrease"><i class="fa fa-minus"></i></button>
                                    <input type="number" class="form-control" name="quantity" value="1">
                                    <button type="button" class="btn btn-light btn-sm air rounded-circle btn-quantity"
                                        data-action="increase"><i class="fa fa-plus"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-0 text-right air mb-1">
                    <table class="table table-striped m-0 text-left">
                        <tbody>
                            <tr>
                                <th>Promocode</th>
                                <td class="d-flex align-products-center justify-content-center">
                                    <input type="text" name="promocode" class="form-control" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="d-flex justify-content-end">
                <button class="btn btn-light btn-lg air my-2 ml-auto rounded-0" id="addToCart">
                    <i class="fa fa-cart-plus"></i> Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>
</div>
-->
@endsection
