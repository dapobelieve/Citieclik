@extends('profile.layout.template')

@section('title')
Subscription
@stop

@section('profileContent')
    <div class="col-lg-8">
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
          <span class="alert-close" data-dismiss="alert"></span>
          <i class="icon-help"></i>&nbsp;&nbsp;
          <strong>Success alert: </strong>{{Session::get('info')}}
        </div>
        <h6 class="text-muted text-normal text-uppercase padding-top-2x mt-2">Subscriptions</h6>
            <hr class="margin-bottom-1x">
            <ul class="nav nav-tabs" role="tablist">
            @foreach($plans as $plan)
            <li class="nav-item">
                <a class="nav-link {{$plan->id == 1 ? ' active' : ''}}" href="#{{$plan->slug}}" data-toggle="tab" role="tab">{{$plan->plan}}</a>
            </li>
            @endforeach
            </ul>
            <div class="tab-content">
                @foreach($plans as $plan)
                  <div class="tab-pane transition fade{{$plan->id == 1 ? " show active" : ""}} " id="{{$plan->slug}}" role="tabpanel">
                    <p>{{$plan->desc}}</p>
                    <hr class="margin-bottom-1x">
                    <a class="btn btn-primary" href="#">Primary</a>
                  </div>
                @endforeach
            </div>
        </div>
@stop
