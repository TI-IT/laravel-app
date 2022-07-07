<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $post = Post::where('is_published', 0)->first();
        $posts = Post::all();
        foreach($posts as $post){
            dump($post->title);
        }
    }
    public function create ()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpastorm',
                'content' => 'some interesting content',
                'image' => 'imageblabla.jpg',
                'likes' => '20',
                'is_published' => '1',
            ],
            [
                'title' => 'another title of post from phpastorm',
                'content' => 'another some interesting content',
                'image' => 'anotherimageblabla.jpg',
                'likes' => '30',
                'is_published' => '2',
            ],
        ];

        foreach($postsArr as $item){
//            dd($item);
            Post::create($item);
        }



        dd('created');
    }
}
