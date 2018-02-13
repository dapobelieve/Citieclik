@extends('profile.layout.template')

@section('title')
Edit | Profile
@stop

    @section('profileContent')
        <div class="col-lg-8">


                  @if(Session::has('info'))
                  <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
                    <span class="alert-close" data-dismiss="alert"></span>
                    <i class="icon-help"></i>&nbsp;&nbsp;
                    <strong>Success alert: </strong>{{Session::get('info')}}
                  </div>
                  @endif
            
                    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                    <form class="row" method="POST" action="{{route('profile.edit')}}">
                      <div class="col-md-6">
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : ''}}">
                          <label for="account-fn">First Name</label>
                          <input class="form-control" name="fname" value="{{ Request::old('fname') ?: $user->first_name}}" type="text" id="fname" required >
                          @if($errors->has('fname'))
                            <span class="help-block formlert">
                              {{$errors->first('fname')}}
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : ''}}">
                          <label for="account-ln">Last Name</label>
                           <input class="form-control" name="lname" value="{{ Request::old('lname') ?: $user->last_name}}" type="text" id="lname" >
                           @if($errors->has('lname'))
                              <span class="help-block formlert">
                                {{$errors->first('lname')}}
                              </span>
                            @endif
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                          <label for="account-email">E-mail Address</label>
                          <input class="form-control" name="email" type="email" value="{{ Request::old('email') ?: $user->email}}" id="email" >
                          @if($errors->has('email'))
                            <span class="help-block formlert">
                              {{$errors->first('email')}}
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                          <label for="account-phone">Phone Number</label>
                          <input class="form-control" type="text" name="phone" value="{{ Request::old('phone') ?: $user->phone}}" id="phone" >
                          @if($errors->has('phone'))
                            <span class="help-block formlert">
                              {{$errors->first('phone')}}
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}">
                          <label for="account-pass">Username</label>
                          <input class="form-control" type="text" name="username" value="{{ Request::old('username') ?: $user->username}}" >
                          @if($errors->has('username'))
                            <span class="help-block formlert">
                              {{$errors->first('username')}}
                            </span>
                          @endif
                        </div>
                      </div>
                      @if(empty($user->password))
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="account-confirm-pass">Please set a Password</label>
                              <input class="form-control" type="password" >
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="account-confirm-pass">Confirm Password</label>
                              <input class="form-control" type="password" id="account-confirm-pass">
                            </div>
                          </div>
                      @endif
                      <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                          {{-- <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" checked><span class="custom-control-indicator"></span><span class="custom-control-description">Subscribe me to Newsletter</span>
                          </label> --}}
                          <button class="btn btn-primary margin-right-none" type="submit" >Update Profile</button>
                        </div>
                      </div>
                      {{csrf_field()}}
                    </form>
        </div>
    @stop
