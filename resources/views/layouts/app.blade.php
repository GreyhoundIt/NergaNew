<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    North East Rabits Golf Association
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/home') }}">News</a></li>
                    <li><a href="{{ url('/home') }}">Finals Day</a></li>
                    <li><a href="{{ url('/rules') }}">Rules</a></li>
                    <li><a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INTER <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($interZones as $zone)
                                <li> {{link_to_action('UserZoneController@show', $title = strtoupper($zone->name), $parameters = [$zone->id], $attributes = [])}}</li>
                                <li role="separator" class="divider"></li>
                            @endforeach
                        </ul>

                    </li>
                    <li><a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NERGA <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($nergaZones as $zone)
                                <li> {{link_to_action('UserZoneController@show', $title = strtoupper($zone->name), $parameters = [$zone->id], $attributes = [])}}</li>
                                <li role="separator" class="divider"></li>
                            @endforeach
                        </ul>

                    </li>

                    <li><a href="{{ url('/honours') }}">Honours</a></li>
                    <li><a href="{{ url('/home') }}">Links</a></li>
                    <li><a href="{{ url('/sponsors') }}">Sponsors</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://www.facebook.com/groups/556023951165417/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/nergagolf" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                       {{-- <li><a href="{{ url('/register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                @if(Auth::user()->isAdmin ==1)
                                    <li><a href="{{ url('/admin/fixture') }}"><i class="fa fa-btn fa-calendar-times-o"></i>Admin Fixtures</a></li>
                                    <li><a href="{{ url('/admin/club') }}"><i class="fa fa-btn fa-smile-o"></i>Admin Clubs</a></li>
                                    <li><a href="{{ url('/admin/zone') }}"><i class="fa fa-btn fa-trophy"></i>Admin Zones</a></li>
                                @endif
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
