@extends('dashboard.layouts.template')
@section('title')
    <title>Dashboard :: CitieClik</title>
@endsection

{{-- //css for this page --}}
@section('admin-styles')
<link rel="stylesheet" type="text/css" href="/assets2/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.dataTables.min.css">
    
@stop

@section('admin-content')
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Users</h5>
            <p class="text-muted m-b-10">List of Registered users</p>
        </div>
    </div>
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h5>Zero Configuration</h5>
                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span> --}}
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-hover table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Joined</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->getFullName() }} </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->created_at->format('M j, Y') }}</td>
                                            <td>
                                                <div class="dropdown-primary dropdown open">
                                                    <button class="btn btn-sm btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Options</button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                        <a class="dropdown-item waves-light waves-effect" href="{{ route('admin.users.details', ['slug' => $user->slug]) }}">Details</a>
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Add Clicks</a>
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                    </div>
                                                </div>
                                            </td>
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

    $(document).ready(function (){
        $('#simpletable').DataTable({
            dom: 'lBfrtip',
            "pagingType": "full_numbers",
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                     columns: ':contains("Office")'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    message: 'PDF created by PDFMake with Buttons for DataTables.'
                },
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'print'
            ]
        });
    });
</script>
<script src="/assets/js/citi-admin.js"></script>


@stop