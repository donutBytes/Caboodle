<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index($user_id)
  {
      $user = User::where('user_id','=',$user_id)->first();
      return view('profile',compact('user'));
  }
}
