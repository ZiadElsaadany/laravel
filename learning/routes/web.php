<?php

use Illuminate\Support\Facades\Route;

///view: global heloper method --> view: global functions
Route::get('/', function () {
    return view('welcome');  /// route to welcome screen (firstly)
});

//http://127.0.0.1:8000/test                --> go to test page WOOOOOOOOOOOOOOW
///  ( :: )  -->>>  scope resultion
///   Route::get  ---> static method in class Route    take 2 parameters    uri + callBackFunction
Route::get('/test', function () {
    return view('test');  /// route to welcome screen (firstly)
});

Route::get(
    '/hello',
    function () {
        return view("hello");
    }
);
