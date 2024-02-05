<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        Post::create([
            "title" => "title created",
            "description" => "description created",
            "img" => "updatedimgcreated.jpeg",
            "likes" => 150,
            "dislikes" => 1,
            "status" => TRUE,
        ]);

        dd("created!");
    }

    public function read()
    {
        //Post::find($id); //target select
        //Post::all(); //get all posts
        $posts = Post::where("status", true)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd("readed!");
    }

    public function update()
    {
        Post::find(3)->update([
            "title" => "title updated",
            "description" => "description updated",
            "img" => "updatedimgupdated.jpeg",
            "likes" => 150,
            "dislikes" => 1,
            "status" => TRUE,
        ]);
        dd("updated");
    }

    public function delete()
    {
        //used soft deletes
        //Post::first()->delete(); //first
        /* Post::orderBy("id", "desc")->first()->delete(); */

        $deletedPost = Post::withTrashed()->find(3);
        $deletedPost->restore();
        dd("deleted!");
    }
}
