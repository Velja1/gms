@extends('layouts.layout')

@section('description') Sajt @endsection

@section('title') Home @endsection

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01" style="background-image: url({{asset('assets/images/battlefieldbanner.png')}})">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02" style="background-image: url({{asset('assets/images/fifabanner.png')}})"">
                <div class="text-content" >
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03" style="background-image: url({{asset('assets/images/dyinglightbanner.png')}})">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Products</h2>
                        <a href="{{route('products')}}">View all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($products as $product)
                    <div class="col-md-4">
                        @include('partials.product')
                    </div>
                @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About GM:S</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Looking for the best products?</h4>
                        <p>We are young perspective shop, leaded by team of entusiasists which main goal is to provide access to games for more people.</p>
                        <ul class="featured-list">
                            <li>Best prices</li>
                            <li>Fast delivery</li>
                            <li>Good deals</li>
                            <li>Return policy</li>
                            <li>Happy shopping!</li>
                        </ul>
                        <a href="{{route('products')}}" class="filled-button">View products</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('assets/images/games.png')}}" alt="Games">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






