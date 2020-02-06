<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'My Hub') }}</title>
    <!-- Styles -->
    <link href="{{ asset('fui/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fui/css/flat-ui.min.css') }}" rel="stylesheet">
    <style>
        body{
            background-color:#f4f5f5;
            font-size:14px;
        }
        .footer {
            position: fix;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }
        .text-muted {
            padding-top: 20px;
        }
    
    </style>
</head>
<body>
        <nav class="navbar navbar-inverse navbar-embossed navbar-static-top"  role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">开启导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'My Hub') }}
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <form class="navbar-form navbar-left" action="#" role="search">
                                <div class="form-group">
                                  <div class="input-group">
                                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                                    <span class="input-group-btn">
                                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                                    </span>
                                  </div>
                                </div>
                        </form>
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">登录</a></li>
                            <li><a href="{{ route('register') }}">注册</a></li>
                        @else
                                <li><a href="{{ url('/discover') }}">发现</a></li>
                                <li ><a href="{{ url('/doc') }}" class="active">文档</a></li>
                                <li><a href="{{ url('/music') }}">音乐</a></li>
                                <li><a href="{{ url('/movie') }}">视频</a></li>
                                <li><a href="{{ url('/like') }}">收藏</a></li>
                                <li><a href="{{ url('/friend') }}">好友</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/user') }}">个人信息</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            注销
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

    <footer class="footer">
      <div class="container">
        <p class="text-muted">QGame 2018</p>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('fui/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('fui/js/flat-ui.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-markdown.js') }}"></script>
</body>
</html>
