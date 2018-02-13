@extends('layout.template')

@section('title')
Create Account
@endsection

@section('content')

<div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Create Account</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li><a href="#">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x ">
        <div class="row {{-- agent-form --}} dparent">
            <div class="col-md-12 pikin">
                <div class="padding-top-3x hidden-md-up"></div>
                <h3 class="margin-bottom-1x">Register</h3>
                <p>It takes few minutes</p>
                <form class="row" method="post" action="{{ route('agent.register')}}">
                  <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('fname') ? ' has-error' : ''}}">
                          <label for="reg-fn">First Name *</label>
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
                      <label for="reg-email">E-mail Address *</label>
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
                      <label for="reg-phone">Phone Number *</label>
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
                      <label for="reg-pass">Password *</label>
                      <input class="form-control" type="password" name="password" id="password" >
                      @if($errors->has('password'))
                        <span class="help-block">
                          {{$errors->first('password')}}
                        </span>
                      @endif
                    </div>
                    <input type="hidden" value="{{ $agentToken->code }}" name="token">
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
                  <div class="col-12 text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
                  </div>
                  {{-- {{csrf_field()}} --}}

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