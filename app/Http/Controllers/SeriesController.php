<?php

namespace nuevo\Http\Controllers;
use nuevo\Serie;
use Illuminate\Http\Request;
use DB;
use nuevo\Series_info;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

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
      $seasons = DB::table('seasons')->where('serie_id', $id->id)->get();
      $characters = DB::table('characters')->where('serie_id', $id->id)->limit(6)->get();
      return view('serie')
      ->with('serie', $serie)->with('characters', $characters)->with('seasons', $seasons);
    }
    public function series()
    {
      $series = DB::table('series')->orderBy('id', 'desc')->paginate(10);
        return view('series')->with('series', $series);
    }
}
