@extends('layouts.layout')

@section('description') Sajt @endsection

@section('title') Home @endsection

@section('content')

<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .cont{
        margin-top:100px;
    }
</style>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100 cont">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                         class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{route('doLogin')}}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="tbEmail" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="tbEmail">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="tbPassword" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="tbPassword">Password</label>
                        </div>
                            @if(session()->get('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{session()->get('error')}}
                                </div>
                            @endif

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cbRemember" checked />
                                <label class="form-check-label" for="cbRemember"> Remember me </label>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                    </form>
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>
                    <a class="btn btn-info btn-lg btn-block mt-4" href="{{route('register')}}">Register</a>
                </div>
            </div>
        </div>
    </section>

@endsection

