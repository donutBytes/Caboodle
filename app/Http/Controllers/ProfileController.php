<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\UserKits;
use App\UserFollowing;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index($user_id)
  {
      $user = User::where('user_id','=',$user_id)->first();
      $kits = UserKits::where('user_id','=',$user_id)->get();
      $followed = UserFollowing::where('user_id','=',Auth::user()->user_id)
                                ->where('followed_id','=',$user_id)->first();
      if($followed->count()>0)
        $following = true;
      else
        $following = false;
      return view('profile',compact('user'),compact('kits'))->with('following',$following);
  }
}
