

<div class="col-lg-4">
  <aside class="user-info-wrapper">
    <div class="user-cover" style="background-image: url(/assets/img/account/user-cover-img.jpg);">
        @if($user->isSubscribed())
            <div class="info-label subscribed" data-toggle="tooltip" title=""><i class="icon-medal"></i> Subscribed</div>
        @else
            <div class="info-label" data-toggle="tooltip" title="User would not see your contact info">Not Subscribed</div>
        @endif
    </div>
    <div class="user-info">
      <div class="user-avatar">
        @if(Auth::check() && Auth::user()->id == $user->id && Request::is('profile/edit'))
        <a class="edit-avatar" data-toggle="modal" data-target="#modalDefault"></a>
        @endif
        <img id="userMainAvatar" src="{{ $user->getUserImg() }}" alt="User">
        {{-- <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modalDefault">Default Modal</button> --}}
      </div>
      <div class="user-data">
        <h4>{{$user->getFullName()}}</h4>
        <span>
            <small>Joined {{$user->created_at->formatLocalized('%B %Y')}}</small>
        </span>
        @if($user->isSubscribed())
            <counter :click="{{ $user->getActiveSubscription()->click }}"></counter>
        @else
            <small style="color: #ec2121;">You are not subscribed.</small>
        @endif
      </div>
    </div>
  </aside>
  <nav class="list-group">
    @if(Auth::check() && Auth::user()->id == $user->id)
    <a class="list-group-item {{ Request::is('profile/edit') ? ' active' : ''  }}" href="{{route('profile.edit')}}">
      <i class="icon-head"></i>Edit Profile
    </a>
    @endif
    <a class="list-group-item {{ Request::is( 'subscription') ? ' active' : ''  }}" href="{{ route('getSubs') }}">
      <i class="icon-map"></i>Manage Subscriptions
    </a>
    <a class="list-group-item justify-content-between 
      {{ Request::is( 'profile/'.$user->slug.'/services') ? ' active' : ''  }}" 
      href="{{route('profile.service', ['slug' => $user->slug ])}}">
      <span><i class="icon-bag"></i>Services</span><span class="badge badge-primary badge-pill">{{$user->getUserServices('s')->count()}}</span>
    </a>
    <a class="list-group-item justify-content-between {{ Request::is( 'profile/'.$user->slug.'/products') ? ' active' : ''  }}" href="{{route('profile.products', ['slug' => $user->slug ])}}">
      <span><i class="icon-bag"></i>Products</span><span class="badge badge-primary badge-pill">{{$user->getUserServices('p')->where('type', 'p')->count()}}</span>
    </a>
    <a class="list-group-item justify-content-between{{ Request::is( 'profile/'.$user->slug.'/requests') ? ' active' : ''  }}" href="{{ route('profile.request', ['slug' =>$user->slug ]) }}">
      <span><i class="icon-tag"></i>My Requests</span>
      <span class="badge badge-primary badge-pill">{{$user->getUserRequests()->count()}}</span>
    </a>
    @if(Auth::user()->isAgent())
        <a class="list-group-item {{ Request::is( 'agent/'.Auth::user()->slug) ? ' active' : ''  }}" href="{{ route('agent.profile', ['slug' => Auth::user()->slug ]) }}">
          <i class="icon-check text-success"></i>Agent Dashboard
        </a>
    @endif
  </nav>
</div>

