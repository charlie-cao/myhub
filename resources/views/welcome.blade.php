<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Hub</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {{--<link rel="stylesheet" type="text/css" href="bg/normalize.css" />--}}
        {{--<link rel="stylesheet" type="text/css" href="bg/demo.css">--}}
        {{--<link rel="stylesheet" href="bg/style.css">--}}

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;*/
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            {{--body{--}}
                {{--background-image:url(./images/bg.jpg);--}}
                {{--background-repeat:no-repeat;--}}
                {{--background-size:cover;--}}

                {{--  background-postion:50%;  --}}
            {{--}--}}
            a{
                color:#000;
            }

            a:hover{
                /*color: #0d5aa7;*/
                /*background-color: #ccc;*/
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    {{--<canvas id="c1"></canvas>--}}
    {{--<canvas id="c2"></canvas>--}}

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">发现</a>
                    <a href="{{ url('/home') }}">我的</a>
                    @else
                        <a href="{{ route('login') }}">登录</a>
                        <a href="{{ route('register') }}">注册</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    My Hub
                </div>
                <div>
                    跨平台保存和分享您的个人成果
                </div>

                <div style="padding-top:10px;">

                <a href="{{url('/mobile/home')}}">Ios客户端</a>
                <a href="{{url('/mobile/home')}}">Android客户端</a>
                <a href="{{url('/api_doc')}}">开放API</a>
                <a href="{{url('/admin')}}">后台管理</a>

                </div>
            </div>
        </div>
    {{--这里隐藏着另一个背景哦--}}
    {{--<script src="/bg/bg.js"></script>--}}
    <script type="text/javascript" color="0,0,0" opacity='0.7' zIndex="-2" count="99" src="js/canvas-nest.js"></script>
    </body>
</html>
