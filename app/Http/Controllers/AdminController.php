<?php
namespace nuevo\Http\Controllers;
use nuevo\Serie;
use nuevo\Actors;
use nuevo\Season;
use nuevo\Character;
use nuevo\Episodes;
use nuevo\notes;
use nuevo\Series_info;
use DB;
use View;
use Str;
use \Input as Input;
use nuevo\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use Illuminate\Validation\Validator;
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
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->paginate(8);
        return view('List.ListSeries')->with('series', $series);
    }
    public function actors()
    {
      $actor = DB::table('actors')->paginate(20);
        return view('List.actorsList')->with('actor', $actor);
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
          return view('List.charactersList')->with('character', $character);
    }

    public function edit($id)
    {
      $serie = DB::table('series')->where('series.id', $id)
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->first();
        return view('edits.editSerie')->with('serie', $serie);
    }
    public function editActor($id)
    {
      $actor = DB::table('actors')->where('id', $id)->first();
        return view('edits.editActor')->with('actor', $actor);
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
        \Session::flash('alert', 'You edited a record successfully');
        return \Redirect::route('List.actorsList');
    }
    public function delete($id)
    {
      $alert = \Session::flash('alert', 'You deleted a record successfully');
      $serie = DB::table('series')->where('id', $id)->first();
      $seasons = DB::table('seasons')->where('serie_id', $id)->get();
      $character = DB::table('characters')->where('serie_id', $id)->get();
      foreach ($seasons as $s) {
          $seasons = Season::find($s->id)->delete();
      }
      foreach ($character as $c) {
        \File::delete('storage/'.$c->Photo);
          $character = Character::find($c->id)->delete();
      }
      \File::delete('storage/'.$serie->Photo);
      $serie = Series_info::find($id)->delete();
      $serie = Serie::find($id)->delete();
      \Session::flash('error', 'You deleted a record successfully');
      return \Redirect::to('/list/series');
      }
    public function deleteActor($id)
    {
        $alert = \Session::flash('alert', 'You deleted a record successfully');
        $character = DB::table('characters')->where('actor_id', $id)->get();
        foreach ($character as $s) {
          $serie = Actors::find($character->id)->delete();
          \File::delete('storage'.$serie->Photo);
          }
        $actor = Actors::find($id)->first();
        $serie = Actors::find($id)->delete();
          \File::delete('storage/'.$actor->Photo);
          \Session::flash('error', 'You deleted a record successfully');
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
        \Session::flash('success', 'You edited a record successfully');
        return \Redirect::to('/list/series');
    }

    public function insertActor()
    {
        return view('insert.insertActor');
    }
    public function insertMusic()
    {
        return view('insert.insertMusic');
    }
    public function insertComic()
    {
        return view('insert.insertComic');
    }
    public function insertEpisode()
    {

        $serie_id = Season::orderBy('id')->where('Name', '<>', '')->lists('serie_id')->toArray();
        $serie_id = Serie::orderBy('Name')->whereIn('id', $serie_id)->lists('name', 'id')->toArray();
        if( empty($serie_id) ){
        \Session::flash('err', 'You must add a Serie before creating a new Episode');
        return view('insert.insertSerie');
        }
        return view('insert.insertEpisode')->with('serie_id', $serie_id);
    }
    public function insertSeason()
    {
        $serie_id = Serie::orderBy('Name')->lists('name', 'id')->toArray();
        if( empty($serie_id)){
        \Session::flash('errors', 'You must add a Serie before creating a new Season');
        return view('insert.insertSerie');
        }
        else
        {
            return view('insert.insertSeason')->with('serie_id', $serie_id);
        }
    }
    public function insertCharacter()
    {
        $actor_id = DB::table('actors')->get();
        $serie_id = DB::table('series')->get();
        if ( empty($actor_id) || empty($serie_id) ) {
          if ( empty($serie_id) ) {
            \Session::flash('alert', 'You must add a Serie before creating a new character');
            return view('insert.insertSerie');
          }
          \Session::flash('alert', 'You must add an Actor before creating a new character');
          return view('insert.insertActor');
        }
        else{
            return view('insert.insertCharacter')->with('actor_id', $actor_id)->with('serie_id', $serie_id);
        }

    }
   protected function create(Request $request)
    {
        return view('insert.insertSerie');
    }
    public function createSeason(Request $request)
    {
          $file = $request->file('file');
          //obtenemos el nombre del archivo
          $nombre = $file->getClientOriginalExtension();
          $snake = \Input::get('Name');
          $snake = snake_case($snake);
          $nombre = $snake.'.'.$nombre;
          //indicamos que queremos guardar un nuevo archivo en el disco local
          \Storage::disk('local')->put($nombre,  \File::get($file));
          $id = \Input::get('Season');
          $p = Season::find($id);
          $serie_id = $p->serie_id;
          $p->Name = \Input::get('Name');
          $p->Photo = $nombre;
          $p->Description = \Input::get('Description');
          \Session::flash('success', 'You edited a record successfully');
          $episodes = \Input::get('Episodes');
          $p->Episodes = $episodes;
          $p->save();
          for ($x = 1; $x <= $episodes ; $x++){
              $s = new Episodes;
              $s->serie_id = $serie_id;
              $s->Episode = $x;
              $s->season_id = $id;
              $s->save();
            }
          return \Redirect::to('/list/series');

    }
    public function createEpisode(Request $request)
    {
          $file = $request->file('file');
          //obtenemos el nombre del archivo
          $nombre = $file->getClientOriginalExtension();
          $snake = \Input::get('Name');
          $snake = snake_case($snake);
          $nombre = $snake.'.'.$nombre;
          //indicamos que queremos guardar un nuevo archivo en el disco local
          \Storage::disk('local')->put($nombre,  \File::get($file));
          $id = \Input::get('Episodes');
          $p = Episodes::find($id);
          $p->Name = \Input::get('Name');
          $p->Photo = $nombre;
          $p->Description = \Input::get('Description');
          $p->save();
          \Session::flash('success', 'You edited a record successfully');
          return \Redirect::to('/list/series');

    }
    public function createActor(Request $request)
    {
          $file = $request->file('file');
          //obtenemos el nombre del archivo
          $nombre = $file->getClientOriginalExtension();
          $snake = \Input::get('Name');
          $snake = snake_case($snake);
          $nombre = $snake.'.'.$nombre;
          //indicamos que queremos guardar un nuevo archivo en el disco local
          \Storage::disk('local')->put($nombre,  \File::get($file));
          $p = new Actors;
          $p->Name = \Input::get('Name');
          $p->Birthplace = \Input::get('Birthplace');
          $p->Nationality = \Input::get('Nationality');
          $p->Age = \Input::get('Age');
          $p->Photo = $nombre;
          $p->Description = \Input::get('Description');
          $p->save();
          \Session::flash('success', 'Your new Actor was created successfully');
          return \Redirect::to('list/actors');
    }
    public function createCharacter(Request $request)
    {
          $file = $request->file('file');
          //obtenemos el nombre del archivo
          $nombre = $file->getClientOriginalExtension();
          $snake = \Input::get('Name');
          $snake = snake_case($snake);
          $nombre = $snake.'.'.$nombre;
          \Storage::disk('local')->put($nombre,  \File::get($file));
          $p = new Character;
          $p->Name = \Input::get('Name');
          $p->Status = \Input::get('Status');
          $p->Age = \Input::get('Age');
          $p->Photo = $nombre;
          $p->Description = \Input::get('Description');
          $p->actor_id = \Input::get('actor_id');
          $p->serie_id = \Input::get('serie_id');
          $p->save();
          \Session::flash('success', 'Your new Actor was created successfully');
          return \Redirect::to('/list/characters');
    }
    public function getSeason(){
      $serie_id = Input::get('valor');
      $Season =  DB::table('seasons')->where('serie_id', $serie_id)->where('Name', '')->orderBy('id')->lists('Season', 'id');
      return view::make('insert.seasons')->with('Season', $Season);
    }
    public function getSeasonEpisode(){
      $serie_id = Input::get('valor');
      $Season =  DB::table('seasons')->where('serie_id', $serie_id)->where('Name', '<>', '' )->orderBy('id')->lists('Season', 'id');
      return view::make('insert.seasons')->with('Season', $Season);
    }
    public function getEpisodes(){
      $season_id = Input::get('valor');
      $Episodes =  DB::table('episodes')->where('season_id', $season_id)->where('Name', '')->orderBy('id')->lists('Episode', 'id');
      return view::make('insert.episodes')->with('Episodes', $Episodes);
    }

    public function store(CreateSeriesController $request) {
      // Getting all data after success validation.
      print_r($request->all());die;
      // do your stuff here.
    }
}
