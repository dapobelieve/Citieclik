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
                    <p>Cost: {{ number_format($plan->price) }}</p>
                    <hr class="margin-bottom-1x">
                    @if(!Auth::user()->hasActiveSubscription($plan->id))
                        <form method="post" action="{{route('pay')}}">
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            <input type="hidden" name="amount" value="{{ $plan->getPrice() }}">
                            <input type="hidden" name="plan" value="{{ $plan->id }}">
                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                            {{ csrf_field() }}
                        </form>
                    @endif
                  </div>
                @endforeach
            </div>
        </div>
@stop
