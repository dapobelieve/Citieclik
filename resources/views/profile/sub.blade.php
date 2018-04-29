@extends('profile.layout.template')

@section('title')
Subscription | CitieClik
@stop

@section('profileContent')
    <div class="col-lg-8">
        @if(Session('pay-message'))
            <div class="alert alert-info alert-dismissible fade show text-center margin-bottom-1x">
              <span class="alert-close" data-dismiss="alert"></span>
              <i class="icon-help"></i>&nbsp;&nbsp;
              <strong>Info: </strong>{{Session('pay-message')}}
            </div>
        @endif
        {{--  --}}
        <div class="card card-inverse card-{{ $user->isSubscribed() ? 'success' : 'danger'}} text-center mb-2">
              <div class="card-block">
                 @if($user->isSubscribed())
                    <h6 class="card-title">You are currently subscribed to the "<strong>{{ $user->getPlan()->plan }}</strong>" plan.</h6>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    @else
                         <h6 class="card-title"> <strong>Info:</strong> You are currently not subscribed to any plan</h6>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    @endif
              </div>
        </div>
        <h6 class="text-muted text-normal text-uppercase padding-top-2x mt-2">Subscriptions</h6>
            <hr class="margin-bottom-1x">
            <ul class="nav nav-tabs" role="tablist">
            @foreach($plans as $plan)
            <li class="nav-item">
                <a class="nav-link {{ $plan->id == 1 ? ' active' : '' }}" href="#{{ $plan->slug }}" data-toggle="tab" role="tab">{{ $plan->plan }}</a>
            </li>
            @endforeach
            </ul>
            <div class="tab-content">
                @foreach($plans as $plan)
                  <div class="tab-pane transition fade{{ $plan->id == 1 ? " show active" : ""}} " id="{{ $plan->slug }}" role="tabpanel">
                    <p>{{ $plan->desc }}</p>
                    <p>Cost: &#8358;{{ number_format($plan->price) }}</p>
                    <hr class="margin-bottom-1x">
                    @if( !Auth::user()->subscribedToPlan($plan->id) )
                        <form method="post" action="{{route('pay')}}">

                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            <input type="hidden" name="amount" value=" 
                            {{-- we have this logic here cos if a user is 
                                subbed to a plan and wants to sub to
                             another one --}}
                                @if( Auth::user()->isSubscribed() )
                                    {{ ( $plan->getPrice() - Auth::user()->getActiveSubFromPlan() ) }}
                                @else
                                    {{ $plan->getPrice() }}
                                @endif
                                 ">
                            <input type="hidden" name="dplan" value="{{ $plan->id }}">
                            <input type="hidden" name="dclicks" value="{{ $plan->clicks }}">

                            <input 
                                type="hidden" 
                                name="metadata" 
                                value="{{ json_encode($array = ['plan_id' => $plan->id ,
                                                                'plan_clicks' => $plan->clicks
                                                                ]) }}" >

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
