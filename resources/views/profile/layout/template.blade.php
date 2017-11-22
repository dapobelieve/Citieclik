@extends('layout.template')

    @section('title')
    Profile | Citieclik
    @endsection


@include('profile.layout.profilepics')


@section('content')

<form class="modal fade" method="post" id="openTicket" tabindex="-1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Submit New Ticket</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <p class="text-muted">We normally respond tickets within 2 business days.</p>
                  <div class="form-group">
                    <label for="ticket-subject">Subject</label>
                    <input class="form-control" type="text" id="ticket-subject" required>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="ticket-type">Type</label>
                        <select class="form-control" id="ticket-type">
                          <option>Choose type</option>
                          <option>Website problem</option>
                          <option>Partner request</option>
                          <option>Complaint</option>
                          <option>Info inquiry</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="ticket-priority">Priority</label>
                        <select class="form-control" id="ticket-priority">
                          <option>How urgent is your issue?</option>
                          <option>Urgent</option>
                          <option>High</option>
                          <option>Medium</option>
                          <option>Low</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ticket-description">Description</label>
                    <textarea class="form-control" id="ticket-description" rows="8" required></textarea>
                  </div>
                </div>
                <div class="modal-footer flex-wrap justify-content-between align-items-center">
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" id="file-input"><span class="custom-file-control"></span>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit Ticket</button>
                </div>
              </div>
            </div>
      </form>
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