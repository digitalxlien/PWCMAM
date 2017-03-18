<?php




Route::get('/', 'PostsController@index');

Route::get('/bienvenida', function() {
  return view('institucion.bienvenida');
});

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
