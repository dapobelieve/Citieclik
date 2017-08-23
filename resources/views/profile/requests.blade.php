@extends('layout.template')

@section('title')
My Requests | Citieclik
@endsection
@include('layout.profilepics')
@section('content')
  <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>My Requests</h1>
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
            <div class="text-right">
              <button class="btn btn-primary margin-bottom-none" data-toggle="modal" data-target="#openTicket">Submit New Request</button>
            </div>
          </div>
        </div>
      </div>


      
@endsection