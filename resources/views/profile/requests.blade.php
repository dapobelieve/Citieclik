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
                <th>Request Name</th>
                <th>Date Submitted | Updated</th>
                <th>Type</th>
                <th>Priority</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a class="text-medium navi-link" href="#">My new Request</a></td>
                <td>08/08/2017 | 08/14/2017</td>
                <td>Website problem</td>
                <td><span class="text-warning">High</span></td>
                <td><span class="text-primary">Open</span></td>
              </tr>
              <tr>
                <td><a class="text-medium navi-link" href="#">Another Request</a></td>
                <td>07/21/2017 | 07/23/2017</td>
                <td>Partner request</td>
                <td><span class="text-info">Medium</span></td>
                <td><span class="text-muted">Closed</span></td>
              </tr>
              <tr>
                <td><a class="text-medium navi-link" href="#">Yet another Request</a></td>
                <td>05/19/2017 | 05/20/2017</td>
                <td>Complaint</td>
                <td><span class="text-danger">Urgent</span></td>
                <td><span class="text-muted">Closed</span></td>
              </tr>
              <tr>
                <td><a class="text-medium navi-link" href="#">My old ticket</a></td>
                <td>05/19/2017 | 05/20/2017</td>
                <td>Info inquiry</td>
                <td><span class="text-success">Low</span></td>
                <td><span class="text-muted">Closed</span></td>
              </tr>
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