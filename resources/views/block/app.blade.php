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
    <style>
        html{
            font-family: -apple-system,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Arial,sans-serif;
        }
        body{
            background-color:#f4f5f5;
            font-family: -apple-system,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Arial,sans-serif;
            
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
        .navbar-default {
            background-color: #fff;
            border-color: #fff;
        }
        .bg-fff{
            background-color:#fff;
        }
        .center{
            text-align:center;
        }
        .author-img{
            width:80px;
            height:80px;
            background-color:red;    
            border-radius: 80px;
            display: -webkit-inline-box;
            background-repeat:no-repeat;
            background-size:cover;
            background-image: url('https://upload.jianshu.io/users/upload_avatars/8541392/a32fe3bd-ed75-4d34-a590-82e05d9dfa0e.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/120/h/120');
        }
        .tile{
            border-bottom: 1px solid rgba(178,186,194,.15);
            padding:20px;
        }
        .box{
            {{--  padding:20px;   --}}
        }
        .box-header{
            padding:10px;
            border-bottom: 1px solid rgba(178,186,194,.15);
        }
        .box-body{
            padding:10px;
        }
    

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
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
                        <li>
                                <form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-default">搜索</button>
                                    </form>
                        </li>
                                <li><a href="{{ url('/discover') }}">发现</a></li>
                                <li ><a href="{{ url('/doc') }}">文章</a></li>
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
        <div style="height:70px;"></div>
        @yield('content')
    </div>

    <footer class="footer">
      <div class="container" style="text-align:center" >
        <p class="text-muted">QGame 2018</p>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-markdown.js') }}"></script>
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
    </script>
</body>
</html>
