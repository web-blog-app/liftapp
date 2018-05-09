<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>{{ setting('site.title')}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/log.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}">
     <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                   
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="logo " >
                        <img src="img/elevator1.png" alt="LiftApp">
                        <span>{{ setting('site.title')}}</span>
                        
                    </div>
                </div>

                <div class=" collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class=" top_line nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                Вход
                            </a></li>
                            <li><a href="{{ route('register') }}">
                               <i class="fa fa-user-o" aria-hidden="true"></i>
                                Регистрация</a></li>
                        @endif
                    </ul>
                    
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
