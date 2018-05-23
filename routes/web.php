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

/*$app->get('/', function () use ($app) {
    return $app->version();
});*/

$app->get('/','HomeController@index');

$app->get('/kategori','KategoriController@index');
$app->get('/kategori/{id}','KategoriController@show');
$app->post('/kategori','KategoriController@store');
$app->put('/kategori/{id}','KategoriController@update');
$app->delete('/kategori/{id}','KategoriController@destroy');

$app->get('/user','UserController@index');
$app->get('/user/{id}','UserController@show');
$app->post('/user','UserController@store');
$app->put('/user/{id}','UserController@update');
$app->delete('/user/{id}','UserController@destroy');

$app->get('/penstv','PenstvController@index');
$app->get('/penstv/{id}','PenstvController@show');
$app->post('/penstv','PenstvController@store');
$app->put('/penstv/{id}','PenstvController@update');
$app->delete('/penstv/{id}','PenstvController@destroy');

$app->get('/penstoon','PenstoonController@index');
$app->get('/penstoon/{id}','PenstoonController@show');
$app->post('/penstoon','PenstoonController@store');
$app->put('/penstoon/{id}','PenstoonController@update');
$app->delete('/penstoon/{id}','PenstoonController@destroy');

$app->get('/penspost','PenspostController@index');
$app->get('/penspost/{id}','PenspostController@show');
$app->post('/penspost','PenspostController@store');
$app->put('/penspost/{id}','PenspostController@update');
$app->delete('/penspost/{id}','PenspostController@destroy');

$app->get('/core','CoreController@index');
$app->get('/core/{id}','CoreController@show');
$app->post('/core','CoreController@store');
$app->put('/core/{id}','CoreController@update');
$app->delete('/core/{id}','CoreController@destroy');

$app->get('/page','PageController@index');
$app->get('/page/{id}','PageController@show');
$app->post('/page','PageController@store');
$app->put('/page/{id}','PageController@update');
$app->delete('/page/{id}','PageController@destroy');

$app->post('/login','UserController@login');
$app->get('/doc','UserController@doc');
