@extends('layout.template')

@section('title')
Create Account
@endsection

@section('content')

<div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Login / Create Account</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li><a href="account-orders.html">Account</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Login / Register</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
          <div class="col-md-6">
          @if(Session::has('info'))
              {{ Session::get('info') }}
            @endif
            <form class="login-box" method="post" action="{{ route('auth.signin')}}">
              <div class="row margin-bottom-1x">
                <div class="col-xl-4 col-md-6 col-sm-4">
                  <a class="btn btn-sm btn-block facebook-btn" href="/redirect/facebook">
                  <i class="socicon-facebook"></i>&nbsp; login
                  </a>
                </div>
                {{-- <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href="#"><i class="socicon-twitter"></i>&nbsp;Twitter login</a></div> --}}
                <div class="col-xl-4 col-md-6 col-sm-4">
                  <a class="btn btn-sm btn-block google-btn" href="/redirect/google">
                  <i class="socicon-googleplus"></i>&nbsp; login</a></div>
              </div>
              <h4 class="margin-bottom-1x">Or using the form below</h4>
              <div class="form-group input-group">
                <input class="form-control" type="text" name="phone1" placeholder="Phone Number" ><span class="input-group-addon"><i class="icon-mail"></i></span>
                @if($errors->has('phone1'))
                  <span class="help-block">
                    {{$errors->first('phone1')}}
                  </span>
                @endif
              </div>
              <div class="form-group input-group">
                <input class="form-control" type="password" name="password1" placeholder="Password" ><span class="input-group-addon"><i class="icon-lock"></i></span>
                @if($errors->has('password1'))
                  <span class="help-block">
                    {{$errors->first('password1')}}
                  </span>
                @endif
              </div>
              <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                <label class="custom-control custom-checkbox">
                  <input class="custom-control-input" name="remember" type="checkbox" ><span class="custom-control-indicator"></span><span class="custom-control-description">Remember me</span>
                </label>{{-- <a class="navi-link" href="#">Forgot password?</a> --}}
              </div>
              <div class="text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
              </div>
              {{csrf_field()}}
            </form>
          </div>
          <div class="col-md-6">
            <div class="padding-top-3x hidden-md-up"></div>
            <h3 class="margin-bottom-1x">No Account? Register</h3>
            <p>You can also register with your social accounts.</p>
            <form class="row" method="post" action="{{ route('auth.signup')}}">
              <div class="col-sm-6">
                <div class="form-group{{ $errors->has('fname') ? ' has-error' : ''}}">
                  <label for="reg-fn">First Name</label>
                  <input class="form-control" name="fname" value="{{ Request::old('fname') ?: ''}}" type="text" id="fname" >
                  @if($errors->has('fname'))
                    <span class="help-block">
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
                    <span class="help-block">
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
                    <span class="help-block">
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
                    <span class="help-block">
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
                    <span class="help-block">
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
                    <span class="help-block">
                      {{$errors->first('password_confirmation')}}
                    </span>
                  @endif
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                <label class="custom-control custom-checkbox">
                  <input class="custom-control-input" name="agent" type="checkbox" ><span class="custom-control-indicator"></span><span class="custom-control-description">Register as a 
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Learn More" class="sagent">Sales Agent</a>
                  </span>
                </label>{{-- <a class="navi-link" href="#">Forgot password?</a> --}}
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
@section('script')
  <script type="text/javascript">
   @if(Session::has('Message'))
    swal({
    title: "oops not allowed",
    text: "{{ Session::get('Message')}}",
    type: 'warning'
  })
  @endif
  </script>
@stop