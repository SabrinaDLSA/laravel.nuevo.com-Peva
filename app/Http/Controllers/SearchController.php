<?php

namespace nuevo\Http\Controllers;
use nuevo\Serie;
use nuevo\Actors;
use nuevo\Character;
use nuevo\Series_info;
use Illuminate\Http\Request;
use DB;
use Input;
use View;
use Str;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function executeSearch()
    {
        $keywords = Input::get('x');
        $keywords = strtolower($keywords);
        $Series =  DB::table('series')->where('Name', 'like', '%'.$keywords.'%')->paginate(2);

        $Actors =  DB::table('actors')->where('Name', 'like', '%'.$keywords.'%')->paginate(2);
        return view::make('search')->with('searchSeries', $Series)->with('searchActors', $Actors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
