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
            <div class="col-md-12 ftco-animate fadeInUp ftco-animated cart-items">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>$20.60</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a>
                </p>
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
