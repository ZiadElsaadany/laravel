<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    //
    public function index()
    {

        $allPosts = [
            [
                'id' => 1,
                'title' => "PHP",
                'postBy' => "Mohsen",
                'createdAt' => "15-5-2025",
            ],
            [
                'id' => 2,
                'title' => "Flutter",
                'postBy' => "Ziad",
                'createdAt' => "15-5-2025",
            ]
        ];
        return view("posts.blogproject", ["allPosts" => $allPosts]);
    }


}
