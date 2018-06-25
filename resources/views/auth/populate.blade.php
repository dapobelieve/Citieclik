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
              <li><a href="{{ route('home') }}">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              </li>
              <li>Login / Register</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container">
        @if(count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show margin-bottom-1x">
                <span class="alert-close" data-dismiss="alert"></span><i class="icon-ban"></i>&nbsp;&nbsp;
                <strong>Error alert:</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
            </div>
        @endif
            <form class="form-horizontal" method="post" action="{{ route('populate') }}">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Name or Username</label>
                    <div class="col-md-6">
                        <input required type="text" placeholder="Name or Username" name="name" id="name" class="form-control">
                        @if($errors->has('name'))
                        <span class="help-block formlert">
                            {{$errors->first('name')}}
                         </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="phone">Phone Number</label>
                    <div class="col-md-6">
                        <input required type="text" name="phone" placeholder="Phone Number" id="phone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pass">Password</label>
                    <div class="col-md-6">
                        <input required type="password" name="password" placeholder="Password" id="pass" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Submit</button>
                </div>
            </form>
        {{-- </div> --}}
      </div>

@endsection
@section('script')
  <script type="text/javascript">
   @if(Session::has('authMsg'))
    swal({
    title: "",
    text: "{{ Session::get('authMsg')}}",
    type: 'info'
  })
  @endif
  </script>
@stop