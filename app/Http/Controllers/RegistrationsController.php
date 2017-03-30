<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationsController extends Controller
{
    public function create()
    {

      return view('registrations.create');

    }

    public function store ()
    {
      //Validacion de campos
      $this->validate(request(), [
        'name'   => 'required',
        'email'  => 'required'
      ]);

      // //Insertar pre-registro
      Registration::create([
      'name'                    => request('name'),
      'address'                 => request('address'),
      'neighborhood'            => request('neighborhood'),
      'city'                    => request('city'),
      'state'                   => request('state'),
      'country'                 => request('country'),
      'telephone'               => request('telephone'),
      'email'                   => request('email'),
      'date_birth'              => request('date_birth'),
      'height'                  => request('height'),
      'sex'                     => request('sex'),
      'minimal_schooling'       => request('minimal_schooling'),
      'speciality'              => request('speciality'),
      'current_occupation'      => request('current_occupation'),
      'inscription_request'     => request('inscription_request'),
      'willing_to_live_jalisco' => request('willing_to_live_jalisco'),
      'comments'                => request('comments'),
      'questions'               => request('questions'),
      ]);
      //redirecciona al home
      return redirect('/');


    }
}
