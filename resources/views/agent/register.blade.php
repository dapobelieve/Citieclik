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
                <form class="row" method="post" action="{{ route('signup-sales')}}">
                          <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('fname') ? ' has-error' : ''}}">
                              <label for="reg-fn">First Name</label>
                              <input class="form-control" name="fname" value="{{ Request::old('fname') ?: ''}}" type="text" id="fname" >
                              @if($errors->has('fname'))
                                <span class="help-block formlert">
                                  {{$errors->first('fname')}}
                                </span>
                              @endif
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('lname') ? ' has-error' : ''}}">
                              <label for="reg-ln">Last Name</label>
                              <input class="form-control" name="lname" value="{{ Request::old('lname') ?: ''}}" type="text" id="lname" >
                              @if($errors->has('lname'))
                                <span class="help-block formlert">
                                  {{$errors->first('lname')}}
                                </span>
                              @endif
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                              <label for="reg-email">E-mail Address</label>
                              <input class="form-control" name="email" value="{{ Request::old('email') ?: ''}}" type="email" id="email" >
                              @if($errors->has('email'))
                                <span class="help-block formlert">
                                  {{$errors->first('email')}}
                                </span>
                              @endif
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                              <label for="reg-phone">Phone Number</label>
                              <input class="form-control" type="text"  name="phone" value="{{ Request::old('phone') ?: ''}}" id="phone" >
                              @if($errors->has('phone'))
                                <span class="help-block formlert">
                                  {{$errors->first('phone')}}
                                </span>
                              @endif
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                              <label for="reg-pass">Password</label>
                              <input class="form-control" type="password" name="password" id="password" >
                              @if($errors->has('password'))
                                <span class="help-block formlert">
                                  {{$errors->first('password')}}
                                </span>
                              @endif
                            </div>
                          </div>
                          <div class="col-sm-6{{ $errors->has('password_confirmation') ? ' has-error' : ''}}">
                            <div class="form-group">
                              <label for="reg-pass-confirm">Confirm Password</label>
                              <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" >
                              @if($errors->has('password_confirmation'))
                                <span class="help-block formlert">
                                  {{$errors->first('password_confirmation')}}
                                </span>
                              @endif
                            </div>
                          </div>
                          <div class="col-12 text-center text-sm-right">
                            <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
                          </div>
                          {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
@endsection
