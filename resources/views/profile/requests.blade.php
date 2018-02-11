@extends('profile.layout.template')

@section('title')
My Requests | Citieclik
@endsection


  @section('profileContent')
      <div class="col-lg-8">
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <div class="table-responsive">
          <table class="table table-hover margin-bottom-none">
            <thead>
              <tr>
                <th>Request hey Name</th>
                <th>Date Submitted | Updated</th>
                <th>Type</th>
                <th>Priority</th>
                {{-- <th>Status</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach($user->getUserReq() as $servy)
                <tr>
                  <td><a class="text-medium navi-link" href="#">{{ $servy->title }}</a></td>
                  <td>08/08/2017 | 08/14/2017</td>
                  <td>Website problem</td>
                  <td><span class="text-warning">{{ $servy->priority }}</span></td>
                  {{-- <td><span class="text-primary">Open</span></td> --}}
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <hr class="mb-4">

        @if(Auth::check())
            <div class="text-right">
              <a href="{{route('request.add')}}" class="btn btn-primary margin-bottom-none">Submit New Request</a>
            </div>
        @endif
      </div>
  @endsection