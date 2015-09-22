<?php
Route::get('/',[
  'as' => 'home',
  'uses' => 'WelcomeController@index'
  ]);
Route::get('/home','WelcomeController@index');
// Search
Route::any('executeSearch', 'SearchController@executeSearch');
// Genre Controller
Route::get('/series/genre/{genre}','GenreController@index' );
Route::post('/edit/notes','AdminController@notes' );
// Seasons Controller
Route::get('/serie/{slug}/{x}','SeasonController@index' );
/*Route::get('/insert/serie/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);
});*/
// Admin Controllers
Route::get('/list/comics','AdminController@comics');
Route::get('/list/series','AdminController@series');
Route::get('/list/actors','AdminController@actors');
Route::get('/list/music','AdminController@music');
Route::get('/list/characters','AdminController@characters');
//Admin Edit
Route::get('/list/serie/{id}/edit','AdminController@edit' );
Route::get('/list/serie/{id}/delete','AdminController@delete' );
Route::post('/list/serie/{id}/refresh', 'AdminController@refresh');

Route::get('/list/actor/{id}/edit','AdminController@editActor' );
Route::get('/list/actor/{id}/delete','AdminController@deleteActor' );
Route::post('/list/actor/{id}/refresh','AdminController@refreshActor' );
//Admin Insert
Route::post('/insert/music','AdminController@insertMusic');
Route::get('/insert/music','AdminController@insert');
Route::post('/insert/actor','AdminController@createActor');
Route::get('/insert/actor', 'AdminController@insertActor');
Route::post('/insert/comic','AdminController@insertComic');
Route::get('/insert/comic', 'AdminController@insert');

Route::post('/insert/serie','AdminController@store');
Route::get('/insert/serie','AdminController@create');
Route::get('/insert/serie/serieValidate',  function() {return View::make('insert.insertSerie');});
Route::post('/insert/serie/serieValidate', 'SeriesController@serieValidate');


Route::post('/insert/character','AdminController@createCharacter');
Route::get('/insert/character','AdminController@insertCharacter');
Route::post('/insert/season','AdminController@createSeason');
Route::get('/insert/season','AdminController@insertSeason');
Route::post('/insert/episode','AdminController@createEpisode');
Route::get('/insert/episode','AdminController@insertEpisode');
Route::post('/getSeason','AdminController@getSeason');
Route::post('/getSeasonEpisode','AdminController@getSeasonEpisode');
Route::post('/getEpisodes','AdminController@getEpisodes');



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
// Character Controllers
Route::get('/characters/{Serieslug}', 'CharacterController@serieSlug' );
Route::get('/characters',[
    'as'=> 'characters',
    'uses' => 'CharacterController@characters'
]);
Route::get('/character/{slug}', 'CharacterController@index');
//Actors Controllers
Route::get('/actors',[
    'as'=> 'actors',
    'uses' => 'ActorsController@actors'
]);
Route::get('/actor/{slug}', 'ActorsController@index');
//Series Controllers
Route::get('/series',[
    'as'=> 'series',
    'uses' => 'SeriesController@series'
]);
Route::get('/serie/{slug}', 'SeriesController@index');
Route::get('/serie', 'SeriesController@series');
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
