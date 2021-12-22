<nav class="navbar navbar-expand-md navbar navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img class="img-fluid" src="{!! url('images/blog.svg') !!}" alt="" width="72" height="57">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
        </li>
        @endauth
        @can(['create'], \App\Models\Post::class)
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">Post</a>
        </li>
        @endcan

        @role(['admin'])
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('users.index')}}">Users</a>
        </li>
        @endrole
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> --}}
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> --}}

      </ul>


      <form class="d-flex" method="GET" action="/">
        <input class="form-control me-2 " type="search" placeholder="Find posts" name="search"
          value="{{request('search')}}">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register.show'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register.show') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true" v-pre>
            {{ Auth::user()->username }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">change password</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>

        </li>

        @endguest
      </ul>



    </div>
  </div>
</nav>