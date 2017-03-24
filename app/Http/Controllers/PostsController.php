<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //Corregir problema en los construcotres de Post y
    public function __construct()
    {

      // Esta linea indica que deberas estar logueado
      // para acceder a los metodos de este Controlador
      // excepto index (porque esos metodos los pueden
      // ver cualquier usuario este registrado o no)
      $this->middleware('auth', ['except' => ['index', 'test']]);

    }
    public function index()
    {
      // Obtiene todos los posts de la BD
      //  comenzando por el mas reciente
      $posts = Post::latest()->get();
      return view('posts.index', compact('posts'));

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

      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );
      // //Insertar Post
      // Post::create([
      // 'title'   => request('title'),
      // 'body'    => request('body')
      // // 'user_id' => auth()->id()
      // ]);

      return redirect('/');

    }

    public function test(){}


}
