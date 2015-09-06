<?php

namespace nuevo\Http\Controllers;
use nuevo\Actors;
use nuevo\Serie;
use DB;
use nuevo\Series_info;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class ActorsController extends Controller
{
    public function index($slug){
      $actor = Actors::findBySlug($slug);
      $id_actor = Actors::findBySlug($slug);
      $characters = \DB::table('characters')->where('actor_id', $id_actor->id)->orderBy('id','desc')->limit(6)->get();
      return view('actor')->with('actor', $actor)->with('characters', $characters);
    }

    public function actors(){
      $actor = \DB::table('actors')->orderBy('id','desc')->paginate('30');
      return view('actors')->with('actor', $actor);
    }


}
