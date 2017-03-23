<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

      return view('posts.index');

    }

    public function create()
    {

      return view('posts.create');

    }

    public function store()
    {

      //Validar campos
      $this->validate(request(), [
        'title' => 'required',
        'body'  => 'required'
      ]);

      //Insertar Post
      Post::create([
      'title'   => request('title'),
      'body'    => request('body')
      // 'user_id' => auth()->id()
      ]);

      return redirect('/');

    }


}
