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

class CharacterController extends Controller
{

    public function index($slug)
    {
        $character = DB::table('characters')->where('slug', $slug)->first();
        $series = DB::table('series')->where('id', $character->serie_id)->get();
        $actors = DB::table('actors')->where('id', $character->actor_id)->get();
        return view('character')->with('character', $character)->with('actors', $actors)->with('series', $series);
    }

    public function characters()
    {
        $characters = DB::table('characters')->paginate(20);
        return view('characters')->with('characters', $characters);
    }

    public function serieSlug($Serieslug)
    {
      $serie = DB::table('series')->where('slug', $Serieslug)->first();
      $characters = DB::table('characters')->where('serie_id', $serie->id)->paginate(20);
      return view('characters')->with('characters', $characters);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
