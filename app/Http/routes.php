<?php
Route::get('/',[
  'as' => 'home',
  'uses' => 'WelcomeController@index'
  ]);
Route::get('/home','WelcomeController@index');

// Admin Controllers
Route::get('/comics',[
    'as'=> 'comics',
    'uses' => 'AdminController@comics'
]);
Route::get('/series',[
    'as'=> 'series',
    'uses' => 'AdminController@series'
]);
Route::get('/music',[
    'as'=> 'music',
    'uses' => 'AdminController@music'
]);
Route::get('series/{id}/edit','AdminController@edit' );
Route::get('series/{id}/delete','AdminController@delete' );
Route::post('series/{id}/refresh', 'AdminController@refresh');

//Admin Insert

Route::get('/insertMusic', [
  'as' =>  'insertMusic',
  'uses' => 'AdminController@insert'
]);
Route::post('/insertActor','AdminController@createActor');
Route::get('/insertActor', [
  'as' =>  'insertActor',
  'uses' => 'AdminController@insertActor'
]);
Route::post('/insertActor','AdminController@createActor');
Route::get('/insertComic', [
  'as' =>  'insertComic',
  'uses' => 'AdminController@insert'
]);
Route::post('/insert','AdminController@create');
Route::get('/insert', [
  'as' =>  'insert',
  'uses' => 'AdminController@insert'
]);

Route::post('/insert','AdminController@create');
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
Route::get('/actors/{slug}', 'ActorsController@index');
//Series Controllers
Route::get('/series/{slug}', 'SeriesController@index');


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
