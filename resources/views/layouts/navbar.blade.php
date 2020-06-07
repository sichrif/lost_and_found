<nav class="navbar navbar-expand-md shadow mb-5 fixed" style="background-color:#e3f2fd; "  >

            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="../../../public/img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    {{ config('Lost&Found', 'Lost&Found') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a href="#" class="nav-link">First</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Second</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Third</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bookings</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="#">Tttttt</a>
                            <a class="dropdown-item" href="#">bbbbbbbb</a>
                            <a class="dropdown-item" href="#">aaaaa</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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
                                        <i class="fa fa-external-link"></i> {{ __('Logout') }}
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