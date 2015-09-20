<?php

namespace nuevo\Http\Controllers;
use nuevo\Serie;
use Illuminate\Http\Request;

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
        return view('profile');
    }

  public function logout()
  {
      \Auth::logout();
      return \Redirect::route('home');
  }
}
