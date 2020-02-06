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
        .left{
            background: #ccc;
        }
        .right{
            background: #eee;
        }
    </style>
</head>
<body>

<div id="app">
    <mt-header fixed title="My Hub"></mt-header>

    <div class="left">
        <test></test>
    </div>
    <div class="right">
        <example></example>
    </div>
    <mt-button @click.native="handleClick">按钮</mt-button>


    <mt-tab-container v-model="active">
        <mt-tab-container-item id="tab-container1">
            <mt-cell v-for="n in 10" title="tab-container 1"></mt-cell>
        </mt-tab-container-item>
        <mt-tab-container-item id="tab-container2">
            <mt-cell v-for="n in 5" title="tab-container 2"></mt-cell>
        </mt-tab-container-item>
        <mt-tab-container-item id="tab-container3">


        </mt-tab-container-item>
    </mt-tab-container>

    <mt-tabbar v-model="selected">
        <mt-tab-item id="外卖">
            <img slot="icon" src="../assets/100x100.png">
            发现
        </mt-tab-item>
        <mt-tab-item id="订单">
            <img slot="icon" src="../assets/100x100.png">
            发布
        </mt-tab-item>
        <mt-tab-item id="发现">
            <img slot="icon" src="../assets/100x100.png">
            最好
        </mt-tab-item>
        <mt-tab-item id="我的">
            <img slot="icon" src="../assets/100x100.png">
            我的
        </mt-tab-item>
    </mt-tabbar>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>