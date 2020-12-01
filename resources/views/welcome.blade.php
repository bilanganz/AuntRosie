@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
<!--================Welcome Area =================-->
<section class="welcome_bakery_area cake_feature_main p_100">
    <div class="container">
        <div class="welcome_bakery_inner p_100">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main_title">
                    <h2>Welcome to Aunt Rosie’s Homemade Pies and Preserves</h2>
                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum dolore distinctio,
                                            est totam rem facilis officia quod nobis voluptatum ea, 
                                        commodi, ex consequatur quibusdam! Illum magnam officia tenetur commodi animi.
                    </p>
                    </div>
                    <div class="welcome_left_text">
                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum eum in unde voluptate. 
                                        Earum perspiciatis quis consectetur, 
                                        id ducimus ratione maxime cupiditate ab dolorum nostrum sequi possimus atque neque voluptates?
                    </p>
                    <a class="pink_btn" href="/membership">Register for Aunt Rosie's Membership</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="welcome_img">
                    <img
                        class="img-fluid"
                        src="img/feature/rosie.png"
                        alt=""
                    />
                    </div>
                </div>
            </div>
        </div>
        <div class="main_title">
            <h2>Our Featured Products</h2>
        </div>
        <div class="cake_feature_row row">
            <div class="col-lg-3 col-md-4 col-6">
            <div class="cake_feature_item">
                <div class="cake_img">
                <img src="img/feature/feature-1.jpg" alt="" />
                </div>
                <div class="cake_text">
                <h4>$29.99</h4>
                <h3>Steak and kidney pie</h3>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
            <div class="cake_feature_item">
                <div class="cake_img">
                <img src="img/feature/feature-2.jpg" alt="" />
                </div>
                <div class="cake_text">
                <h4>$29.99</h4>
                <h3>Steak and stout pie</h3>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
            <div class="cake_feature_item">
                <div class="cake_img">
                <img src="img/feature/feature-3.jpg" alt="" />
                </div>
                <div class="cake_text">
                <h4>$29.99</h4>
                <h3>Rosemary chicken pie</h3>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
            <div class="cake_feature_item">
                <div class="cake_img">
                <img src="img/feature/feature-4.jpg" alt="" />
                </div>
                <div class="cake_text">
                <h4>$29.99</h4>
                <h3>Turkey leek pie</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@stop