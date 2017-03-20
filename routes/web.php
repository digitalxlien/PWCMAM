<?php



Route::get('/', 'PostsController@index');

//ROUTES TO NUESTRA INSTITUCIÓN:
Route::get('/bienvenida', function() { return view('institucion.bienvenida'); });
Route::get('/historia',   function() { return view('institucion.historia');   });
Route::get('/moral',      function() { return view('institucion.moral');      });

//ROUTES TO ADMISIÓN:
Route::get('/requisitos', function() {
  return view('admision.requisitos');
});

//ROUTES TO ACADÉMICO:

//ROUTES TO VIDA DEL CADETE:
Route::get('/campanas',   function() { return view('vida-del-cadete.campanas');});
Route::get('/maniobras',  function() { return view('vida-del-cadete.maniobras');});
//ROUTES TO DEPORTES:

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
