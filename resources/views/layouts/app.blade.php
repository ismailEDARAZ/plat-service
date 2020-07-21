<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600&display=swap">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    @yield('css')

    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Accueil') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#destination">{{ __('Destination') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Activities') }}</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                 <span class="btn btn-warning btn-sm">{{ __('Demande un devis') }}</span>   
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pb-4">
            @yield('content')
        </main>
    </div>
    <footer class="container-fluid bg-grey py-5">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="row">
                    <div class="col-md-6 ">
                       <div class="logo-part">
                          <img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer" >
                          <p>7637 Laurel Dr. King Of Prussia, PA 19406</p>
                          <p>Use this tool as test data for an automated system or find your next pen</p>
                       </div>
                    </div>
                    <div class="col-md-6 px-4">
                       <h6> A propos</h6>
                       <p>But horizontal lines can only be a full pixel high.</p>
                       <a href="#" class="btn-footer"> More Info </a><br>
                       <a href="#" class="btn-footer"> Contact Us</a>
                    </div>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="row">
                    <div class="col-md-6 px-4">
                       <h6> Help us</h6>
                       <div class="row ">
                          <div class="col-md-6">
                             <ul>
                                <li> <a href="#"> Home</a> </li>
                                <li> <a href="#"> About</a> </li>
                                <li> <a href="#"> Service</a> </li>
                                <li> <a href="#"> Team</a> </li>
                                <li> <a href="#"> Help</a> </li>
                                <li> <a href="#"> Contact</a> </li>
                             </ul>
                          </div>
                          <div class="col-md-6 px-4">
                             <ul>
                                <li> <a href="#"> Cab Faciliy</a> </li>
                                <li> <a href="#"> Fax</a> </li>
                                <li> <a href="#"> Terms</a> </li>
                                <li> <a href="#"> Policy</a> </li>
                                <li> <a href="#"> Refunds</a> </li>
                                <li> <a href="#"> Paypal</a> </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6 ">
                       <h6> Rejoinez nous</h6>
                       <div class="social">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('js')

    @livewireScripts

</body>
</html>
