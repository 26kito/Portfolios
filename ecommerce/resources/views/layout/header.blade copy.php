{{-- Page Preloder --}}
{{-- @section('preloader')
<div id="preloader">
    <div class="loader"></div>
</div>
@endsection --}}

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="home" class="site-logo">
                        <img src="{{asset('asset/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Search on divisima ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel d-flex">
                        <div class="up-item">
                            @auth
                            <i class="flaticon-profile"></i>
                            <div class="nav-item dropdown d-inline-block">
                                <a class="nav-link dropdown-toggle profile-dropdown" id="dropdownUser" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{ __('Hi! '). Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownUser">
                                    @if ( Auth::user()->level === 'ADMIN' )
                                        <a class="dropdown-item" href="{{ route('admin') }}">Admin Page</a>
                                    @elseif ( Auth::user()->level === 'USER' )
                                        <a class="dropdown-item" href="#">My Profile</a>
                                    @endif
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            Log Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </div>
                            </div>
                            @else
                            <div class="anon">
                                <a href="{{ route('login') }}">Sign In</a> or <a href="{{ route('register') }}">Create Account</a>
                            </div>
                            @endauth
                        </div>
                        @auth
                        @if ( Auth::user()->level === 'USER' )
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                @if ( $users->qty > 0 )
                                    <span class="qty">{{ $users->qty }}</span>
                                @endif
                            </div>
                            <a href="{{ route('cart') }}" class="orderCart">Your Cart</a>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="{{url('home')}}">Home</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Men</a></li>
                <li><a href="#">Jewelry
                    <span class="new">New</span>
                </a></li>
                <li><a href="#">Shoes</a>
                    <ul class="sub-menu">
                        <li><a href="#">Sneakers</a></li>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Formal Shoes</a></li>
                        <li><a href="#">Boots</a></li>
                        <li><a href="#">Flip Flops</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('products')}}">Product Page</a></li>
                        <li><a href="{{url('category')}}">Category Page</a></li>
                        <li><a href="{{url('contact')}}">Contact Page</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
    </nav>
</header>
