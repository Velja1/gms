@extends('layouts.layout')

@section('description') Sajt @endsection

@section('title') {{$product->name}} @endsection

@section('content')

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>From: {{$product->publisher->name}}</h4>
                        <h2>{{$product->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                                <div class="col-lg-4 col-md-4 all des">
                                    <div class="product-item">
                                        <img src="{{asset('/assets/images/'.$product->imagelink)}}" alt="{{$product->name}}">
                                    </div>
                                </div>
                            <div class="col-lg-4 col-md-4 all des desc">
                                <h1>{{$product->name}}</h1>
                                <h6>Publisher: {{$product->publisher->name}}</h6>
                                <h6>Genre: {{$product->genre->name}}</h6>
                                <h6>Price: {{$product->price}} RSD</h6>
                                <h6>Category: {{$product->category->name}}</h6>
                                <h6>Release date:  {{$product->release_date}}</h6>

                                <h4>Description:</h4>
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
