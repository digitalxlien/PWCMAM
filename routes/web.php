<?php


// POSTS
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');

//ROUTES TO NUESTRA INSTITUCIÓN:
Route::get('/bienvenida',   function() { return view('institucion.bienvenida');   });
Route::get('/historia',     function() { return view('institucion.historia');     });
Route::get('/moral',        function() { return view('institucion.moral');        });
Route::get('/organizacion', function() { return view('institucion.organizacion'); });

//ROUTES TO ADMISIÓN:
Route::get('/requisitos', function() { return view('admision.requisitos'); });

//ROUTES TO ACADÉMICO:
Route::get('/preparatoria', function() { return view('academico.preparatoria'); });
Route::get('/apuntes', function() { return view('academico.apuntes'); });


//ROUTES TO VIDA DEL CADETE:
Route::get('/campanas',   function() { return view('vida-del-cadete.campanas'); });
Route::get('/maniobras',  function() { return view('vida-del-cadete.maniobras');});
Route::get('/servicios',  function() { return view('vida-del-cadete.servicios');});
//ROUTES TO DEPORTES:
Route::get('/deportes',  function() { return view('deportes.deportes');});

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
