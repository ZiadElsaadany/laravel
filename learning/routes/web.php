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

    // make shortcut named posts.index
)->name("posts.index");
Route::get(
    '/posts/create',
    [
        PostController::class,
        "create"
    ]

)->name('posts.create');

Route::get(
    /// url parameter
    '/posts/{post}',
    [
        PostController::class,
        "show"
    ]

    /// shortcut named posts.show
)->name(name: "posts.show");
Route::post(
    /// url parameter
    '/posts',
    [
        PostController::class,
        "store"
    ]

    /// shortcut named posts.show
)->name(name: "posts.store");
Route::get(
    /// url parameter
 '/posts/{post}/edit',
    [
        PostController::class,
        "edit"
    ]

    /// shortcut named posts.show
)->name(name: "posts.edit");
Route::put(
    /// url parameter
 '/posts/{post}',
    [
        PostController::class,
        "update"
    ]

    /// shortcut named posts.show
)->name(name: "posts.update");
Route::delete(
    /// url parameter
 '/posts/{post}',
    [
        PostController::class,
        "destroy"
    ]

    /// shortcut named posts.show
)->name(name: "posts.destroy");