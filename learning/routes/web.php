<?php

use App\Http\Controllers\PostController;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Route;

///view: global heloper method --> view: global functions
// Route::get('/', function () {
//     return view('welcome');  /// route to welcome screen (firstly)
// });
// Route::get('/', function () {
//     return view('test');  /// route to welcome screen (firstly)
// });
//http://127.0.0.1:8000/test                --> go to test page WOOOOOOOOOOOOOOW
///  ( :: )  -->>>  scope resultion
///   Route::get  ---> static method in class Route    take 2 parameters    uri + callBackFunction
// Route::get('/test', function () {
//     return view('test');  /// route to welcome screen (firstly)
// });


/////       execute method on testController
// Route::get(
//     '/hello',

//     /// TestController::class         ---------->    equal  path of file --> "App/Http/Controllers/TestController"
//     [
//         TestController::class,
//         'firstAction'
//     ]

// );
// Route::get(
//     '/welcometest',

//     /// TestController::class         ---------->    equal  path of file --> "App/Http/Controllers/TestController"
//     [
//         TestController::class,
//         'TestWelcome'
//     ]

// );


//// Steps
// Define route
// Define controller that renders a view
// Define view that contains list of posts
// Remove any static html data from view

Route::get(
    '/posts',

    [PostController::class, "index"]
);
