@extends('layouts.layout')

@section('description') Sajt @endsection

@section('title') Products @endsection

@section('content')


    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Brand new games</h4>
              <h2>Our products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="products">
      <div class="container">
        <div class="row">
              <div class="col-md-3">
                  <form action="" method="GET">
                      <h4>Sort by</h4>
                      <select class="form-control mb-3" id="sort" name="sort">
                          <option value="">Default</option>
                          <option value="priceAsc" @if(request()->sort && request()->sort == 'priceAsc') selected @endif>Price: Low to High</option>
                          <option value="priceDesc" @if(request()->sort && request()->sort == 'priceDesc') selected @endif>Price: High to Low</option>
                          <option value="nameAsc" @if(request()->sort && request()->sort == 'nameAsc') selected @endif>Name: A to Z</option>
                          <option value="nameDesc" @if(request()->sort && request()->sort == 'nameDesc') selected @endif>Name: Z to A</option>
                      </select>
                      <h4>Genres</h4>
                      @foreach($genres as $genre)
                      <div class="form-check">
                          <input class="form-check-input" id="gen-{{$genre->id}}" name="genres[]" type="checkbox" value="{{$genre->id}}" @if(request()->genres && in_array($genre->id, request()->genres)) checked @endif/>
                          <label class="form-check-label" for="gen-{{$genre->id}}">
                              {{$genre->name}}
                          </label>
                      </div>
                      @endforeach
                      <h4>Genres</h4>
                      @foreach($publishers as $publisher)
                          <div class="form-check">
                              <input class="form-check-input" id="pub-{{$publisher->id}}" name="publishers[]" type="checkbox" value="{{$publisher->id}}" @if(request()->publishers && in_array($publisher->id, request()->publishers)) checked @endif/>
                              <label class="form-check-label" for="pub-{{$publisher->id}}">
                                  {{$publisher->name}}
                              </label>
                          </div>
                      @endforeach
                      <h4>Price from</h4>
                      <input type="range" name="priceFrom" step="100" value="{{request()->priceFrom ?? 0}}" min="0" max="10000" oninput="this.nextElementSibling.value = this.value">
                      <output>{{request()->priceFrom ?? 0}}</output>
                      <h4>Price to</h4>
                      <input type="range" name="priceTo" step="100" value="{{request()->priceTo ?? 10000}}" min="0" max="10000" oninput="this.nextElementSibling.value = this.value">
                      <output>{{request()->priceTo ?? 10000}}</output>
                      <div class="mb-3">
                          <h4>Search</h4>
                          <input type="text" class="form-control mb-3" name="search" placeholder="Search" value="{{request()->search ?? ''}}">
                      </div>
                      <button class="btn btn-primary">Submit</button>
                  </form>
              </div>
              <div class="col-md-9">
                  <div class="filters-content">
                      <div class="row grid">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 all des">
                            @include('partials.product')
                            </div>
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>
          {{$products->withQueryString()->links('pagination::bootstrap-5')}}
        </div>
      </div>
    </div>

@endsection
