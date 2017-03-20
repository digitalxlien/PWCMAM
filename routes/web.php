<?php



Route::get('/', 'PostsController@index');

//ROUTES TO NUESTRA INSTITUCIÓN:
Route::get('/bienvenida', function() {
  return view('institucion.bienvenida');
});

//ROUTES TO ADMISIÓN:
Route::get('/requisitos', function() {
  return view('admision.requisitos');
});

//ROUTES TO ACADÉMICO:

//ROUTES TO VIDA DEL CADETE:
Route::get('/campanas', function() {
  return view('vida-del-cadete.campanas');
});
//ROUTES TO DEPORTES:

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
