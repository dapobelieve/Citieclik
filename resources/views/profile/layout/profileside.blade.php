

<div class="col-lg-4">
  <aside class="user-info-wrapper">
    <div class="user-cover" style="background-image: url(/assets/img/account/user-cover-img.jpg);">
      <div class="info-label" data-toggle="tooltip" title="Verified"><i class="icon-medal"></i>Status</div>
    </div>
    <div class="user-info">
      <div class="user-avatar">
        <a class="edit-avatar" data-toggle="modal" data-target="#modalDefault"></a><img src="/assets/img/account/user-ava.jpg" alt="User">
        {{-- <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modalDefault">Default Modal</button> --}}
      </div>
      <div class="user-data">
        <h4>{{$user->first_name}}</h4><span><small>Joined {{$user->created_at->formatLocalized('%B %Y')}}</small></span>
      </div>
    </div>
  </aside>
  <nav class="list-group">
    @if(Auth::check() && Auth::user()->id == $user->id)
    <a class="list-group-item {{ Request::is( 'profile') ? ' active' : ''  }}" href="{{route('profile.index', ['slug' => $user->slug ])}}">
      <i class="icon-head"></i>Profile
    </a>
    @endif
    <a class="list-group-item {{ Request::is( '["slug" => $user->slug ]/account') ? ' active' : ''  }}" href="{{ route('profile.address') }}">
      <i class="icon-map"></i>Contact Address
    </a>
    <a class="list-group-item justify-content-between {{ Request::is( '/services') ? ' active' : ''  }}" href="{{route('profile.service', ['slug' => $user->slug ])}}">
      <span><i class="icon-bag"></i>Services</span><span class="badge badge-primary badge-pill">{{$user->getUserServices()->count()}}</span>
    </a>
    <a class="list-group-item justify-content-between{{ Request::is( 'request') ? ' active' : ''  }}" href="{{ route('profile.request', ['slug' =>$user->slug ]) }}">
      <span><i class="icon-tag"></i>My Requests</span>
      <span class="badge badge-primary badge-pill">{{$user->getUserRequests()->count()}}</span>
    </a>
  </nav>
</div>

