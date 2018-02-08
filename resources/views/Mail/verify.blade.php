@extends('layout.template')

@section('title')
Verfication Successful
@endsection

@section('content')

      <div class="container padding-top-3x padding-bottom-3x mb-1"><img class="d-block img-responsive m-auto" src="/assets/img/emailVerify.png" style="width: 20%; height: 20% max-width: 550px;" alt="verified">
        <div class="padding-top-1x mt-2 text-center">
          <h1>Congratulations!!!</h1>
          <p>Your Email Address has been verified successfully.<a href="{{route('home')}}">Home</a></p>
        </div>
      </div>
@stop