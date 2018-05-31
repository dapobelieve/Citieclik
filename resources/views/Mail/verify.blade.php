@extends('layout.template')

@section('title')
Verfication Successful
@endsection

@section('content')

      <div class="container padding-top-3x padding-bottom-3x mb-1"><img class="d-block img-responsive m-auto" src="/assets/img/emailVerify.png" style="width: 20%; height: 20% max-width: 550px;" alt="verified">
        <div class="padding-top-1x mt-2 text-center">
          <h1>Congratulations!!!</h1>
          <p>Your Email has been verified successfully. Login and head over to your Dashboard to claim your free clicks. Continue <a href="{{route('home')}}">Here</a></p>
        </div>
      </div>
@stop