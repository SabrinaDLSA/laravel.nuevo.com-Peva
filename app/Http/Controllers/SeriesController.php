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
      return view('serie')
      ->with('serie', $serie);
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
