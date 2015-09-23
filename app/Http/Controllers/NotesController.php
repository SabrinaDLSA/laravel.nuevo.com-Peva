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

class NotesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (\Auth::check())
        {
             $userId = \Auth::id();
        }
      $p = notes::firstOrCreate(array('user_id' => $userId));
      $p->title = \Input::get('title');
      $p->content = \Input::get('content');
      $p->user_id = $userId;
      $p->save();
      \Session::flash('success', 'Your notes were Updated!!');
      return \Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
      if (\Auth::check())
        {
             $userId = \Auth::id();
        }
      $p = DB::table('notes')->where('user_id', $userId)->first();
      $notes = notes::find($p->id)->delete();
      \Session::flash('success', 'Your notes were deleted!!');
      return \Redirect::back();
    }
}
