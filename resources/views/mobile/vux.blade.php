<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div id="app">
    <mt-loadmore :top-method="loadTop" :bottom-method="loadBottom" :bottom-all-loaded="allLoaded" ref="loadmore">
        <ul>
            <li v-for="item in list">111</li>
        </ul>
    </mt-loadmore>
</div>
    <script src="{{ asset('js/app2.js') }}"></script>
</body>
</html>