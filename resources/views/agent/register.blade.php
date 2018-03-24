@extends('layout.template')

@section('title')
Become a sales agent | Citieclik
@endsection

@section('content')
    <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Earn on Citieclik</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Sales agent</li>
            </ul>
          </div>
        </div>
      </div>

    <div class="container padding-bottom-2x mb-2">
        <div class="row align-items-center padding-bottom-2x">
          <div class="col-md-5"><img class="d-block w-270 m-auto" src="/assets/img/features/03.jpg" alt="Online Shopping"></div>
          <div class="col-md-7 text-md-left text-center">
            <div class="mt-30 hidden-md-up"></div>
            <h2>Sign up.</h2>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="text-input">First name</label>
                <div class="col-10">
                    <input class="form-control" type="text" id="text-input" value="" name="first_name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="text-input">Last name</label>
                <div class="col-10">
                    <input class="form-control" type="text" id="text-input" value="" name="last_name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="text-input">Username</label>
                <div class="col-10">
                    <input class="form-control" type="text" id="text-input" value="" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="text-input">Email</label>
                <div class="col-10">
                    <input class="form-control" type="email" id="text-input" value="" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="text-input">Password</label>
                <div class="col-10">
                    <input class="form-control" type="password" id="text-input" value="" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="text-input">Confirm Password</label>
                <div class="col-10">
                    <input class="form-control" type="password" id="text-input" value="" name="password">
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" checked=""><span class="custom-control-indicator"></span><span class="custom-control-description">Remember me</span>
                </label>
                <div class="text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
                </div>
            </div>
            

          </div>
        </div>
        <hr>
    </div>
@endsection
