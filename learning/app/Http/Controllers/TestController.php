<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{


    // php artisan make:controller

    public function firstAction()
    {
        $name = "Ziad";
        $books = ["PHP", "Flutter", "Web app"];
        /// pass data by constructor   ---> data attribute
        return view("hello", ["name" => $name, "books" => $books]);

    }
    public function TestWelcome()
    {
        $name = "ziad";
        return view("welcometest", data: ["name" => $name]);

    }



}
