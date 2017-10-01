<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\UserKits;

class UserProfileController extends Controller
{
  public function index()
  {
      $user = Auth::user();
      $kits = UserKits::where('user_id','=',$user->user_id)->get();
      return view('userProfile',compact('kits'),compact('user'));
  }
}
