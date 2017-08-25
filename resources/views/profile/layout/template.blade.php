@extends('layout.template')

    @section('title')
    Profile | Citieclik
    @endsection


@include('profile.layout.profilepics')


@section('content')
	<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>@yield('breadcrumb')</h1>
          </div>
          @include('layout.column')
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
          @include('profile.layout.profileside')


          @yield('profileContent')



        </div>
      </div>     
@endsection