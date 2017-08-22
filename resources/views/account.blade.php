@extends('layout.template')

@section('title')
Account | Citieclik
@endsection
@include('layout.profilepics')

@section('content')
	<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Profile / Contact Address</h1>
          </div>
          @include('layout.column')
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          @include('layout.profileside')
          <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <h4>Contact Address</h4>
            <hr class="padding-bottom-1x">
            <form class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-company">Company</label>
                  <input class="form-control" type="text" id="account-company" value="Bets Company Ltd.">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-country">Country</label>
                  <select class="form-control" id="account-country">
                    <option>Choose country</option>
                    <option>Australia</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>Switzerland</option>
                    <option selected>United States</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-city">City</label>
                  <select class="form-control" id="account-city">
                    <option>Choose city</option>
                    <option>Amsterdam</option>
                    <option>Berlin</option>
                    <option>Geneve</option>
                    <option selected>New York</option>
                    <option>Paris</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-zip">ZIP Code</label>
                  <input class="form-control" type="text" id="account-zip" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-address1">Address 1</label>
                  <input class="form-control" type="text" id="account-address1" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-address2">Address 2</label>
                  <input class="form-control" type="text" id="account-address2">
                </div>
              </div>
              <div class="col-12 padding-top-1x">
                <h4>Shipping Address</h4>
                <hr class="padding-bottom-1x">
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox" checked><span class="custom-control-indicator"></span><span class="custom-control-description">Same as Contact Address</span>
                </label>
                <hr class="margin-top-1x margin-bottom-1x">
                <div class="text-right">
                  <button class="btn btn-primary margin-bottom-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your address updated successfuly.">Update Address</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection