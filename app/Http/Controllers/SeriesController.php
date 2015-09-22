<?php

namespace nuevo\Http\Controllers;
use nuevo\Http\Requests;
use Validator;
use Redirect;
use nuevo\Serie;
use nuevo\Actors;
use nuevo\Season;
use nuevo\Character;
use nuevo\Episodes;
use nuevo\Series_info;
use DB;
use View;
use Str;
use \Input as Input;
use nuevo\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($slug)
    {
      $serie = DB::table('series')->where('slug', $slug)
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->get();
      $id = DB::table('series')->where('slug', $slug)->first();
      $seasons = DB::table('seasons')->where('serie_id', $id->id)->orderBy('Season')->get();
      $characters = DB::table('characters')->where('serie_id', $id->id)->limit(8)->get();
      return view('serie')
      ->with('serie', $serie)->with('characters', $characters)->with('seasons', $seasons);
    }
    public function series()
    {
      $series = DB::table('series')->orderBy('id', 'desc')->paginate(10);
        return view('series')->with('series', $series);
    }
    public function serieValidate(Request $request){
      // getting all of the post data
      $serieData = Input::all();
      // setting up custom error messages for the field validation
       $messages = [
           'Name.required' => 'All series must have  a name',
           'Description.required' => 'Please enter a Description',
           'Name.unique' => 'That Serie already exists',
           'file.required' => 'A Photogaph must be added in order to identify the serie',
           'Finish.after' => 'Finish date can not be a date before the Start date',
           'Genre.required' => 'You have to choose a Genre, you can choose `Other` if you are not sure which fits',
           'Seasons.required' => 'Series must at least have one season',
           'Seasons.min' => 'Please check that you entered a valid number of seasons, Series must at least  have one of them',
           'Photo.image' => 'Please check that you uploaded an image and not other kind of file',

       ];
      $rules = [
        'Name' => 'required|unique:series,Name',
        'Genre' => 'required|min:1',
        'Description' => 'required',
        'Seasons' => 'required',
        'file' => 'required|image',
        'Start' => 'required|date',
        'Finish' => 'required|date|after:Start',
      ];

      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($serieData, $rules, $messages);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('/insert/serie/serieValidate')->withInput()->withErrors($validator);
      }
      else {
        $file = $request->file('file');
         //obtenemos el nombre del archivo
         $nombre = $file->getClientOriginalExtension();
         $snake = \Input::get('Name');
         $snake = snake_case($snake);
         $nombre = $snake.'.'.$nombre;
         //indicamos que queremos guardar un nuevo archivo en el disco local
         \Storage::disk('local')->put($nombre,  \File::get($file));
         $p = new Serie;
         $p->Name = \Input::get('Name');
         $p->Photo = $nombre;
         $p->save();
         $p = new Series_info;
         $p->Genre = \Input::get('Genre');
         $p->Start = \Input::get('Start');
         $p->Finish = \Input::get('Finish');
         $p->Description = \Input::get('Description');
         $s =  DB::table('series')->max('id');
         $p->serie_id = $s;
         $p->save();
         $seasons = \Input::get('Seasons');
         for ($x = 1; $x <= $seasons ; $x++){
             $s = new Season;
             $s->serie_id = DB::table('series')->max('id');
             $s->Season = $x;
             $s->save();
           }
        \Session::flash('alert', 'Your new Serie was created successfully');

         return \Redirect::to('/list/series');
      }
    }
}
