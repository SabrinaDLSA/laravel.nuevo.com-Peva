<?php

namespace nuevo\Http\Controllers;

use nuevo\Serie;
use Illuminate\Http\Request;
use DB;
use nuevo\Series_info;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function index($genre)
    {
      $series = DB::table('series')
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->where('Genre', $genre)->paginate(25);
        return view('series')->with('series', $series);
    }

}
