<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my-hub.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">开启导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', ' My Hub') }}
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">登录</a></li>
                        <li><a href="{{ route('register') }}">注册</a></li>
                        @else
                            <li><a href="{{ url('/discover') }}">发现</a></li>
                            <li>
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">搜索</button>
                                </form>
                            </li>
                            <li></li>
                            <li class="active"><a href="{{ url('/doc') }}">文章</a></li>
                            <li ><a href="{{ url('/image') }}">照片</a></li>
                            <li><a href="{{ url('/music') }}">音乐</a></li>
                            <li><a href="{{ url('/games') }}">游戏</a></li>
                            <li><a href="{{ url('/games') }}">全景</a></li>
                            <li><a href="{{ url('/ai') }}">机器人</a></li>
                            <li><a href="{{ url('/video') }}">视频</a></li>
                            <li><a href="{{ url('/duang') }}">日更</a></li>

                            <li><a href="{{ url('/like') }}">收藏</a></li>
                            <li><a href="{{ url('/friend') }}">好友</a></li>
                            <li><a href="{{ url('/message') }}">通知</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/user') }}">个人信息</a></li>
                                    <li><a href="{{ url('/quicklog') }}">我的速查</a></li>
                                    <li><a href="{{ url('/user') }}">个人信息</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            注销
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
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
   <div class="fix_top"></div>
    @yield('content')
</div>

<footer class="footer" style="clear:both">
    <div class="container" style="text-align:center">
        <p class="text-muted">QGame 2020</p>
    </div>
</footer>
<div style="bottom: 20px; right: 20px; position: fixed">
    <span class="bottom-tools">语言</span>
    <ol class="sublink">
        <li>中文</li>
        <li>英文</li>
        <li>法语</li>
    </ol>
    <span class="bottom-tools" >主题</span>
    <ol class="sublink">
        <li>简单</li>
        <li>明亮</li>
        <li>轻松</li>
    </ol>
    <span id="to-top" class="bottom-tools" >顶部</span>
    <span id="to-bottom" class="bottom-tools" >底部</span>

</div>
<!-- Scripts -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script>
    /*
    $(function (){
        var height = 70;
        $(window).scroll(function(){
            console.log($(this).scrollTop());
            //检测屏幕滚动高度 高过一个值的时候修改nav的属性
            if($(this).scrollTop() > height){
                $(".navbar").fadeOut("slow");
            }else{
                $(".navbar").fadeIn("slow");
            }
        })
    })
*/
    $(function () {
        $("#to-top").click(function () {
            $('html,body').animate({scrollTop: '0px'}, 800);
        })
        $("#to-bottom").click(function () {
            $('html,body').animate({scrollTop: $('.footer').offset().top}, 800);
        })

    })
</script>
</body>
</html>
