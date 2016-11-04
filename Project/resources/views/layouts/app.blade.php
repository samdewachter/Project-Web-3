<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GameTrader.be</title>

    <!-- Styles -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">   

    <!-- Scripts -->
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}" ></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    <div id="app">

                    <div class="hamburger-menu">
                    <header>
                            <a class="navbar-hamburger-brand" href="{{ url('/') }}">
                                <img class="logo-hamburger" src="{{ URL::asset('img/logo.jpg') }}">
                            </a>
                          <button class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></button>
                          <button class="cross"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </header>

                    <div class="menu menu-hamburger">
                      <ul>
                        <a href="{{ url('/') }}"><li>Home</li></a>
                        <a href="{{ url('/browse') }}"><li>Browse</li></a>
                        <a href="{{ url('/contact') }}"><li>Contact</li></a>
                        @if(!Auth::guest() && Auth::user()->admin)   
                            <a href="{{ url('/admin') }}"><li>Dashboard</li></a>
                        @endif
                        <div class="line-hamburger"></div>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <li>{{ Auth::user()->name }} <span class="caret"></span></li>
                        </a>
                        @endif
                       <div class="menu menu-account">
                        @if (!Auth::guest())
                          <ul>
                                <a href="{{ url('account/addGame', Auth::user()->id) }}"><li>Add game</li></a>
                                <a href="{{ url('account', Auth::user()->id) }}"><li>Account</li></a>
                                
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <li>Logout                            
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                        </li>
                                    </a>

        
                          </ul>
                        @endif
                        </div> 
                      </ul>

                    </div>
 
                </div>

        <nav class="navbar navbar-default navbar-static-top">


            <div class="container-fluid container-navbar">

                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="logo pull-left" src="{{ URL::asset('img/logo.jpg') }}">
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav pull-left">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/browse') }}">Browse</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        @if(!Auth::guest() && Auth::user()->admin)   
                            <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('account/addGame', Auth::user()->id) }}">Add game</a>
                                    </li>
                                    <div class="line-account"></div>
                                    <li>
                                        <a href="{{ url('account', Auth::user()->id) }}">Account</a>
                                    </li>
                                    
                                    <div class="line-account"></div>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
