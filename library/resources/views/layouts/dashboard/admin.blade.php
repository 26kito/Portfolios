<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("assets/Light_Bootstrap/img/apple-icon.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("assets/Light_Bootstrap/img/favicon.ico") }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    @include('layouts.dashboard.stylesheet')
    @stack('stylesheet')
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{ asset('assets/Light_Bootstrap/img/sidebar-5.jpg') }}">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
                Tip 2: you can also add an image using data-image tag -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                        {{-- <a class="nav-link" href="{{ route('home') }}"> --}}
                        <a class="nav-link" id="dashboard" onclick="dashboard()">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('books') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('books') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Books</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('authors') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('authors') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Authors</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">Dashboard</a>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
        
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="no-icon">{{ Auth::user()->name }}</span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">
                                                {{ __('My Profile') }}
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <span class="no-icon">{{ __('Log Out') }}</span>
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End of Navbar -->
            @yield('content-header')
            
            <!-- Main Content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
    </div>
    @include('layouts.dashboard.js')

    @stack('js')
    <script>
        function dashboard() {
            $.get("{{ route('books') }}", (), function(data,status) {
                alert('ok');
            })
        }
    </script>
</body>
</html>