<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('users', UserController::class);
    $router->resource('musics', MusicController::class);
    $router->resource('movies', MovieController::class);
    $router->resource('likes', LikeController::class);
    $router->resource('shares', ShareController::class);
    $router->resource('comments', CommentController::class);
    $router->resource('docs', DocController::class);

});

