<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
Dusterio\LumenPassport\LumenPassport::routes($app);

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['middleware' => 'auth:api'], function($app)
{
    $app->get('/user/info', function() {
        $user = app('auth')->guard()->user();
        return response()->json($user);
    });
});