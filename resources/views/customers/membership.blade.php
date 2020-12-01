@extends('layouts.master')

@section('title')
    Membership
@endsection

@section('banner_link')
<li><a href="Request::url()">Membership</a></li>
@endsection


@section('content')
<!--================Newsletter Area =================-->
<section class="newsletter_area gray_bg">
    <div class="container">
      <div class="newsletter_inner">
        <div class="row">
          <div class="col-lg-6">
            <div class="news_left_text">
              <h4>
                Join our Newsletter list to get all the latest offers,
                discounts and other benefits
              </h4>
            </div>
          </div>
          <div class="col-lg-6">
                <form method="POST" action="/membership" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="newsletter_form">
                        <div class="input-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address" @if(!$errors->has('email')) value="{{ old('email') }}" @endif>  
                            <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">
                                Subscribe Now
                            </button>
                            </div>
                        </div>
                    </div>
                    {!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}
                </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Newsletter Area =================-->
  <!--================ Benefit Area =================-->
  <section>
    <div class="container">
      <div class="main_title">
        <h2>Member's Benefit</h2>
      </div>
      <div class="cake_feature_row row">
        <div class="col-lg-3 col-md-4 col-6">
          <div class="cake_feature_item">
            <div class="cake_img">
              <img src="img/feature/feature-1.jpg" alt="" />
            </div>
            <div class="cake_text">
              <h3>Discount</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="cake_feature_item">
            <div class="cake_img">
              <img src="img/feature/feature-2.jpg" alt="" />
            </div>
            <div class="cake_text">
              <h3>Promotion</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="cake_feature_item">
            <div class="cake_img">
              <img src="img/feature/feature-3.jpg" alt="" />
            </div>
            <div class="cake_text">
              <h3>Gift</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="cake_feature_item">
            <div class="cake_img">
              <img src="img/feature/feature-4.jpg" alt="" />
            </div>
            <div class="cake_text">
              <h3>Delivery</h3>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!--================End Benefit Area =================-->
  <!--================Contact Form Area =================-->
  <section class="contact_form_area p_100">
    <div class="container">
      <div class="main_title">
        <h2>Contact Us</h2>
        <h5>Do you have anything in your mind to let us know? Kindly don't delay to connect to us by means of our
          contact form.</h5>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <form class="row contact_us_form"
            action="#" method="get"
            id="contactForm" novalidate="novalidate">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
            </div>
            <div class="form-group col-md-12">
              <textarea class="form-control" name="message" id="message" rows="1"
                placeholder="Wrtie message"></textarea>
            </div>
            <div class="form-group col-md-12">
              <button type="submit" value="submit" class="btn order_s_btn form-control">Send now</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4 offset-md-1">
          <div class="contact_details">
            <div class="contact_d_item">
              <h3>Address :</h3>
              <p>Simcoe Street, Oshawa, ON
              </p>
            </div>
            <div class="contact_d_item">
              <h5>Phone : <a href="tel:+11111111111">+1 111 111 1111</a></h5>
              <h5>Email : <a href="mailto:auntrosie@gmail.com">auntrosie@gmail.com</a></h5>
            </div>
            <div class="contact_d_item">
              <h3>Opening Hours :</h3>
              <p>Mon. : Fri.: 8 am - 5 pm
              </p>
              <p>Sat. : 9am - 4pm</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop