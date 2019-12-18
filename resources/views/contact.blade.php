@extends('layouts.store_header')

@section('content')
<section class="ftco-section contact-section bg-light">
        <div class="container">
            <h1 class="text-center my-5">Contact Us</h1>
            <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4 text-center">
                    <i class="fa fa-map-marker fa-3x"></i>
                  <p><span>Address:</span> <span class="text-dark">{{$site->address}}</span></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4 text-center">
                    <i class="fa fa-phone fa-3x"></i>
                  <p><span>Phone:</span> <a href="tel://{{$site->phone_1}}">{{$site->phone_1}}</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4 text-center">
                    <i class="fa fa-envelope fa-3x"></i>
                  <p><span>Email:</span> <a href="mailto:{{$site->email_info}}">{{$site->email_info}}</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4 text-center">
                    <i class="fa fa-globe fa-3x"></i>
                  <p><span>Website:</span> <a href="{{$site->website_home}}">{{$site->website_home}}</a></p>
                </div>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
              <form action="#" class="bg-white p-5 contact-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
          </div>
        </div>
      </section>
@endsection
