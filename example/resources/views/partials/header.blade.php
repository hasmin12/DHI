<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i>
          User Management
        </a>
       
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check() && Auth::user()->role === 'admin')
            <a class="dropdown-item" href="{{route('admin.orders')}}">Orders </a>
            <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('user.logout')}}">Logout </a>
          @elseif (Auth::check())
            <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('user.logout')}}">Logout </a>
          @else
            <a class="dropdown-item" href="{{route('user.signup')}}">Signup </a>
            <a class="dropdown-item" href="{{route('user.signin')}}">Signin </a>
            @endif
          </div>
        </div>
      </li>
     
    </ul>

  </div>
</nav>