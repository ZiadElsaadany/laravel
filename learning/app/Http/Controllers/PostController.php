<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    //
    public function index()
    {

        // 1- create posts table (id, title(varChar), description(TEXT), created_at)
        // 2- query: select * from posts

        /// migrations :  version contorol for your database
        // php artisan make:migration create_posts_table


        $allPosts = [
            [
                'id' => 1,
                'title' => "PHP",
                'posted_by' => "Mohsen",
                'created_at' => "15-5-2025",
            ],
            [
                'id' => 2,
                'title' => "Flutter",
                'posted_by' => "Ziad",
                'created_at' => "15-5-2025",
            ]
        ];
        return view("posts.blogproject", ["allPosts" => $allPosts]);
    }


    public function show($postId)
    {

        $post = [
            'id' => 1,
            'title' => "PHP",
            'posted_by' => "Mohsen",
            'created_at' => "15-5-2025",
        ];

        return view("posts.show", ["post" => $post]);
    }

    public function create()
    {


        return view("posts.create");
    }
    
    public function store()
    {

        //1. get user data from form

        ///php
        // $data=$_POST;
        // // return $data;
        
        //laravel

        $request = request();
        $title = $request->title;
        $desc = $request->description;
        $postCreator = $request->postCreator;


        //2. store the user data in database


        //3. redirection to posts.index to show all posts
        return to_route('posts.index');
    }
     public function edit($post)
    {

      

        $request = request();
        $title = $request->title;
        $desc = $request->description;
        $postCreator = $request->postCreator;
        return view('posts.edit');
    }
     public function update($post)
    {
            $request = request();
        $title = $request->title;
        $desc = $request->description;
        $postCreator = $request->postCreator;
        // @dd($request->all());

        // update data in database

        //redirection to posts.show
        return to_route('posts.show',$post);
    }
      public function destroy($post)
    {
        // delete from databse  
        

        // redirection to posts.index
        return to_route('posts.index');
    }
}

// database 
// structure change for database (create table, edit column, remove column)
// operations on database (insert record, edit record, delete record) 