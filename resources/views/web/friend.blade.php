@extends('layouts.app_angular')
@section('content')
    <div>这里使用angular 构建</div>
    <div ng-app="">
        <p>名字 : <input type="text" ng-model="name"></p>
        <h1>Hello @{{name}}</h1>
    </div>
    <hr/>
    <div ng-app="myApp" ng-controller="myCtrl">

        名: <input type="text" ng-model="firstName"><br>
        姓: <input type="text" ng-model="lastName"><br>
        <br>
        姓名:  @{{firstName + " " + lastName}}

    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.firstName= "John";
            $scope.lastName= "Doe";
        });
    </script>

@endsection
