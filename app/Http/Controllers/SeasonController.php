<?php

namespace nuevo\Http\Controllers;
use nuevo\Serie;
use Illuminate\Http\Request;
use DB;
use nuevo\Series_info;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class SeasonController extends Controller
{

    public function index($slug, $x)
    {
        $serie = DB::table('series')->where('slug', $slug)->first();
        $season = DB::table('seasons')->where('serie_id', $serie->id)->where('Season', $x)->first();
        $episodes = DB::table('episodes')->where('serie_id', $serie->id)
        ->where('season_id', $season->id)->get();
        return view('seasons')->with('season', $season)->with('episodes', $episodes)->with('serie', $serie);
    }
}
