@extends('profile.layout.template')

@section('title')
Sales Agent | Citieclik
@endsection


  @section('profileContent')
        <div class="col-lg-8">
            <h6 class="text-muted text-normal text-uppercase padding-top-2x mt-2"></h6>
            <div class="alert alert-image-bg alert-dismissible fade show text-center " style="background-image: url(/assets/img/banners/alert-bg.jpg);">
              <div class="h5 text-medium text-white padding-top-1x padding-bottom-1x"><i class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i>&nbsp;&nbsp;Agents Link would be displayed here
                <div class="mt-3 hidden-xl-up"></div><a class="btn btn-primary" href="#">Link Status (active/inactive)</a>
              </div>
            </div>
            <h6 class="text-muted text-normal text-uppercase padding-top-2x mt-2"></h6>
            {{-- <hr class="margin-bottom-1x"> --}}
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link " href="#archive" data-toggle="tab" role="tab"><i class="icon-help"></i>Help</a></li>
              <li class="nav-item"><a class="nav-link active" href="#profile5" data-toggle="tab" role="tab"><i class="icon-graph"></i>Downlines</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings5" data-toggle="tab" role="tab"><i class="icon-cog"> </i>Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade " id="archive" role="tabpanel">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              </div>
              <div class="tab-pane fade show active" id="profile5" role="tabpanel">
                <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Users</th>
                    <th>Status (Plan)</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach(Auth::user()->downLiners() as $downliner )
                      <tr>
                        <td>{{ $downliner->getFullName() }}</td>
                        <td>
                            @if($downliner->isSubscribed())
                                Subscribed
                            @else
                                Not Subscribed
                            @endif

                        </td>
                        <td>Column content</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
              </div>
              <div class="tab-pane fade" id="settings5" role="tabpanel">
                {{-- a vue component ;) --}}
                <test></test> 
              </div>
            </div>
        </div>
  @endsection