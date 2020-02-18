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
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <a class="btn btn-light action-button mr-1" role="button" href="#" data-toggle="modal"
                            data-target="#signUp">Sign Up</a>
                        <a class="btn btn-light action-button" role="button" href="#" data-target="#signIn"
                            data-toggle="modal">Sign in</a>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" role="dialog" tabindex="-1" id="signIn">
            <div class="modal-dialog" role="document">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Sign In</h4><button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <ion-icon name="mail"></ion-icon>
                                    </span></div><input class="form-control" type="text" placeholder="Email"
                                    name="email">
                                <div class="input-group-append"></div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <ion-icon name="lock-closed"></ion-icon>
                                    </span></div><input class="form-control" type="password" placeholder="Password"
                                    name="password">
                                <div class="input-group-append"></div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="signUp">
        <div class="modal-dialog" role="document">
            <form action="{{ route('create') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Up</h4><button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend"><span class="input-group-text">
                                    <ion-icon name="person"></ion-icon>
                                </span></div><input class="form-control" type="text" placeholder="Username"
                                name="username">
                            <div class="input-group-append"></div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend"><span class="input-group-text">
                                    <ion-icon name="mail"></ion-icon>
                                </span></div><input class="form-control" type="text" placeholder="Email" name="email">
                            <div class="input-group-append"></div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend"><span class="input-group-text">
                                    <ion-icon name="lock-closed"></ion-icon>
                                </span></div><input class="form-control" type="password" placeholder="Password"
                                name="password">
                            <div class="input-group-append"></div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">
                                    <ion-icon name="call"></ion-icon>
                                </span></div><input class="form-control" type="text" placeholder="No. HP" name="hp">
                            <div class="input-group-append"></div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="submit">Submit</button></div>
                </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>