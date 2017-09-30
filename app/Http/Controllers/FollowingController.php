<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\UserFollowing;
use Illuminate\Support\Facades\Auth;
class FollowingController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
      $followed_ids = UserFollowing::where('user_id','=',Auth::user()->user_id)->get();
      $users = collect([]);
      foreach($followed_ids as $id)
      {
          $users->push(User::where('user_id','=',$id->followed_id)->first());
      }
      return view('following')->with(compact('users'));
    }
}
