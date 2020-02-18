<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Footer-Basic.css') }}">
    <link rel="stylesheet" href="{{ asset('/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Navigation-with-Search.css') }}">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
          <div class="container"><a class="navbar-brand" href="{{url('/')}}">Foody</a><button data-toggle="collapse"
                  class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                      class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navcol-1">
                  <ul class="nav navbar-nav">
                      <li class="nav-item mx-1" role="presentation"><a class="nav-link" href="#">
                              <!--<span class="badge badge-danger badge-counter">3+</span>-->
                              <ion-icon name="cart"></ion-icon>
                          </a></li>
                  </ul>
                  <form class="form-inline mr-auto" target="_self">
                      <div class="form-group"><span for="search-field">
                              <ion-icon name="search"></ion-icon>
                          </span><input class="form-control search-field" type="search" id="search-field" name="search">
                      </div>
                  </form>
                  @guest
                    <a class="btn btn-light action-button mr-1" role="button" href="#" data-toggle="modal"
                    data-target="#signUp">Sign Up</a>
                    <a class="btn btn-light action-button" role="button" href="#" data-target="#signIn"
                    data-toggle="modal">Sign in</a>
                  @else
                    <ul class="nav navbar-nav ml-auto">
                      <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#">{{auth()->user()->username}}</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                          href="#">Change Password</a><a class="dropdown-item" role="presentation"
                          href="#">Logout</a></div>
                        </li>
                      </ul>
                  @endguest
              </div>
          </div>
      </nav>

        <main class="py-4">
            @yield('isi')
        </main>
    </div>
</body>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</html>
