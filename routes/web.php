<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'mensagem'], function() use ($router) {
    $router->get('/', 'MensagemController@index');
    $router->get('/fila/{fila}', 'MensagemController@indexByQueue');
    $router->get('/{id}', 'MensagemController@get');
    $router->post('/{fila}', 'MensagemController@save');
    $router->delete('/{id}', 'MensagemController@delete');
});