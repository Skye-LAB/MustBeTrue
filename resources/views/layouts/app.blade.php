<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('paymentCss')
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
                        <li class="nav-item mx-1" role="presentation"><a class="nav-link" href="{{ url('cart') }}">
                                <!--<span class="badge badge-danger badge-counter">3+</span>-->
                                <ion-icon name="cart">Cart</ion-icon>
                            </a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><span for="search-field">
                                <ion-icon name="search"></ion-icon>
                            </span><input class="form-control search-field" type="search" id="search-field"
                                name="search">
                        </div>
                    </form>
                    @guest
                    <a class="btn btn-light action-button mr-1" role="button" href="#" data-toggle="modal"
                        data-target="#signUp">Sign Up</a>
                    <a class="btn btn-light action-button mr-1" role="button" href="#" data-toggle="modal"
                        data-target="#signIn">Sign In</a>

                    @else
                    <ul class="nav navbar-nav ml-auto">
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                                aria-expanded="false" href="#" id="username">{{auth()->user()->username}}</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                    href="#">Change Password</a>
                                <form class="" action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button class="dropdown-item" role="presentation" href="#"
                                        type="submit">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endguest
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
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <main class="py-4">
        @yield('isi')
    </main>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@include('sweetalert::alert')
<script src="{{ asset('js/jquery.min.js') }}"></script>
@yield('js')

</html>
