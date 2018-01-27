@extends('dashboard.layouts.template')
@section('title')
    <title>Site Settings</title>
@endsection
@section('admin-styles')
    <link rel="stylesheet" type="text/css" href="/assets2/bower_components/switchery/css/switchery.min.css">
@stop

@section('admin-content')

<div class="page-header card">
    <div class="card-block">
        <h5 class="m-b-10">Site Settings</h5>
        <p class="text-muted m-b-10">Ensure to click the <code>save</code> button once you've made any changes</p>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Switches</h5>
                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                </div>
                <div class="card-block">
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 m-b-30">
                                <h4 class="sub-title">Status</h4>
                                <input type="checkbox" class="js-single" checked />
                            </div>
                            <div class="col-sm-12 col-xl-4 m-b-30">
                                <h4 class="sub-title">Username</h4>
                                <input type="text" class="form-control" placeholder="sms api username" />
                            </div>
                            <div class="col-sm-12 col-xl-4 m-b-30">
                                <h4 class="sub-title">Password</h4>
                                <input type="text" class="form-control" placeholder="sms api password" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-offset-8 col-xl-4 m-b-30">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('admin-scripts')
    <script src="/assets2/bower_components/switchery/js/switchery.min.js"></script>
    <script src="/assets2/pages/advance-elements/swithces.js"></script>
@stop
