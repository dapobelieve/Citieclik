@extends('dashboard.layouts.template')
@section('title')
    <title>Sales Agents :: CitieClik</title>
@endsection

{{-- //css for this page --}}
@section('admin-styles')
<link rel="stylesheet" type="text/css" href="/assets2/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.dataTables.min.css">
    
@stop

@section('admin-content')
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Sales Agents</h5>
            <p class="text-muted m-b-10">List of Registered Sales Agents</p>
        </div>
    </div>
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Contextual classes</h5>
                        <span>For Make row Contextual add Contextual class like <code>.table-success</code> in <code> tr tag</code> and For cell add Contextual class in <code> td or th tag</code> . </span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa-chevron-left"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                                <li><i class="fa fa-times close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($agents as $agent)
                                        <tr class="table">
                                            <th scope="row">1</th>
                                            <td>{{ $agent->username }}</td>
                                            <td>Otto</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop






{{-- JS for this page --}}
@section('admin-scripts')
<script src="/assets2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets2/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets2/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/assets/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/assets/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="/assets/js/buttons.print.min.js"></script>


<script type="text/javascript">

</script>

@stop