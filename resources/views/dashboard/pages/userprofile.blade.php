@extends('dashboard.layouts.template')
    @section('title')
        <title>Dashboard :: CitieClik</title>
    @endsection

    @section('admin-content')
        <div class="page-header card">
            <div class="card-block">
                <h5 class="m-b-10">User Profile</h5>
            </div>
        </div>
        <div class="page-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cover-profile">
                        <div class="profile-bg-img">
                            <img class="profile-bg-img img-fluid" src="/assets2/images/user-profile/bg-img1.jpg" alt="bg-img">
                            <div class="card-block user-info">
                                <div class="col-md-12">
                                    <div class="media-left">
                                        <a href="#" class="profile-image">
                                        <img class="user-img img-radius" src="{{ $user->getUserImg() }}" alt="user-img">
                                        </a>
                                    </div>
                                    <div class="media-body row">
                                        <div class="col-lg-12">
                                            <div class="user-title">
                                                <h2>{{ $user->getFullName() }}</h2>
                                                {{-- <span class="text-white">Web designer</span> --}}
                                            </div>
                                        </div>
                                        <div>
                                            {{-- <div class="pull-right cover-btn">
                                                <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-header card">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Services</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pproducts" role="tab">User's Products</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">About Me</h5>
                                </div>
                                <div class="card-block">
                                    <div class="view-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-6">
                                                            <div class="table-responsive">
                                                                <table class="table m-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Full Name</th>
                                                                            <td>{{  $user->getFullName()}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td>{{  $user->email}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Username</th>
                                                                            <td>{{  $user->username}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Phone</th>
                                                                            <td>{{  $user->phone}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-lg-12 col-xl-6">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td><a href="#!"><span class="__cf_email__" data-cfemail="95d1f0f8fad5f0edf4f8e5f9f0bbf6faf8">[email&#160;protected]</span></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Mobile Number</th>
                                                                            <td>(0123) - 4567891</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Twitter</th>
                                                                            <td>@xyz</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Skype</th>
                                                                            <td>demo.skype</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Website</th>
                                                                            <td><a href="#!">www.demo.com</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="binfo" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">User Services ({{ $user->services->where('type', 's')->count() }})</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        @forelse($user->services->where('type', 's') as $service )
                                            <div class="col-md-6">
                                                <div class="card b-l-success business-info services m-b-20">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">{{ $service->title }}</h5>
                                                            </a>
                                                        </div>
                                                        {{-- <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div> --}}
                                                    </div>
                                                    {{-- <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-md-12">
                                                No Services yet
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pproducts" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">User Products ({{ $user->services->where('type', 'p')->count() }})</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        @forelse($user->services->where('type', 'p') as $service )
                                            <div class="col-md-6">
                                                <div class="card b-l-success business-info services m-b-20">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">{{ $service->title }}</h5>
                                                            </a>
                                                        </div>
                                                        {{-- <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div> --}}
                                                    </div>
                                                    {{-- <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-md-12">
                                                No Services yet
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop