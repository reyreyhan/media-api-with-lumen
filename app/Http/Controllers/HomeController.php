<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

            echo "LIST API CORE <br>";
            echo "get('/kategori','KategoriController@index'); <br>";
            echo "get('/kategori/{id}','KategoriController@show'); <br>";
            echo "post('/kategori','KategoriController@store'); <br>";
            echo "put('/kategori/{id}','KategoriController@update'); <br>";
            echo "delete('/kategori/{id}','KategoriController@destroy'); <br><br>";


            echo "get('/user','UserController@index'); <br>";
            echo "get('/user/{id}','UserController@show'); <br>";
            echo "post('/user','UserController@store'); <br>";
            echo "put('/user/{id}','UserController@update'); <br>";
            echo "delete('/user/{id}','UserController@destroy'); <br><br>";

            echo "get('/penstv','PenstvController@index'); <br>";
            echo "get('/penstv/{id}','PenstvController@show'); <br>";
            echo "post('/penstv','PenstvController@store'); <br>";
            echo "put('/penstv/{id}','PenstvController@update'); <br>";
            echo "delete('/penstv/{id}','PenstvController@destroy'); <br><br>";

            echo "get('/penstoon','PenstoonController@index'); <br>";
            echo "get('/penstoon/{id}','PenstoonController@show'); <br>";
            echo "post('/penstoon','PenstoonController@store'); <br>";
            echo "put('/penstoon/{id}','PenstoonController@update'); <br>";
            echo "delete('/penstoon/{id}','PenstoonController@destroy'); <br><br>";

            echo "get('/penspost','PenspostController@index'); <br>";
            echo "get('/penspost/{id}','PenspostController@show'); <br>";
            echo "post('/penspost','PenspostController@store'); <br>";
            echo "put('/penspost/{id}','PenspostController@update'); <br>";
            echo "delete('/penspost/{id}','PenspostController@destroy'); <br><br>";

            echo "get('/core','CoreController@index'); <br>";
            echo "get('/core/{id}','CoreController@show'); <br>";
            echo "post('/core','CoreController@store'); <br>";
            echo "put('/core/{id}','CoreController@update'); <br>";
            echo "delete('/core/{id}','CoreController@destroy'); <br><br>";

            echo "get('/page','PageController@index'); <br>";
            echo "get('/page/{id}','PageController@show'); <br>";
            echo "post('/page','PageController@store'); <br>";
            echo "put('/page/{id}','PageController@update'); <br>";
            echo "delete('/page/{id}','PageController@destroy') <br><br>";
;
    }
}
