@extends('layout.template')

@section('title')
Profile | Citieclik
@endsection

@section('content')
	<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>My Profile</h1>
          </div>
          @include('layout.column')
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
          @include('layout.profileside')
          <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <form class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-fn">First Name</label>
                  <input class="form-control" type="text" id="account-fn" value="Daniel" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-ln">Last Name</label>
                  <input class="form-control" type="text" id="account-ln" value="Adams" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-email">E-mail Address</label>
                  <input class="form-control" type="email" id="account-email" value="daniel.adams@mail.com" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-phone">Phone Number</label>
                  <input class="form-control" type="text" id="account-phone" value="+7(805) 348 95 72" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-pass">New Password</label>
                  <input class="form-control" type="password" id="account-pass">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-confirm-pass">Confirm Password</label>
                  <input class="form-control" type="password" id="account-confirm-pass">
                </div>
              </div>
              <div class="col-12">
                <hr class="mt-2 mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <label class="custom-control custom-checkbox d-block">
                    <input class="custom-control-input" type="checkbox" checked><span class="custom-control-indicator"></span><span class="custom-control-description">Subscribe me to Newsletter</span>
                  </label>
                  <button class="btn btn-primary margin-right-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection