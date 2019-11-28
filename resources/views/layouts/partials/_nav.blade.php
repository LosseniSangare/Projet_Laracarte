<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">

  <div class="container">

  <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{set_active_route('home')}}">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{set_active_route('about')}}">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Artisans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="planet-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="planet-dropdown">
          <a class="dropdown-item"href="https://laravel.com">Laravel.com</a>
          <a class="dropdown-item"href="https://laravel.io">Laravel.io</a>
          <a class="dropdown-item"href="https://laracarte.com">Laracarte</a>
          <a class="dropdown-item"href="https://laradjob.com">Laradjob</a>
          <a class="dropdown-item"href="https://larachat.com">Larachat</a>
          <a class="dropdown-item"href="https://laravel-news.com">Laravel News</a>
        </div>
      </li>

      <li class="nav-item {{set_active_route('contact.create')}}">
        <a class="nav-link" href="{{route('contact.create')}}">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      @guest
      <li class="nav-item ">
        <a class="nav-link" href="{{route('login')}}">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </li>
    @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->fullName }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
    @endguest
    </ul>
  </div>

</div>
</nav>



{{-- <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}">Laracarte</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{set_active_route('home')}}"><a href="{{route('home')}}">Home</a></li>
            <li class="{{set_active_route('about')}}"><a href="{{route('about')}}">About</a></li>
            <li class="#"><a href="#contact">Artisan</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://laravel.com">Laravel.com</a></li>
                <li><a href="https://laravel.io">Laravel.io</a></li>
                <li><a href="https://laracarte.com">Laracarte</a></li>
                {{-- <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li> --
                <li><a href="https://laradjob.com">Laradjob</a></li>
                <li><a href="https://larachat.com">Larachat</a></li>
                <li><a href="https://laravel-news.com">Laravel News</a></li>
              </ul>
                <li class="{{set_active_route('contact.create')}}"><a href="{{route('contact.create')}}">Contact</a></li>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li><a href="#contact">Login</a></li>
                <li><a href="#contact">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> --}}
