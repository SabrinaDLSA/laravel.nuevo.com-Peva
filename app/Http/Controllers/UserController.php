<?php

namespace nuevo\Http\Controllers;
use nuevo\Serie;
use Illuminate\Http\Request;
use DB;
use nuevo\notes;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

    public function index()
    {
        return view('desktop');
    }
    public function profile()
    {
      if (\Auth::check())
        {
             $userId = \Auth::id();
        }
        $notes = DB::table('notes')->where('user_id', $userId)->get();
        return view('profile')->with('notes', $notes);
    }

  public function logout()
  {
      \Auth::logout();
      return \Redirect::route('home');
  }
}
