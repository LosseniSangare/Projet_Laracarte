<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home_path')}}">Laracarte</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{set_active_route('home_path')}}"><a href="{{route('home_path')}}">Home</a></li>
            <li class="{{set_active_route('about_path')}}"><a href="{{route('about_path')}}">About</a></li>
            <li class="#"><a href="#contact">Artisan</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://laravel.com">Laravel.com</a></li>
                <li><a href="https://laravel.io">Laravel.io</a></li>
                <li><a href="https://laracarte.com">Laracarte</a></li>
                {{-- <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li> --}}
                <li><a href="https://laradjob.com">Laradjob</a></li>
                <li><a href="https://larachat.com">Larachat</a></li>
                <li><a href="https://laravel-news.com">Laravel News</a></li>
              </ul>
                <li class="{{set_active_route('contact_path')}}"><a href="{{route('contact_path')}}">Contact</a></li>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li><a href="#contact">Login</a></li>
                <li><a href="#contact">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
