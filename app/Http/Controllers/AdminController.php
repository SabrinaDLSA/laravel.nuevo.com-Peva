<?php

namespace nuevo\Http\Controllers;
use nuevo\Serie;
use nuevo\Actors;
use nuevo\Character;
use nuevo\Series_info;
use Illuminate\Http\Request;
use DB;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
        return view('desktop');
    }

    public function series()
    {
      $series = DB::table('series')
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->paginate(5);
        return view('desktop')->with('series', $series);
    }
    public function actors()
    {
      $actor = DB::table('actors')->paginate(20);
        return view('actorsList')->with('actor', $actor);
    }
    public function comics(Request $request)
    {
        //
    }

    public function music($id)
    {
        //
    }
    public function characters()
    {
        $character = DB::table('characters')->paginate(20);
          return view('charactersList')->with('character', $character);
    }

    public function edit($id)
    {
      $serie = DB::table('series')->where('series.id', $id)
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->first();
        return view('edit')->with('serie', $serie);
    }
    public function editActor($id)
    {
      $actor = DB::table('actors')->where('id', $id)->first();
        return view('editActor')->with('actor', $actor);
    }
    public function refreshActor($id){
        $p = Actors::find($id);
        $p->Name = \Input::get('Name');
        $p->Photo = \Input::get('Photo');
        $p->Description = \Input::get('Description');
        $p->Birthplace = \Input::get('Birthplace');
        $p->Nationality = \Input::get('Nationality');
        $p->Age = \Input::get('Age');
        $p->resluggify();
        $p->save();
        $alert = \Session::flash('alert', 'You edited a record successfully');
        return \Redirect::route('profile')->with('$alert', $alert);
    }
    public function delete($id)
    {
      $alert = \Session::flash('alert', 'You deleted a record successfully');
      $serie = Series_info::find($id)->delete();
      $serie = Serie::find($id)->delete();
      return \Redirect::to('/list/series');
      }
    public function deleteActor($id)
    {
        $alert = \Session::flash('alert', 'You deleted a record successfully');
        $serie = Character::find($id)->delete();
        $serie = Actors::find($id)->delete();
        return \Redirect::to('/list/actors');
        }

    public function refresh($id){
        $p = Serie::find($id);
        $p->Name = \Input::get('Name');
        $p->Photo = \Input::get('Photo');
        $p->resluggify();
        $p->save();
        $s = Series_info::find($id);
        $s->Description = \Input::get('Description');
        $s->Genre = \Input::get('Genre');
        $s->Start = \Input::get('Start');
        $s->Finish = \Input::get('Finish');
        $s->save();

        return \Redirect::to('/list/series');
    }
    public function insert()
    {
        return view('insertSerie');
    }
    public function insertActor()
    {
        return view('insertActor');
    }
    public function insertMusic()
    {
        return view('insertMusic');
    }
    public function insertComic()
    {
        return view('insertComic');
    }
    public function insertCharacter()
    {
        $actor_id = DB::table('actors')->get();
        $serie_id = DB::table('series')->get();
        return view('insertCharacter')->with('actor_id', $actor_id)->with('serie_id', $serie_id);
    }
    public function create()
    {
          $p = new Serie;
          $p->Name = \Input::get('Name');
          $p->Photo = \Input::get('Photo');
          $p->save();
          $p = new Series_info;
          $p->Genre = \Input::get('Genre');
          $p->Start = \Input::get('Start');
          $p->Finish = \Input::get('Finish');
          $p->Description = \Input::get('Description');
          $p->Seasons = \Input::get('Seasons');
          $s =  DB::table('series')->max('id');
          $p->serie_id = $s;
          $p->save();
          $alert = \Session::flash('alert', 'Your new post was created successfully');
          return \Redirect::to('/list/series')->with('alert', $alert);

    }
    public function createActor()
    {
          $p = new Actors;
          $p->Name = \Input::get('Name');
          $p->Birthplace = \Input::get('Birthplace');
          $p->Nationality = \Input::get('Nationality');
          $p->Age = \Input::get('Age');
          $p->Photo = \Input::get('Photo');
          $p->Description = \Input::get('Description');
          $p->save();
          $alert = \Session::flash('alert', 'Your new Actor was created successfully');
          return \Redirect::to('list/actors')->with('alert', $alert);
    }
    public function createCharacter()
    {
          $p = new Character;
          $p->Name = \Input::get('Name');
          $p->Status = \Input::get('Status');
          $p->Age = \Input::get('Age');
          $p->Photo = \Input::get('Photo');
          $p->Description = \Input::get('Description');
          $p->actor_id = \Input::get('actor_id');
          $p->serie_id = \Input::get('serie_id');
          $p->save();
          $alert = \Session::flash('alert', 'Your new Actor was created successfully');
          return \Redirect::to('/list/characters')->with('alert', $alert);
    }
}
