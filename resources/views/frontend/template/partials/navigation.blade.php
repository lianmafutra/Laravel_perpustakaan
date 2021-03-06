<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="/" style="padding-left:10px" class="brand-logo">Perpustakaan</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @guest
          <li><a href={{route('login')}}>Login</a></li>
          <li><a href={{ route('register') }}>Register</a></li> 
        @else
          <ul id="dropdown1" class="dropdown-content">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">logout
                </a>
            </li>
          </ul>

          <li><a href="#" class="dropdown-trigger" data-target="dropdown1">{{auth()->user()->name}}</a></li> 
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>

        @endguest
      </ul>
    </div>
  </nav>
</div>


