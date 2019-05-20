<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
    <!-- Title -->
    <title>Vizew - Blog &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('homepage/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('homepage/style.css')}}">

</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Sự Kiện Hot</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="single-post.html">10 Things Amazon Echo Can Do</a></li>
                                <li><a href="single-post.html">Welcome to Colorlib Family.</a></li>
                                <li><a href="single-post.html">Boys 'doing well' after Thai</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.blade.php" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->
                        {{--<a href="{{url('login')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>--}}
                        @guest
                            <li class="nav-item" style="list-style:none;">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style="list-style:none;">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="list-style:none;">

                                <span class="caret">{{ Auth::user()->name }} </span>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>

                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="index.blade.php" class="nav-brand"><img src="../../../../public/homepage/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="{{asset('/')}}">{{__('Home')}}</a></li>
                                <li><a href="#">{{__('Board Game')}}</a>
                                    <ul class="dropdown">
                                        @foreach($games as $game)
                                        <li><a href="index.blade.php">-{{$game->name}}  </a></li>
                                       @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">{{__('Thể Loại')}}</a>
                                    <div class="megamenu">
                                        @foreach( $type_game as $game)
                                        <ul class="single-mega cn-col-4">
                                            <li><a title="{{$game->description}}" href="index.blade.php"> {{$game->name}}</a></li>
                                        </ul>
                                       @endforeach
                                    </div>
                                </li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
<script type="text/javascript">
    // $('.dropdown').mousedown(function(){
    //     alert('demo');
    // });

</script>