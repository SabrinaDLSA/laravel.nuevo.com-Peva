<?php
Route::get('/',[
  'as' => 'home',
  'uses' => 'WelcomeController@index'
  ]);
  Route::get('/home','WelcomeController@index');

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
