    @extends('layouts.app')

    @section('content')
    <div class="hero-wrap hero-bread bg-light py-5" style="background-image: url('images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                    <h1 class="mb-0 bread"
                        style='font-family: "Lato", Arial, sans-serif; font-weight: 100; font-size: 40px;'>My Cart</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">{{__('home')}}</a></span>
                        <span>Cart</span></p>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate fadeInUp ftco-animated cart-items" style="overflow-x: scroll">
                    <div class="cart-list" style="overflow-x: auto">
                        <table class="table">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>
                                        <a href="{{route('cart.empty')}}" class="btn btn-danger px-3" title="Empty Cart">
                                            <i class="fa fa-trash fa-fw"></i>
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($products)
                                    @foreach ($products as $index => $item)
                                        <tr class="text-center">
                                            <td class="image-prod py-1">
                                                <div class="img" style="background-image:url(storage/{{$item->thumbnail}}); width: 80px; height: 100px; background-size: contain;"></div>
                                            </td>
                                            <td class="product-name py-1">
                                            <h3><a href="{{route('store.product.details', [$item->store_id, $item->id])}}" title="{{$item->name}}">{{Str::limit($item->name, 40, '...')}}</a></h3>
                                            </td>
                                            <td class="price py-1">{{__('default.currency')}}{{number_format($item->price, 2)}}</td>
                                            <td class="quantity py-1">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="quantity" class="quantity form-control input-number" value="{{$item->quantity}}" min="1" max="100">
                                                </div>
                                            </td>
                                            <td class="total py-1">{{__('default.currency')}}{{number_format($item->price * $item->quantity, 2)}}</td>
                                            <td class="product-remove py-1"><a href="{{route('cart.remove', $index)}}"><span class="ion-ios-close"></span></a></td>
                                        </tr>
                                    @endforeach
                                @else

                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                    <div class="row justify-content-end">
                        <div class="col-md-4 cart-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="cart-total mb-3">
                                <h3>Cart Totals</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>{{__('default.currency')}}{{number_format($total, 2)}}</span>
                                </p>
                                <p class="d-flex">
                                    <span>Delivery</span>
                                    <span>{{__('default.currency')}}0.00</span>
                                </p>
                                <p class="d-flex">
                                    <span>Discount</span>
                                    <span>{{__('default.currency')}}0.00</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>{{__('default.currency')}}{{number_format($total, 2)}}</span>
                                </p>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="termsSwitch" required>
                                        <label class="custom-control-label" for="termsSwitch">I have read and accept the terms & conditions.</label>
                                      </div>
                                </div>

                                <p>
                                    @if (Auth::check())
                                    
                                    <form>
                                        <script src="https://checkout.flutterwave.com/v3.js"></script>
                                        <button disabled class="btn btn-info btn-block py-2 text-light disabled" id="checkoutButton" onclick="makePayment()">Proceed to checkout</button>
                                      </form>
                                    
                                    <!--<button disabled type="button" class="btn btn-info btn-block py-2 disabled" id="checkoutButton" onclick="payWithPaystack()" style="color: white!important"> Checkout </button> -->
                                    @else
                                        <a href="{{route('login')}}" class="btn btn-info btn-block py-2 text-light">Login</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 .col-sm-12 mt-2 cart-items" style="overflow-x: scroll">
                <div class="card p-3 mb-2 border-0 bg-light">
                    <div class="row">
                        <div class="col-2"><strong></strong></div>
                        <div class="col-5"><strong>Name</strong></div>
                        <div class="col-2"><strong>Quantity</strong></div>
                        <div class="col-3"><strong>Price</strong></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mt-2">
                <div class="card p-3 mb-2 border-0 bg-light text-center">
                    Choose Payment Method
                </div>
                <div class="card border-0">
                    <div class="card-body text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="paymentMethod" class="custom-control-input"
                            value="card">
                        <label class="custom-control-label" for="customRadioInline1">Credit Card</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="paymentMethod" class="custom-control-input"
                            value="mobile">
                        <label class="custom-control-label" for="customRadioInline2">Mobile Money</label>
                    </div>
                </div>
            </div>
            <div class="card border-bottom-0 border-left-0 border-right-0 rounded-0 p-2 border-top border-secondary payment-method-details creditCard" style="display: none">
                <form action="" class="form">
                    <div class="form-group">
                        <label for="cardName">Cardholder's Name</label>
                        <input type="text" name="cardName" id="cardName" class="form-control" minlength="6" required>
                    </div>
                    <div class="form-group">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" name="cardNumber" id="cardNumber" class="form-control" minlength="12"
                            maxlength="12" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-7">
                            <label for="cardExpiry">Card Expiry Date</label>
                            <input type="date" name="cardExpiry" id="cardExpiry" class="form-control" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="cardSecret">CVV</label>
                            <input type="text" name="cardSecret" id="cardSecret" class="form-control" minlength="3"
                                maxlength="4" required>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success btn-lg btn-block border-0 air text-white">Checkout</button>
                    </div>
                </form>
            </div>
            <div class="card border-bottom-0 border-left-0 border-right-0 rounded-0 p-2 border-top border-secondary payment-method-details mobile" style="display: none">
                <form action="" class="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" minlength="6" required>
                    </div>
                    <div class="form-group">
                        <label for="mobileNumber">Phone Number</label>
                        <input type="text" name="mobileNumber" id="mobileNumber" class="form-control" minlength="10"
                            maxlength="10" pattern="[0-9]+" required>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success btn-lg btn-block border-0 air text-white">Checkout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
-->
@endsection

@section('scripts')
<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/demo3/pages/custom/apps/user/cart.js')}}" type="text/javascript"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
@if (Auth::check())
<script>
//const paymentForm = document.getElementById('paymentForm');
/*
function payWithPaystack() {
  let handler = PaystackPop.setup({
    key: "{{env('PAYSTACK_TEST_PUBLIC_KEY')}}",
	email: "{{Auth::user()->email}}",
    amount: "{{$total * 100}}",
    firstname: "{{explode(' ', Auth::user()->name)[0]}}",
    lastname: "{{explode(' ', Auth::user()->name)[1]}}",
    ref: `ref-${Math.ceil(Math.random() * 10e13)}`,
    currency: "GHS",
    label: "{{Auth::user()->name}}",
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
		console.log(response);
    }
  });
  handler.openIframe();
}
*/
function makePayment() {
    FlutterwaveCheckout({
      public_key: "{{env('FLUTTERWAVE_PUBLIC_KEY')}}",
      tx_ref: "hooli-tx-1920bbtyt",
      amount: {{$total}},
      currency: "GHS",
      payment_options: "card, mobilemoneyghana",
      redirect_url: // specified redirect URL
        "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
      meta: {
      consumer_id: {{Auth::user()->id}},
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "{{Auth::user()->email}}",
        phone_number: "{{Auth::user()->phonenumber}}",
        name: "{{Auth::user()->name}}",
      },
      callback: function (data) {
        console.log(data);
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "{{config('app.name')}}",
        description: "Payment for items in cart",
        logo: "https://cdn.filestackcontent.com/gpDGnRSHToe2Nfwhp8B7",
      },
    });
  }
 
</script>
@endif
<!--end::Page Scripts -->
@endsection
