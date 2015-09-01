<?php
Route::get('/',[
  'as' => 'home',
  'uses' => 'WelcomeController@index'
  ]);
Route::get('/home','WelcomeController@index');

// Admin Controllers
Route::get('/list/comics','AdminController@comics');
Route::get('/list/series','AdminController@series');
Route::get('/list/actors','AdminController@actors');
Route::get('/list/music','AdminController@music');

Route::get('serie/{id}/edit','AdminController@edit' );
Route::get('serie/{id}/delete','AdminController@delete' );
Route::post('serie/{id}/refresh', 'AdminController@refresh');

//Admin Insert
Route::post('/insert/music','AdminController@insertMusic');
Route::get('/insert/music','AdminController@insert');
Route::post('/insert/actor','AdminController@createActor');
Route::get('/insert/actor', 'AdminController@insertActor');
Route::post('/insert/comic','AdminController@insertComic');
Route::get('/insert/comic', 'AdminController@insert');
Route::post('/insert/serie','AdminController@create');
Route::get('/insert/serie','AdminController@insert');

// User Controllers

Route::get('/logout', [
  'as' => 'logout',
  'uses' => 'UserController@logout'
]);
Route::get('profile',[
  'as'=> 'profile',
  'uses' => 'UserController@profile'
]);
Route::get('/desktop',[
  'as'=> 'desktop',
  'uses' => 'UserController@index'
]);
//Actors Controllers
Route::get('/actors',[
    'as'=> 'actors',
    'uses' => 'ActorsController@actors'
]);
Route::get('/actor/{slug}', 'ActorsController@index');
//Series Controllers
Route::get('/serie/{slug}', 'SeriesController@index');


// Authentication routes...
Route::get('login',[
  'as' => 'login',
  'uses' =>  'Auth\AuthController@getLogin']);
Route::post('login','Auth\AuthController@postLogin');
Route::get('logout',[
  'as' => 'logout',
  'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register', [
  'as' => 'register',
  'uses' => 'Auth\AuthController@getRegister'
  ]);
Route::post('register', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
