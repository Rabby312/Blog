<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
        //$posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }

    public function first(Post $post)
    {
        //$post = Post::find($id);
    	return view('posts.first', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }
    public function store()
    {
        $this->validate(Request(),[
          'title' => 'required',
          'body' => 'required'
        ]);


    	Post::create(Request(['title','body']));

    	//$post->save();

    	return redirect('/');
    }
}
