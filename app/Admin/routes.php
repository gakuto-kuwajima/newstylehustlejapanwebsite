<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('auth/communityrep', CommunityRepUserController::class);
    $router->resource('auth/indexcommunity', IndexCommunityController::class);
    $router->resource('auth/indexnews', IndexNewsController::class);

});
