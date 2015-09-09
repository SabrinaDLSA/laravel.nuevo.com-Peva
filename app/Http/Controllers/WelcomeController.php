<?php

namespace nuevo\Http\Controllers;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;*/

class WelcomeController extends Controller{
/**
  *@return Response;
  *
  */
  public function index ()
  {
    $series = \DB::table('series')->orderBy('id', 'desc')->take(20)->get();
    $actors = \DB::table('actors')->orderBy('id', 'desc')->take(18)->get();
    return view('welcome')
    ->with('series', $series)
    ->with('actors', $actors);
  }
}
