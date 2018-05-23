@extends('dashboard.layouts.template')
    @section('title')
        <title>Dashboard :: CitieClik</title>
    @endsection

    @section('admin-content')
    <div class="page-body">
       <div class="row">
          <div class="col-md-6 col-xl-3">
             <div class="card bg-c-blue order-card">
                <div class="card-block">
                   <h6 class="m-b-20">Registered Users</h6>
                   <h2 class="text-right"><i class="ti-user f-left"></i><span>{{ $users->count() }}</span></h2>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-xl-3">
             <div class="card bg-c-green order-card">
                <div class="card-block">
                   <h6 class="m-b-20">Services Posted</h6>
                   <h2 class="text-right"><i class=" ti-clipboard f-left"></i><span>{{ $services->where('type', 's')->count() }}</span></h2>
                   {{-- <p class="m-b-0">This Month<span class="f-right">213</span></p> --}}
                </div>
             </div>
          </div>
          <div class="col-md-6 col-xl-3">
             <div class="card bg-c-yellow order-card">
                <div class="card-block">
                   <h6 class="m-b-20">Active Subscribers</h6>
                   <h2 class="text-right"><i class="ti-credit-card f-left"></i><span>{{ $subcribers->where('status', 1)->count() }}</span></h2>
                   {{-- <p class="m-b-0">This Month<span class="f-right">$5,032</span></p> --}}
                </div>
             </div>
          </div>
          <div class="col-md-6 col-xl-3">
             <div class="card bg-c-pink order-card">
                <div class="card-block">
                   <h6 class="m-b-20">Requests Made</h6>
                   <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{ $requests->count() }}</span></h2>
                   {{-- <p class="m-b-0">This Month<span class="f-right">$542</span></p> --}}
                </div>
             </div>
          </div>
            <div class="col-sm-12">
                <div class="card card-block">
                    {{-- <h6 style="text-align: center;padding-top: 1.4rem" class="m-b-20">Clicks Chart</h6> --}}
                    <clicks-chart></clicks-chart>
                </div>
            </div>
          <div class="col-sm-12">
             <div class="card ">
                    <div class="card-block p-0">
                       <ul class="nav nav-tabs md-tabs" role="tablist">
                          <li class="nav-item">
                             <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><i class="fa fa-home"></i>Home</a>
                             <div class="slide"></div>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><i class="fa fa-key"></i>Security</a>
                             <div class="slide"></div>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#messages3" role="tab"><i class="fa fa-play-circle"></i>Entertainment</a>
                             <div class="slide"></div>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#settings3" role="tab"><i class="fa fa-database"></i>Big Data</a>
                             <div class="slide"></div>
                          </li>
                       </ul>
                       <div class="tab-content card-block">
                          <div class="tab-pane active" id="home3" role="tabpanel">
                             <div class="table-responsive">
                                <table class="table">
                                   <tr>
                                      <th>Image</th>
                                      <th>Product Code</th>
                                      <th>Customer</th>
                                      <th>Purchased On</th>
                                      <th>Status</th>
                                      <th>Transaction ID</th>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002344</td>
                                      <td>John Deo</td>
                                      <td>05-01-2017</td>
                                      <td><span class="label label-danger">Failed</span></td>
                                      <td>#7234486</td>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod3.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002653</td>
                                      <td>Eugine Turner</td>
                                      <td>04-01-2017</td>
                                      <td><span class="label label-success">Delivered</span></td>
                                      <td>#7234417</td>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002156</td>
                                      <td>Jacqueline Howell</td>
                                      <td>03-01-2017</td>
                                      <td><span class="label label-warning">Pending</span></td>
                                      <td>#7234454</td>
                                   </tr>
                                </table>
                             </div>
                             <div class="text-center">
                                <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                             </div>
                          </div>
                          <div class="tab-pane" id="profile3" role="tabpanel">
                             <div class="table-responsive">
                                <table class="table">
                                   <tr>
                                      <th>Image</th>
                                      <th>Product Code</th>
                                      <th>Customer</th>
                                      <th>Purchased On</th>
                                      <th>Status</th>
                                      <th>Transaction ID</th>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod3.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002653</td>
                                      <td>Eugine Turner</td>
                                      <td>04-01-2017</td>
                                      <td><span class="label label-success">Delivered</span></td>
                                      <td>#7234417</td>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002156</td>
                                      <td>Jacqueline Howell</td>
                                      <td>03-01-2017</td>
                                      <td><span class="label label-warning">Pending</span></td>
                                      <td>#7234454</td>
                                   </tr>
                                </table>
                             </div>
                             <div class="text-center">
                                <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                             </div>
                          </div>
                          <div class="tab-pane" id="messages3" role="tabpanel">
                             <div class="table-responsive">
                                <table class="table">
                                   <tr>
                                      <th>Image</th>
                                      <th>Product Code</th>
                                      <th>Customer</th>
                                      <th>Purchased On</th>
                                      <th>Status</th>
                                      <th>Transaction ID</th>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002413</td>
                                      <td>Jane Elliott</td>
                                      <td>06-01-2017</td>
                                      <td><span class="label label-primary">Shipping</span></td>
                                      <td>#7234421</td>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002156</td>
                                      <td>Jacqueline Howell</td>
                                      <td>03-01-2017</td>
                                      <td><span class="label label-warning">Pending</span></td>
                                      <td>#7234454</td>
                                   </tr>
                                </table>
                             </div>
                             <div class="text-center">
                                <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                             </div>
                          </div>
                          <div class="tab-pane" id="settings3" role="tabpanel">
                             <div class="table-responsive">
                                <table class="table">
                                   <tr>
                                      <th>Image</th>
                                      <th>Product Code</th>
                                      <th>Customer</th>
                                      <th>Purchased On</th>
                                      <th>Status</th>
                                      <th>Transaction ID</th>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002413</td>
                                      <td>Jane Elliott</td>
                                      <td>06-01-2017</td>
                                      <td><span class="label label-primary">Shipping</span></td>
                                      <td>#7234421</td>
                                   </tr>
                                   <tr>
                                      <td><img src="/assets2/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
                                      <td>PNG002344</td>
                                      <td>John Deo</td>
                                      <td>05-01-2017</td>
                                      <td><span class="label label-danger">Failed</span></td>
                                      <td>#7234486</td>
                                   </tr>
                                </table>
                             </div>
                             <div class="text-center">
                                <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                             </div>
                          </div>
                       </div>
                    </div>
             </div>
          </div>
      </div> 
    </div>

    @stop