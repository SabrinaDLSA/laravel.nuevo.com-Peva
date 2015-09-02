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
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($slug)
    {
        $character = DB::table('characters')->where('slug', $slug)->first();
        $series = DB::table('series')->where('id', $character->serie_id)->get();
        $actors = DB::table('actors')->where('id', $character->actor_id)->get();
        return view('character')->with('character', $character)->with('actors', $actors)->with('series', $series);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function characters()
    {
        $characters = DB::table('characters')->paginate(20);
        return view('characters')->with('characters', $characters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
