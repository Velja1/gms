@extends('layouts.layout')

@section('description') Sajt @endsection

@section('title') About author @endsection

@section('content')
    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>About author</h4>
              <h2>Veljko Vulović</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{asset('assets/images/author.jpg')}}" alt="Author">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Veljko Vulović</h4>
                <p>Author of this site is Veljko Vulović, a student of Academy of Technical and Art Applied Studies Belgrade. Number of index: 282/18.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

