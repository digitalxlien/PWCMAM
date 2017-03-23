<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
  //Corregir problema en los construcotres de Post y Sessions

    public function __construct()
    {
      
      // Esta linea indica que como guest (usuario no logueado)
      // no podras acceder al metodo destroy (o a la ruta /logout)
      //ya que no es necesario pues no ha iniciado ni siquiera sesion
      $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create()
    {
      return view('sessions.create');
    }

    public function store()
    {

      //Valida al usuario para loguearse
      if(auth()->attempt(request(['email','password']))) {

        return redirect('/');
      }
      //En caso de que el usuario no pueda loguearse, se enviara un mensaje de error
      return back()->withErrors([
        'message' => 'El usuario o contraseña no es correcto, verifique e intente de nuevo porfavor.'
      ]);

    }

    public function destroy()
    {
      //Cierra sesion
      auth()->logout();
      return redirect()->home();

    }
}
