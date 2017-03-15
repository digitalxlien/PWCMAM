<?php




Route::get('/', 'PostsController@index');

Route::get('/bienvenida', function() {
  return view('institucion.bienvenida');
});
